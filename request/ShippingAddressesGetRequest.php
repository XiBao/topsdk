<?php
/**
 * TOP API: taobao.shipping.addresses.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.21
 */
class ShippingAddressesGetRequest
{
	/** 
	 * 需返回的字段列表，目前支持有：address_id, receiver_name, phone, mobile, is_default, location.address, location.zip, location.city, location.district,location.state
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.shipping.addresses.get";
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
