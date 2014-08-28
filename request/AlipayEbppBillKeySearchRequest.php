<?php
/**
 * TOP API: alipay.ebpp.bill.key.search request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlipayEbppBillKeySearchRequest
{
	/** 
	 * 支付宝给每个出账机构指定了一个对应的英文短名称来唯一表示该收费单位。<br /> 支持最大长度为：80<br /> 支持的最大列表长度为：80
	 **/
	private $chargeInst;
	
	/** 
	 * 结束时间。与开始时间间隔在七天之内
	 **/
	private $endTime;
	
	/** 
	 * 需要返回的字段列表。bill_key:户号
	 **/
	private $fields;
	
	/** 
	 * 是否仅包含订阅数据
	 **/
	private $onlySubscribed;
	
	/** 
	 * 支付宝订单类型。公共事业缴纳JF,信用卡还款HK<br /> 支持最大长度为：10<br /> 支持的最大列表长度为：10
	 **/
	private $orderType;
	
	/** 
	 * 开始时间，时间必须是今天范围之内。格式为yyyy-MM-dd HH:mm:ss，精确到天
	 **/
	private $startTime;
	
	/** 
	 * 子业务类型是业务类型的下一级概念，例如：WATER表示JF下面的水费，ELECTRIC表示JF下面的电费，GAS表示JF下面的燃气费。<br /> 支持最大长度为：10<br /> 支持的最大列表长度为：10
	 **/
	private $subOrderType;
	
	private $apiParas = array();
	
	public function setChargeInst($chargeInst)
	{
		$this->chargeInst = $chargeInst;
		$this->apiParas["charge_inst"] = $chargeInst;
	}

	public function getChargeInst()
	{
		return $this->chargeInst;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setOnlySubscribed($onlySubscribed)
	{
		$this->onlySubscribed = $onlySubscribed;
		$this->apiParas["only_subscribed"] = $onlySubscribed;
	}

	public function getOnlySubscribed()
	{
		return $this->onlySubscribed;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setSubOrderType($subOrderType)
	{
		$this->subOrderType = $subOrderType;
		$this->apiParas["sub_order_type"] = $subOrderType;
	}

	public function getSubOrderType()
	{
		return $this->subOrderType;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.bill.key.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chargeInst,"chargeInst");
		RequestCheckUtil::checkMaxLength($this->chargeInst,80,"chargeInst");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkMaxLength($this->orderType,10,"orderType");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->subOrderType,"subOrderType");
		RequestCheckUtil::checkMaxLength($this->subOrderType,10,"subOrderType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
