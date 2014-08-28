<?php
/**
 * TOP API: taobao.qt.report.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class QtReportAddRequest
{
	/** 
	 * 自定义属性字段;分号分隔<br /> 支持最大长度为：2000<br /> 支持的最大列表长度为：2000
	 **/
	private $extAttr;
	
	/** 
	 * 质检有效到期时间，一般为一年有效期
status状态为3时必须非空
	 **/
	private $gmtExpiry;
	
	/** 
	 * 提交报告结果时间
	 **/
	private $gmtReport;
	
	/** 
	 * 送检日期
	 **/
	private $gmtSubmit;
	
	/** 
	 * 只有status=3时赋值, 
true 质检结果合格,false质检结果不合格.
留空表示成分鉴定,不做判定
	 **/
	private $isPassed;
	
	/** 
	 * 样品信息描述<br /> 支持最大长度为：150<br /> 支持的最大列表长度为：150
	 **/
	private $itemDesc;
	
	/** 
	 * 样品链接.
QT_TYPE=9的时候，请填写N\A<br /> 支持最大长度为：256<br /> 支持的最大列表长度为：256
	 **/
	private $itemUrl;
	
	/** 
	 * 检测结果消息描述<br /> 支持最大长度为：600<br /> 支持的最大列表长度为：600
	 **/
	private $message;
	
	/** 
	 * 送检者昵称<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $nick;
	
	/** 
	 * 当前接口只有淘宝订单真假鉴定（QT_TYPE=9）的报告在该字段传入订单号，其他类型报告都不需要传输该值
	 **/
	private $numIid;
	
	/** 
	 * 一个质检服务唯一标识质量检验单的编号<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $qtCode;
	
	/** 
	 * 质检名称<br /> 支持最大长度为：150<br /> 支持的最大列表长度为：150
	 **/
	private $qtName;
	
	/** 
	 * 质检标准
status=3 时 必须非空<br /> 支持最大长度为：16<br /> 支持的最大列表长度为：16
	 **/
	private $qtStandard;
	
	/** 
	 * (1L, "聚划算"),
(2L, "消保"),
(3L, "分销"),
(4L, "抽检"),
(5L, "良无限线下数据"),
(6L, "入驻/续签商城"),
(7L, "买家质检维权"),
(8L, "实地验证"),
(9L, "淘宝买家订单商品鉴定"),
(10L,"假一赔三");<br /> 支持最大值为：15<br /> 支持最小值为：0
	 **/
	private $qtType;
	
	/** 
	 * 质检报告源文件url
status状态为3时必须非空<br /> 支持最大长度为：256<br /> 支持的最大列表长度为：256
	 **/
	private $reportUrl;
	
	/** 
	 * 收费项code<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $servcieItemCode;
	
	/** 
	 * 质检服务商名称<br /> 支持最大长度为：50<br /> 支持的最大列表长度为：50
	 **/
	private $spName;
	
	/** 
	 * 0:已提交申请
1:已收到样品
2:已出检测结果
3.已出具报告<br /> 支持最大值为：4<br /> 支持最小值为：0
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setExtAttr($extAttr)
	{
		$this->extAttr = $extAttr;
		$this->apiParas["ext_attr"] = $extAttr;
	}

	public function getExtAttr()
	{
		return $this->extAttr;
	}

	public function setGmtExpiry($gmtExpiry)
	{
		$this->gmtExpiry = $gmtExpiry;
		$this->apiParas["gmt_expiry"] = $gmtExpiry;
	}

	public function getGmtExpiry()
	{
		return $this->gmtExpiry;
	}

	public function setGmtReport($gmtReport)
	{
		$this->gmtReport = $gmtReport;
		$this->apiParas["gmt_report"] = $gmtReport;
	}

	public function getGmtReport()
	{
		return $this->gmtReport;
	}

	public function setGmtSubmit($gmtSubmit)
	{
		$this->gmtSubmit = $gmtSubmit;
		$this->apiParas["gmt_submit"] = $gmtSubmit;
	}

	public function getGmtSubmit()
	{
		return $this->gmtSubmit;
	}

	public function setIsPassed($isPassed)
	{
		$this->isPassed = $isPassed;
		$this->apiParas["is_passed"] = $isPassed;
	}

	public function getIsPassed()
	{
		return $this->isPassed;
	}

	public function setItemDesc($itemDesc)
	{
		$this->itemDesc = $itemDesc;
		$this->apiParas["item_desc"] = $itemDesc;
	}

	public function getItemDesc()
	{
		return $this->itemDesc;
	}

	public function setItemUrl($itemUrl)
	{
		$this->itemUrl = $itemUrl;
		$this->apiParas["item_url"] = $itemUrl;
	}

	public function getItemUrl()
	{
		return $this->itemUrl;
	}

	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setQtCode($qtCode)
	{
		$this->qtCode = $qtCode;
		$this->apiParas["qt_code"] = $qtCode;
	}

	public function getQtCode()
	{
		return $this->qtCode;
	}

	public function setQtName($qtName)
	{
		$this->qtName = $qtName;
		$this->apiParas["qt_name"] = $qtName;
	}

	public function getQtName()
	{
		return $this->qtName;
	}

	public function setQtStandard($qtStandard)
	{
		$this->qtStandard = $qtStandard;
		$this->apiParas["qt_standard"] = $qtStandard;
	}

	public function getQtStandard()
	{
		return $this->qtStandard;
	}

	public function setQtType($qtType)
	{
		$this->qtType = $qtType;
		$this->apiParas["qt_type"] = $qtType;
	}

	public function getQtType()
	{
		return $this->qtType;
	}

	public function setReportUrl($reportUrl)
	{
		$this->reportUrl = $reportUrl;
		$this->apiParas["report_url"] = $reportUrl;
	}

	public function getReportUrl()
	{
		return $this->reportUrl;
	}

	public function setServcieItemCode($servcieItemCode)
	{
		$this->servcieItemCode = $servcieItemCode;
		$this->apiParas["servcie_item_code"] = $servcieItemCode;
	}

	public function getServcieItemCode()
	{
		return $this->servcieItemCode;
	}

	public function setSpName($spName)
	{
		$this->spName = $spName;
		$this->apiParas["sp_name"] = $spName;
	}

	public function getSpName()
	{
		return $this->spName;
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

	public function getApiMethodName()
	{
		return "taobao.qt.report.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->extAttr,2000,"extAttr");
		RequestCheckUtil::checkNotNull($this->gmtSubmit,"gmtSubmit");
		RequestCheckUtil::checkNotNull($this->itemDesc,"itemDesc");
		RequestCheckUtil::checkMaxLength($this->itemDesc,150,"itemDesc");
		RequestCheckUtil::checkNotNull($this->itemUrl,"itemUrl");
		RequestCheckUtil::checkMaxLength($this->itemUrl,256,"itemUrl");
		RequestCheckUtil::checkMaxLength($this->message,600,"message");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxLength($this->nick,32,"nick");
		RequestCheckUtil::checkNotNull($this->qtCode,"qtCode");
		RequestCheckUtil::checkMaxLength($this->qtCode,64,"qtCode");
		RequestCheckUtil::checkNotNull($this->qtName,"qtName");
		RequestCheckUtil::checkMaxLength($this->qtName,150,"qtName");
		RequestCheckUtil::checkMaxLength($this->qtStandard,16,"qtStandard");
		RequestCheckUtil::checkNotNull($this->qtType,"qtType");
		RequestCheckUtil::checkMaxValue($this->qtType,15,"qtType");
		RequestCheckUtil::checkMinValue($this->qtType,0,"qtType");
		RequestCheckUtil::checkMaxLength($this->reportUrl,256,"reportUrl");
		RequestCheckUtil::checkNotNull($this->servcieItemCode,"servcieItemCode");
		RequestCheckUtil::checkMaxLength($this->servcieItemCode,64,"servcieItemCode");
		RequestCheckUtil::checkNotNull($this->spName,"spName");
		RequestCheckUtil::checkMaxLength($this->spName,50,"spName");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkMaxValue($this->status,4,"status");
		RequestCheckUtil::checkMinValue($this->status,0,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
