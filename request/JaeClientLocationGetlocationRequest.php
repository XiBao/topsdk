<?php
/**
 * TOP API: taobao.jae.client.location.getlocation request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class JaeClientLocationGetlocationRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.jae.client.location.getlocation";
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
