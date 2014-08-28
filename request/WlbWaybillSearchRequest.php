<?php
/**
 * TOP API: taobao.wlb.waybill.search request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WlbWaybillSearchRequest
{
	/** 
	 * 顺丰(SF)、EMS(标准快递：EMS；经济快件：EYB)、宅急送(ZJS)、圆通(YTO)、中通(ZTO)、百世汇通(HTKY)、优速(UC)、申通(STO)、天天快递 (TTKDEX)、全峰 (QFKD)、快捷(FAST)、邮政小包(POSTB)
	 **/
	private $cpCode;
	
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

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
