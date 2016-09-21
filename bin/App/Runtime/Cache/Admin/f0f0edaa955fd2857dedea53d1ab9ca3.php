<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="">

  <title>cms内容管理平台</title>

  <!-- Bootstrap core CSS -->
  <link href="/bin/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="/bin/Public/Admin/css/login.css" rel="stylesheet">
  <!-- Custom styles for this template -->




  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>

  <![endif]-->
</head>

<body>

<div class="s_center container col-lg-6 wap_col">

    <form class="form-signin" enctype="multipart/form-data"  method="post">
      <h2 class="form-signin-heading signin">后台登录</h2>
      <label class="sr-only">用户名</label>
      <input type="text"  class="form-control" name="name" placeholder="请填写用户名" required autofocus>
      <br />
      <label  class="sr-only">密码</label>
      <input type="pass" name="pass" id="inputPassword" class="form-control" placeholder="密码" required>
      <br />
       <label class="sr-only">验证码</label>
       <input type="text"  class="form-control Math" name="sr_code" placeholder="验证码" required autofocus>
       <img src="/bin//admin/login/verify" onclick="this.src='/bin/admin/login/verify/id/'+Math.random()">
      <br />
      <br />
        <button class="btn btn-lg btn-primary btn-block btn-ton" type="button" onclick="login.login_cheke()">登录</button>
    </form>

</div> <!-- /container -->
<script src="/bin/Public/Admin/js/jquery.js"></script>
<script src="/bin/Public/Admin/js/dialog/layer.js"></script>
<script src="/bin/Public/Admin/js/dialog.js"></script>
<script src="/bin/Public/Admin/js/admin/login.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script>
    var SCOPE =  {
        'aurl':'<?php echo U('index/index');?>',
        'lourl':'<?php echo U('Login/login');?>'
    }
</script>
</body>
</html>