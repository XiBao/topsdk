<?php
/**
 * TOP API: taobao.sp.content.getpage request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpContentGetpageRequest
{
	/** 
	 * JOSN格式的分页参数：
page： 查询起始页 >=1 
rows： 分页大小 <= 50
sort : 排序字段，支持的排序类型包括：gmtModified – 最后修改时间；likeNum – 喜欢数；viewNum – 浏览数；
order：排序方式：asc – 顺序；desc – 倒序
	 **/
	private $pagerequest;
	
	/** 
	 * JSON格式的查询条件：
type(Integer，选填) ：内容类型，包括三种： 1 -- 宝贝，2 -- 图片，3 -- 自定义，4 -- 图文；
   className(String，选填)：内容的自定义分类名称；
   tags(String，选填)：内容的自定义标签名称，多个标签以逗号“,”分割。如果设置了多个标签，则他们是或的关系；
   title(String，选填): 内容标题，此条件为模糊搜索， 慎用，可能比较慢；
	 **/
	private $query;
	
	/** 
	 * 站长Key<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $siteKey;
	
	private $apiParas = array();
	
	public function setPagerequest($pagerequest)
	{
		$this->pagerequest = $pagerequest;
		$this->apiParas["pagerequest"] = $pagerequest;
	}

	public function getPagerequest()
	{
		return $this->pagerequest;
	}

	public function setQuery($query)
	{
		$this->query = $query;
		$this->apiParas["query"] = $query;
	}

	public function getQuery()
	{
		return $this->query;
	}

	public function setSiteKey($siteKey)
	{
		$this->siteKey = $siteKey;
		$this->apiParas["site_key"] = $siteKey;
	}

	public function getSiteKey()
	{
		return $this->siteKey;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.content.getpage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pagerequest,"pagerequest");
		RequestCheckUtil::checkNotNull($this->query,"query");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
