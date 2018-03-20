<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.com/license/gpl GPL License
 */

//抽奖结果
return array(
    'columns' => array(
        'result_id' => array(
            'type' => 'number',
            'required' => true,
            'autoincrement' => true,
            'label' => app::get('syspromotion')->_('获奖id'),
            'comment' => app::get('syspromotion')->_('获奖id'),
        ),
        'lottery_id' => array(
            //'type' => 'int(8)',
            'type' => 'number',
            //'pkey' => true,
            'required' => true,
            'label' => app::get('syspromotion')->_('转盘id'),
            'comment' => app::get('syspromotion')->_('转盘id'),
        ),
        'user_id' => array(
            'type' => 'table:account@sysuser',
            'required' => true,
            'in_list' => true,
            'default_in_list' => false,
            'filtertype' => 'custom',
            'filterdefault' => true,
            'label' => app::get('syspromotion')->_('会员id'),
            'comment' => app::get('syspromotion')->_('会员id'),
            'width' => 100,
            'order' => 12,
        ),
        'loginName' => array(
            //'type' => 'varchar(255)',
            'type' => 'string',
            'in_list' => true,
            'default_in_list' => true,
            'searchtype' => 'has',
            'filtertype' => 'custom',
            'filterdefault'=>true,
            'is_title' => true,
            'label' => app::get('syspromotion')->_('登录名'),
            'comment' => app::get('syspromotion')->_('登录名'),
        ),
        'lottery_name' => array(
            //'type' => 'varchar(255)',
            'type' => 'string',
            'required' => true,
            'in_list' => true,
            'default_in_list' => true,
            'searchtype' => 'has',
            'filtertype' => 'custom',
            'filterdefault'=>true,
            'is_title' => true,
            'label' => app::get('syspromotion')->_('转盘名称'),
            'comment' => app::get('syspromotion')->_('转盘名称'),
        ),
        'bonus_type' => array(
            'type' => array(
                'custom' => app::get('syspromotion')->_('自定义'),
                'hongbao' => app::get('syspromotion')->_('红包'),
                'point' => app::get('syspromotion')->_('积分'),
            ),
            'in_list' => true,
            'default_in_list' => true,
            'searchtype' => 'has',
            'filtertype' => 'custom',
            'filterdefault' => true,
            'label' => app::get('syspromotion')->_('奖项类型'),
            'comment' => app::get('syspromotion')->_('奖项类型'),
        ),
        'bonus_desc' => array(
            //'type' => 'varchar(255)',
            'type' => 'string',
            'in_list' => true,
            'default_in_list' => true,
            'filtertype' => 'custom',
            'filterdefault'=>true,
            'searchtype' => 'has',
            'is_title' => true,
            'label' => app::get('syspromotion')->_('奖项描述'),
            'comment' => app::get('syspromotion')->_('奖项描述'),
        ),
        'created_time' => array(
            'type' => 'time',
            'in_list' => true,
            'default_in_list' => false,
            'filterdefault'=>true,
            'label' => app::get('syspromotion')->_('创建时间'),
            'comment' => app::get('syspromotion')->_('创建时间'),
            'orderby' => true,
        ),
        'prizeInfo'=>array(
            //'type'=>'varchar(500)',
            'type' => 'string',
            'length' => 500,
            'label' => app::get('sysshop')->_('奖品信息'),
            'comment' => app::get('sysshop')->_('奖品信息'),
            'order' => 12,
        ),
        'receiver_name' => array(
            //'type' => 'varchar(20)',
            'type' => 'string',
            'length' => 50,

            'in_list' => true,
            'default_in_list' => true,
            'searchtype' => 'has',
            'filtertype' => 'custom',
            'filterdefault' => true,
            'width' => '100',
            'order' => 15,
            'label' => app::get('syspromotion')->_('收货人姓名'),
            'comment' => app::get('syspromotion')->_('收货人姓名'),
        ),
        'receiver_area' => array(
            //'type' => 'varchar(20)',
            'type' => 'string',
            'in_list' => true,
            'default_in_list' => true,
            'length' => 20,
            'comment' => app::get('syspromotion')->_('收货人所在地区'),
            'label' => app::get('syspromotion')->_('收货人所在地区'),
        ),
        'addr' => array(
            //'type' => 'varchar(200)',
            'type' => 'string',
            'length' => 200,
            'in_list' => true,
            'default_in_list' => true,
            'width' => '150',
            'order' => 16,
            'label' => app::get('syspromotion')->_('收货人详细地址'),
            'comment' => app::get('syspromotion')->_('收货人详细地址'),
        ),
        'receiver_zip' => array(
            //'type' => 'varchar(20)',
            'type' => 'string',
            'length' => 20,
            'comment' => app::get('syspromotion')->_('收货人邮编'),
            'label' => app::get('syspromotion')->_('收货人邮编'),
        ),
        'receiver_phone' => array(
            //'type' => 'varchar(20)',
            'type' => 'string',
            'in_list' => true,
            'default_in_list' => true,
            'length' => 20,
            'comment' => app::get('syspromotion')->_('收货人电话'),
            'label' => app::get('syspromotion')->_('收货人电话'),
        ),
    ),
    'primary' => 'result_id',
    'index' => array(
        'ind_lottery_id' => ['columns' => ['lottery_id']],
        'ind_user_id' => ['columns' => ['user_id']],
        'ind_created_time' => ['columns' => ['created_time']],
    ),
    'comment' => app::get('syspromotion')->_('转盘抽奖结果列表'),
);