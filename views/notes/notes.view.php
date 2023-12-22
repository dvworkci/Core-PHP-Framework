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
        <ul>
            <?php foreach ($notes as $note): ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Note</a>
        </p>
    </div>
</main>

<!-- FOOTER  -->
<?php require "partials/footer.php"; ?>
<!-- FOOTER END -->