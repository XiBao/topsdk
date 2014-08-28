<?php
/**
 * TOP API: taobao.ju.groupids.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class JuGroupidsGetRequest
{
	/** 
	 * 分页获取团信息页序号，代表第几页<br /> 支持最小值为：0
	 **/
	private $pageNo;
	
	/** 
	 * 每次获取团id列表的数量<br /> 支持最大值为：100<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * IPHONE,WAP,ANDROID,SINA,163 各种终端类型
	 **/
	private $terminalType;
	
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

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
		$this->apiParas["terminal_type"] = $terminalType;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.groupids.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,0,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->terminalType,"terminalType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
