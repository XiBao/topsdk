<?php
/**
 * TOP API: taobao.delivery.send request
 * 
 * @author auto create
 * @since 1.0, 2015.08.06
 */
class DeliverySendRequest
{
	/** 
	 * 物流公司代码.如"POST"就代表中国邮政,"ZJS"就代表宅急送.调用 taobao.logistics.companies.get 获取。如传入的代码非淘宝官方物流合作公司，默认是“其他”物流的方式，在淘宝不显示物流具体进度，故传入需谨慎。如果orderType为delivery_needed，则必传
	 **/
	private $companyCode;
	
	/** 
	 * feature参数格式<br>范例: mobileCode=tid1:手机串号1,手机串号2|tid2:手机串号3;machineCode=tid3:3C机器号A,3C机器号B<br>mobileCode无忧购的KEY,machineCode为3C的KEY,多个key之间用”;”分隔<br>“tid1:手机串号1,手机串号2|tid2:手机串号3”为mobileCode对应的value。"|"不同商品间的分隔符。<br>例A商品和B商品都属于无忧购商品，之间就用"|"分开。<br>TID就是商品代表的子订单号，对应taobao.trade.fullinfo.get 接口获得的oid字段。(通过OID可以唯一定位到当前商品上)<br>":"TID和具体传入参数间的分隔符。冒号前表示TID,之后代表该商品的参数属性。<br>"," 属性间分隔符。（对应商品数量，当存在一个商品的数量超过1个时，用逗号分开）。<br>具体:当订单中A商品的数量为2个，其中手机串号分别为"12345","67890"。<br>参数格式：mobileCode=TIDA:12345,67890。TIDA对应了A宝贝，冒号后用逗号分隔的"12345","67890".说明本订单A宝贝的数量为2，值分别为"12345","67890"。<br>当存在"|"时，就说明订单中存在多个无忧购的商品，商品间用"|"分隔了开来。|"之后的内容含义同上。
	 **/
	private $feature;
	
	/** 
	 * 物流公司取货地址.XXX街道XXX门牌,省市区不需要提供.目的在于让物流公司能清楚的知道在哪取货。校验规则：1.4-60字符(字母\数字\汉字)2.不能全部数字3.不能全部字母
	 **/
	private $fetcherAddress;
	
	/** 
	 * 取货地国家公布的标准地区码.参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20080215_402462675.htm 或者调用 taobao.areas.get 获取
	 **/
	private $fetcherAreaId;
	
	/** 
	 * 取货地手机号码
	 **/
	private $fetcherMobile;
	
	/** 
	 * 联系人名称
	 **/
	private $fetcherName;
	
	/** 
	 * 取货地固定电话.包含区号,电话,分机号,中间用 " – "; 取货地固定电话和取货地手机号码,必须填写一个.
	 **/
	private $fetcherPhone;
	
	/** 
	 * 取货地邮编
	 **/
	private $fetcherZip;
	
	/** 
	 * 卖家备注.最大长度为250个字符。如果orderType为delivery_needed，则必传
	 **/
	private $memo;
	
	/** 
	 * 发货类型. 可选( delivery_needed(物流订单发货),virtual_goods(虚拟物品发货). ) 注:选择virtual_goods类型进行发货的话下面的参数可以不需填写。如果选择delivery_needed 则company_code,out_sid,seller_name,seller_area_id,seller_address,seller_zip,seller_phone,seller_mobile,memo必须要填写
	 **/
	private $orderType;
	
	/** 
	 * 运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入；若company_code中传入的代码非淘宝官方物流合作公司，此处运单号不校验。如果orderType为delivery_needed，则必传
	 **/
	private $outSid;
	
	/** 
	 * 卖家地址(详细地址).如:XXX街道XXX门牌,省市区不需要提供。如果orderType为delivery_needed，则必传.<br><font color="red">校验规则：<br>1.4-60字符(字母\数字\汉字)<br>2.不能全部数字<br>3.不能全部字母<br></font>
	 **/
	private $sellerAddress;
	
	/** 
	 * 卖家所在地国家公布的标准地区码.参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20080215_402462675.htm  或者调用 taobao.areas.get 获取。如果orderType为delivery_needed，则必传
	 **/
	private $sellerAreaId;
	
	/** 
	 * 卖家手机号码，必须由8到16位数字构成<br><font color="red">校验规则：<br>1.8-16位数字<br>2.不能数字全部相同<br>3.不能全为字符格式</font>
	 **/
	private $sellerMobile;
	
