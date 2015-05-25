<?php
/**
 * TOP API: taobao.dmp.analysis.count.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpAnalysisCountGetRequest
{
	/** 
	 * 放到倍数
	 **/
	private $lookalikeMultiple;
	
	/** 
	 * 选项
	 **/
	private $selects;
	
	private $apiParas = array();
	
	public function setLookalikeMultiple($lookalikeMultiple)
	{
		$this->lookalikeMultiple = $lookalikeMultiple;
		$this->apiParas["lookalike_multiple"] = $lookalikeMultiple;
	}

	public function getLookalikeMultiple()
	{
		return $this->lookalikeMultiple;
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

	public function getApiMethodName()
	{
		return "taobao.dmp.analysis.count.get";
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
