<h1 class="author-title">Article(s) écrit par <?= $authorFirstName ?> </h1>

<?php foreach ($dataArticlesList as $articleId =>$articleObject) : 
  if ($idAuthor == ($dataArticlesList[$articleId]->author_id)) {
  ?>
    <article class="card">
      <div class="card-body">
        <h2 class="card-title">
          <a href="./index.php?page=article&id=<?= $articleId ?>">
            <?= $articleObject->title ?>
          </a>
        </h2>
        <p class="card-text">
          <?= $articleObject->resume ?>
        </p>
        <p class="infos">
          Posté par 
            <a href="index.php?page=author&id=<?= $articleObject->author_id ?>" class="card-link">
              <?= $dataAuthorsList[$articleObject->author_id]->firstname ?>
            </a> 
          le 
            <time datetime="<?= $articleObject->date ?>">
              <?= $articleObject->getDateFr(); ?>
            </time> 
          dans 
            <a href="index.php?page=category&id=<?= $articleObject->category_id ?>" class="card-link">
              #
              <?= $dataCategoriesList[$articleObject->category_id]->category ?>
            </a>
        </p>
      </div>
    </article>

<?php  }; endforeach; ?>