<?php
/**
 * TOP API: taobao.xhotel.rate.add request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRateAddRequest
{
	/** 
	 * 额外服务-是否可以加床，1：不可以，2：可以
	 **/
	private $addBed;
	
	/** 
	 * 额外服务-加床价格
	 **/
	private $addBedPrice;
	
	/** 
	 * 币种（仅支持CNY）
	 **/
	private $currencyCode;
	
	/** 
	 * gid酒店商品id
	 **/
	private $gid;
	
	/** 
	 * 价格和库存信息。
A:use_room_inventory:是否使用room级别共享库存，可选值 true false 1、true时：使用room级别共享库存（即使用gid对应的XRoom中的inventory），rate_quota_map 的json 数据中不需要录入库存信息,录入的库存信息会忽略 2、false时：使用rate级别私有库存，此时要求价格和库存必填。
B:date  日期必须为 T---T+90 日内的日期（T为当天），且不能重复
C:price 价格 int类型 取值范围1-99999999 单位为分
D:quota 库存 int 类型 取值范围  0-999（数量库存）  60000(状态库存关) 61000(状态库存开)
	 **/
	private $inventoryPrice;
	
	/** 
	 * 名称
	 **/
	private $name;
	
	/** 
	 * 酒店RPID
	 **/
	private $rpid;
	
	/** 
	 * 实价有房标签（RP支付类型为全额支付）
	 **/
	private $shijiaTag;
	
	private $apiParas = array();
	
	public function setAddBed($addBed)
	{
		$this->addBed = $addBed;
		$this->apiParas["add_bed"] = $addBed;
	}

	public function getAddBed()
	{
		return $this->addBed;
	}

	public function setAddBedPrice($addBedPrice)
	{
		$this->addBedPrice = $addBedPrice;
		$this->apiParas["add_bed_price"] = $addBedPrice;
	}

	public function getAddBedPrice()
	{
		return $this->addBedPrice;
	}

	public function setCurrencyCode($currencyCode)
	{
		$this->currencyCode = $currencyCode;
		$this->apiParas["currency_code"] = $currencyCode;
	}

	public function getCurrencyCode()
	{
		return $this->currencyCode;
	}

	public function setGid($gid)
	{
		$this->gid = $gid;
		$this->apiParas["gid"] = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setInventoryPrice($inventoryPrice)
	{
		$this->inventoryPrice = $inventoryPrice;
		$this->apiParas["inventory_price"] = $inventoryPrice;
	}

	public function getInventoryPrice()
	{
		return $this->inventoryPrice;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setRpid($rpid)
	{
		$this->rpid = $rpid;
		$this->apiParas["rpid"] = $rpid;
	}

	public function getRpid()
	{
		return $this->rpid;
	}

	public function setShijiaTag($shijiaTag)
	{
		$this->shijiaTag = $shijiaTag;
		$this->apiParas["shijia_tag"] = $shijiaTag;
	}

	public function getShijiaTag()
	{
		return $this->shijiaTag;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.rate.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->addBed,2,"addBed");
		RequestCheckUtil::checkMinValue($this->addBed,1,"addBed");
		RequestCheckUtil::checkNotNull($this->gid,"gid");
		RequestCheckUtil::checkNotNull($this->inventoryPrice,"inventoryPrice");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkNotNull($this->rpid,"rpid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
