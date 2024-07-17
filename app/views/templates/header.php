<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>halaman <?php echo $data['judul']; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mengarahkan link ke localhost -->
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">php_mvc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>