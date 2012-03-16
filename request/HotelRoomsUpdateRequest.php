<?php
/**
 * TOP API: taobao.hotel.rooms.update request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class HotelRoomsUpdateRequest
{
	/** 
	 * 多商品房态信息。json encode。每个商品房态参考单商品更新中的room_quota字段。反序列化后入：array(( 'gid'=>1, 'roomQuota'=>array(('date'=>'2011-01-29', 'price'=>100, 'num'=>1),('date'=>'2011-01-30', 'price'=>100, 'num'=>1)),( 'gid'=>2, 'roomQuota'=>array(('date'=>'2011-01-29', 'price'=>100, 'num'=>1),('date'=>'2011-01-30', 'price'=>100, 'num'=>1)))
	 **/
	private $gidRoomQuotaMap;
	
	private $apiParas = array();
	
	public function setGidRoomQuotaMap($gidRoomQuotaMap)
	{
		$this->gidRoomQuotaMap = $gidRoomQuotaMap;
		$this->apiParas["gid_room_quota_map"] = $gidRoomQuotaMap;
	}

	public function getGidRoomQuotaMap()
	{
		return $this->gidRoomQuotaMap;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.rooms.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->gidRoomQuotaMap,"gidRoomQuotaMap");
	}
}
