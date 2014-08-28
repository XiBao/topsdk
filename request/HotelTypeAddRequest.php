<?php
/**
 * TOP API: taobao.hotel.type.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class HotelTypeAddRequest
{
	/** 
	 * 酒店id。必须为数字<br /> 支持最小值为：0
	 **/
	private $hid;
	
	/** 
	 * 房型名称。长度不能超过30<br /> 支持最大长度为：30<br /> 支持的最大列表长度为：30
	 **/
	private $name;
	
	/** 
	 * 接入卖家数据主键,格式为“接入方酒店id-接入方房型id”<br /> 支持最大长度为：100<br /> 支持的最大列表长度为：100
	 **/
	private $siteParam;
	
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

	public function setSiteParam($siteParam)
	{
		$this->siteParam = $siteParam;
		$this->apiParas["site_param"] = $siteParam;
	}

	public function getSiteParam()
	{
		return $this->siteParam;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.type.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hid,"hid");
		RequestCheckUtil::checkMinValue($this->hid,0,"hid");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,30,"name");
		RequestCheckUtil::checkMaxLength($this->siteParam,100,"siteParam");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
