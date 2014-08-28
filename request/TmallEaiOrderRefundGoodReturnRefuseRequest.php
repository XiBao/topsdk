<?php
/**
 * TOP API: tmall.eai.order.refund.good.return.refuse request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TmallEaiOrderRefundGoodReturnRefuseRequest
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
	
	/** 
	 * 退款版本号
	 **/
	private $refundVersion;
	
	/** 
	 * 拒绝退款原因留言
	 **/
	private $refuseMessage;
	
	/** 
	 * 拒绝退款举证上传
	 **/
	private $refuseProof;
	
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

	public function setRefundVersion($refundVersion)
	{
		$this->refundVersion = $refundVersion;
		$this->apiParas["refund_version"] = $refundVersion;
	}

	public function getRefundVersion()
	{
		return $this->refundVersion;
	}

	public function setRefuseMessage($refuseMessage)
	{
		$this->refuseMessage = $refuseMessage;
		$this->apiParas["refuse_message"] = $refuseMessage;
	}

	public function getRefuseMessage()
	{
		return $this->refuseMessage;
	}

	public function setRefuseProof($refuseProof)
	{
		$this->refuseProof = $refuseProof;
		$this->apiParas["refuse_proof"] = $refuseProof;
	}

	public function getRefuseProof()
	{
		return $this->refuseProof;
	}

	public function getApiMethodName()
	{
		return "tmall.eai.order.refund.good.return.refuse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundPhase,"refundPhase");
		RequestCheckUtil::checkNotNull($this->refundVersion,"refundVersion");
		RequestCheckUtil::checkNotNull($this->refuseMessage,"refuseMessage");
		RequestCheckUtil::checkNotNull($this->refuseProof,"refuseProof");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
