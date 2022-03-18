<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- FONT -->
  <link href="http://fonts.cdnfonts.com/css/gotham-rounded?styles=36541,36543,36542" rel="stylesheet">

  <!-- BOOTSTAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- BOOTSTRAP ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- PERSONNAL CSS -->
  <link rel="stylesheet" href="./public/styles/blog.css">

  <title>Blog Ma MobiClinique</title>
</head>

<body>

    <!-- HEADER -->
    <header>
        <!-- NAV -->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">  
                <a class="navbar-brand" href="./"><img class="navbar-toogler-logo" src="./public/images/Logo-Final-Couleurs.svg" alt="Logo Ma MobiClinique"></img></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                    <?php foreach ($dataCategoriesList as $categoriesId => $categoriesObject) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=category&id=<?= $categoriesId ?>"><?= $categoriesObject->category ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="text-center">
            <h1>Ma MobiClinique</h1>
            <hr />
            <p>
              La santé est un droit humain fondamental. Retrouvez sur notre blog les dernières actualités en matière de santé pédiatrique. 
            </p>
        </section>
    </header>