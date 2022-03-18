<?php

$dsn = "mysql:dbname=mamobiclinique;host=localhost";
$userMysql = "mamobiclinique";
$passwordMysql = "mamobiclinique";
$pdo = new PDO(
  $dsn,
  $userMysql,
  $passwordMysql,
  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    // Uncomment in production
    // PDO::ERRMODE_SILENT
  ]
);

// ----------------
// Article Database
// ----------------
$sqlPost = "SELECT * FROM post ORDER BY published_date DESC";
$pdoStatementPost = $pdo->query($sqlPost);
$rsPosts = $pdoStatementPost->fetchAll(PDO::FETCH_ASSOC);

$dataArticlesList = [];
foreach ($rsPosts as $article) {
  $dataArticlesList[$article["id"]] = new Article(
    $article["title"],
    $article["resume"],
    $article["content"],
    $article["author_id"],
    $article["published_date"],
    $article["category_id"]
  );
}

// ----------------
// Category Database
// ----------------
$sqlCategory = "SELECT * FROM category ORDER BY name";
$pdoStatementCategory = $pdo->query($sqlCategory);
$rsCategories = $pdoStatementCategory->fetchAll(PDO::FETCH_ASSOC);

$dataCategoriesList = [];
foreach ($rsCategories as $category) {
  $dataCategoriesList[$category["id"]] = new Category($category["name"]);
}

// ----------------
// Author Database
// ----------------
$sqlAuthor = "SELECT * FROM author ORDER BY name";
$pdoStatementAuthor = $pdo->query(($sqlAuthor));
$rsAuthors = $pdoStatementAuthor->fetchAll(PDO::FETCH_ASSOC);

$dataAuthorsList = [];
foreach ($rsAuthors as $author) {
  $dataAuthorsList[$author["id"]] = new Author(
    $author["name"],
    $author["firstname"]
  );
}
