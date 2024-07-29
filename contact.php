<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  if (isset($_POST['submit'])) {
    $to = "pranav4096@gmail.com"; // Your email address
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];
    $subject = $name . " - Contact Form Submission";
    $headers = "From:" . $from;
    $result = mail($to, $subject, $message, $headers);

    if ($result)
    {
        echo '<script type="text/javascript">alert("Your message was sent!");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

    }
    else
    {
        echo '<script type="text/javascript">alert("Oops! Your message wasn’t sent. Try again later.");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
    }
  }
?>
