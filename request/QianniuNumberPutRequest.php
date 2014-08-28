<?php
/**
 * TOP API: taobao.qianniu.number.put request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class QianniuNumberPutRequest
{
	/** 
	 * 考虑到稳定性，建议一次卖家最多为200个。
标准json格式的数组构成的字符串。每个元素为{user_id:****,field:"****",value:"****"}分别是用户的userid，数据的名称，以及数据的值。
	 **/
	private $data;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.number.put";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->data,"data");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
