<?php
/**
 * TOP API: taobao.tae.item.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2015.08.04
 */
class TaeItemDetailGetRequest
{
	/** 
	 * 用户所在位置ip
	 **/
	private $buyerIp;
	
	/** 
	 * 区块信息，field 支持 itemInfo,priceInfo,skuInfo,stockInfo,rateInfo,descInfo,sellerInfo,mobileDescInfo,deliveryInfo,storeInfo,itemBuyInfo,couponInfo
	 **/
	private $fields;
	
	/** 
	 * 商品open_iid
	 **/
	private $id;
	
	/** 
	 * 商品open_iid
	 **/
	private $openIid;
	
	private $apiParas = array();
	
	public function setBuyerIp($buyerIp)
	{
		$this->buyerIp = $buyerIp;
		$this->apiParas["buyer_ip"] = $buyerIp;
	}

	public function getBuyerIp()
	{
		return $this->buyerIp;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setOpenIid($openIid)
	{
		$this->openIid = $openIid;
		$this->apiParas["open_iid"] = $openIid;
	}

	public function getOpenIid()
	{
		return $this->openIid;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.item.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
