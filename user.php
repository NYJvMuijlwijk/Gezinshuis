<?php require 'requires/head.php'; ?>

<section>
<div class="container content">
    
    <div>Welkom <?= $_SESSION["user"]->fname ." ". $_SESSION["user"]->tussenvoegsel ." ". $_SESSION["user"]->lname;?></div>

</div>
</section>

<?php require 'requires/foot.php'; ?>
