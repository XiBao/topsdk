<?php
/**
 * TOP API: taobao.fenxiao.grade.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class FenxiaoGradeDeleteRequest
{
	/** 
	 * 等级ID
	 **/
	private $gradeId;
	
	private $apiParas = array();
	
	public function setGradeId($gradeId)
	{
		$this->gradeId = $gradeId;
		$this->apiParas["grade_id"] = $gradeId;
	}

	public function getGradeId()
	{
		return $this->gradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.grade.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->gradeId,"gradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
