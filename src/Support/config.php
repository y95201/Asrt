<?php
namespace Y9520\Asrt\Support;
/*
 * @Description: 
 * @Author: Y95201
 * @Date: 2023-09-10 09:05:59
 * @LastEditors: Y95201
 * @LastEditTime: 2023-09-10 23:16:16
 */

use ArrayAccess;

/**
 * Class Config.
 */
class Config implements ArrayAccess
{
    /**
     * @var array
     */
    protected $config;

    /**
     * Config constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }
    public function getName()
    {
        // print_r( \get_class($this->config) );die;
        // foreach($this->config as $key => $value){
        //     return $key;
        // }
    }
    /**
     * Get an item from an array using "dot" notation.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        $config = $this->config;
        if (isset($config[$key])) {
            return $config[$key];
        }

        if (false === strpos($key, '.')) {
            return $default;
        }

        foreach (explode('.', $key) as $segment) {
            if (!is_array($config) || !array_key_exists($segment, $config)) {
                return $default;
            }
            $config = $config[$segment];
        }

        return $config;
    }
    #[\ReturnTypeWillChange]
    public function offsetExists($offset) : bool
    {
        return isset($this->config[$offset]);
    }
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value): void
    {
        // Your code here
        if ($offset === null) {
            $this->config[] = $value;
        } else {
            $this->config[$offset] = $value;
        }
    }
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset): void
    {
        if (isset($this->config[$offset])) {
            unset($this->config[$offset]);
        }
    }
}
