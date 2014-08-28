<?php
/**
 * TOP API: tmall.brandcat.suiteconf.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class TmallBrandcatSuiteconfGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.brandcat.suiteconf.get";
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
