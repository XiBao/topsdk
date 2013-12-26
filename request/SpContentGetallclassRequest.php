<?php
/**
 * TOP API: taobao.sp.content.getallclass request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class SpContentGetallclassRequest
{
	/** 
	 * 站长Key
	 **/
	private $siteKey;
	
	private $apiParas = array();
	
	public function setSiteKey($siteKey)
	{
		$this->siteKey = $siteKey;
		$this->apiParas["site_key"] = $siteKey;
	}

	public function getSiteKey()
	{
		return $this->siteKey;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.content.getallclass";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
