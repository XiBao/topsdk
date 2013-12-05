<?php
/**
 * TOP API: taobao.wangwang.abstract.addword request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class WangwangAbstractAddwordRequest
{
	/** 
	 * 传入参数的字符集
	 **/
	private $charset;
	
	/** 
	 * 关键词，长度大于0
	 **/
	private $word;
	
	private $apiParas = array();
	
	public function setCharset($charset)
	{
		$this->charset = $charset;
		$this->apiParas["charset"] = $charset;
	}

	public function getCharset()
	{
		return $this->charset;
	}

	public function setWord($word)
	{
		$this->word = $word;
		$this->apiParas["word"] = $word;
	}

	public function getWord()
	{
		return $this->word;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.abstract.addword";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->word,"word");
		RequestCheckUtil::checkMaxLength($this->word,12,"word");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
