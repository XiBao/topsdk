<?php
/**
 * TOP API: taobao.xhotel.gift.relationship.add request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelGiftRelationshipAddRequest
{
	/** 
	 * 礼包ID
	 **/
	private $giftId;
	
	/** 
	 * relate_id
当TYPE=1时，Dataid填写1，表示设置卖家级别礼包
当TYPE=2时，Dataid填HID
当TYPE=3时，Dataid填GID
当TYPE=4时，Dataid填[GID+RPID]
	 **/
	private $relateId;
	
	/** 
	 * 礼包关系类型1：Seller，2：Hotel，3：ROOM，4：RatePlan+ROOM
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setGiftId($giftId)
	{
		$this->giftId = $giftId;
		$this->apiParas["gift_id"] = $giftId;
	}

	public function getGiftId()
	{
		return $this->giftId;
	}

	public function setRelateId($relateId)
	{
		$this->relateId = $relateId;
		$this->apiParas["relate_id"] = $relateId;
	}

	public function getRelateId()
	{
		return $this->relateId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.gift.relationship.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->giftId,"giftId");
		RequestCheckUtil::checkNotNull($this->relateId,"relateId");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkMaxValue($this->type,4,"type");
		RequestCheckUtil::checkMinValue($this->type,1,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
