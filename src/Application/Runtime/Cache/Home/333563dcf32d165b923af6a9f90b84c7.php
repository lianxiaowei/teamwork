<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        学生信息管理平台
    </title>
    <link href="/test/Public/css/StudentStyle.css" rel="stylesheet" type="text/css" />
    <link href="/test/Public/css/jBox/Skins/Blue/jbox.css" rel="stylesheet" type="text/css" />
    <link href="/test/Public/css/ks.css" rel="stylesheet" type="text/css" />
    <script src="/test/Public/js/jBox/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="/test/Public/js/jBox/jquery.jBox-2.3.min.js" type="text/javascript"></script>
    <script src="/test/Public/js/jBox/i18n/jquery.jBox-zh-CN.js" type="text/javascript"></script>
    <script src="/test/Public/js/Common.js" type="text/javascript"></script>
    <script src="/test/Public/js/Data.js" type="text/javascript"></script>
    <script type="text/javascript">
        $().ready(function () {
            setStudMsgHeadTabCheck();
            showUnreadSysMsgCount();
        });

        //我的信息头部选项卡
        function setStudMsgHeadTabCheck() {
            var currentUrl = window.location.href;
            currentUrl = currentUrl.toLowerCase();
            var asmhm = "";
            $("#ulStudMsgHeadTab li").each(function () {
                asmhm = $(this).find('a').attr("href").toLowerCase();
                if (currentUrl.indexOf(asmhm) > 0) {
                    $(this).find('a').attr("class", "tab1");
                    return;
                }
            });
        }

        //显示未读系统信息
        function showUnreadSysMsgCount() {
            var unreadSysMsgCount = "0";
            if (Number(unreadSysMsgCount) > 0) {
                $("#unreadSysMsgCount").html("(" + unreadSysMsgCount + ")");
            }
        }

        //退出
        function loginOut() {
            if (confirm("确定退出吗？")) {
                StudentLogin.loginOut(function (data) {
                    if (data == "true") {
                        window.location = "/Login.aspx";
                    }
                    else {
                        jBox.alert("退出失败！", "提示", new { buttons: { "确定": true } });
                    }
                });
            }
        }
        //更改报考类别
        function changeCateory(thisObj, id) {
            var oldCateoryId = $("#cateoryId").val();
            var cateoryId = "";
            if (id != null) {
                cateoryId = id;
            }
            else {
                cateoryId = thisObj.val();
            }
            var studentId = $("#studentId").val();
            if (cateoryId.length <= 0) {
                jBox.tip("报考类别不能为空！");
                if (id == null) {
                    thisObj.val(oldCateoryId);
                }
            }
            else {
                studentInfo.changeStudentCateory(cateoryId, function (data) {
                    var result = $.parseJSON(data);
                    if ((String(result.ok) == "true")) {
                        window.location.href = "/Index.aspx";
                    }
                    else {
                        jBox.tip(result.message);
                    }
                });
            }
        }
    </script>

    <script type="text/javascript" language="javascript">
        function changePassword() {
            var oldPwd = $("#txtOldPwd").val();
            var newPwd = $("#txtNewPwd").val();
            var confirmNewPwd = $("#txtConfirmNewPwd").val();

            if (oldPwd == "" || newPwd == "" || confirmNewPwd == "") {
                $.jBox.tip("旧密码或新密码或确认新密码不能为空！", 'error');
                return false;
            }
            if (oldPwd.length < 6 || oldPwd.length > 16) {
                $.jBox.tip("旧密码为6~16个字符，区分大小写！", 'error');
                return false;
            }
            if (newPwd.length < 6 || newPwd.length > 16) {
                $.jBox.tip("新密码为6~16个字符，区分大小写！", 'error');
                return false;
            }
            if (newPwd != confirmNewPwd) {
                $.jBox.tip("新密码两次输入不一致！", 'error');
                return false;
            }

            studentAccount.changePassword(oldPwd, newPwd, function (data) {
                var obj = $.parseJSON(data);
                if (obj.ok) {
                    jBox.alert(obj.message, "提示");
                    setTimeout(function () {
                        window.location.reload();
                    }, 1500);
                }
                else {
                    jBox.tip(obj.message, 'error');
                }
            });
        }
    </script>
    <style type="text/css">
        .txtinput1 {
            width: 180px;
        }
    </style>
</head>

<body>

    <div class="banner">
        <div class="bgh">
            <div class="page">
                <div id="logo">
                    <a href="../../Index.aspx.html">
                        <img src="/test/Public/Images/Student/logo.gif" alt="" width="165" height="48" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="box mtop">
            <div class="leftbox">
                <!-- <div class="l_nav2">
                    <div class="ta1">
                        <strong>个人中心</strong>
                        <div class="leftbgbt">
                        </div>
                    </div>
                    <div class="cdlist">
                        <div><a href="<?php echo U('Index:my_info');?>">我的信息</a></div>
                        <div><a href="<?php echo U('Index:my_grade');?>">我的成绩 </a></div>
                        <div>
                            <a href="#">短信息</a></div>
                        <div>
                            <a href="#">学院通知</a></div>
                        <div>
                            <a href="#">我的异议</a></div>
                    </div>
                    <div class="ta1">
                        <strong>教务中心</strong>
                        <div class="leftbgbt2">
                        </div>
                    </div>
                    
                    <div class="cdlist">
                        <div>
                            <a href="<?php echo U('Index:changepass');?>">密码修改</a></div>
                        <div>
                            <a href="<?php echo U('index:logout');?>">安全退出</a></div>
                    </div>
                </div> -->
            </div>
            <div class="rightbox">

                <h2 class="mbx">我的信息 &gt; 密码修改</h2>
                <div class="cztable">
                    <form action="<?php echo U('Index:changeps');?>" method="post">
                    <table border="0" cellspacing="0" cellpadding="0" width="500px" style="margin:30px auto 0px auto;">
                        <tr align="center">
                            <th style="width:20%; text-align:left;">旧密码：</th>
                            <td style="width:70%; text-align:left;"><input id="txtOldPwd" value="" type="password" class="input_2 txtinput1" /></td>
                        </tr>
                        <tr align="center">
                            <th style="width:20%; text-align:left;">新密码：</th>
                            <td style="width:70%; text-align:left;"><input id="txtNewPwd" value="" type="password" class="input_2 txtinput1" name="password" />&nbsp;&nbsp;6~16个字符，区分大小写</td>
                        </tr>
                        <tr align="center">
                            <th style="width:20%; text-align:left;">确认新密码：</th>
                            <td style="width:70%; text-align:left;"><input id="txtConfirmNewPwd" value="" type="password" class="input_2 txtinput1" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;"><input type="submit" id="btnSubmit" value="确认修改"  class="input2" /></td>
                        </tr>
                    </table>
                </form>
                </div>

            </div>
        </div>
        <div class="footer">
            
              
        </div>
    </div>
</body>

</html>