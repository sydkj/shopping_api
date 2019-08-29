# 介绍

淘宝联盟、京东联盟、多多进宝SDK封装。
直接安装后这样的调用。


在配置文件config目录建立一个配置文件
openplat.php
```php
<?php
/**
 * Created by jack duan.
 * User: jack
 * Date: 2019/8/21
 * Time: 11:24 AM
 */
return [
    //跨域配置
    'taobao' => [
        'app_key' => env ('TAOBAO_APP_KEY', ''),
        'app_secret' => env ('TAOBAO_APP_SECRET', ''),
        'redirect_url' => env ('TAOBAO_REDIRECT_URI', ''),
        'format' => 'json',
    ],
    'pinduoduo' => [
        'client_id' => env ('PDD_CLIENT_ID', ''),
        'client_secret' => env ('PDD_CLIENT_SECRET', ''),
        'format' => 'json',
    ],
    'jingdong' => [
        'app_key' => env ('JD_APP_KEY', ''),
        'app_secret' => env ('JD_APP_SECRET', ''),
        'format' => 'json',
    ]
];
```

```php
<?php
/**
 * Created by jack duan.
 * User: jack
 * Date: 2019/8/21
 * Time: 11:24 AM
 */
use ShoppingApi\Factory;
use ShoppingApi\TaoBao\Request\TbkItemInfoGetRequest;

$client = Factory::taobao ();
$req = new TbkItemInfoGetRequest;
$req->setNumIids ($numIids);
return $client->execute ($req);
```


本代码库有niugengyun兄弟提供，本人在进行了改进支持thinkphp
