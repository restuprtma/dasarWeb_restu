<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="proses_form.php">
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email : </label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>