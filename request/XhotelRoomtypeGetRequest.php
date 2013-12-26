<?php
/**
 * TOP API: taobao.xhotel.roomtype.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRoomtypeGetRequest
{
	/** 
	 * rid
	 **/
	private $rid;
	
	private $apiParas = array();
	
	public function setRid($rid)
	{
		$this->rid = $rid;
		$this->apiParas["rid"] = $rid;
	}

	public function getRid()
	{
		return $this->rid;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.roomtype.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rid,"rid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
