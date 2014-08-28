<?php
/**
 * TOP API: taobao.packcode.hongbao.send request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class PackcodeHongbaoSendRequest
{
	/** 
	 * 业务标识
	 **/
	private $bizType;
	
	/** 
	 * 被发红包人nick
	 **/
	private $buyerNick;
	
	/** 
	 * 发红包金额(分)
	 **/
	private $couponFee;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCouponFee($couponFee)
	{
		$this->couponFee = $couponFee;
		$this->apiParas["coupon_fee"] = $couponFee;
	}

	public function getCouponFee()
	{
		return $this->couponFee;
	}

	public function getApiMethodName()
	{
		return "taobao.packcode.hongbao.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->couponFee,"couponFee");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
