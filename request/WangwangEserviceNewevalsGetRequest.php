<?php
/**
 * TOP API: taobao.wangwang.eservice.newevals.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WangwangEserviceNewevalsGetRequest
{
	/** 
	 * 查询登录日志的开始日期，必须按示例的格式，否则会返回错误；
开始时间不能在当前时间30天前，开始时间和结束时间的间隔不能超过7天；
开始时间不能超过当前系统时间
	 **/
	private $btime;
	
	/** 
	 * 查询登录日志的结束时间，必须按示例的格式，否则会返回错误；
结束时间不能小于开始时间，结束时间和开始时间的间隔不能超过7天
	 **/
	private $etime;
	
	/** 
	 * 需要查询登录日志的账号列表，多个id之间用逗号隔开，每次查询的id数不能超过30个
	 **/
	private $queryIds;
	
	private $apiParas = array();
	
	public function setBtime($btime)
	{
		$this->btime = $btime;
		$this->apiParas["btime"] = $btime;
	}

	public function getBtime()
	{
		return $this->btime;
	}

	public function setEtime($etime)
	{
		$this->etime = $etime;
		$this->apiParas["etime"] = $etime;
	}

	public function getEtime()
	{
		return $this->etime;
	}

	public function setQueryIds($queryIds)
	{
		$this->queryIds = $queryIds;
		$this->apiParas["query_ids"] = $queryIds;
	}

	public function getQueryIds()
	{
		return $this->queryIds;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.newevals.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->btime,"btime");
		RequestCheckUtil::checkNotNull($this->etime,"etime");
		RequestCheckUtil::checkNotNull($this->queryIds,"queryIds");
		RequestCheckUtil::checkMaxListSize($this->queryIds,30,"queryIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
