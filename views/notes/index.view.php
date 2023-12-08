<?php
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php');
?>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <p>Notes</p>

    <ul>
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <a href="/notes/create">Create Note</a>
</div>

<?php require base_path("views/partials/footer.php"); ?>