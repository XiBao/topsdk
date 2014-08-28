<?php
/**
 * TOP API: taobao.sp.item.feed.info.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpItemFeedInfoGetRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 卖家数字ID
	 **/
	private $sellerId;
	
	/** 
	 * 每个站点的唯一Key(加密的site id)
	 **/
	private $siteKey;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
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
		return "taobao.sp.item.feed.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
