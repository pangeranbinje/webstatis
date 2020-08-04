<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>
    <form action="/welcom" method="POST">
        @csrf 
        <label for="nama_depan">First Name:</label><br><br>
        <input type="text" id="nama_depan" name="nama_depan"><br><br>
        <label for="nama_blkg">Last Name:</label><br><br>
        <input type="text" id="nama_blkg" name="nama_blkg"><br><br>
        <label>Gender</label><br><br>
        <input type="radio" value="0">Male<br>
        <input type="radio" value="1">Female<br>
        <input type="radio" value="2">Other
        <br><br>
        <label>Nationality:</label><br><br>
        <select>
            <option value="0">Indonesia</option>
            <option value="1">Malaysia</option>
            <option value="2">Singapura</option>
            <option value="3">Thailand</option>
        </select><br><br>
        <label>Language Spoken</label><br><br>
        <input type="checkbox" value="0">Bahasa Indonesia<br>
        <input type="checkbox" value="1">English<br>
        <input type="checkbox" value="2">Other<br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea cols="30" rows="10" id="bio"></textarea> <br>
        <input type="submit" value="Sign Up">


    </form>
</body>
</html>