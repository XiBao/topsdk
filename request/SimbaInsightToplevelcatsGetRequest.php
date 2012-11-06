<?php
/**
 * TOP API: taobao.simba.insight.toplevelcats.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class SimbaInsightToplevelcatsGetRequest
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
		return "taobao.simba.insight.toplevelcats.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
}
