<?php
/**
 * TOP API: taobao.jipiao.agent.order.ticket request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class JipiaoAgentOrderTicketRequest
{
	/** 
	 * 淘宝系统订单id
	 **/
	private $orderId;
	
	/** 
	 * 成功订单参数：列表元素结构为——
1.航班号（注：是订单里的航班号，非实际承运航班号）;
2.旧乘机人姓名;
3.新乘机人姓名;
4.票号 （乘机人、航段对应的票号）
说明：
1.往返订单，2段航班对应1个票号的，需要2条success_info记录，分别对应去程、回程；
2.有时用户输入的乘机人姓名输入错误或者有生僻字，代理商必须输入新的名字以保证验真通过；即旧乘机人姓名和新乘机人姓名不需要变化时可以相同
	 **/
	private $successInfo;
	
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

	public function setSuccessInfo($successInfo)
	{
		$this->successInfo = $successInfo;
		$this->apiParas["success_info"] = $successInfo;
	}

	public function getSuccessInfo()
	{
		return $this->successInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.agent.order.ticket";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->successInfo,"successInfo");
		RequestCheckUtil::checkMaxListSize($this->successInfo,18,"successInfo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
