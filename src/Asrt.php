<?php
/*
 * @Author: y95201 957612196@qq.com
 * @Date: 2023-09-08 11:30:07
 * @LastEditors: y95201 957612196@qq.com
 * @LastEditTime: 2023-10-27 15:43:54
 * @FilePath: /dome/src/Asrt.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
namespace Y9520\Asrt;

use Pimple\Container;
use Y9520\Asrt\Support\Config;
use Y9520\Asrt\Gateways\Gateway;
class Asrt extends Container
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var string
     */
    private $drivers;

    /**
     * @var string
     */
    private $gateways;

    /**
     * Pay constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = new Config($config);
    }

    /**
     * 指定驱动器
     * @param string $driver
     * @return $this
     */
    public function driver($driver)
    {
        if (is_null($this->config->get($driver))) {
            throw new InvalidArgumentException("Driver [$driver]'s Config is not defined.");
        }
        $gateway = 'Services';
        $gateway = __NAMESPACE__ . '\\Gateways\\' . ucfirst($driver) . '\\' . ucfirst($gateway) . 'Gateway';
        return new $gateway($this->config->get($driver));
    }
}