<?php
// カスタムメニューを有効化
add_theme_support( 'menus' );
// カスタムメニューの「場所」を設定するコード
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );

add_image_size( 'large-smartphone', 520);

// 下のマージン消す
add_theme_support( 'siteorigin-panels', array( 'margin-bottom' => 0, 'responsive' => true, ) );

// mobile, tablet判定
function is_mobile() {
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        'Android',         // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// オンラインショップのURL取得（まじかよ)
function get_online_shop() {
    $url = 'http://www.swag-333.com/';
    if (is_mobile()) {
        $url .= 'smp/';
    }
    return $url;
}
