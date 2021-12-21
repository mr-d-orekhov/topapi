<?php

/**
 * result list
 * @author auto create
 */
class Result
{
	
	/** 
	 * 可用物流服务列表
	 **/
	public $available_logistic_service_list;
	
	/** 
	 * 交货地址
	 **/
	public $delivery_address;
	
	/** 
	 * 是否国际快递线路
	 **/
	public $express_logistics_service;
	
	/** 
	 * 物流方案ID
	 **/
	public $logistics_service_id;
	
	/** 
	 * 物流方案名称
	 **/
	public $logistics_service_name;
	
	/** 
	 * 运输时效
	 **/
	public $logistics_timeliness;
	
	/** 
	 * 其它费用项
	 **/
	public $other_fees;
	
	/** 
	 * 推荐指数
	 **/
	public $recommend_index;
	
	/** 
	 * 试算结果
	 **/
	public $trial_result;
	
	/** 
	 * 仓库中文名称
	 **/
	public $warehouse_name;	
}
?>