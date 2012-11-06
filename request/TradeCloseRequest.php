<?php
/**
 * TOP API: taobao.trade.close request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class TradeCloseRequest
{
	/** 
	 * 交易关闭原因。
可以选择的理由有：
1、买家不想买了
2、信息填写错误，重新拍
3、卖家缺货
4、同城见面交易
5、其他原因
注：尽量不要传入自定义的关闭理由
	 **/
	private $closeReason;
	
	/** 
	 * 主订单或子订单编号。
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setCloseReason($closeReason)
	{
		$this->closeReason = $closeReason;
		$this->apiParas["close_reason"] = $closeReason;
	}

	public function getCloseReason()
	{
		return $this->closeReason;
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
		return "taobao.trade.close";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->closeReason,"closeReason");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
}
