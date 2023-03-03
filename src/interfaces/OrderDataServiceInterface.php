<?php
/**
 * 创建人 : Forpastime
 * 创建时间: 2023/3/1 10:38
 * 个人主页 : http://forpastime.com
 */

namespace Forpastime\Hyperf\interfaces;


interface OrderDataServiceInterface
{
    public function getData($condition);
}