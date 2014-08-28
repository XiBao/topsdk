<?php
/**
 * TOP API: tmall.eai.order.refund.message.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TmallEaiOrderRefundMessageGetRequest
{
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1<br /> 支持最小值为：1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:40<br /> 支持最大值为：40<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
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
	
	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function getApiMethodName()
	{
		return "tmall.eai.order.refund.message.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,40,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->refundPhase,"refundPhase");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
