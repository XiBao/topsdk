<?php
/**
 * TOP API: taobao.promotion.members.get request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class PromotionMembersGetRequest
{
	/** 
	 * 会员昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 要查询第几页
	 **/
	private $currentPage;
	
	/** 
	 * 买家会员级别 general：普通会员 senior ：高级会员 vip：VIP会员 king：至尊VIP
	 **/
	private $grade;
	
	/** 
	 * 最大交易额，用分表示
	 **/
	private $maxTradeAmoun;
	
	/** 
	 * 最大交易量
	 **/
	private $maxTradeCount;
	
	/** 
	 * 最小交易额，用分表示
	 **/
	private $minTradeAmount;
	
	/** 
	 * 最小交易量
	 **/
	private $minTradeCount;
	
	/** 
	 * 每页行数
	 **/
	private $pageSize;
	
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

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setGrade($grade)
	{
		$this->grade = $grade;
		$this->apiParas["grade"] = $grade;
	}

	public function getGrade()
	{
		return $this->grade;
	}

	public function setMaxTradeAmoun($maxTradeAmoun)
	{
		$this->maxTradeAmoun = $maxTradeAmoun;
		$this->apiParas["max_trade_amoun"] = $maxTradeAmoun;
	}

	public function getMaxTradeAmoun()
	{
		return $this->maxTradeAmoun;
	}

	public function setMaxTradeCount($maxTradeCount)
	{
		$this->maxTradeCount = $maxTradeCount;
		$this->apiParas["max_trade_count"] = $maxTradeCount;
	}

	public function getMaxTradeCount()
	{
		return $this->maxTradeCount;
	}

	public function setMinTradeAmount($minTradeAmount)
	{
		$this->minTradeAmount = $minTradeAmount;
		$this->apiParas["min_trade_amount"] = $minTradeAmount;
	}

	public function getMinTradeAmount()
	{
		return $this->minTradeAmount;
	}

	public function setMinTradeCount($minTradeCount)
	{
		$this->minTradeCount = $minTradeCount;
		$this->apiParas["min_trade_count"] = $minTradeCount;
	}

	public function getMinTradeCount()
	{
		return $this->minTradeCount;
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

	public function getApiMethodName()
	{
		return "taobao.promotion.members.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->buyerNick,40,"buyerNick");
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,40,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
}
