<?php
/**
 * TOP API: taobao.weitao.feed.isrelation request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WeitaoFeedIsrelationRequest
{
	/** 
	 * 要查询的粉丝的淘宝昵称
	 **/
	private $fansNick;
	
	/** 
	 * 要查询的公共账号的淘宝昵称
	 **/
	private $sellerNick;
	
	private $apiParas = array();
	
	public function setFansNick($fansNick)
	{
		$this->fansNick = $fansNick;
		$this->apiParas["fans_nick"] = $fansNick;
	}

	public function getFansNick()
	{
		return $this->fansNick;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.feed.isrelation";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fansNick,"fansNick");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
