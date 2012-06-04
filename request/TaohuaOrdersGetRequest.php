<?php
/**
 * TOP API: taobao.taohua.orders.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TaohuaOrdersGetRequest
{
	/** 
	 * 默认为当前时间， 日期格式精确到天数
	 **/
	private $endDate;
	
	/** 
	 * 分页获取订单列表信息，page_no代表的是第几页
	 **/
	private $pageNo;
	
	/** 
	 * 分页获取订单列表信息，page_size代表每页显示多少条。  注意：每页显示条数。最小5条，最多30条，凡是超出范围的条数，都会被默认为10条。
	 **/
	private $pageSize;
	
	/** 
	 * 系统默认为：当前时间-90天。  日期精确到日
	 **/
	private $startDate;
	
	/** 
	 * 查询的交易状态：
1.	全部 all
2.	等待买家付款 wait_pay
3.	交易成功 trade_suc
4.	交易关闭 trade_close
	 **/
	private $tradeStatus;
	
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

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setTradeStatus($tradeStatus)
	{
		$this->tradeStatus = $tradeStatus;
		$this->apiParas["trade_status"] = $tradeStatus;
	}

	public function getTradeStatus()
	{
		return $this->tradeStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.taohua.orders.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,30,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,5,"pageSize");
	}
}
