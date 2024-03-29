<?php
/**
 * TOP API: aliexpress.solution.feed.submit request
 * 
 * @author auto create
 * @since 1.0, 2022.01.06
 */
class AliexpressSolutionFeedSubmitRequest
{
	/** 
	 * More information of the request.
	 **/
	private $developerFeatures;
	
	/** 
	 * item list, maximum size: 2000.
	 **/
	private $itemList;
	
	/** 
	 * Currently support 4 types of feeds:PRODUCT_CREATE,PRODUCT_FULL_UPDATE,PRODUCT_STOCKS_UPDATE,PRODUCT_PRICES_UPDATE
	 **/
	private $operationType;
	
	private $apiParas = array();
	
	public function setDeveloperFeatures($developerFeatures)
	{
		$this->developerFeatures = $developerFeatures;
		$this->apiParas["developer_features"] = $developerFeatures;
	}

	public function getDeveloperFeatures()
	{
		return $this->developerFeatures;
	}

	public function setItemList($itemList)
	{
		$this->itemList = $itemList;
		$this->apiParas["item_list"] = $itemList;
	}

	public function getItemList()
	{
		return $this->itemList;
	}

	public function setOperationType($operationType)
	{
		$this->operationType = $operationType;
		$this->apiParas["operation_type"] = $operationType;
	}

	public function getOperationType()
	{
		return $this->operationType;
	}

	public function getApiMethodName()
	{
		return "aliexpress.solution.feed.submit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operationType,"operationType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
