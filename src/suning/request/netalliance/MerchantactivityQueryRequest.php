<?php
/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2016-11-30
 */

namespace ShoppingApi\SuNing\Request\Netalliance;

use ShoppingApi\SuNing\SelectSuningRequest;
use ShoppingApi\SuNing\RequestCheckUtil;

class MerchantactivityQueryRequest extends SelectSuningRequest
{
    public function getApiMethodName()
    {
        return 'suning.netalliance.merchantactivity.query';
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
        return "queryMerchantactivity";
    }

}

?>