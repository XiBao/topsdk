<?php
/**
 * TOP API: taobao.traderate.impr.imprword.byaucid.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class TraderateImprImprwordByaucidGetRequest
{
	/** 
	 * 淘宝的商品id
	 **/
	private $auctionId;
	
	private $apiParas = array();
	
	public function setAuctionId($auctionId)
	{
		$this->auctionId = $auctionId;
		$this->apiParas["auction_id"] = $auctionId;
	}

	public function getAuctionId()
	{
		return $this->auctionId;
	}

	public function getApiMethodName()
	{
		return "taobao.traderate.impr.imprword.byaucid.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionId,"auctionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
