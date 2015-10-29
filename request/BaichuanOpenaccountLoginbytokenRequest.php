<?php
/**
 * TOP API: taobao.baichuan.openaccount.loginbytoken request
 * 
 * @author auto create
 * @since 1.0, 2015.06.10
 */
class BaichuanOpenaccountLoginbytokenRequest
{
	/** 
	 * name
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getApiMethodName()
	{
		return "taobao.baichuan.openaccount.loginbytoken";
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
