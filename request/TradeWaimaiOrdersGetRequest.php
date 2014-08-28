<?php
/**
 * TOP API: taobao.trade.waimai.orders.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TradeWaimaiOrdersGetRequest
{
	/** 
	 * true 仅有支付宝订单,false 包括所有类型订单(货到付款,支付券等)
	 **/
	private $isAllOrder;
	
	/** 
	 * true-查询仅按商家维度
false-查询按商家下所属店铺维度
	 **/
	private $isAllShop;
	
	/** 
	 * 买家昵称/订单ID 搜索
	 **/
	private $keyword;
	
	/** 
	 * 订单状态 待确认订单2 , 退款中订单4 , 已发货12 关闭20 交易成功21
	 **/
	private $orderStatus;
	
	/** 
	 * 页码<br /> 支持的最大列表长度为：100
	 **/
	private $pageNo;
	
	/** 
	 * 返回记录数，超过20按20条返回数据<br /> 支持最大值为：20<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 外卖分店ID
	 **/
	private $shopId;
	
	private $apiParas = array();
	
	public function setIsAllOrder($isAllOrder)
	{
		$this->isAllOrder = $isAllOrder;
		$this->apiParas["is_all_order"] = $isAllOrder;
	}

	public function getIsAllOrder()
	{
		return $this->isAllOrder;
	}

	public function setIsAllShop($isAllShop)
	{
		$this->isAllShop = $isAllShop;
		$this->apiParas["is_all_shop"] = $isAllShop;
	}

	public function getIsAllShop()
	{
		return $this->isAllShop;
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

	public function setOrderStatus($orderStatus)
	{
		$this->orderStatus = $orderStatus;
		$this->apiParas["order_status"] = $orderStatus;
	}

	public function getOrderStatus()
	{
		return $this->orderStatus;
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

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.waimai.orders.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isAllShop,"isAllShop");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,20,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
