<?php

/**
 * 用户信息
 * @author auto create
 */
class UserInfoDTO
{
	
	/** 
	 * 用户Key(选填)
	 **/
	public $app_user_key;
	
	/** 
	 * 业务类型(选填)
	 **/
	public $biz_source;
	
	/** 
	 * 国家编码(选填)
	 **/
	public $country;
	
	/** 
	 * 登陆账号(必填)
	 **/
	public $login_id;
	
	/** 
	 * 商家id(选填)
	 **/
	public $seller_id;
	
	/** 
	 * 对应创建物流单的时候传入的top_user_key;跨店铺场景需要传入
	 **/
	public $top_user_key;
	
	/** 
	 * 用户id(选填)
	 **/
	public $user_id;	
}
?>