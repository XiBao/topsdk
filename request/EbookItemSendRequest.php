<?php
/**
 * TOP API: taobao.ebook.item.send request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class EbookItemSendRequest
{
	/** 
	 * 送电子书的活动ID
	 **/
	private $actId;
	
	/** 
	 * 送电子书的活动名称
	 **/
	private $actName;
	
	/** 
	 * 关联的淘宝订单
	 **/
	private $bizOrderId;
	
	/** 
	 * 买家（接收方）的淘宝账号数字ID，不可为空、0和负数。
	 **/
	private $buyerId;
	
	/** 
	 * 书库ID
	 **/
	private $ebookLibId;
	
	/** 
	 * 商品ID，不可为空、0和负数。
	 **/
	private $itemId;
	
	/** 
	 * 电子书商品标题，30字以内。
	 **/
	private $itemTitle;
	
	/** 
	 * 接入系统的业务ID（在业务方必须唯一），长度不能超过20位。
	 **/
	private $outBizId;
	
	/** 
	 * 卖家（赠送方）的淘宝账号数字ID，不可为空、0和负数。
	 **/
	private $sellerId;
	
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

	public function setActName($actName)
	{
		$this->actName = $actName;
		$this->apiParas["act_name"] = $actName;
	}

	public function getActName()
	{
		return $this->actName;
	}

	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setEbookLibId($ebookLibId)
	{
		$this->ebookLibId = $ebookLibId;
		$this->apiParas["ebook_lib_id"] = $ebookLibId;
	}

	public function getEbookLibId()
	{
		return $this->ebookLibId;
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

	public function setItemTitle($itemTitle)
	{
		$this->itemTitle = $itemTitle;
		$this->apiParas["item_title"] = $itemTitle;
	}

	public function getItemTitle()
	{
		return $this->itemTitle;
	}

	public function setOutBizId($outBizId)
	{
		$this->outBizId = $outBizId;
		$this->apiParas["out_biz_id"] = $outBizId;
	}

	public function getOutBizId()
	{
		return $this->outBizId;
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

	public function getApiMethodName()
	{
		return "taobao.ebook.item.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerId,"buyerId");
		RequestCheckUtil::checkNotNull($this->ebookLibId,"ebookLibId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->itemTitle,"itemTitle");
		RequestCheckUtil::checkNotNull($this->outBizId,"outBizId");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
