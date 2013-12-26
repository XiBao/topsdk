<?php
/**
 * TOP API: taobao.xhotel.roomtype.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRoomtypeConfirmRequest
{
	/** 
	 * 1：认可淘宝匹配的结果
2：不认可淘宝匹配的结果
	 **/
	private $confirm;
	
	/** 
	 * rid
	 **/
	private $rid;
	
	private $apiParas = array();
	
	public function setConfirm($confirm)
	{
		$this->confirm = $confirm;
		$this->apiParas["confirm"] = $confirm;
	}

	public function getConfirm()
	{
		return $this->confirm;
	}

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
		return "taobao.xhotel.roomtype.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->confirm,"confirm");
		RequestCheckUtil::checkNotNull($this->rid,"rid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
