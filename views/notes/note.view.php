<!-- HEAD  -->
<?php require "partials/head.php"; ?>
<!-- HEAD END -->

<!-- NAV BAR  -->
<?php require "partials/nav.php"; ?>
<!-- NAV BAR END -->

<!-- HEADER  -->
<?php require "partials/header.php"; ?>
<!-- HEADER END -->


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>

        <p>
            <?= $note['body'] ?>
        </p>
    </div>
</main>

<!-- FOOTER  -->
<?php require "partials/footer.php"; ?>
<!-- FOOTER END -->