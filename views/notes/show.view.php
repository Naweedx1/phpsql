<?php
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php');
?>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <p>Notes</p>

    <p class="mb-6">
        <a href="/notes" class="text-blue-500 underline">Go Back</a>
    </p>
    <p> <?= htmlspecialchars($note['body']); ?></p>

    <form method="POST" class="mt-6">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id']; ?>">
        <button class="text-sm text-red-500">Delete</button>
    </form>

</div>

<?php require base_path("views/partials/footer.php"); ?>