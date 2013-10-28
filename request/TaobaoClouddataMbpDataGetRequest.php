<?php
/**
 * TOP API: taobao.clouddata.mbp.data.get request
 * 
 * @author auto create
 * @since 1.0, 2013-02-22 16:36:25
 */
class TaobaoClouddataMbpDataGetRequest
{
    private $sqlId;
    private $parameter;
	
	public function setSqlId($sqlId)
	{
		$this->sqlId = $sqlId;
		$this->apiParas["sql_id"] = $sqlId;
	}

	public function getSqlId()
	{
		return $this->sqlId;
	}

	public function setParameter($parameter)
	{
		$this->parameter = $parameter;
		$this->apiParas["parameter"] = $parameter;
	}

	public function getParameter()
	{
		return $this->parameter;
    }

    public function getApiMethodName()
	{
		return "taobao.clouddata.mbp.data.get";
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
