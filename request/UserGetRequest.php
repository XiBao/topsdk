<?php
/**
 * TOP API: taobao.user.get request
 * 
 * @author auto create
 * @since 1.0, 2015.12.07
 */
class UserGetRequest
{
	/** 
	 * 需返回的字段列表，可选值为返回值中看得到的所有字段。
	 **/
	private $fields;
	
	/** 
	 * 用户昵称，session和nick必须传其中一个（其中nick优先），传入nick只能获取用户公开信息，传入session可以获取用户隐私信息
	 **/
	private $nick;
	
	/** 
	 * 指定哪个入参是混淆入参
	 **/
	private $topMixParams;
	
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setTopMixParams($topMixParams)
	{
		$this->topMixParams = $topMixParams;
		$this->apiParas["top_mix_params"] = $topMixParams;
	}

	public function getTopMixParams()
	{
		return $this->topMixParams;
	}

	public function getApiMethodName()
	{
		return "taobao.user.get";
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
