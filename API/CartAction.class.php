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
 * 购物车控制器
 */
class CartAction extends BaseAction {
   
    /**
     * 添加商品到购物车(ajax)
	 * http://00.37518.com/index.php?m=Mobile&c=Cart&a=addToCartAjax&userId=40&goodsId=255&goodsCnt=3&goodsAttrId=51
	 * @param userId  当前用户ID 
	 * @param goodsId 添加商品ID 
	 * @param goodsCnt  添加商品数量 （不传默认1） 
	 * @param goodsAttrId 添加商品选中的属性ID
	 * @return status (成功为 1 失败为 -1) msg (失败的原因)
	 *
     */
	public function addToCartAjax(){
   		$m = D('Mobile/Cart');
   		$rs = $m->addToCart();
   		// var_dump($rs);
   		$this->ajaxReturn($rs);
   		
    }
    
    /**
	 * 获取购物车商品列表
	 * http://00.37518.com//index.php?m=Mobile&c=Cart&a=getCartInfo&userId=40
	 * @field cnt 商品数量
	 * @param userId  当前用户ID 
	 * @return array
	 */
	public function getCartInfo() {
		$m = D('Mobile/Cart');
		$cartInfo = $m->getCartInfo();
		// var_dump($cartInfo['cartgoods']['shopgoods']);
		$this->ajaxReturn($cartInfo['cartgoods']['shopgoods']);
	}
	
	/**
	 * 获取购物车商品数量
	 * http://00.37518.com//index.php?m=Mobile&c=Cart&a=getCartGoodCnt
	 */
	public function getCartGoodCnt(){
		echo json_encode(array("goodscnt"=>WSTCartNum()));
	}
    

    /**
	 * 删除购物车商品
	 * http://00.37518.com//index.php?m=Mobile&c=Cart&a=delCartGoods&userId=40&goodsId=255&goodsAttrId=51
	 * @param userId 用户ID
	 * @param goodsId 商品ID
	 * @param goodsAttrId 属性ID
	 * @return status (成功为 1 失败为0) 
	 */
	public function delCartGoods(){
		$m = D('Mobile/Cart');
   		$rs = $m->delCartGoods();
   		// var_dump($rs);
   		$this->ajaxReturn($rs);
	}
    

	
	
}