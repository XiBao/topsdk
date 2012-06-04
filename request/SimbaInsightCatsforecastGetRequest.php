<?php
/**
 * TOP API: taobao.simba.insight.catsforecast.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class SimbaInsightCatsforecastGetRequest
{
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 查询词数组，最大长度200
	 **/
	private $words;
	
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

	public function setWords($words)
	{
		$this->words = $words;
		$this->apiParas["words"] = $words;
	}

	public function getWords()
	{
		return $this->words;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.insight.catsforecast.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->words,"words");
		RequestCheckUtil::checkMaxListSize($this->words,200,"words");
	}
}
