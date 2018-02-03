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
 * 会员控制器
 */
class UsersAction extends BaseAction {

	/**
	 * 用户授权
	 * http://00.37518.com/index.php?m=Mobile&c=Users&a=toRegist&openId=@value&loginName=@value&userPhoto=@value;
	 * @param openId 必填
	 * @param loginName  登录名
	 * @param userPhoto 用户头像
	 * @return status (未授权 1 已授权 -1) userId 用户ID loginSecret 邀请码 loginId 登录显示ID
	 * @return array
	 */
	public function toRegist(){
		$m = D('Mobile/Users');
		$res = $m->regist();
		// var_dump($res);
		$this->ajaxReturn($res);

	}


 	/**
	 * 邀请码推广用户
	 * http://00.37518.com/index.php?m=Mobile&c=Users&a=toRegistCode&userId=&loginSecret=
	 * @param userId 必填 当前用户ID
	 * @param loginSecret 用户输入的邀请码 必填
	 * @return status 1 成功 -1 失败 msg 失败的原因
	 */
	public function toRegistCode(){
		$m = D('Mobile/Users');
		$res = $m->codeRegist();
		// var_dump($res);
		$this->ajaxReturn($res);

	}


  /**
   * 用户个人资料
   * http://00.37518.com/index.php?m=Mobile&c=Users&a=getUserById&userId=72

   * @param userId 必填 当前用户ID
   * @return status array
   */
  public function getUserById(){
    $obj["userId"]=I("userId");
    $m = D('Mobile/Users');
    $res = $m->getUserById($obj);
    // var_dump($res);
    $this->ajaxReturn($res);
  }


  /**
   * 绑定手机号
   * http://00.37518.com/index.php?m=Mobile&c=Users&a=editUser&userId=72&userPhone=13829182910

   * @param userId 必填 当前用户ID
   * @param userPhone 绑定的手机号
   * @return status 1 成功 msg 失败的原因
   */
  public function editUser(){
    $obj["userId"]=I("userId");
    $m = D('Mobile/Users');
    $res = $m->editUser($obj);
    // var_dump($res);
    $this->ajaxReturn($res);
  }


}
