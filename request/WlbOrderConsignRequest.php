<?php
/**
 * TOP API: taobao.wlb.order.consign request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WlbOrderConsignRequest
{
	/** 
	 * 物流宝订单编号<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $wlbOrderCode;
	
	private $apiParas = array();
	
	public function setWlbOrderCode($wlbOrderCode)
	{
		$this->wlbOrderCode = $wlbOrderCode;
		$this->apiParas["wlb_order_code"] = $wlbOrderCode;
	}

	public function getWlbOrderCode()
	{
		return $this->wlbOrderCode;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.order.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->wlbOrderCode,"wlbOrderCode");
		RequestCheckUtil::checkMaxLength($this->wlbOrderCode,64,"wlbOrderCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
