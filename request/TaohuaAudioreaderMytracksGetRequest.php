<?php
/**
 * TOP API: taobao.taohua.audioreader.mytracks.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TaohuaAudioreaderMytracksGetRequest
{
	/** 
	 * 当前页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页个数
	 **/
	private $pageSize;
	
	/** 
	 * 购买专辑的序列ID
	 **/
	private $serialId;
	
	private $apiParas = array();
	
	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setSerialId($serialId)
	{
		$this->serialId = $serialId;
		$this->apiParas["serial_id"] = $serialId;
	}

	public function getSerialId()
	{
		return $this->serialId;
	}

	public function getApiMethodName()
	{
		return "taobao.taohua.audioreader.mytracks.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageNo,100,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->serialId,"serialId");
	}
}
