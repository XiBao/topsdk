<?php
/**
 * TOP API: taobao.xhotel.gift.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelGiftGetRequest
{
	/** 
	 * 礼包id
	 **/
	private $giftId;
	
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

	public function getApiMethodName()
	{
		return "taobao.xhotel.gift.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->giftId,"giftId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
