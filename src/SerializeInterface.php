<?php
/**
 * Created by PhpStorm.
 * User: vladislav
 * Date: 2019-04-22
 * Time: 21:20
 */

interface SerializeInterface
{
    public function serialize($data, $format);
    public function unSerialize($data, $format);
}