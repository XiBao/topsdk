<?php
/**
 * TOP API: taobao.wlb.waybill.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WlbWaybillGetRequest
{
	/** 
	 * 顺丰(SF)、EMS(标准快递：EMS；经济快件：EYB)、宅急送(ZJS)、圆通(YTO)、中通(ZTO)、百世汇通(HTKY)、优速(UC)、申通(STO)、天天快递 (TTKDEX)、全峰 (QFKD)、快捷(FAST)
	 **/
	private $cpCode;
	
	/** 
	 * 发货 地址
	 **/
	private $shippingAddress;
	
	/** 
	 * order_channels_type 订单来源：订单产生的电商平台
淘宝(TB)、天猫(TM)、京东(JD)、当当(DD)、拍拍(PP)、易讯(YX)、ebay(EBAY)、QQ网购(QQ)、亚马逊(AMAZON)、苏宁(SN)、国美(GM)、唯品会(WPH)、聚美(JM)、乐蜂(LF)、蘑菇街(MGJ)、聚尚(JS)、拍鞋(PX)、银泰(YT)、1号店(YHD)、凡客(VANCL)、邮乐(YL)、优购(YG)、阿里巴巴(1688)、其他(OTHERS)
	 **/
	private $tradeOrderInfoCols;
	
	private $apiParas = array();
	
	public function setCpCode($cpCode)
	{
		$this->cpCode = $cpCode;
		$this->apiParas["cp_code"] = $cpCode;
	}

	public function getCpCode()
	{
		return $this->cpCode;
	}

	public function setShippingAddress($shippingAddress)
	{
		$this->shippingAddress = $shippingAddress;
		$this->apiParas["shipping_address"] = $shippingAddress;
	}

	public function getShippingAddress()
	{
		return $this->shippingAddress;
	}

	public function setTradeOrderInfoCols($tradeOrderInfoCols)
	{
		$this->tradeOrderInfoCols = $tradeOrderInfoCols;
		$this->apiParas["trade_order_info_cols"] = $tradeOrderInfoCols;
	}

	public function getTradeOrderInfoCols()
	{
		return $this->tradeOrderInfoCols;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cpCode,"cpCode");
		RequestCheckUtil::checkNotNull($this->shippingAddress,"shippingAddress");
		RequestCheckUtil::checkNotNull($this->tradeOrderInfoCols,"tradeOrderInfoCols");
		RequestCheckUtil::checkMaxListSize($this->tradeOrderInfoCols,1000,"tradeOrderInfoCols");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
