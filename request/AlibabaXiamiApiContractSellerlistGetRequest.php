<?php
/**
 * TOP API: alibaba.xiami.api.contract.sellerlist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaXiamiApiContractSellerlistGetRequest
{
	/** 
	 * 每页数量
	 **/
	private $limit;
	
	/** 
	 * 当前页
	 **/
	private $page;
	
	/** 
	 * 结束时间
	 **/
	private $timeEnd;
	
	/** 
	 * 开始时间
	 **/
	private $timeStart;
	
	private $apiParas = array();
	
	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setTimeEnd($timeEnd)
	{
		$this->timeEnd = $timeEnd;
		$this->apiParas["time_end"] = $timeEnd;
	}

	public function getTimeEnd()
	{
		return $this->timeEnd;
	}

	public function setTimeStart($timeStart)
	{
		$this->timeStart = $timeStart;
		$this->apiParas["time_start"] = $timeStart;
	}

	public function getTimeStart()
	{
		return $this->timeStart;
	}

	public function getApiMethodName()
	{
		return "alibaba.xiami.api.contract.sellerlist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->limit,"limit");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->timeEnd,"timeEnd");
		RequestCheckUtil::checkNotNull($this->timeStart,"timeStart");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
