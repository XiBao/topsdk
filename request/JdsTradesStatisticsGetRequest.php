<?php
/**
 * TOP API: taobao.jds.trades.statistics.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class JdsTradesStatisticsGetRequest
{
	/** 
	 * 查询的日期，格式如YYYYMMDD的日期对应的数字
	 **/
	private $date;
	
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

	public function getApiMethodName()
	{
		return "taobao.jds.trades.statistics.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->date,"date");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
