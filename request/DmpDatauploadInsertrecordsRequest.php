<?php
/**
 * TOP API: taobao.dmp.dataupload.insertrecords request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpDatauploadInsertrecordsRequest
{
	/** 
	 * 数据块Id
	 **/
	private $blockid;
	
	/** 
	 * 列分隔符
	 **/
	private $columnsplit;
	
	/** 
	 * 上传具体数据值
	 **/
	private $records;
	
	/** 
	 * 行分隔符
	 **/
	private $rowsplit;
	
	/** 
	 * 表名
	 **/
	private $tablecode;
	
	private $apiParas = array();
	
	public function setBlockid($blockid)
	{
		$this->blockid = $blockid;
		$this->apiParas["blockid"] = $blockid;
	}

	public function getBlockid()
	{
		return $this->blockid;
	}

	public function setColumnsplit($columnsplit)
	{
		$this->columnsplit = $columnsplit;
		$this->apiParas["columnsplit"] = $columnsplit;
	}

	public function getColumnsplit()
	{
		return $this->columnsplit;
	}

	public function setRecords($records)
	{
		$this->records = $records;
		$this->apiParas["records"] = $records;
	}

	public function getRecords()
	{
		return $this->records;
	}

	public function setRowsplit($rowsplit)
	{
		$this->rowsplit = $rowsplit;
		$this->apiParas["rowsplit"] = $rowsplit;
	}

	public function getRowsplit()
	{
		return $this->rowsplit;
	}

	public function setTablecode($tablecode)
	{
		$this->tablecode = $tablecode;
		$this->apiParas["tablecode"] = $tablecode;
	}

	public function getTablecode()
	{
		return $this->tablecode;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.dataupload.insertrecords";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->blockid,"blockid");
		RequestCheckUtil::checkNotNull($this->columnsplit,"columnsplit");
		RequestCheckUtil::checkNotNull($this->records,"records");
		RequestCheckUtil::checkMaxLength($this->records,4096000,"records");
		RequestCheckUtil::checkNotNull($this->rowsplit,"rowsplit");
		RequestCheckUtil::checkNotNull($this->tablecode,"tablecode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
