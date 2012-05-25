<?php
/**
 * TOP API: taobao.logistics.trace.search request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class LogisticsTraceSearchRequest
{
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 淘宝交易号，请勿传非淘宝交易号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.trace.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
}
