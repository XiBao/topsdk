<?php
/**
 * TOP API: taobao.simba.keywords.price.set request
 * 
 * @author auto create
 * @since 1.0, 2013-02-22 16:36:25
 */
class SimbaKeywordsPriceSetRequest
{
	/** 
	 * 推广组Id（暂时无用，为了兼容新老接口暂时保留）
	 **/
	private $adgroupId;
	
	/** 
	 * 关键词Id出价字符串和匹配方式字符串数组，最多100个;
每个字符串：keywordId+  ”^^”+price+”^^”+matchscope；
Price是整数，以“分”为单位，不能小于5，不能大于日限额; 如果该词为无展现词，出价需要大于原来出价，才会生效。
price为0则设置为使用默认出价；
matchscope只能是1,2,4 (1代表精确匹配，2代表子串匹配，4代表广泛匹配) 可不传
例如102232^^85，102231^^82^^4
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
		
		RequestCheckUtil::checkNotNull($this->keywordidPrices,"keywordidPrices");
		RequestCheckUtil::checkMaxListSize($this->keywordidPrices,100,"keywordidPrices");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
