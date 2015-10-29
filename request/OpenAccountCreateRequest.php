<?php
/**
 * TOP API: taobao.open.account.create request
 * 
 * @author auto create
 * @since 1.0, 2015.08.26
 */
class OpenAccountCreateRequest
{
	/** 
	 * Open Account的列表
	 **/
	private $paramList;
	
	private $apiParas = array();
	
	public function setParamList($paramList)
	{
		$this->paramList = $paramList;
		$this->apiParas["param_list"] = $paramList;
	}

	public function getParamList()
	{
		return $this->paramList;
	}

	public function getApiMethodName()
	{
		return "taobao.open.account.create";
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
