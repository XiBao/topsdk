<?php
/**
 * TOP API: taobao.udp.target.search request
 * 
 * @author auto create
 * @since 1.0, 2013-02-22 16:36:25
 */
class UdpTargetSearchRequest
{
	/** 
	 * 查询数据的所属地区列表，以','分开。
可使用的地区编码参见，数据平台ISV接入文档
	 **/
	private $areas;
	
	/** 
	 * 开始时间
	 **/
	private $beginTime;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 字段名
	 **/
	private $field;
	
	/** 
	 * 分页序号
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 自定义指标中使用的参数值。具体使用方法参见，数据平台ISV接入文档
	 **/
	private $parameters;
	
	private $apiParas = array();
	
	public function setAreas($areas)
	{
		$this->areas = $areas;
		$this->apiParas["areas"] = $areas;
	}

	public function getAreas()
	{
		return $this->areas;
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

	public function setField($field)
	{
		$this->field = $field;
		$this->apiParas["field"] = $field;
	}

	public function getField()
	{
		return $this->field;
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function getApiMethodName()
	{
		return "taobao.udp.target.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->areas,"areas");
		RequestCheckUtil::checkMaxListSize($this->areas,5,"areas");
		RequestCheckUtil::checkNotNull($this->beginTime,"beginTime");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->field,"field");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkMaxListSize($this->parameters,10,"parameters");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
