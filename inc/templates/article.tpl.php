<article class="card">
    <div class="card-body">
        <h2 class="card-title">
            <?= $articleToDisplay->title ?>
        </h2>
        <p class="card-text">
            <?= $articleToDisplay->content ?>
        </p>
        <p class="infos">
            Posté par <a href="#" class="card-link"><?= $dataAuthorsList[$articleToDisplay->author_id]->firstname ?></a> le <time datetime="<?= $articleToDisplay->date ?>"><?= $articleToDisplay->getDateFr() ?></time> dans <a href="#"
            class="card-link"><?= $dataCategoriesList[$articleToDisplay->category_id]->category ?></a>
        </p>
    </div>
</article>
