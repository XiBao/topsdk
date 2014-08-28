<?php
/**
 * TOP API: taobao.hotel.image.upload request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class HotelImageUploadRequest
{
	/** 
	 * 酒店id<br /> 支持的最大列表长度为：20
	 **/
	private $hid;
	
	/** 
	 * 上传的图片<br /> 支持的文件类型为：jpg,png,gif<br /> 支持的最大列表长度为：512000
	 **/
	private $pic;
	
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

	public function setPic($pic)
	{
		$this->pic = $pic;
		$this->apiParas["pic"] = $pic;
	}

	public function getPic()
	{
		return $this->pic;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.image.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hid,"hid");
		RequestCheckUtil::checkNotNull($this->pic,"pic");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
