<?php
/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2017-7-27
 */

namespace Cstopery\EasyTaoKe\SuNing\Request\Netalliance;

use Cstopery\EasyTaoKe\SuNing\SelectSuningRequest;
use Cstopery\EasyTaoKe\SuNing\RequestCheckUtil;

class MerchantcommodityQueryRequest extends SelectSuningRequest
{
    /**
     *
     */
    private $activityId;


    /**
     *
     */
    private $adBookId;

    public function getActivityId()
    {
        return $this->activityId;
    }

    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
        $this->apiParams["activityId"] = $activityId;
    }


    public function getAdBookId()
    {
        return $this->adBookId;
    }

    public function setAdBookId($adBookId)
    {
        $this->adBookId = $adBookId;
        $this->apiParams["adBookId"] = $adBookId;
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.merchantcommodity.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
        RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
    }

    public function getBizName()
    {
        return "queryMerchantcommodity";
    }

}

?>