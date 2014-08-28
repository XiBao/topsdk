<?php
/**
 * TOP API: taobao.simba.insight.catsdata.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class SimbaInsightCatsdataGetRequest
{
	/** 
	 * 表示要查询的类目id
	 **/
	private $categoryIdList;
	
	/** 
	 * 查询截止时间，格式：yyyy-MM-dd
	 **/
	private $endDate;
	
	/** 
	 * 开始时间，格式：yyyy-MM-dd
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setCategoryIdList($categoryIdList)
	{
		$this->categoryIdList = $categoryIdList;
		$this->apiParas["category_id_list"] = $categoryIdList;
	}

	public function getCategoryIdList()
	{
		return $this->categoryIdList;
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
		return "taobao.simba.insight.catsdata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryIdList,"categoryIdList");
		RequestCheckUtil::checkMaxListSize($this->categoryIdList,5,"categoryIdList");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
