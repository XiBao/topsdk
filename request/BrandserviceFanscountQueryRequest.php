<?php
/**
 * TOP API: taobao.brandservice.fanscount.query request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class BrandserviceFanscountQueryRequest
{
	/** 
	 * 站长用户id
	 **/
	private $siteOwnerId;
	
	private $apiParas = array();
	
	public function setSiteOwnerId($siteOwnerId)
	{
		$this->siteOwnerId = $siteOwnerId;
		$this->apiParas["site_owner_id"] = $siteOwnerId;
	}

	public function getSiteOwnerId()
	{
		return $this->siteOwnerId;
	}

	public function getApiMethodName()
	{
		return "taobao.brandservice.fanscount.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->siteOwnerId,"siteOwnerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
