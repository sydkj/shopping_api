<?php
/**
 * 苏宁开放平台接口 - 批量查询大聚会商品信息
 *
 * @author suning
 * @date   2015-9-14
 */

namespace ShoppingApi\SuNing\Request\NetallianceJu;

use ShoppingApi\SuNing\SelectSuningRequest;
use ShoppingApi\SuNing\RequestCheckUtil;

class JuInfomationQueryRequest extends SelectSuningRequest
{
    public function getApiMethodName()
    {
        return 'suning.netalliance.juinfomation.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
    }

    public function getBizName()
    {
        return "queryJuInfomation";
    }

}

?>