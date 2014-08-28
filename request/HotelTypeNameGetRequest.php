<?php
/**
 * TOP API: taobao.hotel.type.name.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class HotelTypeNameGetRequest
{
	/** 
	 * 要查询的酒店id。必须为数字
	 **/
	private $hid;
	
	/** 
	 * 房型全部名称/别名。不能超过60字节<br /> 支持最大长度为：60<br /> 支持的最大列表长度为：60
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
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

	public function getApiMethodName()
	{
		return "taobao.hotel.type.name.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hid,"hid");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
