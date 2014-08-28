<?php
/**
 * TOP API: taobao.ebookmedia.chapter.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class EbookmediaChapterAddRequest
{
	/** 
	 * 电子书商品ID
	 **/
	private $auctionId;
	
	/** 
	 * 电子书完本价格。当状态为完本（即status=3）时，必填；只支持两位小数点的正数，例如：12.50
	 **/
	private $bookPrice;
	
	/** 
	 * 章节内容，最大长度不超过50000个字符
	 **/
	private $content;
	
	/** 
	 * 章节内容地址,只有通过授权的用户才可以传入此参数,不能超过500个字符
	 **/
	private $contentUrl;
	
	/** 
	 * 第三方的章节ID。不能为空，必须是大于0的数字，同一个商品下不能重复
	 **/
	private $cpCid;
	
	/** 
	 * 是否免费.值只能是0或者1
0：收费，1：免费
	 **/
	private $isFree;
	
	/** 
	 * 上一章节的淘宝地址id。不能为空，若添加的章节是第一章，则填0
	 **/
	private $preTbid;
	
	/** 
	 * 章节的收费字数
	 **/
	private $priceCount;
	
	/** 
	 * 电子书状态。目前仅支持以下三种
1：更新中，3：完本，2：暂停
	 **/
	private $status;
	
	/** 
	 * 章节标题。不能为空，不超过30个字符
	 **/
	private $title;
	
	/** 
	 * 电子书章节所属的卷ID
	 **/
	private $volumeId;
	
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

	public function setBookPrice($bookPrice)
	{
		$this->bookPrice = $bookPrice;
		$this->apiParas["book_price"] = $bookPrice;
	}

	public function getBookPrice()
	{
		return $this->bookPrice;
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

	public function setCpCid($cpCid)
	{
		$this->cpCid = $cpCid;
		$this->apiParas["cp_cid"] = $cpCid;
	}

	public function getCpCid()
	{
		return $this->cpCid;
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

	public function setPreTbid($preTbid)
	{
		$this->preTbid = $preTbid;
		$this->apiParas["pre_tbid"] = $preTbid;
	}

	public function getPreTbid()
	{
		return $this->preTbid;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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

	public function setVolumeId($volumeId)
	{
		$this->volumeId = $volumeId;
		$this->apiParas["volume_id"] = $volumeId;
	}

	public function getVolumeId()
	{
		return $this->volumeId;
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
		return "taobao.ebookmedia.chapter.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionId,"auctionId");
		RequestCheckUtil::checkNotNull($this->cpCid,"cpCid");
		RequestCheckUtil::checkNotNull($this->isFree,"isFree");
		RequestCheckUtil::checkNotNull($this->preTbid,"preTbid");
		RequestCheckUtil::checkNotNull($this->priceCount,"priceCount");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->volumeId,"volumeId");
		RequestCheckUtil::checkNotNull($this->wordCount,"wordCount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
