<?php
/**
 * TOP API: taobao.ebook.activity.item.input request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class EbookActivityItemInputRequest
{
	/** 
	 * 活动Id
	 **/
	private $actId;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 商品图片url
	 **/
	private $itemPicUrl;
	
	/** 
	 * 商品价格，单位：分。
	 **/
	private $itemPrice;
	
	/** 
	 * 商品标题
	 **/
	private $itemTitle;
	
	/** 
	 * 实际代扣价格，单位：分。
	 **/
	private $realPrice;
	
	private $apiParas = array();
	
	public function setActId($actId)
	{
		$this->actId = $actId;
		$this->apiParas["act_id"] = $actId;
	}

	public function getActId()
	{
		return $this->actId;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemPicUrl($itemPicUrl)
	{
		$this->itemPicUrl = $itemPicUrl;
		$this->apiParas["item_pic_url"] = $itemPicUrl;
	}

	public function getItemPicUrl()
	{
		return $this->itemPicUrl;
	}

	public function setItemPrice($itemPrice)
	{
		$this->itemPrice = $itemPrice;
		$this->apiParas["item_price"] = $itemPrice;
	}

	public function getItemPrice()
	{
		return $this->itemPrice;
	}

	public function setItemTitle($itemTitle)
	{
		$this->itemTitle = $itemTitle;
		$this->apiParas["item_title"] = $itemTitle;
	}

	public function getItemTitle()
	{
		return $this->itemTitle;
	}

	public function setRealPrice($realPrice)
	{
		$this->realPrice = $realPrice;
		$this->apiParas["real_price"] = $realPrice;
	}

	public function getRealPrice()
	{
		return $this->realPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.ebook.activity.item.input";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actId,"actId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->itemPrice,"itemPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
