<?php
/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2018-3-6
 */

namespace Cstopery\EasyTaoKe\SuNing\Request\Netalliance;

use Cstopery\EasyTaoKe\SuNing\SelectSuningRequest;
use Cstopery\EasyTaoKe\SuNing\RequestCheckUtil;

class UnionInfomationQueryRequest extends SelectSuningRequest
{
    /**
     *
     */
    private $adBookId;


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
        return 'suning.netalliance.unioninfomation.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
    }

    public function getBizName()
    {
        return "queryUnionInfomation";
    }

}

?>