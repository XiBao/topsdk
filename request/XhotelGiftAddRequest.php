<?php
/**
 * TOP API: taobao.xhotel.gift.add request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelGiftAddRequest
{
	/** 
	 * 礼包描述
	 **/
	private $desc;
	
	/** 
	 * 结束日期
	 **/
	private $endTime;
	
	/** 
	 * 礼包名称
	 **/
	private $name;
	
	/** 
	 * 生效日期
	 **/
	private $startTime;
	
	/** 
	 * status 1：开启（默认）
2：关闭
	 **/
	private $status;
	
	/** 
	 * 礼包日期类型 1.预订日期2.入住日期
	 **/
	private $timeType;
	
	private $apiParas = array();
	
	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTimeType($timeType)
	{
		$this->timeType = $timeType;
		$this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType()
	{
		return $this->timeType;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.gift.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,300,"desc");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->timeType,"timeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
