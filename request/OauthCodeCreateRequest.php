<?php
/**
 * TOP API: taobao.oauth.code.create request
 * 
 * @author auto create
 * @since 1.0, 2015.03.18
 */
class OauthCodeCreateRequest
{
	/** 
	 * mock param
	 **/
	private $test;
	
	private $apiParas = array();
	
	public function setTest($test)
	{
		$this->test = $test;
		$this->apiParas["test"] = $test;
	}

	public function getTest()
	{
		return $this->test;
	}

	public function getApiMethodName()
	{
		return "taobao.oauth.code.create";
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
