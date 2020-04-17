<?php
/**
 * author : abel.tang
 * Date: 2019-09-03  10:02
 */

namespace wxwork\api\src\message;


use wxwork\utils\Utils;

class MpNewsMessageContent
{
    public $msgtype = "mpnews";
    public $articles = null; // MpNewsArticle array

    public function __construct($articles)
    {
        $this->articles = $articles;
    }

    public function CheckMessageSendArgs()
    {
        $size = count($this->articles);
        if ($size < 1 || $size > 8) throw QyApiError("1~8 articles should be given");

        foreach($this->articles as $item) {
            $item->CheckMessageSendArgs();
        }
    }

    public function MessageContent2Array(&$arr)
    {
        Utils::setIfNotNull($this->msgtype, "msgtype", $arr);

        $articleList = array();
        foreach($this->articles as $item) {
            $articleList[] = $item->Article2Array();
        }
        $arr[$this->msgtype]["articles"] = $articleList;
    }
}