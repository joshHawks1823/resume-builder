<?php

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['tempDir' => '/tmp']); // init object like this

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $url = $_POST['url'];
  $url2 = $_POST['url2'];
  $url3 = $_POST['url3'];
  $summary = $_POST['summary'];
  $exp1 = $_POST['exp1'];
  $exp2 = $_POST['exp2'];
  $education = $_POST['education'];
}


// <img width='125' height='125' style='max-width: 100%;' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSppkoKsaYMuIoNLDH7O8ePOacLPG1mKXtEng&usqp=CAU' alt='Daniel Żaczek'>


// <h1 class='naglowek'>Curriculum Vitae</h1>
// <h3 class='naglowek3'>Contact details</h3>



$html = "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title></title>
    <link href='style.css' rel='stylesheet'>
    <script defer src='js/script.js'></script>
</head>
<body contenteditable>
    <h2>$name</h2>
    <p class='header-content'> <strong>Phone</strong>: $phone |
    <strong>Email</strong>: $email
    <br>
    <strong>Website</strong>: $url 
    <br>
    <strong>Linkedin</strong>: $url2
    <br>
    <strong>Github</strong>: $url3
    </p>
    <h3 class='naglowek3'>Summary</h3>
    <p>$summary</p>
    <h3 class='naglowek3'>Relevant Experience</h3>
    <div class='projects'>
    <p>$exp1</p>
    </div>
    <h3 class='naglowek3'>Work Experience</h3>
    <p>$exp2</p>
    <h3 class='naglowek3'>Education</h3>
    <p>$education</p>


</body>

</html>";
$stylesheet = file_get_contents('style.css');

$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->WriteHTML('');
$mpdf->Output();
