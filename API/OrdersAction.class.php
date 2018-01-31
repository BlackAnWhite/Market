<?php
namespace Mobile\Action;
use Think\Controller;
header('content-type:application:json;charset=utf8');  
header('Access-Control-Allow-Origin:*');  
header('Access-Control-Allow-Methods:POST');  
header('Access-Control-Allow-Headers:x-requested-with,content-type'); 
/**
 * ============================================================================
 * WSTMall开源商城
 * 官网地址:http://www.wstmall.net
 * 联系QQ:707563272
 * ============================================================================
 * 订单控制器
 */
class OrdersAction extends BaseAction {

	/**
	* 核对订单信息 
	* http://00.37518.com/index.php?m=Mobile&c=Orders&a=checkOrderInfo&userId=40&isCheckInfo=@array
	* @param userId 用户ID
	* @param  isCheckInfo 购物车信息（二维数组 包括goodsId goodsAttrId goodsCnt isCheck选中值为 1 未选中为 0）
	* @return status -1 失败 array 成功
	* @return cartgoods 选中商品信息 defaultAddress 默认收货地址（无默认返回为空） gtotalMoney 商品总价  totalCnt 商品总数 
	*/
	public function checkOrderInfo(){
		$mcart = D('Mobile/Cart');
		//修改购物车中的商品信息
		$status=$mcart->changeCartGoodsnum();
		if($status['status']=="1"){
			// $this->isUserLogin();
			$maddress = D('Mobile/UserAddress');
			$userId = I('userId'); 
			//获取默认地址
	        $areaId2 = $this->getDefaultCity();
			$addressList = $maddress->queryByUserAndCity($userId);
			$rdata = $mcart->getPayCart();	
		    if($rdata["cartnull"]==1){
				$this->assign("fail_msg",'不能提交空商品的订单!');
				$this->display('order_fail');
				exit();
			}
			$distCnt = $mcart->checShopkDistribut();
			$catgoods = $rdata["cartgoods"];
			$rdata['defaultAddress'] = $addressList[0];
			$gtotalMoney = $rdata["gtotalMoney"];//商品总价（去除配送费）
			$totalMoney = $rdata["totalMoney"];//商品总价（含配送费）
			$totalCnt = $rdata["totalCnt"];

			// //支付方式
			// $pm = D('Home/Payments');
			// $payments = $pm->getList();
			
			

		}else{
			$rdata['status']=-1;
		}
		
		// var_dump($rdata);
		$this->ajaxReturn($rdata);
		
	}
	
	/**
	* 生成订单
	* http://00.37518.com/index.php?m=Mobile&c=Orders&a=addOrders&userId=40&consigneeId=2&remarks=desc
	* @param userId 用户ID
	* @param  consigneeId 收货地址ID
	* @param remarks 订单留言
	* @return status -1 失败 1 成功 orderNo订单号 totalMoney 商品总价
	*/
 	public function addOrders(){
 		$morders = D('Mobile/Orders');
 		$rs=$morders->submitOrder();
 		// var_dump($rs);
 		$this->ajaxReturn($rs);
 	}

	
    /**
	 * 获取待发货的订单列表
	 * http://00.37518.com/index.php?m=Mobile&c=Orders&a=queryDeliveryByPage&userId=40&p=
	 */
	public function queryDeliveryByPage(){
		$morders = D('Mobile/Orders');
		self::WSTAssigns();
		$obj["userId"] = (int)I('userId');
		$rs = $morders->queryDeliveryByPage($obj);
		var_dump($rs);
		$this->ajaxReturn($rs['root']);
	}

	/**
	 * 获取已发货的订单列表 (orderStatus 3)
	 * http://00.37518.com/index.php?m=Mobile&c=Orders&a=queryReceiveByPage&userId=40&p=
	 */
	public function queryReceiveByPage(){
		$morders = D('Mobile/Orders');
		self::WSTAssigns();
		$obj["userId"] = (int)I('userId');
		$rs = $morders->queryReceiveByPage($obj);
		// var_dump($rs);
		$this->ajaxReturn($rs['root']);
	}


	/**
	 * 获取已完成的订单列表 (orderStatus 4)
	 * http://00.37518.com/index.php?m=Mobile&c=Orders&a=queryCompleteOrders&userId=40&p=
	 */
	public function queryCompleteOrders(){
		$morders = D('Mobile/Orders');
		self::WSTAssigns();
		$obj["userId"] = (int)I('userId');
		$rs = $morders->queryCompleteOrders($obj);
		var_dump($rs); 
		$this->ajaxReturn($rs['root']);
	}

	/**
	 * 获取订单详情
	 * http://00.37518.com/index.php?m=Mobile&c=Orders&a=getOrdersDetails&orderId=16
	 * @param orderId 订单ID
	 * @return  array 
	 */
	public function getOrdersDetails(){
		$m = D('Mobile/Orders');
		$obj["orderId"] = (int)I("orderId");
		$rs = $m->getOrdersDetails($obj);
		//var_dump($rs); 
		$this->ajaxReturn($rs);
	}



	/**
	 * 用户确认收货操作
	 * http://00.37518.com/index.php?m=Mobile&c=Orders&a=orderConfirm&userId=40&orderId=16
	 * @param userId 用户ID
	 * @param orderId 确认收货的订单ID
	 * @return  status -1 失败 1 成功 
	 */
    public function orderConfirm(){
    	$m = D('Common/Orders'); 
    	$obj["userId"] = (int)I('userId'); 
    	$obj["orderId"] = (int)I("orderId");
    	$obj["optType"] = 0;
		$rs = $m->orderConfirm($obj);
		$this->ajaxReturn($rs);
	} 
	

	/** 
	 * 评价订单
	 * http://00.37518.com/index.php?m=Mobile&c=Orders&a=addGoodsAppraises&userId=40&orderId=21&goodsId=1&goodsAttrId=&goodsScore=4&content=&appraiseAnnex=
	 * @param userId 用户ID  (必填)
	 * @param orderId 确认收货的订单ID (必填)
	 * @param goodsId 评价商品ID  (必填)
	 * @param goodsAttrId 商品属性ID (选填)
	 * @param goodsScore 商品评分 (必填)
	 * @param content 商品评价内容 (如不写 评论内容默认为 系统默认好评)
	 * @param appraiseAnnex 评价追加图片（可省略）
	 * @return  status -1 失败 1 成功 msg 失败的原因
	 */

	 public function addGoodsAppraises(){
		$morders = D('Mobile/GoodsAppraises');
		$rs=$morders->addGoodsAppraises();
		// var_dump($rs);
		$this->ajaxReturn($rs);

	 }
	


 

	
	
	
}