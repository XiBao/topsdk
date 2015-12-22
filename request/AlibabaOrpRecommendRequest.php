<?php
/**
 * TOP API: alibaba.orp.recommend request
 * 
 * @author auto create
 * @since 1.0, 2015.12.16
 */
class AlibabaOrpRecommendRequest
{
	/** 
	 * 推荐场景ID
	 **/
	private $appid;
	
	/** 
	 * 调用来源,格式TOP_
	 **/
	private $callSource;
	
	/** 
	 * 推荐使用的参数
	 **/
	private $params;
	
	/** 
	 * 买家数字ID（如果需要）
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setAppid($appid)
	{
		$this->appid = $appid;
		$this->apiParas["appid"] = $appid;
	}

	public function getAppid()
	{
		return $this->appid;
	}

	public function setCallSource($callSource)
	{
		$this->callSource = $callSource;
		$this->apiParas["call_source"] = $callSource;
	}

	public function getCallSource()
	{
		return $this->callSource;
	}

	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "alibaba.orp.recommend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appid,"appid");
		RequestCheckUtil::checkNotNull($this->callSource,"callSource");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
