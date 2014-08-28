<?php
/**
 * TOP API: taobao.ts.subscribe.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TsSubscribeGetRequest
{
	/** 
	 * 订购用户昵称<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $nick;
	
	/** 
	 * 服务收费项code<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $servcieItemCode;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setServcieItemCode($servcieItemCode)
	{
		$this->servcieItemCode = $servcieItemCode;
		$this->apiParas["servcie_item_code"] = $servcieItemCode;
	}

	public function getServcieItemCode()
	{
		return $this->servcieItemCode;
	}

	public function getApiMethodName()
	{
		return "taobao.ts.subscribe.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxLength($this->nick,32,"nick");
		RequestCheckUtil::checkNotNull($this->servcieItemCode,"servcieItemCode");
		RequestCheckUtil::checkMaxLength($this->servcieItemCode,64,"servcieItemCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
