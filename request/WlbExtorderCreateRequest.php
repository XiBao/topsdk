<?php
/**
 * TOP API: taobao.wlb.extorder.create request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WlbExtorderCreateRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 期望结束时间，在入库单会使用到
	 **/
	private $expectEndTime;
	
	/** 
	 * 计划开始送达时间 在入库单中可能会使用
	 **/
	private $expectStartTime;
	
	/** 
	 * 用字符串格式来表示订单标记列表：比如COD^PRESELL^SPLIT^LIMIT 等，中间用“^”来隔开 ---------------------------------------- 订单标记list（所有字母全部大写）1:COD-货到付款,2:LIMIT-限时配送,3:PRESELL-预售,4:INVOICE-需要发票,5:COMPLAIN-已投诉,6:MERGE-合单,7:SPLIT-拆单,8: EXCHANGE-退换货， 9:VISIT-上门 ,10:MODIFYTRANSPORT-可改配送方式,11:CONSIGN-代理已发货通知, 12:SELLER_AFFORD-卖家承担运费,13:SYNC_RETURN_BILL-同时退回发票,14: FENXIAO-分销订单标志
	 **/
	private $extFlag;
	
	/** 
	 * 外部单据编号
	 **/
	private $extOrderCode;
	
	/** 
	 * 外部订单来源： （1）LC：推荐物流 （2）EXT：wlb_ext （3）ERP：erp （4）WMS： WMS盘点 （5）FENXIAO：分销  (6) OMS: OMS （7）ELINK： ELINK
	 **/
	private $extOrderSource;
	
	/** 
	 * 引起当前单据的前一个单据的编号
	 **/
	private $extPrevOrderId;
	
	/** 
	 * {"invoince_info": [{"bill_type":"发票类型，必选", "bill_title":"发票抬头，必选", "bill_amount":"发票金额(单位是分)，必选","bill_content":"发票内容，可选"}]}
	 **/
	private $invoinceInfo;
	
	/** 
	 * 1:NORM-正常订单,2:RETURN-退货订单,3:SWITCH-换货订单
	 **/
	private $opMainType;
	
	/** 
	 * 外部交易号
	 **/
	private $operateCode;
	
	/** 
	 * 订单类型： （1）OTHER： 其他 （2）TBTRADE： 淘宝交易 （3）OTHER_TRADE：其他交易 （4）COORDINATE：调拨（5）ALLOCATION： 盘点 （6）STOCK:采购
	 **/
	private $operateType;
	
	/** 
	 * 订单商品列表： {"order_item_list":[{" sub_trade_code ":"可选,淘宝子交易号","item_id":"必须,商品Id","item_code":"必须,商家编码","item_name":"可选,物流宝商品名称","item_quantity":"必选,计划数量","item_price":"必选,物品价格,单位为分","owner_user_nick ":"可选,货主nick 代销模式下会存在","flag":"判断是否为赠品0 不是1是","picture_url":"图片Url","remarks":"可选,备注","inventory_type":"必须，库存类型1 可销售库存 101 类型用来定义残次品 201 冻结类型库存 301 在途库存"]}
	 **/
	private $orderItemList;
	
	/** 
	 * 订单类型：（1）INBOUND：入库（2）OUTBOUND：出库（3）ALLOCATE：调拨（4）RETURN_IN:退货入库
	 **/
	private $orderType;
	
	/** 
	 * 包裹件数，入库单和出库单中会用到
	 **/
	private $packageCount;
	
	/** 
	 * 运费，以分为单位
	 **/
	private $postage;
	
	/** 
	 * 发收方发货方信息必须传 手机和电话必选其一 收货方信息 邮编^^^省^^^市^^^区^^^具体地址^^^收件方名称^^^手机^^^电话 如果某一个字段的数据为空时，必须传NA
	 **/
	private $receiverInfo;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 零售商
	 **/
	private $retailer;
	
	/** 
	 * 退货时的运单号
	 **/
	private $returnTmsCode;
	
	/** 
	 * 投递时间范围要求,格式'15:20'用分号隔开
	 **/
	private $scheduleEnd;
	
	/** 
	 * 投递时间范围要求,格式'13:20'用分号隔开
	 **/
	private $scheduleStart;
	
	/** 
	 * 投递时延要求: （1）INSTANT_ARRIVED： 当日达 （2）TOMMORROY_MORNING_ARRIVED：次晨达 （3）TOMMORROY_ARRIVED：次日达 （4）工作日：WORK_DAY （5）节假日：WEEKED_DAY
	 **/
	private $scheduleType;
	
	/** 
	 * 发货方信息，发收方发货方信息必须传 手机和电话必选其一 邮编^^^省^^^市^^^区^^^具体地址^^^收件方名称^^^手机^^^电话 如果某一个字段的数据为空时，必须传NA
	 **/
	private $senderInfo;
	
	/** 
	 * 服务费用，以分为单位
	 **/
	private $serviceFee;
	
	/** 
	 * 物流运送方式: （1）MAIL:平邮 （2）EXPRESS :快递？ (3) EMS: EMS (4) OTHER:其他
	 **/
	private $shippingType;
	
	/** 
	 * 子订单外部订单编号
	 **/
	private $subExtOrderCode;
	
	/** 
	 * 快递公司的代码
	 **/
	private $tmsCode;
	
	/** 
	 * 卖家建议的物流公司编码,或者退货时的发货公司编码
	 **/
	private $tmsTpCode;
	
	/** 
	 * 物品总价，以分为单位
	 **/
	private $totalPrice;
	
	/** 
	 * 交易订单类型，1：MAIN-表示主订单，2：SUB-表示子订单
	 **/
	private $tradeOrderType;
	
	/** 
	 * 仓库的代码
	 **/
	private $wmsCode;
	
	/** 
	 * 调拨单目地仓库
	 **/
	private $wmsCodeDestination;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setExpectEndTime($expectEndTime)
	{
		$this->expectEndTime = $expectEndTime;
		$this->apiParas["expect_end_time"] = $expectEndTime;
	}

	public function getExpectEndTime()
	{
		return $this->expectEndTime;
	}

	public function setExpectStartTime($expectStartTime)
	{
		$this->expectStartTime = $expectStartTime;
		$this->apiParas["expect_start_time"] = $expectStartTime;
	}

	public function getExpectStartTime()
	{
		return $this->expectStartTime;
	}

	public function setExtFlag($extFlag)
	{
		$this->extFlag = $extFlag;
		$this->apiParas["ext_flag"] = $extFlag;
	}

	public function getExtFlag()
	{
		return $this->extFlag;
	}

	public function setExtOrderCode($extOrderCode)
	{
		$this->extOrderCode = $extOrderCode;
		$this->apiParas["ext_order_code"] = $extOrderCode;
	}

	public function getExtOrderCode()
	{
		return $this->extOrderCode;
	}

	public function setExtOrderSource($extOrderSource)
	{
		$this->extOrderSource = $extOrderSource;
		$this->apiParas["ext_order_source"] = $extOrderSource;
	}

	public function getExtOrderSource()
	{
		return $this->extOrderSource;
	}

	public function setExtPrevOrderId($extPrevOrderId)
	{
		$this->extPrevOrderId = $extPrevOrderId;
		$this->apiParas["ext_prev_order_id"] = $extPrevOrderId;
	}

	public function getExtPrevOrderId()
	{
		return $this->extPrevOrderId;
	}

	public function setInvoinceInfo($invoinceInfo)
	{
		$this->invoinceInfo = $invoinceInfo;
		$this->apiParas["invoince_info"] = $invoinceInfo;
	}

	public function getInvoinceInfo()
	{
		return $this->invoinceInfo;
	}

	public function setOpMainType($opMainType)
	{
		$this->opMainType = $opMainType;
		$this->apiParas["op_main_type"] = $opMainType;
	}

	public function getOpMainType()
	{
		return $this->opMainType;
	}

	public function setOperateCode($operateCode)
	{
		$this->operateCode = $operateCode;
		$this->apiParas["operate_code"] = $operateCode;
	}

	public function getOperateCode()
	{
		return $this->operateCode;
	}

	public function setOperateType($operateType)
	{
		$this->operateType = $operateType;
		$this->apiParas["operate_type"] = $operateType;
	}

	public function getOperateType()
	{
		return $this->operateType;
	}

	public function setOrderItemList($orderItemList)
	{
		$this->orderItemList = $orderItemList;
		$this->apiParas["order_item_list"] = $orderItemList;
	}

	public function getOrderItemList()
	{
		return $this->orderItemList;
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

	public function setPackageCount($packageCount)
	{
		$this->packageCount = $packageCount;
		$this->apiParas["package_count"] = $packageCount;
	}

	public function getPackageCount()
	{
		return $this->packageCount;
	}

	public function setPostage($postage)
	{
		$this->postage = $postage;
		$this->apiParas["postage"] = $postage;
	}

	public function getPostage()
	{
		return $this->postage;
	}

	public function setReceiverInfo($receiverInfo)
	{
		$this->receiverInfo = $receiverInfo;
		$this->apiParas["receiver_info"] = $receiverInfo;
	}

	public function getReceiverInfo()
	{
		return $this->receiverInfo;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setRetailer($retailer)
	{
		$this->retailer = $retailer;
		$this->apiParas["retailer"] = $retailer;
	}

	public function getRetailer()
	{
		return $this->retailer;
	}

	public function setReturnTmsCode($returnTmsCode)
	{
		$this->returnTmsCode = $returnTmsCode;
		$this->apiParas["return_tms_code"] = $returnTmsCode;
	}

	public function getReturnTmsCode()
	{
		return $this->returnTmsCode;
	}

	public function setScheduleEnd($scheduleEnd)
	{
		$this->scheduleEnd = $scheduleEnd;
		$this->apiParas["schedule_end"] = $scheduleEnd;
	}

	public function getScheduleEnd()
	{
		return $this->scheduleEnd;
	}

	public function setScheduleStart($scheduleStart)
	{
		$this->scheduleStart = $scheduleStart;
		$this->apiParas["schedule_start"] = $scheduleStart;
	}

	public function getScheduleStart()
	{
		return $this->scheduleStart;
	}

	public function setScheduleType($scheduleType)
	{
		$this->scheduleType = $scheduleType;
		$this->apiParas["schedule_type"] = $scheduleType;
	}

	public function getScheduleType()
	{
		return $this->scheduleType;
	}

	public function setSenderInfo($senderInfo)
	{
		$this->senderInfo = $senderInfo;
		$this->apiParas["sender_info"] = $senderInfo;
	}

	public function getSenderInfo()
	{
		return $this->senderInfo;
	}

	public function setServiceFee($serviceFee)
	{
		$this->serviceFee = $serviceFee;
		$this->apiParas["service_fee"] = $serviceFee;
	}

	public function getServiceFee()
	{
		return $this->serviceFee;
	}

	public function setShippingType($shippingType)
	{
		$this->shippingType = $shippingType;
		$this->apiParas["shipping_type"] = $shippingType;
	}

	public function getShippingType()
	{
		return $this->shippingType;
	}

	public function setSubExtOrderCode($subExtOrderCode)
	{
		$this->subExtOrderCode = $subExtOrderCode;
		$this->apiParas["sub_ext_order_code"] = $subExtOrderCode;
	}

	public function getSubExtOrderCode()
	{
		return $this->subExtOrderCode;
	}

	public function setTmsCode($tmsCode)
	{
		$this->tmsCode = $tmsCode;
		$this->apiParas["tms_code"] = $tmsCode;
	}

	public function getTmsCode()
	{
		return $this->tmsCode;
	}

	public function setTmsTpCode($tmsTpCode)
	{
		$this->tmsTpCode = $tmsTpCode;
		$this->apiParas["tms_tp_code"] = $tmsTpCode;
	}

	public function getTmsTpCode()
	{
		return $this->tmsTpCode;
	}

	public function setTotalPrice($totalPrice)
	{
		$this->totalPrice = $totalPrice;
		$this->apiParas["total_price"] = $totalPrice;
	}

	public function getTotalPrice()
	{
		return $this->totalPrice;
	}

	public function setTradeOrderType($tradeOrderType)
	{
		$this->tradeOrderType = $tradeOrderType;
		$this->apiParas["trade_order_type"] = $tradeOrderType;
	}

	public function getTradeOrderType()
	{
		return $this->tradeOrderType;
	}

	public function setWmsCode($wmsCode)
	{
		$this->wmsCode = $wmsCode;
		$this->apiParas["wms_code"] = $wmsCode;
	}

	public function getWmsCode()
	{
		return $this->wmsCode;
	}

	public function setWmsCodeDestination($wmsCodeDestination)
	{
		$this->wmsCodeDestination = $wmsCodeDestination;
		$this->apiParas["wms_code_destination"] = $wmsCodeDestination;
	}

	public function getWmsCodeDestination()
	{
		return $this->wmsCodeDestination;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.extorder.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->extOrderCode,"extOrderCode");
		RequestCheckUtil::checkNotNull($this->extOrderSource,"extOrderSource");
		RequestCheckUtil::checkNotNull($this->operateType,"operateType");
		RequestCheckUtil::checkNotNull($this->orderItemList,"orderItemList");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkNotNull($this->retailer,"retailer");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
