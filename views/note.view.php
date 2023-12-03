<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <p>Notes</p>

<p class="mb-6">
    <a href="/notes" class="text-blue-500 underline">Go Back</a>
</p>
    <p> <?= $note['body']; ?></p>

</div>

<?php require("partials/footer.php"); ?>