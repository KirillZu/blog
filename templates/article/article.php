<?php
    include $_SERVER['DOCUMENT_ROOT'].'/templates/layouts/header.php';
?>

<div class="wrapper">
    <div class="container border border-danger">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="article">
                    <h1><?= $article->getTitle();?></h1>
                    <hr>
                    <article>
                        <?= $article->getContent();?>
                    </article>
                    <p class="card-footer d-flex justify-content-between border-bottom">
                        <span><?= $article->getCreatedAt();?></span>
                        <span><?= $nickname;?></span>
                    </p>
                        <a href="/" class="dark">Back</a>
                </div>                    
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-body b">
                        <h2 class="card-title border-bottom border-dark">
                            Article rating
                        </h2>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="">Article #1</a>
                                <span class="badge badge-pill badge-dark">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="">Article #1</a>
                                <span class="badge badge-pill badge-dark">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="">Article #1</a>
                                <span class="badge badge-pill badge-dark">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="">Article #1</a>
                                <span class="badge badge-pill badge-dark">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="">Article #1</a>
                                <span class="badge badge-pill badge-dark">10</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body b">
                        <h2 class="card-title border-bottom border-dark">
                            Tags cloud
                        </h2>
                        <p class="card-text">
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        <a href="">tag</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/templates/layouts/footer.php';
