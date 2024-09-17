<!-- Kelompok 4 PBP Kelas B:
        Achmad Ivan Yugava                 24060122140153                 
        Rosa Yohana Sinaga                 24060122120009
        Adzkiya Qarina Salsabila           24060122140138
        Zahra Nisaa' Fitria Nur'Afifah     24060122140162  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sign On Form</title>
    <style>
        /* Tampilan umum dari seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Kontainer formulir */
        .form-container {
            background-color: white;
            width: 50%;
            margin: 50px auto;
            padding: 0;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
        }

        /* Tampilan judul formulir */
        .form-header {
            background-color: #DCDCDC;
            padding: 20px;
            border-bottom: 1px solid #ddd;
            font-size: 24px;
            text-align: left;
            font-weight: bold;
        }

        /* Table layout untuk formulir */
        table {
            width: 100%;
            margin: 0;
            padding: 20px;
            border-spacing: 0;
            border-collapse: collapse;
        }

        /* Mengatur tampilan sel-sel tabel */
        td {
            padding: 15px;
            vertical-align: middle;
            border: 1px solid #ccc; 
        }

        label {
            display: inline-block;
            margin-bottom: 5px;
            font-weight: bold;
            padding-right: 10px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 95%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"], input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Tombol submit */
        button {
            display: block;
            width: 30%; 
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin: 20px auto; 
        }

        button:hover {
            background-color: #45a049;
        }

        .note {
            font-size: 12px;
            color: #888;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <!-- Form Header Section -->
        <div class="form-header">
            Student Sign On Form
        </div>
        <form action="process.php" method="POST">
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td>
                        <input type="text" id="username" name="username" required>
                        <p class="note">Note: Username cannot contain numbers</p>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td>
                        <input type="email" id="email" name="email" required>
                        <p class="note">Note: Email must contain @ followed by domain</p>
                    </td>
                </tr>
                <tr>
                    <td><label for="university">Perguruan Tinggi:</label></td>
                    <td><input type="text" id="university" name="university" required></td>
                </tr>
                <tr>
                    <td><label for="program">Program Studi:</label></td>
                    <td>
                        <input type="radio" id="informatika" name="program" value="Informatika" required>
                        <label for="informatika">Informatika</label><br>
                        <input type="radio" id="matematika" name="program" value="Matematika" required>
                        <label for="matematika">Matematika</label><br>
                        <input type="radio" id="fisika" name="program" value="Fisika" required>
                        <label for="fisika">Fisika</label><br>
                        <input type="radio" id="kimia" name="program" value="Kimia" required>
                        <label for="kimia">Kimia</label><br>
                        <input type="radio" id="statistika" name="program" value="Statistika" required>
                        <label for="statistika">Statistika</label><br>
                        <input type="radio" id="biologi" name="program" value="Biologi" required>
                        <label for="biologi">Biologi</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="hobby">Hobi:</label></td>
                    <td>
                        <input type="checkbox" id="futsal" name="hobby[]" value="Futsal">
                        <label for="futsal">Futsal</label><br>
                        <input type="checkbox" id="badminton" name="hobby[]" value="Badminton">
                        <label for="badminton">Badminton</label><br>
                        <input type="checkbox" id="membaca" name="hobby[]" value="Membaca">
                        <label for="membaca">Membaca</label><br>
                        <input type="checkbox" id="menulis" name="hobby[]" value="Menulis">
                        <label for="menulis">Menulis</label><br>
                        <input type="checkbox" id="travelling" name="hobby[]" value="Travelling">
                        <label for="travelling">Travelling</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td>
                        <input type="password" id="password" name="password" required>
                        <p class="note">Hint: Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, and one number.</p>
                    </td>
                </tr>
            </table>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
