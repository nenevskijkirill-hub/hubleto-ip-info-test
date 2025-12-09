<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>IP Info</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .block { margin-bottom: 25px; padding: 10px; border: 1px solid #ccc; }
        .favorite { background: #f2f2f2; padding: 10px; margin-bottom: 5px; }
    </style>
</head>
<body>

<h2>IP Info Finder</h2>

<div class="block">
    <form id="ipForm">
        <label>Zadaj IP adresu:</label><br>
        <input type="text" id="ip" placeholder="8.8.8.8" required>
        <button type="submit">Vyhľadať</button>
    </form>
</div>

<div class="block" id="result"></div>

<div class="block">
    <h3>Obľúbené IP adresy</h3>
    <div id="favorites"></div>
</div>

<script src="main.js"></script>

</body>
</html>
