<?php
/**
 * TOP API: taobao.weike.subscinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WeikeSubscinfoGetRequest
{
	/** 
	 * 时间范围结束时间
	 **/
	private $endTime;
	
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 商家旺旺名称
	 **/
	private $sellerName;
	
	/** 
	 * 时间范围开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
	}

	public function setSellerName($sellerName)
	{
		$this->sellerName = $sellerName;
		$this->apiParas["seller_name"] = $sellerName;
	}

	public function getSellerName()
	{
		return $this->sellerName;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.weike.subscinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
