<?php
/**
 * TOP API: taobao.simba.keyword.rankingforecast.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class SimbaKeywordRankingforecastGetRequest
{
	/** 
	 * 关键词Id列表，最多支持1个
	 **/
	private $keywordIds;
	
	/** 
	 * 经典名表行
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setKeywordIds($keywordIds)
	{
		$this->keywordIds = $keywordIds;
		$this->apiParas["keyword_ids"] = $keywordIds;
	}

	public function getKeywordIds()
	{
		return $this->keywordIds;
	}

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
		return "taobao.simba.keyword.rankingforecast.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->keywordIds,"keywordIds");
		RequestCheckUtil::checkMaxListSize($this->keywordIds,1,"keywordIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
