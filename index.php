<?php
/*
 * @Author: y95201 957612196@qq.com
 * @Date: 2023-09-08 11:15:58
 * @LastEditors: y95201 957612196@qq.com
 * @LastEditTime: 2023-10-27 16:59:35
 * @FilePath: /dome/index.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
require "vendor/autoload.php";


$config = [
    'aliyun' => [
        'appkey' => 'tgmZvtJHhrKTFHay',
    ],
    'tenxun' => [
        'SecretId'  => 'AKIDHOIyXt1va7QaZLtCH9pHXZOyKTP6nFUV', // 短信应用的 SDK APP ID
        'SecretKey' => 'pQnwqW3MUO5YnywgCTWLwJSPEqOuDf07', // SECRET ID
    ],
    'baidu' => [
        'AppID'     => '38958967',
        'APIKey'    => 'xRrO6O8WGKmnEWPj66OMLBck',
        'SecretKey' => '5UjqpHGdU8Rjzc0whIiTi8VENUfqosfr',
    ],
];

$Test = new Y9520\Asrt\Asrt($config);

$verify = $Test->driver('baidu')->SendVoiceTurnText('123.mp3');

print_r($verify );die;