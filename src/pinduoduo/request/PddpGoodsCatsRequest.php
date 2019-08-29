<?php

namespace ShoppingApi\PinDuoDuo\Request;

use ShoppingApi\PinDuoDuo\RequestInterface;


class PddpGoodsCatsRequest implements RequestInterface
{
    /**
     * 获取商品分类
     * @var string
     */
    private $type = 'pdd.goods.cats.get';

    /**
     * 顶级节点id
     * @var
     */
    private $parent_cat_id;


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setParentCatId($parent_cat_id = 0)
    {
        $this->parent_cat_id = $parent_cat_id;
    }

    public function getParentCatId()
    {
        return $this->parent_cat_id;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'parent_cat_id' => $this->parent_cat_id,
        ];

        return $params;
    }
}