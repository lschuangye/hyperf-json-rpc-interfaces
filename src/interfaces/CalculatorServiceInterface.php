<?php
/**
 * 创建人 : Forpastime
 * 创建时间: 2023/2/28 16:04
 * 个人主页 : http://forpastime.com
 */
namespace Forpastime\Hyperf\interfaces;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b):int;
}