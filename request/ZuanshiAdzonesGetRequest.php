<?php
/**
 * TOP API: taobao.zuanshi.adzones.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.25
 */
class ZuanshiAdzonesGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.zuanshi.adzones.get";
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
