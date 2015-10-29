<?php
/**
 * TOP API: taobao.openim.track.getdetails request
 * 
 * @author auto create
 * @since 1.0, 2015.10.26
 */
class OpenimTrackGetdetailsRequest
{
	/** 
	 * 查询结束时间(UTC时间，以毫秒为单位)
	 **/
	private $endtime;
	
	/** 
	 * 查询开始时间(UTC时间，以毫秒为单位)
	 **/
	private $starttime;
	
	/** 
	 * 用户ID
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setEndtime($endtime)
	{
		$this->endtime = $endtime;
		$this->apiParas["endtime"] = $endtime;
	}

	public function getEndtime()
	{
		return $this->endtime;
	}

	public function setStarttime($starttime)
	{
		$this->starttime = $starttime;
		$this->apiParas["starttime"] = $starttime;
	}

	public function getStarttime()
	{
		return $this->starttime;
	}

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
		return "taobao.openim.track.getdetails";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endtime,"endtime");
		RequestCheckUtil::checkNotNull($this->starttime,"starttime");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
