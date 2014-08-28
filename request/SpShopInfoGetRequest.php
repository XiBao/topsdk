<?php
/**
 * TOP API: taobao.sp.shop.info.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpShopInfoGetRequest
{
	/** 
	 * 店铺编号。shop+sid.taobao.com即店铺地址，如shop123456.taobao.com
	 **/
	private $shopId;
	
	/** 
	 * 每个站点的唯一Key(加密的site id)
	 **/
	private $siteKey;
	
	private $apiParas = array();
	
	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

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
		return "taobao.sp.shop.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
