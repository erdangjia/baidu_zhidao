<?php

namespace Home\Controller;

use Think\Controller;

class AjaxController extends Controller {

    public function signDay() {
        $s_userid = session("userid");
        if ($s_userid == '') {
            echo -1;
            exit;
        }
        $data['addtime'] = strtotime(date("Y-m-d 00:00:00"));
        $data['uid'] = $s_userid;
        $info = M('sign')->field("id")->where("addtime = " . $data['addtime'] . " AND uid = " . $data['uid'] . " AND status = 0")->find();

        if (empty($info)) {
            $data['money'] = 20;
            $lastid = M('sign')->add($data);
            if ($lastid > 0) {
//                addPoints("day_sign", $data['money'], $s_userid, "每日签到获得" . $data['money'] . "积分", 5, 1);
                echo $data['money'];
            }
        } else {
            echo -1;
        }
    }

}

?>