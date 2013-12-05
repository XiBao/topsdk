<?php
/**
 * TOP API: taobao.xhotel.rateplan.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRateplanGetRequest
{
	/** 
	 * rateplan_id
	 **/
	private $rpid;
	
	private $apiParas = array();
	
	public function setRpid($rpid)
	{
		$this->rpid = $rpid;
		$this->apiParas["rpid"] = $rpid;
	}

	public function getRpid()
	{
		return $this->rpid;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.rateplan.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rpid,"rpid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
