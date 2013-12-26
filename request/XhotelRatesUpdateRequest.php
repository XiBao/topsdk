<?php
/**
 * TOP API: taobao.xhotel.rates.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRatesUpdateRequest
{
	/** 
	 * 批量修改价格和库存信息：
A:use_room_inventory:是否使用room级别共享库存，可选值 true false 1、true时：使用room级别共享库存（即使用gid对应的XRoom中的inventory），rate_quota_map 的json 数据中不需要录入库存信息,录入的库存信息会忽略 2、false时：使用rate级别私有库存，此时要求价格和库存必填。
B:date  日期必须为 T---T+90 日内的日期（T为当天），且不能重复
C:price 价格 int类型 取值范围1-99999999 单位为分
D:quota 库存 int 类型 取值范围  0-999（数量库存）  60000(状态库存关) 61000(状态库存开)

示例值：
（1）
[{"gid":10021054954,"rp_id":754001954,"data":{"use_room_inventory":false,"inventory_price":[{"date":2013-11-18,"quota":1,"price":1000},{"date":2013-11-19,"quota":1,"price":1000}]}}]
（2）
[{"gid":10021054954,"rp_id":755001954,"data":{"use_room_inventory":false,"inventory_price":[{"date":2013-11-18,"quota":1,"price":1000}]}},{"gid":10021054954,"rp_id":755002954,"data":{"use_room_inventory":false,"inventory_price":[{"date":2013-11-18,"quota":1,"price":1000}]}}]
	 **/
	private $rateInventoryPriceMap;
	
	private $apiParas = array();
	
	public function setRateInventoryPriceMap($rateInventoryPriceMap)
	{
		$this->rateInventoryPriceMap = $rateInventoryPriceMap;
		$this->apiParas["rate_inventory_price_map"] = $rateInventoryPriceMap;
	}

	public function getRateInventoryPriceMap()
	{
		return $this->rateInventoryPriceMap;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.rates.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->rateInventoryPriceMap,"rateInventoryPriceMap");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
