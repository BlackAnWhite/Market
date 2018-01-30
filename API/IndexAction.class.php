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
 * 首页控制器
 */
class IndexAction extends BaseAction {
    /**
    * 获取所有商品分类列表
    * http://00.37518.com/index.php?m=Mobile&c=Index&a=GoodsCats;
    */
    public function GoodsCats(){
   		//获取分类
		$gcm = D('Mobile/GoodsCats'); 
		$rs = $gcm->queryCats();
       // var_dump($rs);
		$this->ajaxReturn($rs);
   		
    }

    /**
     * 首页轮播图
     * http://00.37518.com/index.php?m=Mobile&c=Index&a=BannerPic;
     */
    public function BannerPic(){
        $rs=WSTAds(-10);
        $this->ajaxReturn($rs);
    }


    /**
     * 首页模块图以及商品
     * http://00.37518.com/index.php?m=Mobile&c=Index&a=Ads&rows=@value;
     * @param rows 模块下的商品显示数量 (不填默认全部)
     * @return array 
     */
    public function Ads(){
        $rows=I("rows");
        $ads = D('Mobile/Ads');
        $areaId2 = $this->getDefaultCity();
        //分类广告
        $rs = $ads->getAdsByCat($areaId2,$rows);
      
        $this->ajaxReturn($rs);
    }


     /**
     * 热门推荐(所有商品)
     * http://00.37518.com/index.php?m=Mobile&c=Index&a=goodsHot&goodsCatId1=52&goodsCatId2=191&p=1;
     * @param goodsCatId1 商品一级分类 goodsCatId2 商品二级分类
     * @param p 当前页码 (不填默认第一页)
     * @return array 
     */

     public function goodsHot(){
        $m= D('Mobile/Goods');
        $rs=$m->queryByPage();
        // var_dump($rs['root']); 
        $this->ajaxReturn($rs['root']);
     }


    /**
     * 商城首页信息
     * http://00.37518.com/index.php?m=Mobile&c=Index&a=loadConfigs&userId=@value;
     * @field mallName名称  mallDesc 商城描述  mallKeywords商城关键字
     * @field mallLogo商城LOGO  goodsImg 默认图片  hotSearchs热搜关键词
     * @param userId 当前用户ID (不填或没有头像goodsImg为默认图片,有头像goodsImg为用户头像)
     * @return array
     */
     public function loadConfigs(){
         $m= D('Mobile/System');
         $rs=$m->loadConfigs();
          // var_dump($rs);
         $this->ajaxReturn($rs);
     }


    /**
     *  商城公告
     * http://00.37518.com/index.php?m=Mobile&c=Index&a=loadMessages&userId=@value&p=@value;
     * @field Messages 用户消息
     * @param userId 当前用户ID (省略此参数默认商城消息)
     * @param p 当前页码 (不填默认第一页,没有可忽略) 
     * @return array
     */
     public function loadMessages(){
        $userId=I('userId');
        $m=D("Mobile/Articles");
        $rs=$m->getArticleList();
        // 店铺消息
        if(!empty($userId)){
            $m=D("Mobile/Messages");
            $rs1=$m->queryByPage();
            $rs['Messages']=$rs1['root'];
        }
      
          // var_dump($rs);
        $this->ajaxReturn($rs);
     }














}