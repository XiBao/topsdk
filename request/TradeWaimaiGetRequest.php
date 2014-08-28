<?php
/**
 * TOP API: taobao.trade.waimai.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TradeWaimaiGetRequest
{
	/** 
	 * true-查询仅按商家维度
false-查询按商家下所属店铺维度
	 **/
	private $isAll;
	
	/** 
	 * 返回记录数，超过20按20条返回数据<br /> 支持最大值为：20<br /> 支持最小值为：1
	 **/
	private $maxSize;
	
	/** 
	 * 外卖分店ID
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setIsAll($isAll)
	{
		$this->isAll = $isAll;
		$this->apiParas["is_all"] = $isAll;
	}

	public function getIsAll()
	{
		return $this->isAll;
	}

	public function setMaxSize($maxSize)
	{
		$this->maxSize = $maxSize;
		$this->apiParas["max_size"] = $maxSize;
	}

	public function getMaxSize()
	{
		return $this->maxSize;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.waimai.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isAll,"isAll");
		RequestCheckUtil::checkNotNull($this->maxSize,"maxSize");
		RequestCheckUtil::checkMaxValue($this->maxSize,20,"maxSize");
		RequestCheckUtil::checkMinValue($this->maxSize,1,"maxSize");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
