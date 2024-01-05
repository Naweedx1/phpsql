<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>

<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p>Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>. Welcome</p>
</div>

<?php require("partials/footer.php"); ?>