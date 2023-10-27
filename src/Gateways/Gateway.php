<?php
/*
 * @Description: 
 * @Author: Y95201
 * @Date: 2023-09-10 20:36:49
 * @LastEditors: y95201 957612196@qq.com
 * @LastEditTime: 2023-10-27 17:13:39
 */
namespace Y9520\Asrt\Gateways;
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
    public function post($url,$header,$audio){
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $audio);
		$result = curl_exec($ch);
		curl_close($ch);
		
		return $result;
		
	}
}