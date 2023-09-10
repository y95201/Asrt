<?php
/*
 * @Description: 
 * @Author: Y95201
 * @Date: 2023-09-10 20:36:49
 * @LastEditors: Y95201
 * @LastEditTime: 2023-09-10 22:17:17
 */
use Y9520\Asrt\Support\Config;
abstract class Gateway
{
    protected $config;
    public function __construct(array $config)
    {
        $this->config = new Config($config);
    }
    public function getConfig()
    {
        return $this->config;
    }
    public function setConfig(Config $config)
    {
        $this->config = $config;

        return $this;
    }
    public function getName()
    {
        return \strtolower(str_replace([__NAMESPACE__.'\\', 'Gateway'], '', \get_class($this)));
    }
    
}