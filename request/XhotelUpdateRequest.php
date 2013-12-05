<?php
/**
 * TOP API: taobao.xhotel.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelUpdateRequest
{
	/** 
	 * 酒店地址。长度不能超过120
	 **/
	private $address;
	
	/** 
	 * 商业区（圈）长度不超过20字
	 **/
	private $business;
	
	/** 
	 * 城市编码。参见：http://kezhan.trip.taobao.com/area.html，domestic为false时，输入对应国家的海外城市编码，可调用海外城市查询接口获取
	 **/
	private $city;
	
	/** 
	 * domestic为true时，固定China； domestic为false时，必须传定义的海外国家编码值。参见：http://kezhan.trip.taobao.com/countrys.html
	 **/
	private $country;
	
	/** 
	 * 区域（县级市）编码。参见：http://kezhan.trip.taobao.com/area.html
	 **/
	private $district;
	
	/** 
	 * 是否国内酒店。0:国内;1:国外
	 **/
	private $domestic;
	
	/** 
	 * 扩展信息的JSON。
注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
	 **/
	private $extend;
	
	/** 
	 * 酒店的hid
	 **/
	private $hid;
	
	/** 
	 * 维度
	 **/
	private $latitude;
	
	/** 
	 * 经度
	 **/
	private $longitude;
	
	/** 
	 * 酒店名称
	 **/
	private $name;
	
	/** 
	 * 坐标类型，现在支持：
G – Google
B – 百度
A – 高德
M – Mapbar
L – 灵图
	 **/
	private $positionType;
	
	/** 
	 * 省份编码。参见：http://kezhan.trip.taobao.com/area.html，domestic为false时默认为0
	 **/
	private $province;
	
	/** 
	 * 酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
	 **/
	private $tel;
	
	/** 
	 * 酒店曾用名
	 **/
	private $usedName;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setBusiness($business)
	{
		$this->business = $business;
		$this->apiParas["business"] = $business;
	}

	public function getBusiness()
	{
		return $this->business;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCountry($country)
	{
		$this->country = $country;
		$this->apiParas["country"] = $country;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function setDistrict($district)
	{
		$this->district = $district;
		$this->apiParas["district"] = $district;
	}

	public function getDistrict()
	{
		return $this->district;
	}

	public function setDomestic($domestic)
	{
		$this->domestic = $domestic;
		$this->apiParas["domestic"] = $domestic;
	}

	public function getDomestic()
	{
		return $this->domestic;
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

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
		$this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude()
	{
		return $this->latitude;
	}

	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
		$this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
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

	public function setPositionType($positionType)
	{
		$this->positionType = $positionType;
		$this->apiParas["position_type"] = $positionType;
	}

	public function getPositionType()
	{
		return $this->positionType;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setTel($tel)
	{
		$this->tel = $tel;
		$this->apiParas["tel"] = $tel;
	}

	public function getTel()
	{
		return $this->tel;
	}

	public function setUsedName($usedName)
	{
		$this->usedName = $usedName;
		$this->apiParas["used_name"] = $usedName;
	}

	public function getUsedName()
	{
		return $this->usedName;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->address,120,"address");
		RequestCheckUtil::checkMaxLength($this->business,20,"business");
		RequestCheckUtil::checkMaxLength($this->country,30,"country");
		RequestCheckUtil::checkMaxLength($this->extend,500,"extend");
		RequestCheckUtil::checkNotNull($this->hid,"hid");
		RequestCheckUtil::checkMaxLength($this->latitude,10,"latitude");
		RequestCheckUtil::checkMaxLength($this->longitude,10,"longitude");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->tel,30,"tel");
		RequestCheckUtil::checkMaxLength($this->usedName,60,"usedName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
