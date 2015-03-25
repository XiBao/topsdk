<?php
/**
 * TOP API: taobao.zuanshi.advertiser.account.rpts.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.25
 */
class ZuanshiAdvertiserAccountRptsGetRequest
{
	/** 
	 * 查询结束时间
	 **/
	private $endTime;
	
	/** 
	 * null代表所有计划类型整体报表，1代表展示网络计划，2代表明星店铺计划，3代表视频网络计划
	 **/
	private $rptType;
	
	/** 
	 * 查询开始时间
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

	public function setRptType($rptType)
	{
		$this->rptType = $rptType;
		$this->apiParas["rpt_type"] = $rptType;
	}

	public function getRptType()
	{
		return $this->rptType;
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
		return "taobao.zuanshi.advertiser.account.rpts.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
