<?php

require __DIR__ . '/inc/classes/Article.php';
require __DIR__ . '/inc/classes/Author.php';
require __DIR__ . '/inc/classes/Category.php';

$pageToDisplay = 'home';
if (isset($_GET['page']) && $_GET['page'] !== '') {
  $pageToDisplay = $_GET['page'];
}

// ----------------
// Home Page
// ----------------
if ($pageToDisplay === 'home') {
  require __DIR__ . '/inc/data.php';
  $articlesList = $dataArticlesList;
} 
// ----------------
// Article Page
// ----------------
elseif ($pageToDisplay === 'article') {
  require __DIR__ . '/inc/data.php';
  $articlesList = $dataArticlesList;

  $articleId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  if ($articleId !== false && $articleId !== null) {
    $articleToDisplay = $articlesList[$articleId];
  } else {
    $pageToDisplay = 'home';
  }
}
// ----------------
// Author Page
// ----------------
elseif ($pageToDisplay === 'author') {
  require __DIR__ . '/inc/data/php';
  $authorsList = $dataAuthorsList;

  $idAuthor = $_GET['id'];
  $indexAuthor = $dataAuthorsList[$idAuthor]->author;

  $authorsId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  if ($authorsId !== false && $authorsId !== null) {
    $authorsToDisplay = $authorsList[$authorsId];
  } else {
    $pageToDisplay = 'home';
  }
}
// ----------------
// Category Page
// ----------------
elseif ($pageToDisplay === 'category') {
  require __DIR__ . '/inc/data.php';
  $categoriesList = $dataCategoriesList;

  $idCategory = $_GET['id'];
  $indexCategory = $dataCategoriesList[$idCategory]->category;

  $categoriesId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  if ($categoriesId !== false && $categoriesId !== null) {
    $categoriesToDisplay = $categoriesList[$categoriesId];
  } else {
    $pageToDisplay = 'home';
  }
}

require __DIR__ . '/inc/templates/header.tpl.php';
require __DIR__ . '/inc/templates/' . $pageToDisplay . '.tpl.php';
require __DIR__ . '/inc/templates/footer.tpl.php';