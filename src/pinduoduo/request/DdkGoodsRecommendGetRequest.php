<?php
namespace Cstopery\EasyTaoKe\PinDuoDuo\Request;

use Cstopery\EasyTaoKe\PinDuoDuo\RequestInterface;


class DdkGoodsRecommendGetRequest implements  RequestInterface
{

    private $type = 'pdd.ddk.goods.recommend.get';

    private $offset = 0;

    private $limit = 400;

    private $channelType;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    public function getParams()
    {
        $params = [
            'type'         => $this->type,
            'offset'       => $this->offset,
            'limit'        => $this->limit,
            'channel_type' => intval($this->channelType),
        ];
        return $params;
    }
}