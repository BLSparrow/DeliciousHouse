<h1 style="text-align: center">Новинки</h1>
<div class="cards">
    <?php foreach ($products as $product): ?>
        <div class="card">
            <div><img src="/IMG/<?= $product->image ?>" alt="img"></div>
            <div><?= $product->name ?></div>
            <div><?= $product->description ?></div>
            <div><?= $product->weight ?></div>
        </div>
    <?php endforeach; ?>
</div>