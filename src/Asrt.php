<?php
/*
 * @Author: y95201 957612196@qq.com
 * @Date: 2023-09-08 11:30:07
 * @LastEditors: Y95201
 * @LastEditTime: 2023-09-10 23:18:10
 * @FilePath: /dome/src/Asrt.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
namespace Y9520\Asrt;

use Pimple\Container;
use Y9520\Asrt\Support\Config;
use Y9520\Asrt\Gateways\Gateway;
class Asrt extends Container
{

    protected $config;
    public function __construct(array $config)
    {
        $this->config = new Config($config);
    }

    public function CreateRecTask()
    {
        // $gateways = $this->config->getName();
        // $gateways = $this->config->get('default', []);
        print_r(\strtolower(str_replace([__NAMESPACE__.'\\', 'Gateway'], '', \get_class($this))));die;
        // foreach($this->config as $key => $value){
        //     print_r($value->get($key));die;
        // }
    }
    
  
}