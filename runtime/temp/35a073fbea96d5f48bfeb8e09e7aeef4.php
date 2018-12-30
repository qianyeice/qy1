<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\Users\Administrator\Desktop\file/application/index\view\index\em.html";i:1543812172;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="/public/static/js/jq.js"></script>
</head>
<body>
<input id="email" type="text" placeholder="phone">
<input type="submit" onclick="sendEmail($('#email').val())" value="验证码发送"><br>
<input type="text" id="email2" placeholder="验证码" value="12345">
<button onclick="sendEmails($('#email2').val())">验证</button>
<input type="password" placeholder="新密码" value="abcd1234">
<input type="button" value="提交"  disabled id="submit">
</body>
<script>
    function sendEmail(email) {
        $.post('<?php echo url('index/emsend'); ?>',{phone:email},function (e) {
            switch (e.k){
                case 1:
                    alert("成功")
                    break;
                default:
                    alert('失败')
                    break;
            }
        })
    }
    function sendEmails(email) {
        $.post('<?php echo url('index/emsend2'); ?>',{cody:email},function (e) {
            switch (e.k){
                case 1:

                    alert("成功")
                    break;
                default:
                    alert('失败')
                    break;
            }
        })
    }
</script>
</html>