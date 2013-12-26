<?php
/**
 * TOP API: taobao.xhotel.rate.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRateGetRequest
{
	/** 
	 * gid酒店商品id
	 **/
	private $gid;
	
	/** 
	 * 酒店RPID
	 **/
	private $rpid;
	
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
		return "taobao.xhotel.rate.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->gid,"gid");
		RequestCheckUtil::checkNotNull($this->rpid,"rpid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
