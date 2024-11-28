<header>
    <h1>ABC Food</h1>
    <nav>
        <a href="index.php" class="<?= empty($_GET['p']) ? 'active' : '' ?>">Home</a>
        <a href="?p=about_page" class="<?= isset($_GET['p']) && $_GET['p'] == 'about_page' ? 'active' : '' ?>">About</a>
        <a href="?p=menu_page" class="<?= isset($_GET['p']) && $_GET['p'] == 'menu_page' ? 'active' : '' ?>">Menu</a>
        <a href="?p=contact_page" class="<?= isset($_GET['p']) && $_GET['p'] == 'contact_page' ? 'active' : '' ?>">Contact</a>
    </nav>
</header>
