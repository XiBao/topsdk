<?php
/**
 * TOP API: taobao.simba.insight.catsworddata.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class SimbaInsightCatsworddataGetRequest
{
	/** 
	 * 需要查询的关键词列表
	 **/
	private $bidwordList;
	
	/** 
	 * 类目id
	 **/
	private $catId;
	
	/** 
	 * 结束时间，格式只能为：yyyy-MM-dd
	 **/
	private $endDate;
	
	/** 
	 * 开始时间，格式只能为：yyyy-MM-dd
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setBidwordList($bidwordList)
	{
		$this->bidwordList = $bidwordList;
		$this->apiParas["bidword_list"] = $bidwordList;
	}

	public function getBidwordList()
	{
		return $this->bidwordList;
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
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
		return "taobao.simba.insight.catsworddata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bidwordList,"bidwordList");
		RequestCheckUtil::checkMaxListSize($this->bidwordList,5,"bidwordList");
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
