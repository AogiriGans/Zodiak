<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Zodiak</title>
<style>
  h1 {
    text-align: center;
  }
</style>
</head>
<body>
<h1>Hasil Zodiak</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $birthdate = $_POST['birthdate'];

  $zodiacSigns = array(
    'Aries' => array('03-21', '04-19'),
    'Taurus' => array('04-20', '05-20'),
    'Gemini' => array('05-21', '06-20'),
    'Cancer' => array('06-21', '07-22'),
    'Leo' => array('07-23', '08-22'),
    'Virgo' => array('08-23', '09-22'),
    'Libra' => array('09-23', '10-22'),
    'Scorpio' => array('10-23', '11-21'),
    'Sagittarius' => array('11-22', '12-21'),
    'Capricorn' => array('12-22', '01-19'),
    'Aquarius' => array('01-20', '02-18'),
    'Pisces' => array('02-19', '03-20')
  );

  $birthdateFormatted = date('m-d', strtotime($birthdate));

  $zodiacSign = '';
  foreach ($zodiacSigns as $sign => $dates) {
    if ($birthdateFormatted >= $dates[0] && $birthdateFormatted <= $dates[1]) {
      $zodiacSign = $sign;
    }
  }

  echo "<p>Nama Pengguna: $name</p>";
  echo "<p>Zodiak Pengguna: $zodiacSign</p>";
}
?>
</body>
</html>