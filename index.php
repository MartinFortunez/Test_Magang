<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $pages_dir = 'css';
    if (!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
        $p = $_GET['p'];
        if (in_array($p . '.css', $pages)) {
            echo "<link id='dynamic-css' rel='stylesheet' href='$pages_dir/$p.css'>";
        } 
    } else {
        echo "<link id='dynamic-css' rel='stylesheet' href='$pages_dir/landing_page.css'>";
    }
    ?>
    <link id='static-css' rel='stylesheet' href='css/styles.css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Food</title>
</head>
<body>
    <?php
    include_once ('partials/_header.php');

    $pages_dir = 'pages';
    if (!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
        $p = $_GET['p'];
        if (in_array($p . '.php', $pages)) {
            include ($pages_dir . '/' . $p . '.php');
        } else {
            echo 'Halaman Tidak Ditemukan';
        }
    } else {
        include ($pages_dir . '/landing_page.php');
    }

    include_once ('partials/_footer.php');
    ?>
</body>

<script src="js/form_validasi.js"></script>
<script src="js/carousel.js"></script>
</html>
