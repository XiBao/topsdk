<?php
/**
 * TOP API: taobao.dmp.analysis.chart.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpAnalysisChartGetRequest
{
	/** 
	 * 选项
	 **/
	private $selects;
	
	/** 
	 * 标签ID
	 **/
	private $tagId;
	
	private $apiParas = array();
	
	public function setSelects($selects)
	{
		$this->selects = $selects;
		$this->apiParas["selects"] = $selects;
	}

	public function getSelects()
	{
		return $this->selects;
	}

	public function setTagId($tagId)
	{
		$this->tagId = $tagId;
		$this->apiParas["tag_id"] = $tagId;
	}

	public function getTagId()
	{
		return $this->tagId;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.analysis.chart.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
