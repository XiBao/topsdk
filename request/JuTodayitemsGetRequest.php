<?php
/**
 * TOP API: taobao.ju.todayitems.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class JuTodayitemsGetRequest
{
	/** 
	 * 代表需要返回的商品对象字段。可选值：ItemData商品结构体中所有字段均可返回；多个字段用","分隔。如果fields为空，或者不传该参数，就默认获得所有的字段
	 **/
	private $fields;
	
	/** 
	 * IPHONE,WAP,ANDROID,SINA,163 各种终端类型
	 **/
	private $terminalType;
	
	/** 
	 * 终端的唯一标识，web可以用cookie，手机使用手机号码等，确保唯一性即可，用于分配商品组
	 **/
	private $uuid;
	
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

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
		$this->apiParas["terminal_type"] = $terminalType;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setUuid($uuid)
	{
		$this->uuid = $uuid;
		$this->apiParas["uuid"] = $uuid;
	}

	public function getUuid()
	{
		return $this->uuid;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.todayitems.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->terminalType,"terminalType");
		RequestCheckUtil::checkNotNull($this->uuid,"uuid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
