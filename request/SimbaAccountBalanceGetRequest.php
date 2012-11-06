<?php
/**
 * TOP API: taobao.simba.account.balance.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class SimbaAccountBalanceGetRequest
{
	/** 
	 * 主人昵称
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
		return "taobao.simba.account.balance.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
}
