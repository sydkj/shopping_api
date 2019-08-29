<?php
/**
 * Created by PhpStorm.
 * User: Cstopery
 * Date: 2019/1/8
 * Time: 15:54
 */

namespace Cstopery\EasyTaoKe\JingDong;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}