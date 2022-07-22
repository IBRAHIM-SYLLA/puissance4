<header>
    <nav>
        <a href="../index.php"><img src="https://img.icons8.com/emoji/344/red-circle-emoji.png"/><img src="https://img.icons8.com/emoji/344/yellow-circle-emoji.png"/><h1>Puissance 4</h1></a>
        <?php
        if(isset($_SESSION['user'])){?>
            <ul>
                <hr>
                <a href="../index.php"><li>Accueil</li></a>
                <hr>
                <a href="puissance4.php"><li>Puissance 4</li></a>
                <hr>
                <a href="classement.php"><li>Classement</li></a>
                <hr>
                <a href="disconnect.php"><li>Deconnexion</li></a>
                <hr>
            </ul>
        <?php } ?>
    </nav>
</header>
<link rel="stylesheet" type="text/css" href="../public/css/header.css">