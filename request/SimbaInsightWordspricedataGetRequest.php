<?php
/**
 * TOP API: taobao.simba.insight.wordspricedata.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class SimbaInsightWordspricedataGetRequest
{
	/** 
	 * 关键词
	 **/
	private $bidword;
	
	/** 
	 * 结束时间，格式：yyyy-MM-dd
	 **/
	private $endDate;
	
	/** 
	 * 开始时间，格式：yyyy-MM-dd
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setBidword($bidword)
	{
		$this->bidword = $bidword;
		$this->apiParas["bidword"] = $bidword;
	}

	public function getBidword()
	{
		return $this->bidword;
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
		return "taobao.simba.insight.wordspricedata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bidword,"bidword");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
