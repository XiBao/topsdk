<?php
/**
 * TOP API: taobao.topats.jushita.jdp.datadelete request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class TopatsJushitaJdpDatadeleteRequest
{
	/** 
	 * 删除数据时间段的结束修改时间，格式为：yyyy-MM-dd HH:mm:ss，结束时间必须为前天的23:59:59秒以前，根据是业务的modified时间
	 **/
	private $endModified;
	
	/** 
	 * 删除数据时间段的起始修改时间，格式为：yyyy-MM-dd HH:mm:ss,根据是业务的modified时间
	 **/
	private $startModified;
	
	/** 
	 * 推送的数据类型，可选值为：tb_trade(淘宝交易)，tb_item(淘宝商品)，tb_refund(淘宝退款)，fx_trade(分销订单)，tm_refund(天猫退款)，同时删除多种类型以分号分隔，如："tb_trade;tb_item;tb_refund;fx_trade;tm_refund"
	 **/
	private $syncType;
	
	/** 
	 * 用户昵称，不填表示删除所有用户的数据。
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function setSyncType($syncType)
	{
		$this->syncType = $syncType;
		$this->apiParas["sync_type"] = $syncType;
	}

	public function getSyncType()
	{
		return $this->syncType;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.jushita.jdp.datadelete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endModified,"endModified");
		RequestCheckUtil::checkNotNull($this->startModified,"startModified");
		RequestCheckUtil::checkNotNull($this->syncType,"syncType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
