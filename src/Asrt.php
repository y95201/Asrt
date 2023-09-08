<?php
/*
 * @Author: y95201 957612196@qq.com
 * @Date: 2023-09-08 11:30:07
 * @LastEditors: y95201 957612196@qq.com
 * @LastEditTime: 2023-09-08 12:54:44
 * @FilePath: /dome/src/Asrt.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
namespace Y9520\Asrt;

use Pimple\Container;
class Asrt extends Container
{
    public function index()
    {
        echo "This is my first composer package";
    }
    // public function __get($name)
    // {
    //     return $this->offsetGet($name);
    // }

    // public function __set($name, $value)
    // {
    //     $this->offsetSet($name, $value);
    // }
  
}