<?php
/**
 * TOP API: taobao.upp.shoppoint.prededuct request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class UppShoppointPredeductRequest
{
	/** 
	 * 业务扩展信息 ，用于ISV描述积分记录的具体业务信息。
禁止含有“:”或“;”或“~”禁用字符 或者淘宝违禁词库中的其他字符。<br /> 支持最大长度为：30<br /> 支持的最大列表长度为：30
	 **/
	private $businessInfo;
	
	/** 
	 * 处理的店铺积分数量
	 **/
	private $pointNum;
	
	/** 
	 * 卖家家nick
	 **/
	private $sellerNick;
	
	/** 
	 * 业务发生的时间
	 **/
	private $transactionTime;
	
	private $apiParas = array();
	
	public function setBusinessInfo($businessInfo)
	{
		$this->businessInfo = $businessInfo;
		$this->apiParas["business_info"] = $businessInfo;
	}

	public function getBusinessInfo()
	{
		return $this->businessInfo;
	}

	public function setPointNum($pointNum)
	{
		$this->pointNum = $pointNum;
		$this->apiParas["point_num"] = $pointNum;
	}

	public function getPointNum()
	{
		return $this->pointNum;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setTransactionTime($transactionTime)
	{
		$this->transactionTime = $transactionTime;
		$this->apiParas["transaction_time"] = $transactionTime;
	}

	public function getTransactionTime()
	{
		return $this->transactionTime;
	}

	public function getApiMethodName()
	{
		return "taobao.upp.shoppoint.prededuct";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->businessInfo,"businessInfo");
		RequestCheckUtil::checkMaxLength($this->businessInfo,30,"businessInfo");
		RequestCheckUtil::checkNotNull($this->pointNum,"pointNum");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
		RequestCheckUtil::checkNotNull($this->transactionTime,"transactionTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
