<?php
/**
 * TOP API: taobao.dmp.crowd.validdate.update request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpCrowdValiddateUpdateRequest
{
	/** 
	 * 人群ID
	 **/
	private $crowdId;
	
	/** 
	 * 人群有效期
	 **/
	private $validDate;
	
	private $apiParas = array();
	
	public function setCrowdId($crowdId)
	{
		$this->crowdId = $crowdId;
		$this->apiParas["crowd_id"] = $crowdId;
	}

	public function getCrowdId()
	{
		return $this->crowdId;
	}

	public function setValidDate($validDate)
	{
		$this->validDate = $validDate;
		$this->apiParas["valid_date"] = $validDate;
	}

	public function getValidDate()
	{
		return $this->validDate;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.crowd.validdate.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->crowdId,"crowdId");
		RequestCheckUtil::checkNotNull($this->validDate,"validDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
