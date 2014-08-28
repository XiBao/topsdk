<?php
/**
 * TOP API: tmall.eai.order.refund.good.return.check request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TmallEaiOrderRefundGoodReturnCheckRequest
{
	/** 
	 * 物流公司编号
	 **/
	private $companyCode;
	
	/** 
	 * 1.验货通过
2.验货不通过
	 **/
	private $confirmResult;
	
	/** 
	 * 验货时间
	 **/
	private $confirmTime;
	
	/** 
	 * 验货人员
	 **/
	private $operator;
	
	/** 
	 * 退款单编号
	 **/
	private $refundId;
	
	/** 
	 * 售中：onsale
售后：aftersale
	 **/
	private $refundPhase;
	
	/** 
	 * 物流运单号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setCompanyCode($companyCode)
	{
		$this->companyCode = $companyCode;
		$this->apiParas["company_code"] = $companyCode;
	}

	public function getCompanyCode()
	{
		return $this->companyCode;
	}

	public function setConfirmResult($confirmResult)
	{
		$this->confirmResult = $confirmResult;
		$this->apiParas["confirm_result"] = $confirmResult;
	}

	public function getConfirmResult()
	{
		return $this->confirmResult;
	}

	public function setConfirmTime($confirmTime)
	{
		$this->confirmTime = $confirmTime;
		$this->apiParas["confirm_time"] = $confirmTime;
	}

	public function getConfirmTime()
	{
		return $this->confirmTime;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setRefundPhase($refundPhase)
	{
		$this->refundPhase = $refundPhase;
		$this->apiParas["refund_phase"] = $refundPhase;
	}

	public function getRefundPhase()
	{
		return $this->refundPhase;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function getApiMethodName()
	{
		return "tmall.eai.order.refund.good.return.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyCode,"companyCode");
		RequestCheckUtil::checkNotNull($this->confirmResult,"confirmResult");
		RequestCheckUtil::checkNotNull($this->confirmTime,"confirmTime");
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundPhase,"refundPhase");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
