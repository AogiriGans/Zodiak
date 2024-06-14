<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cek Zodiak</title>
<style>
  form {
    width: 50%;
    margin: 0 auto;
    text-align: center;
  }
  input[type="text"], input[type="date"], input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
  }
</style>
</head>
<body>
<h1>Cek Zodiak</h1>
<form action="result.php" method="post">
  <label for="name">Nama Pengguna:</label><br>
  <input type="text" id="name" name="name" required><br>
  <label for="birthdate">Tanggal Lahir Pengguna:</label><br>
  <input type="date" id="birthdate" name="birthdate" required><br>
  <input type="submit" value="Cek Zodiak">
</form>
</body>
</html>