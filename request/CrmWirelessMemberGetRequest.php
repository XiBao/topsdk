<?php
/**
 * TOP API: taobao.crm.wireless.member.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class CrmWirelessMemberGetRequest
{
	/** 
	 * 买家nick
	 **/
	private $buyerNick;
	
	/** 
	 * 0：所有无线未下单 1：主客登录未下单
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
		return "taobao.crm.wireless.member.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
