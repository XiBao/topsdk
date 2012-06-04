<?php
/**
 * TOP API: taobao.promotion.coupon.buyer.search request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class PromotionCouponBuyerSearchRequest
{
	/** 
	 * 查询有效期晚于查询日期的所有优惠券
	 **/
	private $endTime;
	
	/** 
	 * 第几页
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 店铺的名称，就是卖家的昵称
	 **/
	private $sellerNick;
	
	/** 
	 * unused：未使用，using：使用中,used,已经使用，overdue：已经过期，transfered：已经转发
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
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

	public function getApiMethodName()
	{
		return "taobao.promotion.coupon.buyer.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,10,"pageSize");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
}
