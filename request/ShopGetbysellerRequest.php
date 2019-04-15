<?php
/**
 * TOP API: taobao.shop.seller.get
 *
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class ShopGetbysellerRequest
{
    /**
     * 代表需要获取的店铺信息：sid,cid,title,nick,desc,bulletin,pic_path,created,modified,shop_score
     **/
    private $fields;

    private $apiParas = array();

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getApiMethodName()
    {
        return "taobao.shop.seller.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkMaxListSize($this->fields,20,"fields");
    }

    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
