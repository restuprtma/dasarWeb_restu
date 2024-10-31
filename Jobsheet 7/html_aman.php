<!DOCTYPE html>
<html>
    <head>
        <title>Input Aman</title>
    </head>
    <body>
        <h2>Form Input Aman</h2>
        <form method="post" action="html_aman.php">
            <label for="input">Nama:</label>
            <input type="text" name="input" id="input" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>

            <input type="submit" value="Submit">
        </form>
        
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Memastikan bahwa 'input' telah dikirim
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        echo "Nama: " . $input . "<br>";
    }

    // Soal 4.2
    // Memastikan bahwa 'email' telah dikirim
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            echo "Email tidak valid!";
        }
    }
}
        ?>
    </body>
</html>