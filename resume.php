<?php

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['tempDir' => '/tmp']); // init object like this

if (isset($_POST['submit'])) {
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $website = $_POST['website'];
  $summary = $_POST['summary'];
  $exp1 = $_POST['exp1'];
  $exp2 = $_POST['exp2'];
  $education = $_POST['education'];
}

// PHP
$html = "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title></title>
    <link rel='stylesheet' href='../resume-builder/style.css'>
    <script defer src='js/script.js'></script>
</head>
<body contenteditable>
    <h2>$fullName</h2>
    <p class='header-content'> <strong>Phone</strong>: $phone_number |
    <strong>Email</strong>: $email
    <br>
    <strong>Website</strong>: $website 
    <br>
    <h3 class='header'>Summary</h3>
    <p>$summary</p>
    <h3 class='header'>Relevant Experience</h3>
    <p>$exp1</p>
    <h3 class='header'>Work Experience</h3>
    <p>$exp2</p>
    <h3 class='header'>Education</h3>
    <p>$education</p>


</body>

</html>";
$stylesheet = file_get_contents('style.css');

$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->WriteHTML('');
$mpdf->Output();
