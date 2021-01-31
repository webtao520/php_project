<?php
// 发Twitter消息
class CodeTwit {
    function tweet($status, $url)
    {
        var_dump('Tweeted:'.$status.' from:'.$url);
    }
}

// 分享到Google plus上
class Googlize {
    function share($url)
    {
        var_dump('Shared on Google plus:'.$url);
    }
}

//分享到Reddit上
class Reddiator {
    function reddit($url, $title)
    {
        var_dump('Reddit! url:'.$url.' title:'.$title);
    }
}