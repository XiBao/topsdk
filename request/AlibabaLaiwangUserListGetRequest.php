<?php
/**
 * TOP API: alibaba.laiwang.user.list.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaLaiwangUserListGetRequest
{
	/** 
	 * 第一个拉取的OPENID，不填默认从头开始拉取
	 **/
	private $nextOpenid;
	
	private $apiParas = array();
	
	public function setNextOpenid($nextOpenid)
	{
		$this->nextOpenid = $nextOpenid;
		$this->apiParas["next_openid"] = $nextOpenid;
	}

	public function getNextOpenid()
	{
		return $this->nextOpenid;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.user.list.get";
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
