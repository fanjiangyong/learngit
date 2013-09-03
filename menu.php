<?php
/*
1.浏览器打开
https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=你的appid&secret=你的appsecret
然后得到 access_token 值

2. 修改此文件的 $access_token = '';

3. 上传此文件到你的服务器
4. 浏览器打开 http://www.xxx.com/menu.php，页面内容中，看到有OK就表示成功了
*/

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$appdir = dirname(__FILE__);
require $appdir . '/w.php';

$access_token = 'V_Yjqp3hLE96UMP_cRVelsd2Lb6ll0THe-XzvLAM3WIJWLwVit_Je79BdSlYNpJJgwZ9CW2N6V2ha1-PZQHMBucQf8Oj7Frx6l97tJ-YiFrZ98zTbRlrp1E7I_h6Y3oQXgW0AOnNgIwzLiY5vNXiFQ';
$data = '{
    "button":[
    {
      "type":"click",
      "name":"品味推荐",
      "key":"V100"
    },
    {
       "type":"view",
       "name":"专题",
       "url":"http://www.pinweiduo.com/?page_id=553"
    },
    {
       "name":"猜你喜欢",
       "sub_button":[
        {
           "type":"click",
           "name":"随机推荐",
           "key":"V200"
        },
        {
           "type":"click",
           "name":"赞我们一下",
           "key":"V302"
        }]
    }]
}';

// 创建菜单
echo W::fpost('https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$access_token, $data);
exit();

// 查看当前设定的菜单
// echo W::fpost('https://api.weixin.qq.com/cgi-bin/menu/get?access_token='.$access_token);
// exit();

// 删除当前菜单
// echo W::fpost('https://api.weixin.qq.com/cgi-bin/menu/delete?access_token='.$access_token);
// exit();