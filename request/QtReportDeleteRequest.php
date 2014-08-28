<?php
/**
 * TOP API: taobao.qt.report.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class QtReportDeleteRequest
{
	/** 
	 * 一个质检服务唯一标识质量检验单的编号<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $qtCode;
	
	private $apiParas = array();
	
	public function setQtCode($qtCode)
	{
		$this->qtCode = $qtCode;
		$this->apiParas["qt_code"] = $qtCode;
	}

	public function getQtCode()
	{
		return $this->qtCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qt.report.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->qtCode,"qtCode");
		RequestCheckUtil::checkMaxLength($this->qtCode,64,"qtCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
