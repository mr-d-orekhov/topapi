<?php
/**
 * TOP API: cainiao.global.solution.inquiry request
 * 
 * @author auto create
 * @since 1.0, 2022.08.22
 */
class CainiaoGlobalSolutionInquiryRequest
{
	/** 
	 * 多语言，zh_CN中文、en_US:英文、ru_RU俄语
	 **/
	private $locale;
	
	/** 
	 * 包裹参数
	 **/
	private $packageParams;
	
	/** 
	 * 交易单参数
	 **/
	private $tradeOrderParam;
	
	private $apiParas = array();
	
	public function setLocale($locale)
	{
		$this->locale = $locale;
		$this->apiParas["locale"] = $locale;
	}

	public function getLocale()
	{
		return $this->locale;
	}

	public function setPackageParams($packageParams)
	{
		$this->packageParams = $packageParams;
		$this->apiParas["package_params"] = $packageParams;
	}

	public function getPackageParams()
	{
		return $this->packageParams;
	}

	public function setTradeOrderParam($tradeOrderParam)
	{
		$this->tradeOrderParam = $tradeOrderParam;
		$this->apiParas["trade_order_param"] = $tradeOrderParam;
	}

	public function getTradeOrderParam()
	{
		return $this->tradeOrderParam;
	}

	public function getApiMethodName()
	{
		return "cainiao.global.solution.inquiry";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
