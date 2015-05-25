<?php

/**
 * table定义
 * @author auto create
 */
class Table
{
	
	/** 
	 * 分区值
	 **/
	public $allParitionValues;
	
	/** 
	 * 应用ID
	 **/
	public $appId;
	
	/** 
	 * 表英文名
	 **/
	public $code;
	
	/** 
	 * 列信息
	 **/
	public $columns;
	
	/** 
	 * 表注释
	 **/
	public $comment;
	
	/** 
	 * dp id
	 **/
	public $dpId;
	
	/** 
	 * 表Id
	 **/
	public $id;
	
	/** 
	 * 名字
	 **/
	public $name;
	
	/** 
	 * odps 类型
	 **/
	public $odpsType;
	
	/** 
	 * 分区key
	 **/
	public $partitionKey;
	
	/** 
	 * 分区值
	 **/
	public $partitionValue;
	
	/** 
	 * 项目code
	 **/
	public $projectCode;
	
	/** 
	 * 安全等级，分为4等级
	 **/
	public $secLevel;
	
	/** 
	 * 表状态，上传中，识别中等
	 **/
	public $state;
	
	/** 
	 * 表统计
	 **/
	public $tableStatistics;
	
	/** 
	 * 原始表，识别表，输出表等
	 **/
	public $type;	
}
?>