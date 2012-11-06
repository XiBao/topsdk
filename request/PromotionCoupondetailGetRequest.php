<?php
/**
 * TOP API: taobao.promotion.coupondetail.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class PromotionCoupondetailGetRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 优惠券的id
	 **/
	private $couponId;
	
	/** 
	 * 查询的页号，结果集是分页返回的，每页20条
	 **/
	private $pageNo;
	
	/** 
	 * 每页行数
	 **/
	private $pageSize;
	
	/** 
	 * 优惠券使用情况unused：代表未使用using：代表使用中used：代表已使用。必须是unused，using，used
	 **/
	private $state;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCouponId($couponId)
	{
		$this->couponId = $couponId;
		$this->apiParas["coupon_id"] = $couponId;
	}

	public function getCouponId()
	{
		return $this->couponId;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setState($state)
	{
		$this->state = $state;
		$this->apiParas["state"] = $state;
	}

	public function getState()
	{
		return $this->state;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.coupondetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->couponId,"couponId");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
	}
}
