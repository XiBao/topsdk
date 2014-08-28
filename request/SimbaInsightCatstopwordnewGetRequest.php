<?php
/**
 * TOP API: taobao.simba.insight.catstopwordnew.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class SimbaInsightCatstopwordnewGetRequest
{
	/** 
	 * 类目id
	 **/
	private $catId;
	
	/** 
	 * 表示查询的维度，比如选择click，则查询该类目下点击量最大的词，可供选择的值有：impression, click, cost, ctr, cpc, coverage, transactiontotal, transactionshippingtotal, favtotal, roi
	 **/
	private $dimension;
	
	/** 
	 * 查询截止时间，格式只能是：yyyy-MM-dd
	 **/
	private $endDate;
	
	/** 
	 * 返回前多少条数据<br /> 支持最大值为：20<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 查询开始时间，格式必须为：yyyy-MM-dd
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function setDimension($dimension)
	{
		$this->dimension = $dimension;
		$this->apiParas["dimension"] = $dimension;
	}

	public function getDimension()
	{
		return $this->dimension;
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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
		return "taobao.simba.insight.catstopwordnew.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
		RequestCheckUtil::checkNotNull($this->dimension,"dimension");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
