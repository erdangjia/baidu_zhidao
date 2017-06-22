<?php

namespace Home\Controller;

use Think\Controller;
use ThinkOauth;

class IndexController extends Controller {

    public function index() {
        $first = strtotime(date("Y-m-01 00:00:00"));
        $first = date("w", $first);
        $weekArr = array("日", "一", "二", "三", "四", "五", "六");
        $maxDay = date('t', strtotime("" . date("Y") . "-" . date("m") . ""));
        for ($j = 0; $j < $first; $j++) {
            $blankArr[] = $j;
        }

        for ($i = 0; $i < $maxDay; $i++) {
            $z = $first + $i;
            $days[] = array("key" => $i, "key2" => $z % 7);
        }
        $nowtime = date("Y年m月d日 H:i:s") . "&nbsp;&nbsp;星期" . $weekArr[date("w")];
        $this->assign("nowtime", $nowtime);
        $this->assign("days", $days);
        $this->assign("first", $first);
        $this->assign("blankArr", $blankArr);
        $total = $first + count($days);

        for ($x = 0; $x < ceil($maxDay / 7) * 7 - $total; $x++) {
            $other[] = $x;
        }
        $this->assign("other", $other);
        $this->assign("title", "会员签到");
        $this->display();
    }

}
