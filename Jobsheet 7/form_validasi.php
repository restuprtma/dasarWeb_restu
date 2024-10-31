<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <div id="nama-error" style="color: red;"></div>
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <div id="email-error" style="color: red;"></div>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <div id="password-error" style="color: red;"></div>
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                event.preventDefault(); // Mencegah pengiriman form default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi email
                if (email === "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi password
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Jika valid, kirim data menggunakan AJAX
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: $(this).serialize(),
                        success: function (response) {
                            // Tampilkan respons dari server
                            alert("Data berhasil dikirim: " + response);
                        },
                        error: function () {
                            alert("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
