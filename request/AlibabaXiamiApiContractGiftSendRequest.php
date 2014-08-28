<?php
/**
 * TOP API: alibaba.xiami.api.contract.gift.send request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaXiamiApiContractGiftSendRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 来源，可以传isv的应用名称，用来区分不同的isv
	 **/
	private $comefrom;
	
	/** 
	 * 关联订单ID，必须保证唯一，可以传时间戳或者isv赠送详情表的主键ID
	 **/
	private $orderId;
	
	/** 
	 * 关联信息ID，用来关联该礼包是isv的哪次赠送，建议传isv赠送详情表的主键ID
	 **/
	private $relationId;
	
	/** 
	 * 店铺ID
	 **/
	private $shopId;
	
	/** 
	 * 礼包类型
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setComefrom($comefrom)
	{
		$this->comefrom = $comefrom;
		$this->apiParas["comefrom"] = $comefrom;
	}

	public function getComefrom()
	{
		return $this->comefrom;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alibaba.xiami.api.contract.gift.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->comefrom,"comefrom");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->relationId,"relationId");
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
