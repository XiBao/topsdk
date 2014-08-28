<?php
/**
 * TOP API: taobao.dd.auction.rule.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class DdAuctionRuleDeleteRequest
{
	/** 
	 * 规则ID
	 **/
	private $id;
	
	/** 
	 * 是否是外卖
	 **/
	private $isTakeout;
	
	/** 
	 * 店铺id
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setIsTakeout($isTakeout)
	{
		$this->isTakeout = $isTakeout;
		$this->apiParas["is_takeout"] = $isTakeout;
	}

	public function getIsTakeout()
	{
		return $this->isTakeout;
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
		return "taobao.dd.auction.rule.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->isTakeout,"isTakeout");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
