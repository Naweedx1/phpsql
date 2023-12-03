<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <p>Notes</p>

    <?php foreach ($notes as $note) : ?>
        <li>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                <?= $note['body']; ?>
            </a>
        </li>
    <?php endforeach; ?>

</div>

<?php require("partials/footer.php"); ?>