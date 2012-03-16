<?php
/**
 * TOP API: taobao.simba.keywords.add request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class SimbaKeywordsAddRequest
{
	/** 
	 * 推广组id
	 **/
	private $adgroupId;
	
	/** 
	 * 关键词和出价字符串数组，最多200个；
每个字符串由word+”^^”+price组成；关键词出价单位为分，不能小于5，不能大于日限额; price为0则设置为使用默认出价； 关键词不能包含字符”^^”和 ”,”
	 **/
	private $keywordPrices;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

	public function setKeywordPrices($keywordPrices)
	{
		$this->keywordPrices = $keywordPrices;
		$this->apiParas["keyword_prices"] = $keywordPrices;
	}

	public function getKeywordPrices()
	{
		return $this->keywordPrices;
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
		return "taobao.simba.keywords.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->keywordPrices,"keywordPrices");
		RequestCheckUtil::checkMaxListSize($this->keywordPrices,200,"keywordPrices");
	}
}
