<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>crawler</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <form class="d-flex" role="search" method="post">
            <input class="form-control me-2" type="search" name="webName" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="crawler">Search</button>
        </form>
    </div>
</nav>
<?php
include "simple_html_dom.php";
if (isset($_POST["crawler"])) {
    $url = $_POST["webName"];
    $html = file_get_html($url);
    $images = array();

    foreach ($html->find("img") as $i) {
        ?>
        <img width="200px" src="<?= $i->src ?>" alt="$i">
        <?php
    }
    ?>
    <br>
    <?php
    foreach($html->find('a') as $element)
        echo $element->href . '     ';
    ?>

    <?php
}
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>
</html>