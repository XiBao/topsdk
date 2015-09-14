<?php
/**
 * TOP API: taobao.dmp.table.enduploadouter request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpTableEnduploadouterRequest
{
	/** 
	 * 上传是否成功
	 **/
	private $isSuccess;
	
	/** 
	 * 表名
	 **/
	private $tableCode;
	
	/** 
	 * 用户淘宝token
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setIsSuccess($isSuccess)
	{
		$this->isSuccess = $isSuccess;
		$this->apiParas["is_success"] = $isSuccess;
	}

	public function getIsSuccess()
	{
		return $this->isSuccess;
	}

	public function setTableCode($tableCode)
	{
		$this->tableCode = $tableCode;
		$this->apiParas["table_code"] = $tableCode;
	}

	public function getTableCode()
	{
		return $this->tableCode;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.table.enduploadouter";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isSuccess,"isSuccess");
		RequestCheckUtil::checkNotNull($this->tableCode,"tableCode");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
