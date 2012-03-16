<?php
/**
 * TOP API: taobao.simba.keywords.price.set request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class SimbaKeywordsPriceSetRequest
{
	/** 
	 * 推广组Id
	 **/
	private $adgroupId;
	
	/** 
	 * 关键词Id和出价字符串
数组，最多200个;
每个字符串：keywordId+  ”^^”+price；
Price是整数，以“分”为单位，不能小于5，不能大于日限额; 如果该词为无展现词，出价需要大于原来出价，才会生效。
price为0则设置为使用默认出价
	 **/
	private $keywordidPrices;
	
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

	public function setKeywordidPrices($keywordidPrices)
	{
		$this->keywordidPrices = $keywordidPrices;
		$this->apiParas["keywordid_prices"] = $keywordidPrices;
	}

	public function getKeywordidPrices()
	{
		return $this->keywordidPrices;
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
		return "taobao.simba.keywords.price.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->keywordidPrices,"keywordidPrices");
		RequestCheckUtil::checkMaxListSize($this->keywordidPrices,200,"keywordidPrices");
	}
}
