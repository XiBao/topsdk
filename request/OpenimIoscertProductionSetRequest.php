<?php
/**
 * TOP API: taobao.openim.ioscert.production.set request
 * 
 * @author auto create
 * @since 1.0, 2015.07.01
 */
class OpenimIoscertProductionSetRequest
{
	/** 
	 * 证书文件内容,base64编码
	 **/
	private $cert;
	
	/** 
	 * 证书密码
	 **/
	private $password;
	
	private $apiParas = array();
	
	public function setCert($cert)
	{
		$this->cert = $cert;
		$this->apiParas["cert"] = $cert;
	}

	public function getCert()
	{
		return $this->cert;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getApiMethodName()
	{
		return "taobao.openim.ioscert.production.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cert,"cert");
		RequestCheckUtil::checkNotNull($this->password,"password");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
