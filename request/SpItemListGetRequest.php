<?php
/**
 * TOP API: taobao.sp.item.list.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpItemListGetRequest
{
	/** 
	 * 商品所在地:省名
	 **/
	private $area;
	
	/** 
	 * 标准商品后台类目id。该ID可以通过taobao.itemcats.get接口获取到。
	 **/
	private $cid;
	
	/** 
	 * 30天成交笔数(上限)
	 **/
	private $endBiz30day;
	
	/** 
	 * 佣金比率上限，如：2345表示23.45%。注：start_commissionRate和end_commissionRate一起设置才有效。
	 **/
	private $endCommissionRate;
	
	/** 
	 * 可选值和start_credit一样.start_credit的值一定要小于或等于end_credit的值。注：end_credit与start_credit一起使用才生效
	 **/
	private $endCredit;
	
	/** 
	 * 最高价格
	 **/
	private $endPrice;
	
	/** 
	 * 是否支持货到付款，设置为true表示该商品支持货到付款，设置为false或不设置表示不判断这个属性
	 **/
	private $hdfk;
	
	/** 
	 * 是否支持假一赔三，设置为true表示该商品支持假一赔三，设置为false或不设置表示不判断这个属性
	 **/
	private $jyps;
	
	/** 
	 * 商品标题中包含的关键字. 注意:查询时keyword,cid至少选择其中一个参数
	 **/
	private $keyword;
	
	/** 
	 * 是否免邮费，设置为true表示该商品免邮，设置为false或不设置表示不判断这个属性
	 **/
	private $myf;
	
	/** 
	 * 结果页数.
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回结果数.最大每页40
	 **/
	private $pageSize;
	
	/** 
	 * 是否支持七天退换，设置为true表示该商品支持七天退换，设置为false或不设置表示不判断这个属性
	 **/
	private $qtth;
	
	/** 
	 * 站点key<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $siteKey;
	
	/** 
	 * price_asc: 价格从低到高, 默认为折扣价格; sales_desc:销量从高到低; credit_desc:信用从高到低
	 **/
	private $sort;
	
	/** 
	 * 30天成交笔数, 下限
	 **/
	private $startBiz30day;
	
	/** 
	 * 佣金比率下限，如：1234表示12.34%
	 **/
	private $startCommissionRate;
	
	/** 
	 * 卖家信用: 1(一心) 2(两心) 3(三心) 4(四心) 5(五心) 6(一钻) 7(两钻) 8(三钻) 9(四钻) 10(五钻) 11(一冠) 12(两冠) 13(三冠) 14(四冠) 15(五冠) 16(一黄冠) 17(二黄冠) 18(三黄冠) 19(四黄冠) 20(五黄冠)
	 **/
	private $startCredit;
	
	/** 
	 * 起始价格, 默认为折扣价格.传入价格参数时,需注意起始价格和最高价格必须一起传入,并且 start_price <= end_price
	 **/
	private $startPrice;
	
	/** 
	 * 是否商城的商品，设置为true表示该商品是属于淘宝商城的商品，设置为false或不设置表示不判断这个属性
	 **/
	private $tmallItem;
	
	/** 
	 * 是否支持消费者保障，设置为true表示该商品支持消费者保障，设置为false或不设置表示不判断这个属性
	 **/
	private $xfzbz;
	
	/** 
	 * 是否支持正品保障，设置为true表示该商品支持正品保障，设置为false或不设置表示不判断这个属性
	 **/
	private $zpbz;
	
	private $apiParas = array();
	
	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setEndBiz30day($endBiz30day)
	{
		$this->endBiz30day = $endBiz30day;
		$this->apiParas["end_biz30day"] = $endBiz30day;
	}

	public function getEndBiz30day()
	{
		return $this->endBiz30day;
	}

	public function setEndCommissionRate($endCommissionRate)
	{
		$this->endCommissionRate = $endCommissionRate;
		$this->apiParas["end_commission_rate"] = $endCommissionRate;
	}

	public function getEndCommissionRate()
	{
		return $this->endCommissionRate;
	}

	public function setEndCredit($endCredit)
	{
		$this->endCredit = $endCredit;
		$this->apiParas["end_credit"] = $endCredit;
	}

	public function getEndCredit()
	{
		return $this->endCredit;
	}

	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setHdfk($hdfk)
	{
		$this->hdfk = $hdfk;
		$this->apiParas["hdfk"] = $hdfk;
	}

	public function getHdfk()
	{
		return $this->hdfk;
	}

	public function setJyps($jyps)
	{
		$this->jyps = $jyps;
		$this->apiParas["jyps"] = $jyps;
	}

	public function getJyps()
	{
		return $this->jyps;
	}

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}

	public function setMyf($myf)
	{
		$this->myf = $myf;
		$this->apiParas["myf"] = $myf;
	}

	public function getMyf()
	{
		return $this->myf;
	}

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

	public function setQtth($qtth)
	{
		$this->qtth = $qtth;
		$this->apiParas["qtth"] = $qtth;
	}

	public function getQtth()
	{
		return $this->qtth;
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

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setStartBiz30day($startBiz30day)
	{
		$this->startBiz30day = $startBiz30day;
		$this->apiParas["start_biz30day"] = $startBiz30day;
	}

	public function getStartBiz30day()
	{
		return $this->startBiz30day;
	}

	public function setStartCommissionRate($startCommissionRate)
	{
		$this->startCommissionRate = $startCommissionRate;
		$this->apiParas["start_commission_rate"] = $startCommissionRate;
	}

	public function getStartCommissionRate()
	{
		return $this->startCommissionRate;
	}

	public function setStartCredit($startCredit)
	{
		$this->startCredit = $startCredit;
		$this->apiParas["start_credit"] = $startCredit;
	}

	public function getStartCredit()
	{
		return $this->startCredit;
	}

	public function setStartPrice($startPrice)
	{
		$this->startPrice = $startPrice;
		$this->apiParas["start_price"] = $startPrice;
	}

	public function getStartPrice()
	{
		return $this->startPrice;
	}

	public function setTmallItem($tmallItem)
	{
		$this->tmallItem = $tmallItem;
		$this->apiParas["tmall_item"] = $tmallItem;
	}

	public function getTmallItem()
	{
		return $this->tmallItem;
	}

	public function setXfzbz($xfzbz)
	{
		$this->xfzbz = $xfzbz;
		$this->apiParas["xfzbz"] = $xfzbz;
	}

	public function getXfzbz()
	{
		return $this->xfzbz;
	}

	public function setZpbz($zpbz)
	{
		$this->zpbz = $zpbz;
		$this->apiParas["zpbz"] = $zpbz;
	}

	public function getZpbz()
	{
		return $this->zpbz;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.item.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
