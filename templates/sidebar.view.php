<nav class="sidebar">
    <div class="text d-flex p-2">
        <a href="#tel-modal">Категории товаров</a>
        <div id="nav-icon3" class="pushmenu opened">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="menu-main-menu-container">
        <ul id="menu-main-menu">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><img style="width: 50px;" src="../IMG/<?= $category->image ?>"
                                     alt="img"><?= $category->name ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
<div class="hidden-overley"></div>