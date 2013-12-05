<?php
/**
 * TOP API: taobao.xhotel.room.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRoomGetRequest
{
	/** 
	 * gid酒店商品id
	 **/
	private $gid;
	
	private $apiParas = array();
	
	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.room.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->gid,"gid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
