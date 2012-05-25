<?php
/**
 * TOP API: taobao.hotel.image.upload request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class HotelImageUploadRequest
{
	/** 
	 * 酒店id
	 **/
	private $hid;
	
	/** 
	 * 上传的图片
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
}
