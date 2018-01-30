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
 * 店铺控制器
 */
class ShopsAction extends BaseAction {
	
	/**
	 * 获取所有店铺列表
	 * http://00.37518.com/index.php?m=Mobile&c=Shops&a=getKeyList&keywords=@value;
	 * @param keywords 搜索的店铺名 （无搜索功能可忽略）
	 * @return array
	 */
	public function getKeyList(){
		$m = D('Mobile/Shops');   
		// $areaId2 = $this->getDefaultCity();
		$rs = $m->getKeyList();
		// var_dump($rs);
		$this->ajaxReturn($rs);
	}

	/**
	 * 获取店铺基本信息
	 * http://00.37518.com/index.php?m=Mobile&c=Shops&a=getShopInfo&shopId=@value;
	 * @field shopAds 店铺广告图 shop_scores 店铺综合评分
	 * @param shopId 店铺ID 
	 * @return array
	 */
	public function getShopInfo(){
		$m = D('Mobile/Shops');   
		$rs=$m->getShopInfo();
		// var_dump($rs);
		$this->ajaxReturn($rs);
	}


	/**
	 * 获取店铺分类
	 * http://00.37518.com/index.php?m=Mobile&c=Shops&a=getShopCats&shopId=@value;
	 * @field shopAds 店铺广告图 shop_scores 店铺综合评分
	 * @param shopId 店铺ID 
	 * @return array
	 */
	public function getShopCats(){
		$m = D('Mobile/ShopsCats');   
		$rs=$m->getCatAndChild(I("shopId"));
		// var_dump($rs);
		$this->ajaxReturn($rs);
	}

	/**
	 * 获取当前店铺商品列表
	 * http://00.37518.com/index.php?m=Mobile&c=Shops&a=getShopGoodsList&shopId=@value&ct1=&ct2=&p=@value;
	 * @param shopId 店铺ID 
	 * @param ct1 一级分类ID ct2 二级分类ID (忽略默认全部商品)
	 * @param p 商品当前页码 (不填默认第一页,每页默认显示10条，没有可忽略) 
	 * @return array
	 */
	public function getShopGoodsList(){
		$m = D('Mobile/Goods');   
		$rs=$m->getShopsGoods();
		// var_dump($rs['root']);
		$this->ajaxReturn($rs['root']);
	}
	

	

}