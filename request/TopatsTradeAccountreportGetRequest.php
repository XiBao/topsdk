<?php
/**
 * TOP API: taobao.topats.trade.accountreport.get request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class TopatsTradeAccountreportGetRequest
{
	/** 
	 * 账务日期查询结束时间。查询结束时间必须大于查询开始时间，并且时间跨度不能超过3个月。
	 **/
	private $endCreated;
	
	/** 
	 * 返回信息包含的字段，详情请见TradeAccountDetail结构体说明
http://api.taobao.com/apidoc/dataStruct.htm?path=cid:5-dataStructId:10152
	 **/
	private $fields;
	
	/** 
	 * 账务日期开始时间，时间必须大于2010-06-10 00:00:00
	 **/
	private $startCreated;
	
	private $apiParas = array();
	
	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.trade.accountreport.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endCreated,"endCreated");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->startCreated,"startCreated");
	}
}
