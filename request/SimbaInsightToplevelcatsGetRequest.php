<?php
/**
 * TOP API: taobao.simba.insight.toplevelcats.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
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
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
