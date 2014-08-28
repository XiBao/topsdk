<?php
/**
 * TOP API: alibaba.laiwang.user.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaLaiwangUserGetRequest
{
	/** 
	 * openid
	 **/
	private $openid;
	
	private $apiParas = array();
	
	public function setOpenid($openid)
	{
		$this->openid = $openid;
		$this->apiParas["openid"] = $openid;
	}

	public function getOpenid()
	{
		return $this->openid;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.user.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openid,"openid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
