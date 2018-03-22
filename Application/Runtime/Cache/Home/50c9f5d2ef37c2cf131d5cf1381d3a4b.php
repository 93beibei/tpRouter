<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <title>Document</title>
</head>
<body>
<div>
    用户名：<input type="text" name="username" value="">
    密码：<input type="password" name="pwd" value="">
</div>
<br>
<div>
    <button id="sub">登陆</button>
</div>
</body>
</html>


<script type="text/javascript">
    $(function () {
        $('#sub').click(function(){
             var username = $('input[name="username"]').val();
             var pwd = $('input[name="pwd"]').val();

             if(username == null || username == undefined || username == ''){
                 alert('用户名不能为空');
                 return false;
             }

            if(pwd == null || pwd == undefined || pwd == ''){
                alert('密码不能为空');
                return false;
            }


            $.post("<?php echo U('home/Login/loginIndx');?>" , {username : username , pwd : pwd} , function(data){
                if(data.status < 0){
                   alert(data.msg);
                   return false;
                }

                if(data.status == 1){
                    location.href = "<?php echo U('home/Login/welcome');?>"
                }
            })

        })
    })

</script>