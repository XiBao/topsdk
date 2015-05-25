<?php
/**
 * TOP API: taobao.dmp.crowd.add request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpCrowdAddRequest
{
	/** 
	 * 人群名称
	 **/
	private $crowdName;
	
	/** 
	 * 放大倍数
	 **/
	private $lookalikeMultiple;
	
	/** 
	 * 选项
	 **/
	private $selects;
	
	/** 
	 * 过期时间
	 **/
	private $validDate;
	
	private $apiParas = array();
	
	public function setCrowdName($crowdName)
	{
		$this->crowdName = $crowdName;
		$this->apiParas["crowd_name"] = $crowdName;
	}

	public function getCrowdName()
	{
		return $this->crowdName;
	}

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

	public function setValidDate($validDate)
	{
		$this->validDate = $validDate;
		$this->apiParas["valid_date"] = $validDate;
	}

	public function getValidDate()
	{
		return $this->validDate;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.crowd.add";
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
