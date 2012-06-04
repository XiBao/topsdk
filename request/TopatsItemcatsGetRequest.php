<?php
/**
 * TOP API: taobao.topats.itemcats.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TopatsItemcatsGetRequest
{
	/** 
	 * 商品所属类目ID列表，用半角分号(;)分隔 例如:(18957;19562)。最多可传10个一级类目cid，如果是其他级类目cid，直接忽略
	 **/
	private $cids;
	
	/** 
	 * 输出格式以csv 格式输出基础类目数据或者以json方式输出类目树
	 **/
	private $outputFormat;
	
	/** 
	 * 下载此类目的卖家类型。
不传默认值视为C卖家
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

	public function setOutputFormat($outputFormat)
	{
		$this->outputFormat = $outputFormat;
		$this->apiParas["output_format"] = $outputFormat;
	}

	public function getOutputFormat()
	{
		return $this->outputFormat;
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
		return "taobao.topats.itemcats.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cids,"cids");
		RequestCheckUtil::checkNotNull($this->outputFormat,"outputFormat");
	}
}
