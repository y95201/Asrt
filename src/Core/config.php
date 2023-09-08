<?php
/*
 * @Author: y95201 957612196@qq.com
 * @Date: 2023-09-08 12:44:35
 * @LastEditors: y95201 957612196@qq.com
 * @LastEditTime: 2023-09-08 12:58:38
 * @FilePath: /dome/src/Core/config.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
namespace Y9520\Asrt\Core;


use Itcwc\LianLianPay\Support\Collection;

class Config extends Collection
{
    public function getInstantPayPrivateKey(): string
    {
        if (file_exists($this->get('private_key'))) {
            return file_get_contents($this->get('private_key'));
        } else {
            return $this->get('private_key');
        }
    }

    public function getInstantPayPublicKey(): string
    {
        if (file_exists($this->get('public_key'))) {
            return file_get_contents($this->get('public_key'));
        } else {
            return $this->get('public_key');
        }
    }

    public function getInstantPayLianLianPublicKey(): string
    {
        if (file_exists($this->get('ll_public_key'))) {
            return file_get_contents($this->get('ll_public_key'));
        } else {
            return $this->get('ll_public_key');
        }
    }
}