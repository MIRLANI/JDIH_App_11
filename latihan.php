<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Form</title>
    <!-- <style>
        ul {
            list-style-type: none;
            padding: 0;
        }
    </style> -->
</head>
<body>
    <h2>Abstract Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <textarea name="abstract_text" rows="8" cols="50"></textarea><br><br>
        <input type="submit" name="submit" value="Generate Abstract">
    </form>

    <ul> 
        <li>lani </li>
    </ul>
    
    <?php
    // Proses input ketika tombol submit ditekan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari textarea
        $abstract_text = $_POST['abstract_text'];

        // Memecah teks abstrak menjadi poin-poin
        $abstract_points = explode("\n", $abstract_text);

        // Tampilkan poin-poin abstrak
        echo "<h3>Abstract Points:</h3>";
        echo "<ul>";
        foreach ($abstract_points as $point) {
            $point = trim($point); // Menghapus spasi di awal dan akhir setiap poin
            if (!empty($point)) {
                echo "<li>$point</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
