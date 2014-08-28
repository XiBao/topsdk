<?php
/**
 * TOP API: taobao.qt.reports.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class QtReportsGetRequest
{
	/** 
	 * 查询时间段的结束时间
	 **/
	private $endTime;
	
	/** 
	 * 送检者昵称
	 **/
	private $nick;
	
	/** 
	 * 质检类型，目前只支持查询qt_type=11的类型
	 **/
	private $qtType;
	
	/** 
	 * 收费项code
	 **/
	private $servcieItemCode;
	
	/** 
	 * 质检服务商名<br /> 支持最大长度为：50<br /> 支持的最大列表长度为：50
	 **/
	private $spName;
	
	/** 
	 * 查询时间段的开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setQtType($qtType)
	{
		$this->qtType = $qtType;
		$this->apiParas["qt_type"] = $qtType;
	}

	public function getQtType()
	{
		return $this->qtType;
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

	public function setSpName($spName)
	{
		$this->spName = $spName;
		$this->apiParas["sp_name"] = $spName;
	}

	public function getSpName()
	{
		return $this->spName;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.qt.reports.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->qtType,"qtType");
		RequestCheckUtil::checkNotNull($this->servcieItemCode,"servcieItemCode");
		RequestCheckUtil::checkNotNull($this->spName,"spName");
		RequestCheckUtil::checkMaxLength($this->spName,50,"spName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
