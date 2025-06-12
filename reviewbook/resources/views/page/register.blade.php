<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
        @csrf
        <label>First Name:</label><br><br>
        <input type="text" name="firstname"> <br><br>
        <label>Last Name:</label><br><br>
        <input type="text" name="lastname"> <br><br>
        <label>Gender</label><br><br>
        <input type="radio" name="gender">Male<br>
        <input type="radio" name="gender">Female<br>
        <input type="radio" name="gender">Other<br><br>
        <label>Nationality</label><br><br>
        <select name="nationality">
            <option value="indonesia">Indonesian</option>
            <option value="singapore">Singapore</option>
            <option value="malaysia">Malaysia</option>
            <option value="australia">Australia</option>
            <option value="japan">Japan</option>
        </select><br><br>
        <label>Language Spoken</label><br><br>
        <input type="checkbox" name="language">Bahasa Indonesia<br>
        <input type="checkbox" name="language">English<br>
        <input type="checkbox" name="language">Other<br><br>
        <label>Bio</label><br><br>
        <textarea name="bio" rows="10" cols="30"></textarea><br>
        <input type="Submit" value="Sign Up"> 

        </form>
</body>
</html>