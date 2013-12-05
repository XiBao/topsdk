<?php
/**
 * TOP API: taobao.tbk.mobile.shops.convert request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class TbkMobileShopsConvertRequest
{
	/** 
	 * 需返回的字段列表.可选值:click_url.
	 **/
	private $fields;
	
	/** 
	 * 自定义输入串.格式:英文和数字组成;长度不能大于12个字符,区分不同的推广渠道,如:bbs,表示bbs为推广渠道;blog,表示blog为推广渠道.
	 **/
	private $outerCode;
	
	/** 
	 * 卖家昵称串.最大输入10个.格式如:"value1,value2,value3" 用" , "号分隔。
注意：sids和seller_nicks两个参数任意必须输入一个，如果同时输入，则以seller_nicks为准
	 **/
	private $sellerNicks;
	
	/** 
	 * 店铺id串.最大输入10个.格式如:"value1,value2,value3" 用" , "号分隔店铺id.
注意：sids和seller_nicks两个参数任意必须输入一个，如果同时输入，则以seller_nicks为准
	 **/
	private $sids;
	
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

	public function setOuterCode($outerCode)
	{
		$this->outerCode = $outerCode;
		$this->apiParas["outer_code"] = $outerCode;
	}

	public function getOuterCode()
	{
		return $this->outerCode;
	}

	public function setSellerNicks($sellerNicks)
	{
		$this->sellerNicks = $sellerNicks;
		$this->apiParas["seller_nicks"] = $sellerNicks;
	}

	public function getSellerNicks()
	{
		return $this->sellerNicks;
	}

	public function setSids($sids)
	{
		$this->sids = $sids;
		$this->apiParas["sids"] = $sids;
	}

	public function getSids()
	{
		return $this->sids;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.mobile.shops.convert";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->sellerNicks,10,"sellerNicks");
		RequestCheckUtil::checkMaxListSize($this->sids,10,"sids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
