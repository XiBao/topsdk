<?php
/**
 * TOP API: taobao.ju.itemids.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class JuItemidsGetRequest
{
	/** 
	 * 分页获取商品信息页序号，代表第几页<br /> 支持最小值为：0
	 **/
	private $pageNo;
	
	/** 
	 * 每次获取商品列表的数量<br /> 支持最大值为：100<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 平台ID。搜狗:1008,聚划算:1001,商城:1002,无线WAP:1007,支付宝:1003,淘宝天下:1004,嗨淘:1006
	 **/
	private $platformId;
	
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

	public function setPlatformId($platformId)
	{
		$this->platformId = $platformId;
		$this->apiParas["platform_id"] = $platformId;
	}

	public function getPlatformId()
	{
		return $this->platformId;
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
		return "taobao.ju.itemids.get";
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
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
