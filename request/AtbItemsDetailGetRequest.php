<?php
/**
 * TOP API: taobao.atb.items.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2014.10.11
 */
class AtbItemsDetailGetRequest
{
	/** 
	 * 需返回的字段列表.可选值:AitaobaoItemDetail淘宝客商品结构体中的所有字段;字段之间用","分隔。item_detail需要设置到Item模型下的字段,如设置:open_iid,detail_url等; 只设置item_detail,则不返回的Item下的所有信息.注：item结构中的skus、videos、props_name不返回
	 **/
	private $fields;
	
	/** 
	 * open_iid串.最大输入10个.格式如:"value1,value2,value3" 用" , "号分隔
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
		return "taobao.atb.items.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->fields,200,"fields");
		RequestCheckUtil::checkNotNull($this->openIids,"openIids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
