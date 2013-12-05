<?php
/**
 * TOP API: taobao.simba.nonsearch.alldemographics.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class SimbaNonsearchAlldemographicsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.simba.nonsearch.alldemographics.get";
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
