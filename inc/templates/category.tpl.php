<h1> Catégorie : <?php echo $indexCategory?> </h1>

    <?php foreach ($dataArticlesList as $key =>$articleObject) : 
      if ($indexCategory == ($dataArticlesList[$key]->category)) {

      ?>
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="./index.php?page=article&id=<?php echo $key ?>"><?php echo $articleObject->title ?></a></h2>
            <p class="card-text"><?php echo $articleObject->content ?></p>
            <p class="infos">
              Posté par <a href="#" class="card-link"><?php echo $articleObject->author ?></a> le <time datetime="<?php echo $articleObject->date ?>"><?php echo $articleObject->date ?></time> dans <a href="#"
                class="card-link"><?php echo $articleObject->category ?></a>
            </p>
          </div>
        </article>

  <?php  }; endforeach; ?>

