<?php 
$ans = $_POST['answers'];
$data = [
    'email'     => $_POST['email'],
    'status'    => 'subscribed',
    'firstname' => $_POST['name'],
    'answers' => $ans,
];
syncMailchimp($data);

$to      = 'personalityprofilingquiz@gmail.com';
$subject = 'Notification';
$message = '

Name: '.$_POST['name'].'

Email: '.$_POST['email'].'

Answers: '.$ans.'

';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

function syncMailchimp($data) {
	
    $apiKey = '41fee12101103ea2e61a87e554a387ef-us9';
    $listId = '45a6836ee2';

    $memberId = md5(strtolower($data['email']));
    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

    $json = json_encode([
        'email_address' => $data['email'],
        'status'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"
        'merge_fields'  => [
            'FNAME'     => $data['firstname'],
            'ANSWERS'   => $data['answers']
        ]
    ]);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
}
			
			
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Processing</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
<script>
  	  $(document).ready(function(){
			setTimeout('submitform()', 3000)
      });
	  function submitform() {
		$("#frmsubmit").submit();
	  }
</script>

</head>
<body>
<form id="frmsubmit" method="POST" action="results.php">
	<input type="hidden" name="answers" id="answers" value="<?php echo $_POST['answers'];?>"/>
	<input type="submit" style="width:0px;height:0px;visibility:hidden;"/>
</form>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="full column" style="margin-top: 15%">
        <center><h2><strong>Generating Result<strong></h2></center>
		<center><h4 style="margin-bottom:5px;">Please Wait...</h4></center>
		<center><img src="Processing.gif"/></center>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>