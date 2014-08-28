<?php
/**
 * TOP API: taobao.simba.insight.relatedwords.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class SimbaInsightRelatedwordsGetRequest
{
	/** 
	 * 要查询的词列表
	 **/
	private $bidwordList;
	
	/** 
	 * 表示返回数据的条数<br /> 支持最大值为：10<br /> 支持最小值为：1
	 **/
	private $number;
	
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

	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.insight.relatedwords.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bidwordList,"bidwordList");
		RequestCheckUtil::checkMaxListSize($this->bidwordList,10,"bidwordList");
		RequestCheckUtil::checkNotNull($this->number,"number");
		RequestCheckUtil::checkMaxValue($this->number,10,"number");
		RequestCheckUtil::checkMinValue($this->number,1,"number");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
