<?php
/**
 * TOP API: taobao.athena.item.solution.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AthenaItemSolutionUpdateRequest
{
	/** 
	 * 主键ID
	 **/
	private $id;
	
	/** 
	 * 自定义的问题
	 **/
	private $question;
	
	/** 
	 * 解决方案<br /> 支持最大长度为：1024<br /> 支持的最大列表长度为：1024
	 **/
	private $solution;
	
	/** 
	 * 发送状态 1半自动 2全自动
	 **/
	private $solutionLevel;
	
	/** 
	 * stf 旺旺富文本格式的解决方案<br /> 支持最大长度为：1024<br /> 支持的最大列表长度为：1024
	 **/
	private $solutionStf;
	
	/** 
	 * 关联 athena_item_knowledge_type 表的 type_key字段<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $typeKey;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setQuestion($question)
	{
		$this->question = $question;
		$this->apiParas["question"] = $question;
	}

	public function getQuestion()
	{
		return $this->question;
	}

	public function setSolution($solution)
	{
		$this->solution = $solution;
		$this->apiParas["solution"] = $solution;
	}

	public function getSolution()
	{
		return $this->solution;
	}

	public function setSolutionLevel($solutionLevel)
	{
		$this->solutionLevel = $solutionLevel;
		$this->apiParas["solution_level"] = $solutionLevel;
	}

	public function getSolutionLevel()
	{
		return $this->solutionLevel;
	}

	public function setSolutionStf($solutionStf)
	{
		$this->solutionStf = $solutionStf;
		$this->apiParas["solution_stf"] = $solutionStf;
	}

	public function getSolutionStf()
	{
		return $this->solutionStf;
	}

	public function setTypeKey($typeKey)
	{
		$this->typeKey = $typeKey;
		$this->apiParas["type_key"] = $typeKey;
	}

	public function getTypeKey()
	{
		return $this->typeKey;
	}

	public function getApiMethodName()
	{
		return "taobao.athena.item.solution.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkMaxLength($this->solution,1024,"solution");
		RequestCheckUtil::checkMaxLength($this->solutionStf,1024,"solutionStf");
		RequestCheckUtil::checkMaxLength($this->typeKey,64,"typeKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
