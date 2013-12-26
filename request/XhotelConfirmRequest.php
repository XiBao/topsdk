<?php
/**
 * TOP API: taobao.xhotel.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelConfirmRequest
{
	/** 
	 * 1：认可淘宝匹配的结果
2：不认可淘宝匹配的结果
	 **/
	private $confirm;
	
	/** 
	 * hid
	 **/
	private $hid;
	
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

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->confirm,"confirm");
		RequestCheckUtil::checkNotNull($this->hid,"hid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
