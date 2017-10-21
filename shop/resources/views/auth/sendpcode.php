  <?php

    // echo $email;
    // echo $pcode;
    // exit;
    function send_mail() {
    $email=$_GET['email'];
    $pcode=$_GET['pcode'];
      $url = 'http://api.sendcloud.net/apiv2/mail/send';
      $API_USER = 'zhexiaolong_test_YFAWCy';
      $API_KEY = '6U6wJSwJ7Rrc8LiM';
      $vars = json_encode( array("to" => array($email),
          "sub" => array("%code%" => Array('123456'))
)
);

      //您需要登录SendCloud创建API_USER，使用API_USER和API_KEY才可以进行邮件的发送。
      $param = array(
          'apiUser' => $API_USER,
          'apiKey' =>  $API_KEY,
          'from' => 'service@sendcloud.im',
          'fromName' => '软科商城的问候',
          'xsmtpapi' => $vars,
          'templateInvokeName' => 'test_template',
          'subject' => '尊敬的客户,谢谢您注册软科商城',
          'html' => '您的验证码是'.$pcode.'仅注册有效',
          'respEmailId' => 'true');

    $data = http_build_query($param);

    $options = array(
          'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-Type: application/x-www-form-urlencoded',
          'content' => $data
    ));

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    return $result;
  }
echo send_mail();
