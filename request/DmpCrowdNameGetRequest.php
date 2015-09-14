<?php
/**
 * TOP API: taobao.dmp.crowd.name.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpCrowdNameGetRequest
{
	/** 
	 * 人群名称
	 **/
	private $crowdName;
	
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

	public function getApiMethodName()
	{
		return "taobao.dmp.crowd.name.get";
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
