<?php
    include $_SERVER['DOCUMENT_ROOT'].'/templates/layouts/header.php';
?>
<div class="wrapper">
    <div class="container border border-danger">
        <div class="row">
            <div class="col-lg-9 col-md-9">

                <?php foreach ($articles as $articleItem): ?>
                    <div class="card shadow p-4">
                        <div class="card-body">
                            <h2 class="card-title border-bottom border-dark">
                                <?= $articleItem->getTitle(); ?>
                            </h2>
                            <p class="card-text">
                                <?= $articleItem->getContentPreview(); ?>
                            </p>
                            <p class="card-footer d-flex justify-content-between border-bottom">
                                <span><?= $articleItem->getCreatedAt(); ?></span>
                                <span><?= $articleItem->getAuthorId(); ?></span>
                            </p>
                            <a href="" class="btn btn-dark">Read more</a>
                        </div>
                    </div>

                <?php endforeach; ?>

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
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>