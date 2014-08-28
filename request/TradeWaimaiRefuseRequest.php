<?php
/**
 * TOP API: taobao.trade.waimai.refuse request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TradeWaimaiRefuseRequest
{
	/** 
	 * 买家付款未发货订单号
	 **/
	private $orderId;
	
	/** 
	 * 拒单理由
	 **/
	private $reason;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.waimai.refuse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
