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
    <p><i>Open to innovative solutions, technological novelties, incurable perfectionist, ready to take on new
            challenges, <br>always willing to collaborate. Looking for an international employer where I can use my
            language skills <br>and grow in a working environment with short deadlines that requires problem solving
            skills.</i></p>

    <h3 class='naglowek3'>Experience</h3>
    <h4>Team Leader, Perfetti van Melle BV, <br>Breda (The Netherlands)</h4>
    <p><span class='daty'> J U N E 2 0 2 2 — N O W A D A Y S</span><br><br>● planning team activities <b>(25
            persons)</b><br>
        ● resolving disputes between employees<br>● supervising the performance of team members' tasks<br>● motivating
        and supporting employees<br>● representing the team in front of other departments in the company's structures
    </p>
    <h4>All-round warehouse specialist, Ellis Enterprises B.V. / Valvoline,<br>Moerdijk, Dordrecht (The Netherlands)
    </h4>
    <p><span class='daty'>J A N U A R Y 2 0 1 9 — M A Y 2 0 2 2</span><br><br><em>● full warehouse service</em><br>●
        preparation and shipment of
        personalized orders to the Benelux countries<br>● reach truck and forklift maintenance<br>● loading and
        unloading of goods<br>● exploiting Crude Oil Distillation Products</p>

    <h3 class='naglowek3'>Education</h3>
    <p>AGH University of Science and Technology, Cracow (Poland)<br>Materials and Technologies for Energy and
        Aviation<br><br><span class='daty'>S E P T E M B E R 2 0 0 7 — J U N E 2 0 1 0</span></p>


</body>

</html>";
$stylesheet = file_get_contents('style.css');

$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->WriteHTML('<h1>hi!</h1>');
$mpdf->Output();
