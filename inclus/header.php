<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="./image/bonbon.ico">
    <PHP>
        <link rel="stylesheet" type="text/css" href="./css/lol.css">
</head>
<PHP>
    <title>Alliance du lac</title>
    </head>

    <body>
        <script type="text/javascript">
            var ladate = new Date()
            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var aujourdhui = ladate.toLocaleDateString("fr-FR", options);
            <?php $abc = "<script>document.write(aujourdhui)</script>" ?>
        </script>
        <div class="container">
            <img src="image/image-logo-agriculture.png" alt="" width="50%" class="image-logo">
            <nav class="navbar navbar-expand-md navbar-light ">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><b>acceuil</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produit.php">Nos produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rejoindre.php">Nous Rejoindre</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <h5 align="center"><?php echo $abc; ?> </h5>