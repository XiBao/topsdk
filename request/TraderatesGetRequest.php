<?php
/**
 * TOP API: taobao.traderates.get request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class TraderatesGetRequest
{
	/** 
	 * 评价结束时间。如果只输入结束时间，那么全部返回所有评价数据。
	 **/
	private $endDate;
	
	/** 
	 * 需返回的字段列表。可选值：TradeRate 结构中的所有字段，多个字段之间用“,”分隔
	 **/
	private $fields;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:200
	 **/
	private $pageSize;
	
	/** 
	 * 评价类型。可选值:get(得到),give(给出)
	 **/
	private $rateType;
	
	/** 
	 * 评价结果。可选值:good(好评),neutral(中评),bad(差评)
	 **/
	private $result;
	
	/** 
	 * 评价者角色。可选值:seller(卖家),buyer(买家)
	 **/
	private $role;
	
	/** 
	 * 评价开始时。如果只输入开始时间，那么能返回开始时间之后的评价数据。
	 **/
	private $startDate;
	
	/** 
	 * 交易订单id，可以是父订单id号，也可以是子订单id号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setRateType($rateType)
	{
		$this->rateType = $rateType;
		$this->apiParas["rate_type"] = $rateType;
	}

	public function getRateType()
	{
		return $this->rateType;
	}

	public function setResult($result)
	{
		$this->result = $result;
		$this->apiParas["result"] = $result;
	}

	public function getResult()
	{
		return $this->result;
	}

	public function setRole($role)
	{
		$this->role = $role;
		$this->apiParas["role"] = $role;
	}

	public function getRole()
	{
		return $this->role;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.traderates.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->rateType,"rateType");
		RequestCheckUtil::checkNotNull($this->role,"role");
	}
}
