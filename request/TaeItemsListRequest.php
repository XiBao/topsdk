<?php
/**
 * TOP API: taobao.tae.items.list request
 * 
 * @author auto create
 * @since 1.0, 2015.07.20
 */
class TaeItemsListRequest
{
	/** 
	 * 返回值中需要的字段. 可选值 title,nick,pic_url,location,cid,price,post_fee,promoted_service,ju,shop_name字段间用 (,) 逗号分隔
	 **/
	private $fields;
	
	/** 
	 * 商品ID，英文逗号(,)分隔，最多50个。优先级低于open_iid，open_iids存在的话，则忽略本参数
	 **/
	private $numIids;
	
	/** 
	 * 商品混淆ID，英文逗号(,)分隔，最多50个。优先级高于open_iid，本参数存在的话，则忽略num_iids
	 **/
	private $openIids;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
	}

	public function setOpenIids($openIids)
	{
		$this->openIids = $openIids;
		$this->apiParas["open_iids"] = $openIids;
	}

	public function getOpenIids()
	{
		return $this->openIids;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.items.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
