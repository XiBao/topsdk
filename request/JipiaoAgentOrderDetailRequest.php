<?php
/**
 * TOP API: taobao.jipiao.agent.order.detail request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class JipiaoAgentOrderDetailRequest
{
	/** 
	 * 淘宝订单id列表，当前支持列表长度为1，即当前只支持单个订单详情查询
	 **/
	private $orderIds;
	
	private $apiParas = array();
	
	public function setOrderIds($orderIds)
	{
		$this->orderIds = $orderIds;
		$this->apiParas["order_ids"] = $orderIds;
	}

	public function getOrderIds()
	{
		return $this->orderIds;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.agent.order.detail";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderIds,"orderIds");
		RequestCheckUtil::checkMaxListSize($this->orderIds,1,"orderIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
