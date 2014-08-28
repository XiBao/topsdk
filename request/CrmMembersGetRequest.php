<?php
/**
 * TOP API: taobao.crm.members.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmMembersGetRequest
{
	/** 
	 * 买家的昵称<br /> 支持最大长度为：1000<br /> 支持的最大列表长度为：1000
	 **/
	private $buyerNick;
	
	/** 
	 * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1，最大页数为1000<br /> 支持最大值为：1000<br /> 支持最小值为：1
	 **/
	private $currentPage;
	
	/** 
	 * 会员等级，0：店铺客户，1：普通会员，2：高级会员，3：VIP会员， 4：至尊VIP会员。如果不传入值则默认为全部等级。<br /> 支持最大值为：4<br /> 支持最小值为：-1<br /> 支持的最大列表长度为：32
	 **/
	private $grade;
	
	/** 
	 * 最迟上次交易时间
	 **/
	private $maxLastTradeTime;
	
	/** 
	 * 最大交易额，单位为元
	 **/
	private $maxTradeAmount;
	
	/** 
	 * 最大交易量<br /> 支持最小值为：0
	 **/
	private $maxTradeCount;
	
	/** 
	 * 最早上次交易时间
	 **/
	private $minLastTradeTime;
	
	/** 
	 * 最小交易额,单位为元
	 **/
	private $minTradeAmount;
	
	/** 
	 * 最小交易量<br /> 支持最小值为：0
	 **/
	private $minTradeCount;
	
	/** 
	 * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1，<br /> 支持最大值为：100<br /> 支持最小值为：1
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

	public function setMaxLastTradeTime($maxLastTradeTime)
	{
		$this->maxLastTradeTime = $maxLastTradeTime;
		$this->apiParas["max_last_trade_time"] = $maxLastTradeTime;
	}

	public function getMaxLastTradeTime()
	{
		return $this->maxLastTradeTime;
	}

	public function setMaxTradeAmount($maxTradeAmount)
	{
		$this->maxTradeAmount = $maxTradeAmount;
		$this->apiParas["max_trade_amount"] = $maxTradeAmount;
	}

	public function getMaxTradeAmount()
	{
		return $this->maxTradeAmount;
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

	public function setMinLastTradeTime($minLastTradeTime)
	{
		$this->minLastTradeTime = $minLastTradeTime;
		$this->apiParas["min_last_trade_time"] = $minLastTradeTime;
	}

	public function getMinLastTradeTime()
	{
		return $this->minLastTradeTime;
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
		return "taobao.crm.members.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->buyerNick,1000,"buyerNick");
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkMaxValue($this->currentPage,1000,"currentPage");
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMaxValue($this->grade,4,"grade");
		RequestCheckUtil::checkMinValue($this->grade,-1,"grade");
		RequestCheckUtil::checkMinValue($this->maxTradeCount,0,"maxTradeCount");
		RequestCheckUtil::checkMinValue($this->minTradeCount,0,"minTradeCount");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
