<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>会员签到 - 二当家的</title>
        <meta name="keywords" content="<?php echo ($keywords); ?>" /> 
        <meta name="description" content="<?php echo ($description); ?>" /> 
        <link rel="shortcut icon" href="/jquery/5/512/demo/Public/images/favicon.ico" type="image/x-icon" /> 
        <link href="/jquery/5/512/demo/Public/css/member.css" rel="stylesheet" type="text/css" />
    </head> 
    <body> 

        <div class="container clearfix">
            
            <div class="member_main">
                <div class="perInfo">
                    <div class="titleInfoBorder">
                        <span>提示：登录二当家的测试会员签到</span>
                    </div>
                </div>
                <div class="tishi">
                    <p class="tishi_text">
                        <span class="tishi_span">签到奖励提示</span>
                    </p>
                    <p class="tishi_text">
                        <span class="tishi_span">      1：</span>
                        每天签到，获得 <b><?php echo (C("points.sign_day")); ?></b> 积分奖励
                    </p>
                    <p class="tishi_text">
                        <span class="tishi_span">      2：</span>
                        一个月内签到满 <b>20</b> 次，获得签到奖励 <b><?php echo (C("points.sign_month")); ?></b> 积分（下个月5号之前发放签到奖励）
                    </p>
                </div>
                <table  class='table_sign'>
                    <thead>
                        <tr>
                            <th>周日</th>
                            <th>周一</th>
                            <th>周二</th>
                            <th>周三</th>
                            <th>周四</th>
                            <th>周五</th>
                            <th>周六</th>
                        </tr>
                    </thead>
                    <tbody id="signrili">
                        <?php if(!empty($blankArr)): ?><tr>
                                <?php if(is_array($blankArr)): foreach($blankArr as $key=>$row): ?><td>-</td>
                                    <?php if($row%7 == $first): ?></tr><?php endif; endforeach; endif; endif; ?>
                        <?php if(is_array($days)): foreach($days as $key=>$row): if($row['key2'] == 0): ?><tr><?php endif; ?>
                            <?php echo (getsign($row['key'])); ?>
                            <?php if($row['key2'] == 7): ?></tr><?php endif; endforeach; endif; ?>
                        <?php if(is_array($other)): foreach($other as $key=>$row): ?><td>-</td><?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="/jquery/5/512/demo/Public/js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            function getUrl(strs) {
                var url = "/jquery/5/512/demo/" + strs;
                return url;
            }
            function signDay(obj) {
                $.post(getUrl("Ajax/signDay"), {}, function(data) {
                    if(data == -1){
                        alert("请登录！");return false;
                    }
                    var num = obj.find("span").text();
                    var td = "<td  style='background-color:navajowhite;navajowhite ;'>\n\
  <div align='right' valign='top'><span style='position:relative;right:20px;'>" + num + "</span></div>\n\
  <div align='left'><img width='35px' height='35px' src='" + getUrl('Public') + "/images/other/cart_3.gif' alt='已签到' style='position:relative;left:10px;'>\n\
    已签到</div></td>";
                    obj.before(td);
                    obj.remove();
                    if (data > 0) {
                        alert("签到成功获取 " + data + " 积分");
                    } else {
                        alert("今天您已签到！");
                    }

                })
            }
        </script>


<!-- 以下是统计及其他信息，与演示无关，不必理会 -->

<div class="vad">
    <a href="http://www.erdangjiade.com/" target="_blank">erdangjiade.com</a>
    <a href="http://www.erdangjiade.com/js/512.html" target="_blank">说 明</a>
    <a href="http://www.erdangjiade.com/js/512.html" target="_blank">下 载</a>
</div>
<style type="text/css">
    .vad { margin: 150px 0 5px; font-family: Consolas,arial,宋体,sans-serif; text-align:center;}
    .vad a { display: inline-block; height: 36px; line-height: 36px; margin: 0 5px; padding: 0 50px; font-size: 14px; text-align:center; color:#eee; text-decoration: none; background-color: #222;}
    .vad a:hover { color: #fff; background-color: #000;}
    .thead { width: 728px; height: 90px; margin: 0 auto; border-bottom: 40px solid #fff;}
</style>


<div style="width:1100px;margin:12px auto" class="clearfix">
    <div style="width:700px;float:left">
        <script type="text/javascript">
            /*700*90 创建于 2015-06-27*/
            var cpro_id = "u2176575";
        </script>
        <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
    </div>
    <div style="width:400px;float:left">
        <script type="text/javascript">
            /*400*90 创建于 2015-06-27*/
            var cpro_id = "u2176586";
        </script>
        <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
    </div>
</div>