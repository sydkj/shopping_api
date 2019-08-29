# 介绍

淘宝联盟、京东联盟、多多进宝SDK封装。


```php
<?php
use Cstopery\EasyTaoKe\Factory;
use Cstopery\EasyTaoKe\TaoBao\Request\TbkItemInfoGetRequest;

$client = Factory::taobao ();
$req = new TbkItemInfoGetRequest;
$req->setNumIids ($numIids);
return $client->execute ($req);
```

4、京东、拼多多SDK初始化基本一样，自己摸索
