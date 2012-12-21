<?php
/**
 * TOP API: tmall.brandcat.control.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-20 16:37:10
 */
class TmallBrandcatControlGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.brandcat.control.get";
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
