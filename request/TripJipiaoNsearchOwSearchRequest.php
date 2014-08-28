<?php
/**
 * TOP API: taobao.trip.jipiao.nsearch.ow.search request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class TripJipiaoNsearchOwSearchRequest
{
	/** 
	 * 到达城市三字码<br /> 支持最大长度为：3<br /> 支持的最大列表长度为：3
	 **/
	private $arrCityCode;
	
	/** 
	 * 舱位等级，0，默认-全部；1，经济舱；2，商务舱；3，头等舱；4，头等和商务舱；5，经济和商务舱；6，经济和头等舱<br /> 支持最大值为：6<br /> 支持最小值为：0
	 **/
	private $cabinClass;
	
	/** 
	 * 出发城市三字码<br /> 支持最大长度为：3<br /> 支持的最大列表长度为：3
	 **/
	private $depCityCode;
	
	/** 
	 * 航班日期：格式要求 "yyyy-MM-dd"<br /> 支持最大长度为：10<br /> 支持的最大列表长度为：10
	 **/
	private $depDate;
	
	/** 
	 * 指定航班号：获取指定航班低价舱位列表或者获取指定航班高大上舱位折扣使用<br /> 支持最大长度为：7<br /> 支持的最大列表长度为：7
	 **/
	private $flightNo;
	
	/** 
	 * 1-9分别表示乘机人数为1-9；乘机人数小于0即相当无限制，默认值-1<br /> 支持最大值为：9<br /> 支持最小值为：-1
	 **/
	private $passengerNum;
	
	/** 
	 * 淘宝推广者pid
	 **/
	private $pid;
	
	/** 
	 * 搜索类型：支持三个类型，1. outbound，表示搜索航段最低价，每个航班一个最低价；2. lowprice，表示搜索指定航班topN最低价；3. gaoduan，表示搜索指定航班下高端大气上档次价格列表<br /> 支持最大长度为：10<br /> 支持的最大列表长度为：10
	 **/
	private $searchType;
	
	/** 
	 * 是否提供报销凭证(行程单),0.不提供和提供报销凭证的都查询出来,1.只查询提供报销凭证的<br /> 支持最小值为：0
	 **/
	private $supplyItinerary;
	
	private $apiParas = array();
	
	public function setArrCityCode($arrCityCode)
	{
		$this->arrCityCode = $arrCityCode;
		$this->apiParas["arr_city_code"] = $arrCityCode;
	}

	public function getArrCityCode()
	{
		return $this->arrCityCode;
	}

	public function setCabinClass($cabinClass)
	{
		$this->cabinClass = $cabinClass;
		$this->apiParas["cabin_class"] = $cabinClass;
	}

	public function getCabinClass()
	{
		return $this->cabinClass;
	}

	public function setDepCityCode($depCityCode)
	{
		$this->depCityCode = $depCityCode;
		$this->apiParas["dep_city_code"] = $depCityCode;
	}

	public function getDepCityCode()
	{
		return $this->depCityCode;
	}

	public function setDepDate($depDate)
	{
		$this->depDate = $depDate;
		$this->apiParas["dep_date"] = $depDate;
	}

	public function getDepDate()
	{
		return $this->depDate;
	}

	public function setFlightNo($flightNo)
	{
		$this->flightNo = $flightNo;
		$this->apiParas["flight_no"] = $flightNo;
	}

	public function getFlightNo()
	{
		return $this->flightNo;
	}

	public function setPassengerNum($passengerNum)
	{
		$this->passengerNum = $passengerNum;
		$this->apiParas["passenger_num"] = $passengerNum;
	}

	public function getPassengerNum()
	{
		return $this->passengerNum;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setSearchType($searchType)
	{
		$this->searchType = $searchType;
		$this->apiParas["search_type"] = $searchType;
	}

	public function getSearchType()
	{
		return $this->searchType;
	}

	public function setSupplyItinerary($supplyItinerary)
	{
		$this->supplyItinerary = $supplyItinerary;
		$this->apiParas["supply_itinerary"] = $supplyItinerary;
	}

	public function getSupplyItinerary()
	{
		return $this->supplyItinerary;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.jipiao.nsearch.ow.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->arrCityCode,"arrCityCode");
		RequestCheckUtil::checkMaxLength($this->arrCityCode,3,"arrCityCode");
		RequestCheckUtil::checkMaxValue($this->cabinClass,6,"cabinClass");
		RequestCheckUtil::checkMinValue($this->cabinClass,0,"cabinClass");
		RequestCheckUtil::checkNotNull($this->depCityCode,"depCityCode");
		RequestCheckUtil::checkMaxLength($this->depCityCode,3,"depCityCode");
		RequestCheckUtil::checkNotNull($this->depDate,"depDate");
		RequestCheckUtil::checkMaxLength($this->depDate,10,"depDate");
		RequestCheckUtil::checkMaxLength($this->flightNo,7,"flightNo");
		RequestCheckUtil::checkMaxValue($this->passengerNum,9,"passengerNum");
		RequestCheckUtil::checkMinValue($this->passengerNum,-1,"passengerNum");
		RequestCheckUtil::checkMaxLength($this->searchType,10,"searchType");
		RequestCheckUtil::checkMinValue($this->supplyItinerary,0,"supplyItinerary");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
