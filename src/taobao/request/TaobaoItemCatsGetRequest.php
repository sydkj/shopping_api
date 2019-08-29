<?php

namespace Cstopery\EasyTaoKe\TaoBao\Request;

use Cstopery\EasyTaoKe\TaoBao\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.ju.tqg.get request
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TaobaoItemCatsGetRequest
{
    /**
     * 商品所属类目ID列表
     **/
    private $cids;

    /**
     * 需返回的字段列表
     **/
    private $fields;

    /**
     * 父商品类目 id，0表示根节点, 传输该参数返回所有子类目。 (cids、parent_cid至少传一个)
     **/
    private $parent_cid = 0;


    public function setCids($cids)
    {
        $this->cids = $cids;
        $this->apiParas["cids"] = $cids;
    }

    public function getCids()
    {
        return $this->cids;
    }
    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setParentCid($parent_cid)
    {
        $this->parent_cid = $parent_cid;
        $this->apiParas["parent_cid"] = $parent_cid;
    }

    public function getParentCid()
    {
        return $this->parent_cid;
    }

    public function getApiMethodName()
    {
        return "taobao.itemcats.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }
    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
