<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">Hello Sri Lanka</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <?php foreach ($menu as $key => $value) : ?>
                <a class="nav-link text-white py-1 px-2 <?= $key === $page ? 'fw-bold text-bg-secondary' : '' ?>" 
                    href="/index.php?page=<?= $key ?>">
                    <?= $value ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

