<?php
 namespace Mobile\Action;;
/**
 * ============================================================================
 * WSTMall开源商城
 * 官网地址:http://www.wstmall.net
 * 联系QQ:707563272
 * ============================================================================
 * 会员地址控制器
 */
class UserAddressAction extends BaseAction{

	/**
	 * 获取用户地址列表
	 * http://00.37518.com/index.php?m=Mobile&c=UserAddress&a=getUserAddress&userId=40&p=1
	 * @field isDefault 1 默认地址 0 非默认地址
	 * @param userId 用户 ID
	 * @param p 当前页码 (不填默认第一页,每页默认显示10条)
	 * @return array
	 */
	public function getUserAddress(){
		$USER = I("userId");
		$m = D('Mobile/UserAddress');
    	$rs = $m->queryByList($USER);
    	// var_dump($rs['root']); 
    	$this->ajaxReturn($rs['root']);
	}


	/**
	 * 新增/修改操作
	 * http://00.37518.com/index.php?m=Mobile&c=UserAddress&a=optionUserAddress&userId=40&userName=111&userPhone=13585965623&userTel=222&areaId1=&areaId2=&areaId3=&address=11&isDefault=0&id=2
	 * @param areaId1 areaId2 areaId3 省 市 县  address 详细地址
	 * @param id 修改的地址ID （增加操作忽略此参数）
	 * @param isDefault 默认地址为 1 不默认为 0
	 * @param userId userName userPhone isDefault 必填  userTel 没有可忽略
	 * @return status 1 成功 -1 失败
	 */
	public function optionUserAddress(){
		$m = D('Mobile/UserAddress');
    	$rs = array();
    	if((int)I('id',0)>0){
    		$rs = $m->edit();
    	}else{
    		$rs = $m->insert();
    	}
    	$this->ajaxReturn($rs);
	}
	

	/**
	 * 查看地址详情
	 * http://00.37518.com/index.php?m=Mobile&c=UserAddress&a=getAddressDetail&id=
	 * @param id 地址ID 
	 * @return array
	 */
	public function getAddressDetail(){
		$m = D('Mobile/UserAddress');
    	$rs = $m->get();
    	// var_dump($rs);
    	$this->ajaxReturn($rs);
	}


	/**
	 * 删除操作
	 * http://00.37518.com/index.php?m=Mobile&c=UserAddress&a=delUserAddress&userId=4&id=
	 * @param userId 用户 ID
	 * @param id 地址ID 
	 * @return  status 1 成功 -1 失败
	 */
	public function delUserAddress(){
		$m = D('Mobile/UserAddress');
    	$rs = $m->del();
    	$this->ajaxReturn($rs);
	}

	
};
?>