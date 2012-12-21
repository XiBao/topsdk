<?php
/**
 * TOP API: taobao.udp.item.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-20 16:37:10
 */
class UdpItemGetRequest
{
	/** 
	 * 地区ID
	 **/
	private $area;
	
	/** 
	 * 开始时间
	 **/
	private $beginTime;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 指标ID(参阅指标编号)
	 **/
	private $fields;
	
	/** 
	 * 商品ID
	 **/
	private $itemid;
	
	/** 
	 * 备用
	 **/
	private $parameters;
	
	/** 
	 * 来源ID
	 **/
	private $source;
	
	private $apiParas = array();
	
	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setBeginTime($beginTime)
	{
		$this->beginTime = $beginTime;
		$this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime()
	{
		return $this->beginTime;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setItemid($itemid)
	{
		$this->itemid = $itemid;
		$this->apiParas["itemid"] = $itemid;
	}

	public function getItemid()
	{
		return $this->itemid;
	}

	public function setParameters($parameters)
	{
		$this->parameters = $parameters;
		$this->apiParas["parameters"] = $parameters;
	}

	public function getParameters()
	{
		return $this->parameters;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function getApiMethodName()
	{
		return "taobao.udp.item.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->beginTime,"beginTime");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->fields,10,"fields");
		RequestCheckUtil::checkNotNull($this->itemid,"itemid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
