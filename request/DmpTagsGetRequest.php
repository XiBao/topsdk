<?php
/**
 * TOP API: taobao.dmp.tags.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpTagsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.dmp.tags.get";
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
