<?php
return array(
    'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	//'配置项'=>'配置值'
    'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由

    /*
     * 静态路由需要精确匹配
     * 访问http://three.randzh.xyz/Home/lsit/top  相当于访问的  http://three.randzh.xyz/Home/list/indexlist/cate_id/1/status/1
     * 'URL_MAP_RULES'=>array(
     *  'lsit/top' => 'list/indexlist?cate_id=1&status=1'
     * ) ,
    */

    /**
     * 正则路由 精确匹配   :1 :2代表前面正则的子模式   \d限制匹配cate_id参数值只匹配到数字的   其他的将匹配不到
     * 'URL_ROUTE_RULES'       =>  array(
     *          '/^glist\/cate_id\/(\d+)\/status\/(\d+)$/' => 'list/indexlist?cate_id=:1&status=:2' ,
     *  ),
     */


    /**
     * 访问http://three.randzh.xyz/1/glist/2  相当于访问的  http://three.randzh.xyz/Home/list/indexlist/cate_id/1/status/1
     * 'URL_ROUTE_RULES'       =>  array(
                                            ':ca/glist/:s' => 'list/indexlist' ,
                                    ), // 默认路由规则 针对模块
     */


    /**
     * 动态路由   带冒号的表示动态参数   并且要和传的参数名保持一致
     */
    'URL_ROUTE_RULES'       =>  array(
        'glist/:cate_id/:status' => 'list/indexlist' ,
    ), // 默认路由规则 针对模块
    
);