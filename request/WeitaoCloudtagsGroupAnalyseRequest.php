<?php
/**
 * TOP API: taobao.weitao.cloudtags.group.analyse request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WeitaoCloudtagsGroupAnalyseRequest
{
	/** 
	 * 透视的sql
	 **/
	private $analyzeExpression;
	
	/** 
	 * 分组sql信息
	 **/
	private $groupExpression;
	
	private $apiParas = array();
	
	public function setAnalyzeExpression($analyzeExpression)
	{
		$this->analyzeExpression = $analyzeExpression;
		$this->apiParas["analyze_expression"] = $analyzeExpression;
	}

	public function getAnalyzeExpression()
	{
		return $this->analyzeExpression;
	}

	public function setGroupExpression($groupExpression)
	{
		$this->groupExpression = $groupExpression;
		$this->apiParas["group_expression"] = $groupExpression;
	}

	public function getGroupExpression()
	{
		return $this->groupExpression;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.cloudtags.group.analyse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->analyzeExpression,"analyzeExpression");
		RequestCheckUtil::checkNotNull($this->groupExpression,"groupExpression");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
