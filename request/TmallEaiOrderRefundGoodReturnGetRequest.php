<?php
/**
 * TOP API: tmall.eai.order.refund.good.return.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TmallEaiOrderRefundGoodReturnGetRequest
{
	/** 
	 * 退款单编号
	 **/
	private $refundId;
	
	/** 
	 * 售中：onsale
售后：aftersale
	 **/
	private $refundPhase;
	
	private $apiParas = array();
	
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

	public function getApiMethodName()
	{
		return "tmall.eai.order.refund.good.return.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundPhase,"refundPhase");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
