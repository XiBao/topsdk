<?php
/**
 * TOP API: alibaba.xiami.api.contract.issign request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaXiamiApiContractIssignRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.xiami.api.contract.issign";
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
