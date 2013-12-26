<?php
/**
 * TOP API: taobao.clouddata.mbp.data.flowback request
 * 
 * @author auto create
 * @since 1.0, 2013-02-22 16:36:25
 */
class TaobaoClouddataMbpDataFlowbackRequest
{
    private $tableName;
    private $data;
	
	public function setTableName($tableName)
	{
		$this->tableName = $tableName;
		$this->apiParas["table_name"] = $tableName;
	}

	public function getTableName()
	{
		return $this->tableName;
	}

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
		return "taobao.clouddata.mbp.data.flowback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
