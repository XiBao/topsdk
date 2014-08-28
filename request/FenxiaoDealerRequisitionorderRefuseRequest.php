<?php
/**
 * TOP API: taobao.fenxiao.dealer.requisitionorder.refuse request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class FenxiaoDealerRequisitionorderRefuseRequest
{
	/** 
	 * 采购申请/经销采购单编号
	 **/
	private $dealerOrderId;
	
	/** 
	 * 驳回原因（1：价格不合理；2：采购数量不合理；3：其他原因）
	 **/
	private $reason;
	
	/** 
	 * 驳回详细原因，字数范围5-200字
	 **/
	private $reasonDetail;
	
	private $apiParas = array();
	
	public function setDealerOrderId($dealerOrderId)
	{
		$this->dealerOrderId = $dealerOrderId;
		$this->apiParas["dealer_order_id"] = $dealerOrderId;
	}

	public function getDealerOrderId()
	{
		return $this->dealerOrderId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setReasonDetail($reasonDetail)
	{
		$this->reasonDetail = $reasonDetail;
		$this->apiParas["reason_detail"] = $reasonDetail;
	}

	public function getReasonDetail()
	{
		return $this->reasonDetail;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.dealer.requisitionorder.refuse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dealerOrderId,"dealerOrderId");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkNotNull($this->reasonDetail,"reasonDetail");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
