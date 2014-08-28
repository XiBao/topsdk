<?php
/**
 * TOP API: taobao.jds.trades.statistics.diff request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class JdsTradesStatisticsDiffRequest
{
	/** 
	 * 查询的日期，格式如YYYYMMDD的日期对应的数字
	 **/
	private $date;
	
	/** 
	 * 页数
	 **/
	private $pageNo;
	
	/** 
	 * 需要比较的状态
	 **/
	private $postStatus;
	
	/** 
	 * 需要比较的状态，将会和post_status做比较
	 **/
	private $preStatus;
	
	private $apiParas = array();
	
	public function setDate($date)
	{
		$this->date = $date;
		$this->apiParas["date"] = $date;
	}

	public function getDate()
	{
		return $this->date;
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

	public function setPostStatus($postStatus)
	{
		$this->postStatus = $postStatus;
		$this->apiParas["post_status"] = $postStatus;
	}

	public function getPostStatus()
	{
		return $this->postStatus;
	}

	public function setPreStatus($preStatus)
	{
		$this->preStatus = $preStatus;
		$this->apiParas["pre_status"] = $preStatus;
	}

	public function getPreStatus()
	{
		return $this->preStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.jds.trades.statistics.diff";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->date,"date");
		RequestCheckUtil::checkNotNull($this->postStatus,"postStatus");
		RequestCheckUtil::checkNotNull($this->preStatus,"preStatus");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
