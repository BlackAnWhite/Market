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
 * 商品控制器 
 */
class GoodsAction extends BaseAction {
	
  
	/** 
	 * 查询商品详情
	 * http://00.37518.com/index.php?m=Mobile&c=Goods&a=getGoodsDetails&goodsId=@value&userId=@value&p=@value;
	 * @field favoriteGoodsId 商品关注状态 0 未关注 1 已关注
	 * @field favoriteShopId 店铺关注状态 0 未关注 1 已关注（没有可忽略）
	 * @field goodsAlbum 商品相册 goods_appraises 商品评价 goodsAttrs 商品属性 (isRecomm 默认选中属性 1为默认选中)
	 * @param goodsId 当前商品ID 
	 * @param userId  当前用户ID 
	 * @param p 商品评价页码 (不填默认第一页,每页默认显示10条，没有可忽略)
	 * @return array
	 */
	public function getGoodsDetails(){
			
			//查询商品详情		 
			$goodsId = (int)I("goodsId");
			$obj["goodsId"] = $goodsId;	
			$mc = D('Mobile/GoodsAppraises');
			$coupons = $mc->getGoodsAppraises();
			$goods = D('Mobile/Goods');
			$goodsDetails = $goods->getGoodsDetails($obj);
			
		    $goodsDetails['goodsDesc']=html_entity_decode($goodsDetails['goodsDesc']);
			//配送费
			$goodsDetails['deliveryMoney']=M("shops")->where(array('shopId'=>$goodsDetails['shopId']))->getField('deliveryMoney');
			foreach($coupons['root'] as $v){
				$num+=$v['goodsScore'];
				//评分和评价数量
				$goodsDetails['goodsScore']=$num/count($coupons['root']);
				$goodsDetails['couponsCount']=count($coupons['root']);
			}
			$goodsImgs=$goods->getGoodsImgs();
			// $this->assign("relatedGoods",$goods->getRelatedGoods($goodsId));
			$goodsNav=$goods->getGoodsNav($goodsId);
			$shopId = intval($goodsDetails["shopId"]);
			$obj["shopId"] = $shopId;
			$obj["attrCatId"] = $goodsDetails['attrCatId'];
			$goodsAttrs=$goods->getAttrs($obj);
			
			//获取关注信息
			$m = D('Mobile/Favorites');
			$favoriteGoodsId = $m->checkFavorite($goodsId,0,I("userId"));
			$favoriteShopId = $m->checkFavorite($shopId,1,I("userId"));
			// 商品 已关注返回 1 未关注返回 0
			$goodsDetails['favoriteGoodsId']=$favoriteGoodsId;
			// 店铺 已关注返回 1 未关注返回 0
			$goodsDetails['favoriteShopId']=$favoriteShopId;
			// 商品相册
			if(!empty($goodsImgs)){
				$goodsDetails['goodsAlbum']=$goodsImgs;
			}
			// 商品评价
			if(!empty($coupons['root'])){
				$goodsDetails['goods_appraises']=$coupons['root'];
			}
			// 商品属性
			if(!empty($goodsAttrs)){
				$goodsDetails['goodsAttrs']=$goodsAttrs;
			}
		
			
	// var_dump($goodsDetails);
			$this->ajaxReturn($goodsDetails);

	}


	/** 
	 * 关注商品
	 * http://00.37518.com/index.php?m=Mobile&c=Goods&a=favoriteGoods&goodsId=@value&userId=@value;
	 * @param goodsId 当前商品ID 
	 * @param userId  当前用户ID
	 * @return status 1 成功 -1 失败
	 */
	public function favoriteGoods(){
		$m = D('Mobile/Favorites');
		$rs = $m->favoriteGoods();
		$this->ajaxReturn($rs);
	}


	/** 
	 * 关注商品列表
	 * http://00.37518.com/index.php?m=Mobile&c=Goods&a=queryGoodsByPage&userId=@value&p=1&key=
	 * @param userId  当前用户ID
     * @param key 搜索关键词 (商品名称 没有可省略) 
	 * @return array
	 */
	public function queryGoodsByPage(){
		$m = D('Mobile/Favorites');
		$rs = $m->queryGoodsByPage();
		// var_dump($rs['root']);
		$this->ajaxReturn($rs['root']);
	}

	

	/** 
	 * 删除关注商品
	 * http://00.37518.com/index.php?m=Mobile&c=Goods&a=cancelFavorite&type=0&favoriteId=@value&userId=@value;
	 * @param favoriteId 当前关注商品ID 
	 * @param userId  当前用户ID
	 * @param type 类型 (固定不变)
	 * @return status 1 成功 -1 失败
	 */
	public function cancelFavorite(){
		$m = D('Mobile/Favorites');
		$rs = $m->cancelFavorite();
		$this->ajaxReturn($rs);	
	}

    
}