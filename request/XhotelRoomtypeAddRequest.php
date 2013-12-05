<?php
/**
 * TOP API: taobao.xhotel.roomtype.add request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRoomtypeAddRequest
{
	/** 
	 * 可选值：A,B,C,D。分别代表： A：15平米以下，B：16－30平米，C：31－50平米，D：50平米以上
2）也可以自己定义，比如：40平方米
	 **/
	private $area;
	
	/** 
	 * 床宽。按自己定义存储，比如：2.1米
	 **/
	private $bedSize;
	
	/** 
	 * 床型。按自己定义存储，比如：高低床、上下床
	 **/
	private $bedType;
	
	/** 
	 * 扩展信息的JSON。
注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
	 **/
	private $extend;
	
	/** 
	 * 客房在建筑的第几层，隔层为1-2层，4-5层，7-8层
	 **/
	private $floor;
	
	/** 
	 * 酒店id。必须为数字。
	 **/
	private $hid;
	
	/** 
	 * 宽带服务。A,B,C,D。分别代表： A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
	 **/
	private $internet;
	
	/** 
	 * 最大入住人数，默认2（1-99）
	 **/
	private $maxOccupancy;
	
	/** 
	 * 房型名称。不能超过30字
	 **/
	private $name;
	
	/** 
	 * 卖家自己系统中的ID
	 **/
	private $outerId;
	
	/** 
	 * 设施服务。JSON格式。 value值true有此服务，false没有。 bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。 如： {"bar":false,"catv":false,"ddd":false,"idd":false,"pubtoilet":false,"toilet":false}
	 **/
	private $service;
	
	/** 
	 * 0:无窗/1:有窗
	 **/
	private $windowType;
	
	private $apiParas = array();
	
	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setBedSize($bedSize)
	{
		$this->bedSize = $bedSize;
		$this->apiParas["bed_size"] = $bedSize;
	}

	public function getBedSize()
	{
		return $this->bedSize;
	}

	public function setBedType($bedType)
	{
		$this->bedType = $bedType;
		$this->apiParas["bed_type"] = $bedType;
	}

	public function getBedType()
	{
		return $this->bedType;
	}

	public function setExtend($extend)
	{
		$this->extend = $extend;
		$this->apiParas["extend"] = $extend;
	}

	public function getExtend()
	{
		return $this->extend;
	}

	public function setFloor($floor)
	{
		$this->floor = $floor;
		$this->apiParas["floor"] = $floor;
	}

	public function getFloor()
	{
		return $this->floor;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setInternet($internet)
	{
		$this->internet = $internet;
		$this->apiParas["internet"] = $internet;
	}

	public function getInternet()
	{
		return $this->internet;
	}

	public function setMaxOccupancy($maxOccupancy)
	{
		$this->maxOccupancy = $maxOccupancy;
		$this->apiParas["max_occupancy"] = $maxOccupancy;
	}

	public function getMaxOccupancy()
	{
		return $this->maxOccupancy;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setService($service)
	{
		$this->service = $service;
		$this->apiParas["service"] = $service;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setWindowType($windowType)
	{
		$this->windowType = $windowType;
		$this->apiParas["window_type"] = $windowType;
	}

	public function getWindowType()
	{
		return $this->windowType;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.roomtype.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->area,30,"area");
		RequestCheckUtil::checkMaxLength($this->bedSize,30,"bedSize");
		RequestCheckUtil::checkMaxLength($this->bedType,30,"bedType");
		RequestCheckUtil::checkMaxLength($this->extend,500,"extend");
		RequestCheckUtil::checkMaxLength($this->floor,30,"floor");
		RequestCheckUtil::checkNotNull($this->hid,"hid");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,30,"name");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkMaxLength($this->outerId,20,"outerId");
		RequestCheckUtil::checkMaxLength($this->service,1024,"service");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