	/** 
	 * 卖家姓名。如果orderType为delivery_needed。<font color=red>注：最长支持15个字符</font color=red>
	 **/
	private $sellerName;
	
	/** 
	 * 卖家固定电话.包含区号,电话,分机号,中间用 " – "; 卖家固定电话和卖家手机号码,必须填写一个.<br><font color="red">校验规则：<br>1.字符不能全部相同<br>2.长度：5-24位<br>3.只能包含数字和横杠‘-’</font>
	 **/
	private $sellerPhone;
	
	/** 
	 * 卖家邮编。如果orderType为delivery_needed，则必传
	 **/
	private $sellerZip;
	
	/** 
	 * 交易ID
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setCompanyCode($companyCode)
	{
		$this->companyCode = $companyCode;
		$this->apiParas["company_code"] = $companyCode;
	}

	public function getCompanyCode()
	{
		return $this->companyCode;
	}

	public function setFeature($feature)
	{
		$this->feature = $feature;
		$this->apiParas["feature"] = $feature;
	}

	public function getFeature()
	{
		return $this->feature;
	}

	public function setFetcherAddress($fetcherAddress)
	{
		$this->fetcherAddress = $fetcherAddress;
		$this->apiParas["fetcher_address"] = $fetcherAddress;
	}

	public function getFetcherAddress()
	{
		return $this->fetcherAddress;
	}

	public function setFetcherAreaId($fetcherAreaId)
	{
		$this->fetcherAreaId = $fetcherAreaId;
		$this->apiParas["fetcher_area_id"] = $fetcherAreaId;
	}

	public function getFetcherAreaId()
	{
		return $this->fetcherAreaId;
	}

	public function setFetcherMobile($fetcherMobile)
	{
		$this->fetcherMobile = $fetcherMobile;
		$this->apiParas["fetcher_mobile"] = $fetcherMobile;
	}

	public function getFetcherMobile()
	{
		return $this->fetcherMobile;
	}

	public function setFetcherName($fetcherName)
	{
		$this->fetcherName = $fetcherName;
		$this->apiParas["fetcher_name"] = $fetcherName;
	}

	public function getFetcherName()
	{
		return $this->fetcherName;
	}

	public function setFetcherPhone($fetcherPhone)
	{
		$this->fetcherPhone = $fetcherPhone;
		$this->apiParas["fetcher_phone"] = $fetcherPhone;
	}

	public function getFetcherPhone()
	{
		return $this->fetcherPhone;
	}

	public function setFetcherZip($fetcherZip)
	{
		$this->fetcherZip = $fetcherZip;
		$this->apiParas["fetcher_zip"] = $fetcherZip;
	}

	public function getFetcherZip()
	{
		return $this->fetcherZip;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setOutSid($outSid)
	{
		$this->outSid = $outSid;
		$this->apiParas["out_sid"] = $outSid;
	}

	public function getOutSid()
	{
		return $this->outSid;
	}

	public function setSellerAddress($sellerAddress)
	{
		$this->sellerAddress = $sellerAddress;
		$this->apiParas["seller_address"] = $sellerAddress;
	}

	public function getSellerAddress()
	{
		return $this->sellerAddress;
	}

	public function setSellerAreaId($sellerAreaId)
	{
		$this->sellerAreaId = $sellerAreaId;
		$this->apiParas["seller_area_id"] = $sellerAreaId;
	}

	public function getSellerAreaId()
	{
		return $this->sellerAreaId;
	}

	public function setSellerMobile($sellerMobile)
	{
		$this->sellerMobile = $sellerMobile;
		$this->apiParas["seller_mobile"] = $sellerMobile;
	}

	public function getSellerMobile()
	{
		return $this->sellerMobile;
	}

	public function setSellerName($sellerName)
	{
		$this->sellerName = $sellerName;
		$this->apiParas["seller_name"] = $sellerName;
	}

	public function getSellerName()
	{
		return $this->sellerName;
	}

	public function setSellerPhone($sellerPhone)
	{
		$this->sellerPhone = $sellerPhone;
		$this->apiParas["seller_phone"] = $sellerPhone;
	}

	public function getSellerPhone()
	{
		return $this->sellerPhone;
	}

	public function setSellerZip($sellerZip)
	{
		$this->sellerZip = $sellerZip;
		$this->apiParas["seller_zip"] = $sellerZip;
	}

	public function getSellerZip()
	{
		return $this->sellerZip;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.delivery.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
