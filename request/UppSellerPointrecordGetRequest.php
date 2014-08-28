<?php
/**
 * TOP API: taobao.upp.seller.pointrecord.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class UppSellerPointrecordGetRequest
{
	/** 
	 * 查询的页数
	 **/
	private $currentPage;
	
	/** 
	 * 每页记录数，最大30条，默认20<br /> 支持最大值为：30<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 记录状态 1成功 0冻结  -1失败
	 **/
	private $status;
	
	/** 
	 * upp内部业务ID，由预扣或预发积分接口返回，ISV可以直接使用，或映射自己的业务ID。<br /> 支持的最大列表长度为：32
	 **/
	private $transactionId;
	
	/** 
	 * 业务发生的开始时间
	 **/
	private $transactionTimeBegin;
	
	/** 
	 * 业务发生的结束时间
	 **/
	private $transactionTimeEnd;
	
	/** 
	 * 卖家积分活动的类型
3：发送积分
4：扣减积分<br /> 支持的最大列表长度为：1
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTransactionId($transactionId)
	{
		$this->transactionId = $transactionId;
		$this->apiParas["transaction_id"] = $transactionId;
	}

	public function getTransactionId()
	{
		return $this->transactionId;
	}

	public function setTransactionTimeBegin($transactionTimeBegin)
	{
		$this->transactionTimeBegin = $transactionTimeBegin;
		$this->apiParas["transaction_time_begin"] = $transactionTimeBegin;
	}

	public function getTransactionTimeBegin()
	{
		return $this->transactionTimeBegin;
	}

	public function setTransactionTimeEnd($transactionTimeEnd)
	{
		$this->transactionTimeEnd = $transactionTimeEnd;
		$this->apiParas["transaction_time_end"] = $transactionTimeEnd;
	}

	public function getTransactionTimeEnd()
	{
		return $this->transactionTimeEnd;
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
		return "taobao.upp.seller.pointrecord.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,30,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
