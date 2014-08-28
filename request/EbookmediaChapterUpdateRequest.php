<?php
/**
 * TOP API: taobao.ebookmedia.chapter.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class EbookmediaChapterUpdateRequest
{
	/** 
	 * 电子书商品ID
	 **/
	private $auctionId;
	
	/** 
	 * 章节内容，最大长度不超过50000个字符
	 **/
	private $content;
	
	/** 
	 * 章节内容地址,只有通过授权的用户才可以传入此参数,不能超过500个字符
	 **/
	private $contentUrl;
	
	/** 
	 * 是否免费.值只能是0或者1
0：收费，1：免费
	 **/
	private $isFree;
	
	/** 
	 * 章节的收费字数
	 **/
	private $priceCount;
	
	/** 
	 * 需要修改的章节的淘宝地址id。不能为空
	 **/
	private $tbid;
	
	/** 
	 * 章节标题。不能为空，不超过30个字符
	 **/
	private $title;
	
	/** 
	 * 章节的总字数。总字数必须大于或等于收费字数
	 **/
	private $wordCount;
	
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

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setContentUrl($contentUrl)
	{
		$this->contentUrl = $contentUrl;
		$this->apiParas["content_url"] = $contentUrl;
	}

	public function getContentUrl()
	{
		return $this->contentUrl;
	}

	public function setIsFree($isFree)
	{
		$this->isFree = $isFree;
		$this->apiParas["is_free"] = $isFree;
	}

	public function getIsFree()
	{
		return $this->isFree;
	}

	public function setPriceCount($priceCount)
	{
		$this->priceCount = $priceCount;
		$this->apiParas["price_count"] = $priceCount;
	}

	public function getPriceCount()
	{
		return $this->priceCount;
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

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setWordCount($wordCount)
	{
		$this->wordCount = $wordCount;
		$this->apiParas["word_count"] = $wordCount;
	}

	public function getWordCount()
	{
		return $this->wordCount;
	}

	public function getApiMethodName()
	{
		return "taobao.ebookmedia.chapter.update";
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
