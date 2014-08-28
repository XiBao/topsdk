<?php
/**
 * TOP API: taobao.wlb.extorder.page.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WlbExtorderPageGetRequest
{
	/** 
	 * 查询截止时间
	 **/
	private $endTime;
	
	/** 
	 * 外部单据编号
	 **/
	private $extOrderCode;
	
	/** 
	 * 外部订单来源： （1）EXT_LC：推荐物流 （2）EXT_WLB：wlb_ext （3）EXT_ERP：erp （4）EXT_WMS： WMS盘点 （5）EXT_FENXIAO：分销  (6) EXT_OMS: OMS （7）EXT_ELINK： ELINK
	 **/
	private $extOrderSource;
	
	/** 
	 * 订单状态： DRAFT-订单已创建，CANCLE-订单已取消，CLOSED-订单关闭，SEND2WMS-下发中，WMS_RECEIVED-已下发，REJECT-接收方拒签，WMS_SEND-已发货，SIGNED-签收成功
	 **/
	private $extOrderStatus;
	
	/** 
	 * 分页的第几页
	 **/
	private $pageNo;
	
	/** 
	 * 每页多少条
	 **/
	private $pageSize;
	
	/** 
	 * 查询开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setExtOrderStatus($extOrderStatus)
	{
		$this->extOrderStatus = $extOrderStatus;
		$this->apiParas["ext_order_status"] = $extOrderStatus;
	}

	public function getExtOrderStatus()
	{
		return $this->extOrderStatus;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.extorder.page.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
