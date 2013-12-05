<?php
/**
 * TOP API: taobao.inventory.authorize.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class InventoryAuthorizeUpdateRequest
{
	/** 
	 * 库存授权配额编码
	 **/
	private $authorizeCode;
	
	/** 
	 * 期望更新后的配额账户库存数(全量覆盖)
	 **/
	private $quantity;
	
	/** 
	 * 后端商品id
	 **/
	private $scItemId;
	
	private $apiParas = array();
	
	public function setAuthorizeCode($authorizeCode)
	{
		$this->authorizeCode = $authorizeCode;
		$this->apiParas["authorize_code"] = $authorizeCode;
	}

	public function getAuthorizeCode()
	{
		return $this->authorizeCode;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setScItemId($scItemId)
	{
		$this->scItemId = $scItemId;
		$this->apiParas["sc_item_id"] = $scItemId;
	}

	public function getScItemId()
	{
		return $this->scItemId;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.authorize.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->authorizeCode,"authorizeCode");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkNotNull($this->scItemId,"scItemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
