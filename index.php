<?php

require __DIR__ . '/inc/classes/Article.php';
require __DIR__ . '/inc/classes/Author.php';
require __DIR__ . '/inc/classes/Category.php';

require __DIR__ . '/inc/datadb.php';

$pageToDisplay = 'home';
if (isset($_GET['page']) && $_GET['page'] !== '') {
  $pageToDisplay = $_GET['page'];
}

// ----------------
// Home Page
// ----------------
if ($pageToDisplay === 'home') {
  $articlesList = $dataArticlesList;
} 
// ----------------
// Article Page
// ----------------
elseif ($pageToDisplay === 'article') {
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
  $authorsList = $dataAuthorsList;

  $idAuthor = $_GET['id'];
  $authorFirstName = $dataAuthorsList[$idAuthor]->firstname;

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
  $categoriesList = $dataCategoriesList;

  $idCategory = $_GET['id'];
  $categoryName = $dataCategoriesList[$idCategory]->category;

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