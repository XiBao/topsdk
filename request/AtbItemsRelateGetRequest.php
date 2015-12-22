<?php
/**
 * TOP API: taobao.atb.items.relate.get request
 * 
 * @author auto create
 * @since 1.0, 2014.10.11
 */
class AtbItemsRelateGetRequest
{
	/** 
	 * 分类id.推荐类型为5时cid不能为空。仅支持叶子类目ID，即通过taobao.itemcats.get获取到is_parent=false的cid。
	 **/
	private $cid;
	
	/** 
	 * 需返回的字段列表.可选值:open_iid,title,nick,pic_url,price,click_url,commission,ommission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume;字段之间用","分隔
	 **/
	private $fields;
	
	/** 
	 * 指定返回结果的最大条数.实际返回结果个数根据算法来确定,所以该值会小于或者等于该值
	 **/
	private $maxCount;
	
	/** 
	 * open_iid
	 **/
	private $openIid;
	
	/** 
	 * 推荐类型.  1:同类商品推荐;此时必须得输入num_iid  2:异类商品推荐;此时必须得输入num_iid  3:同店商品推荐;此时必须得输入num_iid  4:店铺热门推荐;此时必须得输入seller_id  5:类目热门推荐;此时必须得输入cid
	 **/
	private $relateType;
	
	/** 
	 * 卖家的用户id.注：推荐类型为4时seller_id不能为空
	 **/
	private $sellerId;
	
	/** 
	 * 店铺类型.默认all,商城:b,集市:c
	 **/
	private $shopType;
	
	/** 
	 * default(默认排序,关联推荐相关度),price_desc(价格从高到低), price_asc(价格从低到高),commissionRate_desc(佣金比率从高到低), commissionRate_asc(佣金比率从低到高), commissionNum_desc(成交量成高到低), commissionNum_asc(成交量从低到高)
	 **/
	private $sort;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setMaxCount($maxCount)
	{
		$this->maxCount = $maxCount;
		$this->apiParas["max_count"] = $maxCount;
	}

	public function getMaxCount()
	{
		return $this->maxCount;
	}

	public function setOpenIid($openIid)
	{
		$this->openIid = $openIid;
		$this->apiParas["open_iid"] = $openIid;
	}

	public function getOpenIid()
	{
		return $this->openIid;
	}

	public function setRelateType($relateType)
	{
		$this->relateType = $relateType;
		$this->apiParas["relate_type"] = $relateType;
	}

	public function getRelateType()
	{
		return $this->relateType;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setShopType($shopType)
	{
		$this->shopType = $shopType;
		$this->apiParas["shop_type"] = $shopType;
	}

	public function getShopType()
	{
		return $this->shopType;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function getApiMethodName()
	{
		return "taobao.atb.items.relate.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->fields,20,"fields");
		RequestCheckUtil::checkNotNull($this->openIid,"openIid");
		RequestCheckUtil::checkNotNull($this->relateType,"relateType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
