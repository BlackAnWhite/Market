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
class ConvertAction extends BaseAction {
       
    /**
	 * 获取兑换商品列表
	 * http://00.37518.com/index.php?m=Mobile&c=Convert&a=getConvertGoodsList
	 * @return array
	 */
	public function getConvertGoodsList() {
		$m = D('Mobile/Convert');
		$rs=$m->getConvertGoodsList();
		// var_dump($rs);
		$this->ajaxReturn($rs['root']); 
	}
	

	/** 
	 * 查询商品详情
	 * http://00.37518.com/index.php?m=Mobile&c=convert&a=getConvertGoodsDetails&goodsId=@value&userId=@value&p=@value;
	 * @field favoriteGoodsId 商品关注状态 0 未关注 1 已关注
	 * @field favoriteShopId 店铺关注状态 0 未关注 1 已关注（没有可忽略）
	 * @field goodsAlbum 商品相册 goods_appraises 商品评价 goodsAttrs 商品属性 (isRecomm 默认选中属性 1为默认选中)
	 * @param goodsId 当前商品ID 
	 * @param userId  当前用户ID 
	 * @param p 商品评价页码 (不填默认第一页,每页默认显示10条，没有可忽略)
	 * @return array
	 */
	public function getConvertGoodsDetails(){
		
		//查询商品详情		 
		$goodsId = (int)I("goodsId");

		$obj["goodsId"] = $goodsId;	
		// $mc = D('Mobile/GoodsAppraises');
		// $coupons = $mc->getGoodsAppraises();
		$goods = D('Mobile/convert');
		$goodsDetails = $goods->getGoodsDetails($obj);
		
		$goodsDetails['goodsDesc']=html_entity_decode($goodsDetails['goodsDesc']);
	
		// // 没有评论默认为 0
		// $goodsDetails['couponsCount']=0;
		// foreach($coupons['root'] as $v){
		// 	$num+=$v['goodsScore'];
		// 	//评分和评价数量
		// 	$goodsDetails['goodsScore']=$num/count($coupons['root']);
		// 	$goodsDetails['couponsCount']=count($coupons['root']);
			
		// }
		$goodsImgs=$goods->getGoodsImgs();
	
		$obj["attrCatId"] = $goodsDetails['attrCatId'];
		$goodsAttrs=$goods->getAttrs($obj);
		
		// //获取关注信息
		// $m = D('Mobile/Favorites');
		// $favoriteGoodsId = $m->checkFavorite($goodsId,0,I("userId"));
		// $favoriteShopId = $m->checkFavorite($shopId,1,I("userId"));
		// // 商品 已关注返回 1 未关注返回 0
		// $goodsDetails['favoriteGoodsId']=$favoriteGoodsId;
		// // 店铺 已关注返回 1 未关注返回 0
		// $goodsDetails['favoriteShopId']=$favoriteShopId;
		// 商品相册
		if(!empty($goodsImgs)){
			$goodsDetails['goodsAlbum']=$goodsImgs;
		}
		// // 商品评价
		// if(!empty($coupons['root'])){
		// 	$goodsDetails['goods_appraises']=$coupons['root'];
		// }
		// 商品属性
		if(!empty($goodsAttrs)){
			$goodsDetails['goodsAttrs']=$goodsAttrs;
		}else{
			$goodsDetails['goodsAttrs']=array();
		}
	
		
// var_dump($goodsDetails);
		$this->ajaxReturn($goodsDetails);

}




	

 

	
	
}