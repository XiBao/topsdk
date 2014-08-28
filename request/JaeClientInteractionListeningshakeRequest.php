<?php
/**
 * TOP API: taobao.jae.client.interaction.listeningshake request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class JaeClientInteractionListeningshakeRequest
{
	/** 
	 * 失败回调函数
	 **/
	private $failure;
	
	/** 
	 * 用户参数
	 **/
	private $option;
	
	private $apiParas = array();
	
	public function setFailure($failure)
	{
		$this->failure = $failure;
		$this->apiParas["failure"] = $failure;
	}

	public function getFailure()
	{
		return $this->failure;
	}

	public function setOption($option)
	{
		$this->option = $option;
		$this->apiParas["option"] = $option;
	}

	public function getOption()
	{
		return $this->option;
	}

	public function getApiMethodName()
	{
		return "taobao.jae.client.interaction.listeningshake";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->failure,"failure");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
