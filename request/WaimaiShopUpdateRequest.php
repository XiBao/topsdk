<?php
/**
 * TOP API: taobao.waimai.shop.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WaimaiShopUpdateRequest
{
	/** 
	 * 店铺地址
	 **/
	private $address;
	
	/** 
	 * 外卖店名称
	 **/
	private $name;
	
	/** 
	 * 店铺电话号码
	 **/
	private $phone;
	
	/** 
	 * 店铺标志

注意：这里传递的图片url是通过taobao.waimai.item.pic.upload接口上传获得的
	 **/
	private $picUrl;
	
	/** 
	 * 店铺坐标x
注意：这里是大坐标，即是乘以100000后的值
	 **/
	private $posx;
	
	/** 
	 * 店铺坐标y
注意：这里是大坐标，即是乘以100000后的值
	 **/
	private $posy;
	
	/** 
	 * 外卖店铺id
	 **/
	private $shopid;
	
	/** 
	 * 店铺与ISV的关联关系
	 **/
	private $shopoutid;
	
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

	public function setPicUrl($picUrl)
	{
		$this->picUrl = $picUrl;
		$this->apiParas["pic_url"] = $picUrl;
	}

	public function getPicUrl()
	{
		return $this->picUrl;
	}

	public function setPosx($posx)
	{
		$this->posx = $posx;
		$this->apiParas["posx"] = $posx;
	}

	public function getPosx()
	{
		return $this->posx;
	}

	public function setPosy($posy)
	{
		$this->posy = $posy;
		$this->apiParas["posy"] = $posy;
	}

	public function getPosy()
	{
		return $this->posy;
	}

	public function setShopid($shopid)
	{
		$this->shopid = $shopid;
		$this->apiParas["shopid"] = $shopid;
	}

	public function getShopid()
	{
		return $this->shopid;
	}

	public function setShopoutid($shopoutid)
	{
		$this->shopoutid = $shopoutid;
		$this->apiParas["shopoutid"] = $shopoutid;
	}

	public function getShopoutid()
	{
		return $this->shopoutid;
	}

	public function getApiMethodName()
	{
		return "taobao.waimai.shop.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->address,"address");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->phone,"phone");
		RequestCheckUtil::checkNotNull($this->posx,"posx");
		RequestCheckUtil::checkNotNull($this->posy,"posy");
		RequestCheckUtil::checkNotNull($this->shopid,"shopid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
