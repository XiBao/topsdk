<?php
/**
 * TOP API: taobao.ebook.order.search request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class EbookOrderSearchRequest
{
	/** 
	 * 查询截止日期，yyyy-MM-dd HH:mm:ss，查询时间跨度为90天。
	 **/
	private $endDate;
	
	/** 
	 * 当前页码，不可为空、0和负数。
	 **/
	private $pageNo;
	
	/** 
	 * 每页的大小，不可为空、0和负数。最大为30，如果超过30，则取默认的20。
	 **/
	private $pageSize;
	
	/** 
	 * 查询开始日期，yyyy-MM-dd HH:mm:ss
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
		return "taobao.ebook.order.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
