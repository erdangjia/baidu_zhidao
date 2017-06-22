<?php

function getSign($row) {
    $t = $row + 1;
    if ($t > date('d')) {
        $td = "<td style='background-color:lemonchiffon' valign='top'>
<div align='right' valign='top'><span style='position:relative;right:20px;'>" . $t . "</span>
</div><div align='left'> </div><div align='left'> </div></td>";
    } else {
        if (strlen($t) == 1) {
            $day = "0" . $t;
        } else {
            $day = $t;
        }
        $t2 = strtotime(date("Y-m-" . $day . ""));
        $info = M("sign")->field("id")->where("addtime = " . $t2 . " AND status = 0 AND uid = " . session('userid') . "")->find();

        if ($info) {
            $td = "<td style='background-color:navajowhite;navajowhite ;'>
<div align='right' valign='top'><span style='position:relative;right:20px;'>" . $t . "</span>
</div><div align='left'>
<img width='35px' height='35px' src='" . __APP__ . "/Public/images/other/cart_3.gif' style='position:relative;left:10px;'> 已签到
</div></td>";
        } else {
            if ($t == date('d')) {
                $td = "<td  class='today' onclick='signDay($(this))'>
<div align='right' valign='top'><span style='position:relative;right:20px;'>" . $t . "</span></div>
<div align='center'><a style='cursor:pointer;color:#ffffff;' >签到</a></div></td>";
            } else {
                $td = "<td style='background-color:#DCDCDC;'>
<div align='right' valign='top'><span style='position:relative;right:20px;'>" . $t . "</span>
</div><div align='left'style='height:47px'>
</div></td>";
            }
        }
    }
    return $td;
}
?>
