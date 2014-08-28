<?php
/**
 * TOP API: taobao.simba.insight.wordsdata.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class SimbaInsightWordsdataGetRequest
{
	/** 
	 * 关键词列表
	 **/
	private $bidwordList;
	
	/** 
	 * 结束时间
	 **/
	private $endDate;
	
	/** 
	 * 开始时间
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
		return "taobao.simba.insight.wordsdata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bidwordList,"bidwordList");
		RequestCheckUtil::checkMaxListSize($this->bidwordList,10,"bidwordList");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
