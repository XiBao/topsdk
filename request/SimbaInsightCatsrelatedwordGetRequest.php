<?php
/**
 * TOP API: taobao.simba.insight.catsrelatedword.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class SimbaInsightCatsrelatedwordGetRequest
{
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 最大返回数量(1-10)
	 **/
	private $resultNum;
	
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

	public function setResultNum($resultNum)
	{
		$this->resultNum = $resultNum;
		$this->apiParas["result_num"] = $resultNum;
	}

	public function getResultNum()
	{
		return $this->resultNum;
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
		return "taobao.simba.insight.catsrelatedword.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->resultNum,"resultNum");
		RequestCheckUtil::checkMaxValue($this->resultNum,10,"resultNum");
		RequestCheckUtil::checkMinValue($this->resultNum,1,"resultNum");
		RequestCheckUtil::checkNotNull($this->words,"words");
		RequestCheckUtil::checkMaxListSize($this->words,200,"words");
	}
}
