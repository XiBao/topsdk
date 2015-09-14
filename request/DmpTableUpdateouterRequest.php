<?php
/**
 * TOP API: taobao.dmp.table.updateouter request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpTableUpdateouterRequest
{
	/** 
	 * 表的列定义，json格式
	 **/
	private $columns;
	
	/** 
	 * 表名
	 **/
	private $tableCode;
	
	/** 
	 * 淘宝token
	 **/
	private $token;
	
	/** 
	 * 上传数据描述，支持overwrite和append
	 **/
	private $writeModel;
	
	private $apiParas = array();
	
	public function setColumns($columns)
	{
		$this->columns = $columns;
		$this->apiParas["columns"] = $columns;
	}

	public function getColumns()
	{
		return $this->columns;
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

	public function setWriteModel($writeModel)
	{
		$this->writeModel = $writeModel;
		$this->apiParas["write_model"] = $writeModel;
	}

	public function getWriteModel()
	{
		return $this->writeModel;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.table.updateouter";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->columns,"columns");
		RequestCheckUtil::checkNotNull($this->tableCode,"tableCode");
		RequestCheckUtil::checkNotNull($this->token,"token");
		RequestCheckUtil::checkNotNull($this->writeModel,"writeModel");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
