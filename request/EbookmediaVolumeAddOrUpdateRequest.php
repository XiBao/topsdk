<?php
/**
 * TOP API: taobao.ebookmedia.volume.add.or.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class EbookmediaVolumeAddOrUpdateRequest
{
	/** 
	 * 商品数字ID
	 **/
	private $auctionId;
	
	/** 
	 * 卷信息简介。不能超过2000个字符<br /> 支持最大长度为：2000<br /> 支持的最大列表长度为：2000
	 **/
	private $desc;
	
	/** 
	 * 卷序号ID。此序号ID必须按照数字顺序添加，不能跳过，若有重复则覆盖原来的卷信息,序号不能超过50
	 **/
	private $orderId;
	
	/** 
	 * 电子书卷标题，不能超过30个字符<br /> 支持最大长度为：30<br /> 支持的最大列表长度为：30
	 **/
	private $title;
	
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

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
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

	public function getApiMethodName()
	{
		return "taobao.ebookmedia.volume.add.or.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionId,"auctionId");
		RequestCheckUtil::checkMaxLength($this->desc,2000,"desc");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,30,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
