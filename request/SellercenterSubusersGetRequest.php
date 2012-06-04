<?php
/**
 * TOP API: taobao.sellercenter.subusers.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class SellercenterSubusersGetRequest
{
	/** 
	 * 表示卖家昵称
	 **/
	private $nick;
	
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

	public function getApiMethodName()
	{
		return "taobao.sellercenter.subusers.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
}
