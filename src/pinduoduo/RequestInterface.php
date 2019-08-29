<?php
/**
 * Created by PhpStorm.
 * User: Cstopery
 * Date: 2019/1/8
 * Time: 15:43
 */

namespace Cstopery\EasyTaoKe\PinDuoDuo;


interface RequestInterface
{
    public function getParams();

    public function setType($type);

    public function getType();
}