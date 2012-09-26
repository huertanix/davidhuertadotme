<!DOCTYPE html>
<html>
<!--
  davidhuerta.me
  cool story bro
  webmaster david{at}hayst.ac
  http://www.davidhuerta.me
  copyright (c) <?php echo date("Y"); ?> David Huerta. Distributed under the CDL license: http://supertunaman.com/cdl/
-->
<head>
  <?php include("head.php"); ?>
</head>
<body>
  <?php include("header.php"); ?>
  <div class="contentContainer">
<?php
  if (isset($_POST['txtContactName'])
    && isset($_POST['txtContactEmail'])
    && isset($_POST['txtContactMessage'])
    && isset($_POST['txtContactMeatPopsicle'])) {
      // These be CONSTANT
      $ROBOT_CHECK = 'I am a meat popsicle';
      $TO_ADDRESS = 'huertanix' . '@opentil.com';      
      // No need to escape for bobby tables, but we do need to think of the newlines
      $sanitizedName = stripslashes(trim(htmlentities($_POST['txtContactName'])));
      $sanitizedEmail = trim(htmlentities($_POST['txtContactEmail']));
      $sanitizedMessage = stripslashes(trim(htmlentities($_POST['txtContactMessage'])));
      $sanitizedMeatPopsicle = trim(htmlentities($_POST['txtContactMeatPopsicle']));
      
      $isHooman = $sanitizedMeatPopsicle == $ROBOT_CHECK;
      $isNameValid = !empty($sanitizedName);
      $isMessageValid = !empty($sanitizedMessage);
      $isEmailValid = eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$', $sanitizedEmail);
        
      if ($isHooman
        && $isNameValid
        && $isMessageValid
        && $isEmailValid) {
        // Maybe eventually make this a drop-down selection?
        $subject = 'Message from ' . $sanitizedName . ' via davidhuerta.me';
        $headers = 'From: ' . $sanitizedEmail . "\r\n"
          . 'Reply-To: ' . $sanitizedEmail . "\r\n"
          . 'X-Mailer: PHP/' . phpversion();
          // gogogo
        @mail($TO_ADDRESS, $subject, $sanitizedMessage, $headers);
?>
      <div class="grandNotification">
        <h1>Message delivered!</h1>
        <p>Redirecting to main page...</p>
      </div>
      <script type="text/javascript">
        setTimeout('window.location = "index.php"', 3000);
      </script>
<?php
      }
      else {
        echo '<div class="grandFailNotification"><h1>You done goofed, kid.</h1>';
        // As much as I rant about ASP.NET, ValidationSummary was quite handy...            
        $failList = '<p>';
        
        if (!$isHooman)
            $failList .= 'Go see the Fifth Element. ';
            
        if (!$isNameValid)
            $failList .= 'Blank name is blank. ';
            
        if (!$isMessageValid)
            $failList .= 'Blank message is blank. ';
            
        if (!$isEmailValid)
            $failList .= 'E-mail address is invalid. ';
        
        //$failList .= '</p>';
        $failList .= '<br />Please go <a href="#" onclick="history.go(-1);return false;">back</a> and try again.</p></div>';
        
        echo $failList;
      }
    }
?>
    </div>
    <?php include("footer.php"); ?>
    <?php include("woopra.php"); ?>
  </body>
</html>