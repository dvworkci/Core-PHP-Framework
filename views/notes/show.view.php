<!-- HEAD  -->
<?php require base_path("views/partials/head.php"); ?>
<!-- HEAD END -->

<!-- NAV BAR  -->
<?php require base_path("views/partials/nav.php"); ?>
<!-- NAV BAR END -->

<!-- HEADER  -->
<?php require base_path("views/partials/header.php"); ?>
<!-- HEADER END -->

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>

        <p>
            <?= $note['body'] ?>
        </p>

        <form action="" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
        </form>
    </div>
</main>

<!-- FOOTER  -->
<?php require base_path("views/partials/footer.php"); ?>
<!-- FOOTER END -->