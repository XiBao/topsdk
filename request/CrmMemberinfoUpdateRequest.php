<?php
/**
 * TOP API: taobao.crm.memberinfo.update request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class CrmMemberinfoUpdateRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 城市
	 **/
	private $city;
	
	/** 
	 * 会员等级，1：普通客户，2：高级会员，3：高级会员 ，4：至尊vip

只有正常会员才给予升级，对于status 为delete或者blacklist的会员 升级无效
	 **/
	private $grade;
	
	/** 
	 * 北京=1,天津=2,河北省=3,山西省=4,内蒙古自治区=5,辽宁省=6,吉林省=7,黑龙江省=8,上海=9,江苏省=10,浙江省=11,安徽省=12,福建省=13,江西省=14,山东省=15,河南省=16,湖北省=17,湖南省=18, 广东省=19,广西壮族自治区=20,海南省=21,重庆=22,四川省=23,贵州省=24,云南省=25,西藏自治区=26,陕西省=27,甘肃省=28,青海省=29,宁夏回族自治区=30,新疆维吾尔自治区=31,台湾省=32,香港特别行政区=33,澳门特别行政区=34,海外=35，约定36为清除Province设置
	 **/
	private $province;
	
	/** 
	 * 用于描述会员的状态，normal表示正常，blacklist表示黑名单，delete表示删除会员(只有潜在未交易成功的会员才能删除)
	 **/
	private $status;
	
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

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setGrade($grade)
	{
		$this->grade = $grade;
		$this->apiParas["grade"] = $grade;
	}

	public function getGrade()
	{
		return $this->grade;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
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
		return "taobao.crm.memberinfo.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkMaxLength($this->buyerNick,32,"buyerNick");
		RequestCheckUtil::checkMaxValue($this->grade,4,"grade");
		RequestCheckUtil::checkMinValue($this->grade,1,"grade");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkMaxLength($this->status,32,"status");
	}
}
