<?php
/**
 * TOP API: taobao.zuanshi.adzone.rpts.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.25
 */
class ZuanshiAdzoneRptsGetRequest
{
	/** 
	 * 资源位id标识
	 **/
	private $adzoneId;
	
	private $apiParas = array();
	
	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.adzone.rpts.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
