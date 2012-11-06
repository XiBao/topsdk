<?php
/**
 * TOP API: taobao.itemcats.increment.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class ItemcatsIncrementGetRequest
{
	/** 
	 * 一级类目ID列表，用半角逗号(,)分隔，例如:"16,19562"，一次最多可以获取10个类目的增量数据。
	 **/
	private $cids;
	
	/** 
	 * 要获取最近哪一天的增量类目数据，可选值为：1~7。默认值为1，表示获取昨天发生变更的类目数据。
	 **/
	private $days;
	
	/** 
	 * 卖家类型，可选值：C, B。不传默认值视为C卖家。
	 **/
	private $sellerType;
	
	private $apiParas = array();
	
	public function setCids($cids)
	{
		$this->cids = $cids;
		$this->apiParas["cids"] = $cids;
	}

	public function getCids()
	{
		return $this->cids;
	}

	public function setDays($days)
	{
		$this->days = $days;
		$this->apiParas["days"] = $days;
	}

	public function getDays()
	{
		return $this->days;
	}

	public function setSellerType($sellerType)
	{
		$this->sellerType = $sellerType;
		$this->apiParas["seller_type"] = $sellerType;
	}

	public function getSellerType()
	{
		return $this->sellerType;
	}

	public function getApiMethodName()
	{
		return "taobao.itemcats.increment.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cids,"cids");
		RequestCheckUtil::checkMaxListSize($this->cids,1000,"cids");
		RequestCheckUtil::checkMaxValue($this->days,7,"days");
		RequestCheckUtil::checkMinValue($this->days,1,"days");
	}
}
