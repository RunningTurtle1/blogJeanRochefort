<?php
    include('view/head.php');
?>
<body>
    <a href="index.php">Retour à la page d'acceuil</a> <a href="index.php?action=signout">Me déconnecter </a>
    <div class="container">
        <?php include('view/posts.php') ?>
        <?php if(!($_GET['action'] == 'editpost'))
        {
        ?>
        <?php include('view/showPosts.php')?>
    </div>
        <?php include('view/commentsreport.php') ?>
        <?php
        }
        ?>
</body>
</html>