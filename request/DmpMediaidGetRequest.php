<?php
/**
 * TOP API: taobao.dmp.mediaid.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpMediaidGetRequest
{
	/** 
	 * 是否加密，目前仅支持不加密数据传入
	 **/
	private $encrypt;
	
	/** 
	 * 可传入多个ID,逗号分隔
	 **/
	private $ids;
	
	/** 
	 * 支持idfa, mac, imei
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setEncrypt($encrypt)
	{
		$this->encrypt = $encrypt;
		$this->apiParas["encrypt"] = $encrypt;
	}

	public function getEncrypt()
	{
		return $this->encrypt;
	}

	public function setIds($ids)
	{
		$this->ids = $ids;
		$this->apiParas["ids"] = $ids;
	}

	public function getIds()
	{
		return $this->ids;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.mediaid.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ids,"ids");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
