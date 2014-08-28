<?php
/**
 * TOP API: taobao.fenxiao.refund.query request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class FenxiaoRefundQueryRequest
{
	/** 
	 * 代销采购退款最迟修改时间。与start_date的最大时间间隔不能超过30天
	 **/
	private $endDate;
	
	/** 
	 * 页码（大于0的整数。无值或小于1的值按默认值1计）
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数（大于0但小于等于50的整数。无值或大于50或小于1的值按默认值50计）
	 **/
	private $pageSize;
	
	/** 
	 * 是否查询下游买家的退款信息
	 **/
	private $querySellerRefund;
	
	/** 
	 * 代销采购退款单最早修改时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

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

	public function setQuerySellerRefund($querySellerRefund)
	{
		$this->querySellerRefund = $querySellerRefund;
		$this->apiParas["query_seller_refund"] = $querySellerRefund;
	}

	public function getQuerySellerRefund()
	{
		return $this->querySellerRefund;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.refund.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
