<?php
/**
 * TOP API: taobao.jipiao.policiesstatus.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class JipiaoPoliciesstatusUpdateRequest
{
	/** 
	 * 航空公司二字码<br /> 支持最大长度为：5<br /> 支持的最大列表长度为：5
	 **/
	private $airline;
	
	/** 
	 * 到达机场三字码,此项必需与出发机场同时为空或不为空<br /> 支持最大长度为：3<br /> 支持的最大列表长度为：3
	 **/
	private $arrAirport;
	
	/** 
	 * 出发机场三字码,此项必需与到达机场同时为空或不为空<br /> 支持最大长度为：3<br /> 支持的最大列表长度为：3
	 **/
	private $depAirport;
	
	/** 
	 * 外部产品id集,最多支持1000个,后续调大,其中的out_product_id含有空格将不会处理
	 **/
	private $outProductIds;
	
	/** 
	 * 产品id集,最多支持1000个，后续调大，其中单个的policy_id含有留空格或不是数字将会忽略不处理
	 **/
	private $policyIds;
	
	/** 
	 * 发布日期
	 **/
	private $publishDate;
	
	/** 
	 * 发布来源, 通过接口taobao.jipiao.policy.process添加的政策会自动加上source为TOP,代理商后台页面录入的source为PC,excel上传的source为UPLOAD,通过接口taobao.jipiao.policies.fulladd,taobao.jipiao.policies.add的自定义source也可以<br /> 支持最大长度为：20<br /> 支持的最大列表长度为：20
	 **/
	private $source;
	
	/** 
	 * 0：按policy_ids更新；1：按out_product_ids更新；2:按其它条件更新
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAirline($airline)
	{
		$this->airline = $airline;
		$this->apiParas["airline"] = $airline;
	}

	public function getAirline()
	{
		return $this->airline;
	}

	public function setArrAirport($arrAirport)
	{
		$this->arrAirport = $arrAirport;
		$this->apiParas["arr_airport"] = $arrAirport;
	}

	public function getArrAirport()
	{
		return $this->arrAirport;
	}

	public function setDepAirport($depAirport)
	{
		$this->depAirport = $depAirport;
		$this->apiParas["dep_airport"] = $depAirport;
	}

	public function getDepAirport()
	{
		return $this->depAirport;
	}

	public function setOutProductIds($outProductIds)
	{
		$this->outProductIds = $outProductIds;
		$this->apiParas["out_product_ids"] = $outProductIds;
	}

	public function getOutProductIds()
	{
		return $this->outProductIds;
	}

	public function setPolicyIds($policyIds)
	{
		$this->policyIds = $policyIds;
		$this->apiParas["policy_ids"] = $policyIds;
	}

	public function getPolicyIds()
	{
		return $this->policyIds;
	}

	public function setPublishDate($publishDate)
	{
		$this->publishDate = $publishDate;
		$this->apiParas["publish_date"] = $publishDate;
	}

	public function getPublishDate()
	{
		return $this->publishDate;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.policiesstatus.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->airline,5,"airline");
		RequestCheckUtil::checkMaxLength($this->arrAirport,3,"arrAirport");
		RequestCheckUtil::checkMaxLength($this->depAirport,3,"depAirport");
		RequestCheckUtil::checkMaxLength($this->source,20,"source");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
