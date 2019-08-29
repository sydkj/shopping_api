<?php
/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2017-10-11
 */

namespace Cstopery\EasyTaoKe\SuNing\Request\Netalliance;

use Cstopery\EasyTaoKe\SuNing\SelectSuningRequest;
use Cstopery\EasyTaoKe\SuNing\RequestCheckUtil;

class CouponproductQueryRequest extends SelectSuningRequest
{
    /**
     *
     */
    private $positionId;


    public function getPositionId()
    {
        return $this->positionId;
    }

    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;
        $this->apiParams["positionId"] = $positionId;
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.couponproduct.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
        RequestCheckUtil::checkNotNull($this->positionId, 'positionId');
    }

    public function getBizName()
    {
        return "queryCouponproduct";
    }

}

?>