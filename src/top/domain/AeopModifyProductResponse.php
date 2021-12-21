<?php

/**
 * result
 * @author auto create
 */
class AeopModifyProductResponse
{
	
	/** 
	 * 错误子代码
	 **/
	public $error_code;
	
	/** 
	 * errorDetails
	 **/
	public $error_details;
	
	/** 
	 * 错误信息
	 **/
	public $error_message;
	
	/** 
	 * 修改的产品数
	 **/
	public $modify_count;
	
	/** 
	 * 该产品的ID
	 **/
	public $product_id;
	
	/** 
	 * 接口调用结果。true/false分别表示成功和失败。
	 **/
	public $success;	
}
?>