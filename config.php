<?php

return array(
    'site' => array(
        'home' => array( //首页
            'name' => 'Linost 网络工具集 - 全球机房 Looking Glass', // 必选
            'logo' => 'https://linost.com/logo.png', // 可选，不填写则用 name 替代
            'link'  => 'http://tok1.linost.com', // 必选
        ),
        'title' => 'LookingGlass', //站点Title名称
        'location' => '中国北京', //站点服务器机房位置
      //  'ipv4' => '0.0.0.0', // 配置可选
      //  'ipv6' => '2402:4e00::11', // 配置可选
        'speedtest' => array( // 下载速度测试 配置可选
            '10MB'  => '/10mb.bin',
            '100MB' => '/100MB.bin',
            '500MB' => '/500MB.bin',
        ),
        'rateLimit' => array(
            'enable' => TRUE,
            'provider' => array(
                'class' => 'session',
            ), // 默认使用session记录
            'minute' => 10, // 限速每Ip每分钟请求最多 10 次
        ),
        'commands' => array( // key名称不能修改
            'host' => '/usr/bin/host',
            'ping' => '/bin/ping',
            'traceroute' => '/usr/sbin/traceroute', // Ubuntu 下需要 apt-get install traceroute 并设置目录

            /* IPv6支持尚未实现 */
            'ping6' => '/bin/ping6',           // IPv6
            'traceroute6' => '/usr/sbin/traceroute6',  // IPv6
        ),
    ),
    'nodes' => array( // 其它监测点 可选配
        array(
            'name' => '日本东京2',
            'link' => 'http://tok2.lg.linost.com',
        ),
    )
);
