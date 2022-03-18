<div class="container"> <!-- </container> dans footer.tpl.php -->
<div class="row">
<div class="col-lg-8 col-md-12">

<?php foreach ($articlesList as $articleId => $articleObject) : ?>
    <article class="card">
        <div class="card-body">
            <h2 class="card-title">
                <a href="index.php?page=article&id=<?= $articleId ?>"><?= $articleObject->title ?></a>
            </h2>
            <p class="card-text">
                <?= $articleObject->content ?>
            </p>
            <p class="infos">
                Posté par <a href="#" class="card-link"><?= $articleObject->author ?></a> le <time datetime="<?= $articleObject->date ?>"><?= $articleObject->getDateFr() ?></time> dans <a href="index.php?page=category&id=<?= $categoriesId ?>"
            class="card-link"><?= $articleObject->category ?></a>
            </p>
        </div>
    </article>
<?php endforeach; ?>

<!-- Je met un element de navigation: https://getbootstrap.com/docs/5.0/components/pagination/ -->
<nav aria-label="Page navigation example" class="mb-4">
    <ul class="pagination justify-content-between">
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
        <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
    </ul>
</nav>
</div>




    <div class="col-lg-4 col-md-12">
        <div class="row justify-content-start">    
            <form class="form mb-4">
                <div class="col-7">
                    <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..." aria-describedby="basic-addon2">
                </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Allez</button>
                </div>
            </form>
        </div>

        <!-- emmet : (div.card.mb-4>div.card-header+ul.list-group.list-group-flush>li.list-group-item*4>a)*2 -->
        
        <div class="card mb-4">
            <h3 class="card-header">Catégories</h3>
            <ul class="list-group list-group-flush">
                <?php foreach ($dataCategoriesList as $categoriesId => $categoriesObject) : ?>
                    <li class="list-group-item">
                        <a href="index.php?page=category&id=<?= $categoriesId ?>"><?= $categoriesObject->category ?></a>
                    </li>
                    
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card mb-4">
            <h3 class="card-header">Auteurs</h3>
            <ul class="list-group list-group-flush">
                <?php foreach ($dataAuthorsList as $authorsId => $authorsObject) : ?>
                    <li class="list-group-item">
                        <a href="index.php?page=author&id=<?= $authorsId ?>"><?= $authorsObject->author ?></a>
                    </li>
                    
                <?php endforeach; ?>
            </ul>
        </div>
    </div> 
</div>

</aside>
</div> 


