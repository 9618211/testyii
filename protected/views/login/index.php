<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>yii后台登陆</title>
  <script type="text/javascript" src="/statics/js/jquery-1.6.4.js" ></script>
  <script type="text/javascript" src="/statics/js/custom_jquery.js" ></script>
  <link rel="stylesheet" type="text/css" href="/statics/css/screen.css"> 
</head>
<body id="login-bg">
  <div id="login-holder">
    <div id="logo-login">

    </div>
    <div class="clear"></div>
    <div id="loginbox">
      <div id="login-inner">
        <form name="myform" action="index" method="post" class="myform">
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <th>Username</th>
              <td><input type="text" name="username" class="login-inp" /></td>
            </tr>
            <tr>
              <th>Password</th>
              <td><input type="password" name="password" value="************"  onfocus="this.value=''" class="login-inp" /></td>
            </tr>
            <tr>
              <th></th>
              <td valign="top">
                <input type="checkbox" class="checkbox-size" id="login-check" />
                <label for="login-check">Remember me</label>
              </td>
            </tr>
            <tr>
              <th></th>
              <td><input type="submit" class="submit-login"  /></td>
            </tr>
          </table>
        </form>
      </div>
      <!--  end login-inner -->
      <div class="clear"></div>
      <a href="" class="forgot-pwd">Forgot Password?</a>
    </div>
    <!--  end loginbox -->

    <!--  start forgotbox ................................................................................... -->
    <div id="forgotbox">
      <div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
      <!--  start forgot-inner -->
      <div id="forgot-inner">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th>Email address:</th>
            <td><input type="text" value=""   class="login-inp" /></td>
          </tr>
          <tr>
            <th> </th>
            <td><input type="submit" class="submit-login"  /></td>
          </tr>
        </table>
      </div>
      <!--  end forgot-inner -->
      <div class="clear"></div>
      <a href="" class="back-login">Back to login</a>
    </div>
    <!--  end forgotbox -->
  </div>
</div>
</body>
</html>