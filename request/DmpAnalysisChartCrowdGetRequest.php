<?php
/**
 * TOP API: taobao.dmp.analysis.chart.crowd.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpAnalysisChartCrowdGetRequest
{
	/** 
	 * 透视的人群id
	 **/
	private $crowdId;
	
	/** 
	 * 选项
	 **/
	private $selects;
	
	/** 
	 * 标签id
	 **/
	private $tagId;
	
	private $apiParas = array();
	
	public function setCrowdId($crowdId)
	{
		$this->crowdId = $crowdId;
		$this->apiParas["crowd_id"] = $crowdId;
	}

	public function getCrowdId()
	{
		return $this->crowdId;
	}

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
		return "taobao.dmp.analysis.chart.crowd.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->crowdId,"crowdId");
		RequestCheckUtil::checkNotNull($this->tagId,"tagId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
