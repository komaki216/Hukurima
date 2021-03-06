<?php
const HOST = 'localhost';
const USER_ID = 'root';
const PASSWORD = '';
const DB_NAME = 'hukurima'; // 使用するテーブルは'm_user,m_news'

$product_condition = ['ほぼ新品', '目立った傷や汚れなし', '中古'];
$days_to_ship = ['1~3日以内', '4~6日以内', '7日以上'];
$cleaning = ['不可', '可'];
$picking = ['自宅集荷しない', '自宅集荷する'];
$auto_approval = ['なし', 'あり'];

const TABLES = [
    '101' => 'listing',
    '102' => 'member',
    '103' => 'profile',
    '104' => 'search_conditions',
];

// footerのアイコンのカラーの初期値
$footer_colors = ['top' => '#707070', 'search' => '#707070', 'listing' => '#707070', 'notification' => '#707070', 'mypage' => '#707070' ];

/*
 /Applications/XAMPP/bin/mysql -u root
 use hukurima;
 */