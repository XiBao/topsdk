<?php
/**
 * TOP API: taobao.fenxiao.distributors.get request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class FenxiaoDistributorsGetRequest
{
	/** 
	 * 分销商用户名列表。多个之间以“,”分隔;最多支持50个分销商用户名。
	 **/
	private $nicks;
	
	private $apiParas = array();
	
	public function setNicks($nicks)
	{
		$this->nicks = $nicks;
		$this->apiParas["nicks"] = $nicks;
	}

	public function getNicks()
	{
		return $this->nicks;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.distributors.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nicks,"nicks");
	}
}
