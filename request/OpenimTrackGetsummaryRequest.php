<?php
/**
 * TOP API: taobao.openim.track.getsummary request
 * 
 * @author auto create
 * @since 1.0, 2015.10.26
 */
class OpenimTrackGetsummaryRequest
{
	/** 
	 * 用户id
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setUid($uid)
	{
		$this->uid = $uid;
		$this->apiParas["uid"] = $uid;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getApiMethodName()
	{
		return "taobao.openim.track.getsummary";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
