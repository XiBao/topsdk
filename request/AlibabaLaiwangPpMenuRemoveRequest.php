<?php
/**
 * TOP API: alibaba.laiwang.pp.menu.remove request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaLaiwangPpMenuRemoveRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.laiwang.pp.menu.remove";
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
