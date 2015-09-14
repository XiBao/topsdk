<?php
/**
 * TOP API: taobao.dmp.table.createouter request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpTableCreateouterRequest
{
	/** 
	 * 列定义json格式
	 **/
	private $columns;
	
	/** 
	 * 表名
	 **/
	private $tablename;
	
	/** 
	 * 淘宝token
	 **/
	private $token;
	
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

	public function setTablename($tablename)
	{
		$this->tablename = $tablename;
		$this->apiParas["tablename"] = $tablename;
	}

	public function getTablename()
	{
		return $this->tablename;
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
		return "taobao.dmp.table.createouter";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->columns,"columns");
		RequestCheckUtil::checkNotNull($this->tablename,"tablename");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
