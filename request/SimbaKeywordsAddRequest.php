<?php
/**
 * TOP API: taobao.simba.keywords.add request
 * 
 * @author auto create
 * @since 1.0, 2013-02-22 16:36:25
 */
class SimbaKeywordsAddRequest
{
	/** 
	 * 推广组id
	 **/
	private $adgroupId;
	
	/** 
	 * 关键词，出价字符串和匹配方式字符串数组，最多100个;每个字符串：word+  ”^^”+price+”^^”+matchscope,
Price是整数，以“分”为单位，不能小于5，不能大于日限额; 
price为0则设置为使用默认出价；
matchscope只能是1,2,4（1代表精确匹配，2代表子串匹配，4代表广泛匹配）可不传。
关键词不能包含字符”^^”和 ”,”
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
		RequestCheckUtil::checkMaxListSize($this->keywordPrices,100,"keywordPrices");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
