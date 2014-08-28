<?php
/**
 * TOP API: alipay.ebpp.owe.bill.upload request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlipayEbppOweBillUploadRequest
{
	/** 
	 * 支付宝给每个出账机构指定了一个对应的英文短名称来唯一表示该收费单位。<br /> 支持最大长度为：80<br /> 支持的最大列表长度为：80
	 **/
	private $chargeInst;
	
	/** 
	 * 销账机构<br /> 支持最大长度为：30<br /> 支持的最大列表长度为：30
	 **/
	private $chargeoffInst;
	
	/** 
	 * 文件摘要，算法SHA
	 **/
	private $digestOweBill;
	
	/** 
	 * 支付宝订单类型。公共事业缴纳JF,信用卡还款HK<br /> 支持最大长度为：10<br /> 支持的最大列表长度为：10
	 **/
	private $orderType;
	
	/** 
	 * 文件内容<br /> 支持的文件类型为：zip,rar,csv,doc,docx,xls,xlsx<br /> 支持的最大列表长度为：52428800
	 **/
	private $oweBill;
	
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

	public function setChargeoffInst($chargeoffInst)
	{
		$this->chargeoffInst = $chargeoffInst;
		$this->apiParas["chargeoff_inst"] = $chargeoffInst;
	}

	public function getChargeoffInst()
	{
		return $this->chargeoffInst;
	}

	public function setDigestOweBill($digestOweBill)
	{
		$this->digestOweBill = $digestOweBill;
		$this->apiParas["digest_owe_bill"] = $digestOweBill;
	}

	public function getDigestOweBill()
	{
		return $this->digestOweBill;
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

	public function setOweBill($oweBill)
	{
		$this->oweBill = $oweBill;
		$this->apiParas["owe_bill"] = $oweBill;
	}

	public function getOweBill()
	{
		return $this->oweBill;
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
		return "alipay.ebpp.owe.bill.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chargeInst,"chargeInst");
		RequestCheckUtil::checkMaxLength($this->chargeInst,80,"chargeInst");
		RequestCheckUtil::checkMaxLength($this->chargeoffInst,30,"chargeoffInst");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkMaxLength($this->orderType,10,"orderType");
		RequestCheckUtil::checkNotNull($this->oweBill,"oweBill");
		RequestCheckUtil::checkNotNull($this->subOrderType,"subOrderType");
		RequestCheckUtil::checkMaxLength($this->subOrderType,10,"subOrderType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
