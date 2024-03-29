<?php
/**
 * TOP API: aliexpress.logistics.sellershipmentfortop request
 * 
 * @author auto create
 * @since 1.0, 2022.01.04
 */
class AliexpressLogisticsSellershipmentfortopRequest
{
	/** 
	 * 实际承运商
	 **/
	private $actualCarrier;
	
	/** 
	 * memo
	 **/
	private $description;
	
	/** 
	 * ioss税号
	 **/
	private $ioss;
	
	/** 
	 * 多语言，es_ES西班牙语， pt_BR巴西
	 **/
	private $locale;
	
	/** 
	 * 国际运单号
	 **/
	private $logisticsNo;
	
	/** 
	 * 交易订单号
	 **/
	private $outRef;
	
	/** 
	 * 包裹类型
	 **/
	private $packageType;
	
	/** 
	 * 声明发货类型，all表示全部发货，part表示部分声明发货。
	 **/
	private $sendType;
	
	/** 
	 * 物流服务名称
	 **/
	private $serviceName;
	
	/** 
	 * 追踪网址
	 **/
	private $trackingWebsite;
	
	private $apiParas = array();
	
	public function setActualCarrier($actualCarrier)
	{
		$this->actualCarrier = $actualCarrier;
		$this->apiParas["actual_carrier"] = $actualCarrier;
	}

	public function getActualCarrier()
	{
		return $this->actualCarrier;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setIoss($ioss)
	{
		$this->ioss = $ioss;
		$this->apiParas["ioss"] = $ioss;
	}

	public function getIoss()
	{
		return $this->ioss;
	}

	public function setLocale($locale)
	{
		$this->locale = $locale;
		$this->apiParas["locale"] = $locale;
	}

	public function getLocale()
	{
		return $this->locale;
	}

	public function setLogisticsNo($logisticsNo)
	{
		$this->logisticsNo = $logisticsNo;
		$this->apiParas["logistics_no"] = $logisticsNo;
	}

	public function getLogisticsNo()
	{
		return $this->logisticsNo;
	}

	public function setOutRef($outRef)
	{
		$this->outRef = $outRef;
		$this->apiParas["out_ref"] = $outRef;
	}

	public function getOutRef()
	{
		return $this->outRef;
	}

	public function setPackageType($packageType)
	{
		$this->packageType = $packageType;
		$this->apiParas["package_type"] = $packageType;
	}

	public function getPackageType()
	{
		return $this->packageType;
	}

	public function setSendType($sendType)
	{
		$this->sendType = $sendType;
		$this->apiParas["send_type"] = $sendType;
	}

	public function getSendType()
	{
		return $this->sendType;
	}

	public function setServiceName($serviceName)
	{
		$this->serviceName = $serviceName;
		$this->apiParas["service_name"] = $serviceName;
	}

	public function getServiceName()
	{
		return $this->serviceName;
	}

	public function setTrackingWebsite($trackingWebsite)
	{
		$this->trackingWebsite = $trackingWebsite;
		$this->apiParas["tracking_website"] = $trackingWebsite;
	}

	public function getTrackingWebsite()
	{
		return $this->trackingWebsite;
	}

	public function getApiMethodName()
	{
		return "aliexpress.logistics.sellershipmentfortop";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logisticsNo,"logisticsNo");
		RequestCheckUtil::checkNotNull($this->outRef,"outRef");
		RequestCheckUtil::checkNotNull($this->sendType,"sendType");
		RequestCheckUtil::checkNotNull($this->serviceName,"serviceName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
