<?php
/**
 * TOP API: taobao.upp.shoppoint.send request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class UppShoppointSendRequest
{
	/** 
	 * 买家nick
	 **/
	private $buyerNick;
	
	/** 
	 * 处理的店铺积分数量
	 **/
	private $pointNum;
	
	/** 
	 * 用于实际发放的时候关联系统发放记录，由预发放接口返回<br /> 支持的最大列表长度为：32
	 **/
	private $transactionId;
	
	/** 
	 * 6:业务成功
4:业务失败<br /> 支持的最大列表长度为：1
	 **/
	private $transactionStatus;
	
	/** 
	 * 业务发生的时间
	 **/
	private $transactionTime;
	
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

	public function setPointNum($pointNum)
	{
		$this->pointNum = $pointNum;
		$this->apiParas["point_num"] = $pointNum;
	}

	public function getPointNum()
	{
		return $this->pointNum;
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

	public function setTransactionStatus($transactionStatus)
	{
		$this->transactionStatus = $transactionStatus;
		$this->apiParas["transaction_status"] = $transactionStatus;
	}

	public function getTransactionStatus()
	{
		return $this->transactionStatus;
	}

	public function setTransactionTime($transactionTime)
	{
		$this->transactionTime = $transactionTime;
		$this->apiParas["transaction_time"] = $transactionTime;
	}

	public function getTransactionTime()
	{
		return $this->transactionTime;
	}

	public function getApiMethodName()
	{
		return "taobao.upp.shoppoint.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->pointNum,"pointNum");
		RequestCheckUtil::checkNotNull($this->transactionId,"transactionId");
		RequestCheckUtil::checkNotNull($this->transactionStatus,"transactionStatus");
		RequestCheckUtil::checkNotNull($this->transactionTime,"transactionTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
