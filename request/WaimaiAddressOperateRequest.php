<?php
/**
 * TOP API: taobao.waimai.address.operate request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WaimaiAddressOperateRequest
{
	/** 
	 * 详细地址
	 **/
	private $address;
	
	/** 
	 * 城市汉字名称
	 **/
	private $city;
	
	/** 
	 * 是否是默认地址
	 **/
	private $defaulted;
	
	/** 
	 * 地址ID
	 **/
	private $id;
	
	/** 
	 * 收货人姓名
	 **/
	private $name;
	
	/** 
	 * 电话
	 **/
	private $phone;
	
	/** 
	 * 经度保留8位有效整数
	 **/
	private $x;
	
	/** 
	 * 纬度保留7位有效整数
	 **/
	private $y;
	
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

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setDefaulted($defaulted)
	{
		$this->defaulted = $defaulted;
		$this->apiParas["defaulted"] = $defaulted;
	}

	public function getDefaulted()
	{
		return $this->defaulted;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setX($x)
	{
		$this->x = $x;
		$this->apiParas["x"] = $x;
	}

	public function getX()
	{
		return $this->x;
	}

	public function setY($y)
	{
		$this->y = $y;
		$this->apiParas["y"] = $y;
	}

	public function getY()
	{
		return $this->y;
	}

	public function getApiMethodName()
	{
		return "taobao.waimai.address.operate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
