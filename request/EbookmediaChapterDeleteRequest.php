<?php
/**
 * TOP API: taobao.ebookmedia.chapter.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class EbookmediaChapterDeleteRequest
{
	/** 
	 * 电子书商品数字ID
	 **/
	private $auctionId;
	
	/** 
	 * 章节的淘宝地址id
	 **/
	private $tbid;
	
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

	public function setTbid($tbid)
	{
		$this->tbid = $tbid;
		$this->apiParas["tbid"] = $tbid;
	}

	public function getTbid()
	{
		return $this->tbid;
	}

	public function getApiMethodName()
	{
		return "taobao.ebookmedia.chapter.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionId,"auctionId");
		RequestCheckUtil::checkNotNull($this->tbid,"tbid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
