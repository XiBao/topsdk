<?php
/**
 * TOP API: taobao.fenxiao.dealer.requisitionorder.close request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class FenxiaoDealerRequisitionorderCloseRequest
{
	/** 
	 * 经销采购单编号
	 **/
	private $dealerOrderId;
	
	/** 
	 * 关闭原因：
1：长时间无法联系到分销商，取消交易。
2：分销商错误提交申请，取消交易。
3：缺货，近段时间都无法发货。
4：分销商恶意提交申请单。
5：其他原因。
	 **/
	private $reason;
	
	/** 
	 * 关闭详细原因，字数5-200字
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
		return "taobao.fenxiao.dealer.requisitionorder.close";
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
