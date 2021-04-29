<!--<nav class="main-nav">-->
<!--    <ul>-->
<!--        <li><a class="sl2" href="/"><img class="nav_basket" src="/startIMG/logo.png" alt="img"><span class="dh">DeliciousHouse</span></a>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <ul class="ulMenu">-->
<!--        <li>-->
<!--            <button class="btn_nav pushmenu">-->
<!--                <svg id="nav-icon3" width="28" height="17" viewBox="0 0 28 17" fill="none"-->
<!--                     xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M0 2.5C0 1.11929 1.11929 0 2.5 0H25.5C26.8807 0 28 1.11929 28 2.5C28 3.88071 26.8807 5 25.5 5H2.5C1.11929 5 0 3.88071 0 2.5Z"-->
<!--                          fill="#FFF"/>-->
<!--                    <path d="M0 8.5C0 7.11929 1.11929 6 2.5 6H25.5C26.8807 6 28 7.11929 28 8.5C28 9.88071 26.8807 11 25.5 11H2.5C1.11929 11 0 9.88071 0 8.5Z"-->
<!--                          fill="#FFF"/>-->
<!--                    <path d="M0 14.5C0 13.1193 1.11929 12 2.5 12H25.5C26.8807 12 28 13.1193 28 14.5C28 15.8807 26.8807 17 25.5 17H2.5C1.11929 17 0 15.8807 0 14.5Z"-->
<!--                          fill="#FFF"/>-->
<!--                </svg>-->
<!--                Каталог продукции-->
<!--            </button>-->
<!--        </li>-->
<!--        <li><a class="sl" href="/templates/promotionsAndDiscounts.view.php">Акции и скидки</a></li>-->
<!--        <li><a class="sl" href="/templates/aboutStore.view.php">О магазине</a></li>-->
<!--        <li><a class="sl" href="/products/sortProducts.php?id=--><?//= $category->id ?><!--">Товары</a></li>-->
<!--        <li><a href="/baskets/index.php">-->
<!--                <div class="nav_cont"><img class="nav_basket" src="/startIMG/корзина.png" alt="img">-->
<!--                    <div class="nav_count">--><?//= count($_SESSION['basket']) ?><!--</div>-->
<!--                </div>-->
<!--            </a></li>-->
<!--    </ul>-->
<!--</nav>-->

<div class="navbar">
    <div class="logo">
        <ul>
            <li><a class="sl2" href="/"><img class="nav_logo" src="/startIMG/logo.png" alt="img"><span class="dh">DeliciousHouse</span></a>
            </li>
        </ul>
    </div>
    <ul class="links">
        <li>
            <button class="btn_nav pushmenu">
                <svg id="nav-icon3" width="28" height="17" viewBox="0 0 28 17" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 2.5C0 1.11929 1.11929 0 2.5 0H25.5C26.8807 0 28 1.11929 28 2.5C28 3.88071 26.8807 5 25.5 5H2.5C1.11929 5 0 3.88071 0 2.5Z"
                          fill="#FFF"/>
                    <path d="M0 8.5C0 7.11929 1.11929 6 2.5 6H25.5C26.8807 6 28 7.11929 28 8.5C28 9.88071 26.8807 11 25.5 11H2.5C1.11929 11 0 9.88071 0 8.5Z"
                          fill="#FFF"/>
                    <path d="M0 14.5C0 13.1193 1.11929 12 2.5 12H25.5C26.8807 12 28 13.1193 28 14.5C28 15.8807 26.8807 17 25.5 17H2.5C1.11929 17 0 15.8807 0 14.5Z"
                          fill="#FFF"/>
                </svg>
                Каталог продукции
            </button>
        </li>
        <li><a class="sl" href="/templates/promotionsAndDiscounts.view.php">Акции и скидки</a></li>
        <li><a class="sl" href="/templates/aboutStore.view.php">О магазине</a></li>
        <li><a class="sl" href="/products/sortProducts.php?id=<?= $category->id ?>">Товары</a></li>
        <li><a href="/baskets/index.php">
                <div class="nav_cont"><img class="nav_basket" src="/startIMG/корзина.png" alt="img">
                    <div class="nav_count"><?= isset($_SESSION['basket']) ? count($_SESSION['basket']) : 0?></div>
                </div>
            </a></li>
    </ul>
    <div class="toggle">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</div>
<script>
    const navbar = document.querySelector(".navbar");
    navbar.querySelector(".toggle").addEventListener("click", () => {
        navbar.classList.toggle("collapsed");
    });
    window.addEventListener("scroll", e => {
        let windowY = window.pageYOffset;
        let navbarHeight = document.querySelector(".navbar").offsetHeight;
        if (windowY > navbarHeight) navbar.classList.add("sticky");
        else navbar.classList.remove("sticky");
    });
</script>