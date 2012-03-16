<?php
/**
 * TOP API: taobao.trades.bought.get request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class TradesBoughtGetRequest
{
	/** 
	 * 查询交易创建时间结束。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endCreated;
	
	/** 
	 * 需要返回的字段。目前支持有：

   1. Trade中可以指定返回的fields：
seller_nick, buyer_nick, title, type, created, sid, tid, seller_rate, buyer_rate, status, payment, discount_fee, adjust_fee, post_fee, total_fee, pay_time, end_time, modified, consign_time, buyer_obtain_point_fee, point_fee, real_point_fee, received_payment, commission_fee, pic_path, num_iid, num, price, cod_fee, cod_status, shipping_type, receiver_name, receiver_state, receiver_city, receiver_district, receiver_address, receiver_zip, receiver_mobile, receiver_phone            
   
2. Order中可以指定返回fields：
orders.title, orders.pic_path, orders.price, orders.num, orders.num_iid, orders.sku_id, orders.refund_status, orders.status, orders.oid, orders.total_fee, orders.payment, orders.discount_fee, orders.adjust_fee, orders.sku_properties_name, orders.item_meal_name, orders.buyer_rate, orders.seller_rate, orders.outer_iid, orders.outer_sku_id, orders.refund_id, orders.seller_type                          
  
 3. fields：orders（返回Order的所有内容）
	 **/
	private $fields;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:100
	 **/
	private $pageSize;
	
	/** 
	 * 交易是否评价.默认查询所有评价状态的数据，除了默认值外每次只能查询一种状态。
可选值： RATE_UNBUYER(买家未评) RATE_UNSELLER(卖家未评) RATE_BUYER_UNSELLER(买家已评，卖家未评) RATE_UNBUYER_SELLER(买家未评，卖家已评)
	 **/
	private $rateStatus;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 查询交易创建时间开始。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startCreated;
	
	/** 
	 * 交易状态，默认查询所有交易状态的数据，除了默认值外每次只能查询一种状态。
 交易状态可选值

    TRADE_NO_CREATE_PAY(没有创建支付宝交易)
    WAIT_BUYER_PAY(等待买家付款)
    WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款)
    WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货)
    TRADE_BUYER_SIGNED(买家已签收,货到付款专用)
    TRADE_FINISHED(交易成功)
    TRADE_CLOSED(交易关闭)
    TRADE_CLOSED_BY_TAOBAO(交易被淘宝关闭)
    ALL_WAIT_PAY(包含：WAIT_BUYER_PAY、TRADE_NO_CREATE_PAY)
    ALL_CLOSED(包含：TRADE_CLOSED、TRADE_CLOSED_BY_TAOBAO)
	 **/
	private $status;
	
	/** 
	 * 交易类型列表，同时查询多种交易类型可用逗号分隔。默认同时查询guarantee_trade, auto_delivery, ec, cod的4种交易类型的数据
交易类型可选值
fixed(一口价)
auction(拍卖)
guarantee_trade(一口价、拍卖)
independent_simple_trade(旺店入门版交易)
independent_shop_trade(旺店标准版交易)
auto_delivery(自动发货)
ec(直冲)
cod(货到付款)
fenxiao(分销)
game_equipment(游戏装备)
shopex_trade(ShopEX交易)
netcn_trade(万网交易)
external_trade(统一外部交易
instant_trade (即时到账)
b2c_cod(大商家货到付款)
hotel_trade(酒店类型交易)
super_market_trade(商超交易)
super_market_cod_trade(商超货到付款交易)
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setRateStatus($rateStatus)
	{
		$this->rateStatus = $rateStatus;
		$this->apiParas["rate_status"] = $rateStatus;
	}

	public function getRateStatus()
	{
		return $this->rateStatus;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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
		return "taobao.trades.bought.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
}
