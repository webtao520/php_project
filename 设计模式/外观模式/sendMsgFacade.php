<?php
require_once  "./sendMsg.php";
class sendMsgFacade {
    protected $twitter;
    protected $google;
    protected $reddit;
    function __construct($twitterObj,$gooleObj,$redditObj)
    {
        $this->twitter = $twitterObj;
        $this->google  = $gooleObj;
        $this->reddit  = $redditObj;
    }
    function share($url,$title,$status)
    {
        $this->twitter->tweet($status, $url);
        $this->google->share($url);
        $this->reddit->reddit($url, $title);
    }

}
$twitterObj = new CodeTwit();
$gooleObj=new Googlize();
$redditObj=new Reddiator();
$shareObj = new shareFacade($twitterObj,$gooleObj,$redditObj);
$shareObj->share('//myBlog.com/post-awsome','My greatest post','Read my greatest post ever.');