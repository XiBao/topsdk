<?php
/**
 * TOP API: taobao.taobaoke.rebate.authorize.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class TaobaokeRebateAuthorizeGetRequest
{
	/** 
	 * 卖家淘宝会员昵称.注：指的是淘宝的会员登录名
	 **/
	private $nick;
	
	/** 
	 * 商品数字ID
	 **/
	private $numIid;
	
	/** 
	 * 卖家淘宝会员数字ID.
	 **/
	private $sellerId;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.rebate.authorize.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
