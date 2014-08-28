<?php
/**
 * TOP API: taobao.caipiao.signstatus.check request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class CaipiaoSignstatusCheckRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.caipiao.signstatus.check";
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
