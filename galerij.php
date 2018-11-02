<?php require 'requires/head.php'; ?>
<?php require 'requires/sidenav.php'; ?>
<?php $database = new pdo('mysql:host=127.0.0.1;dbname=<br/>', '<br/>', '<br/>'); ?>

<?php
    /**
     * Database fetch all images
     */
        $pdo = $database->prepare('SELECT image_file FROM images');
        $pdo->execute();
        $value1 = $pdo->fetchall(PDO::FETCH_ASSOC);
?>

<section>
    <div class="container content_gallery" style="text-align: center;"><h1> galerij </h1>
        <div class="resize">
            <div>
                <?php
                    /**
                     * All images from database *
                     */
                    foreach ($value1 as $value2){
                        foreach ($value2 as $value3) {
                            ?>
                            <div class="box">
                            <?php echo "<img = src=\"data:image/jpg;base64,".base64_encode($value3)."\"/ style=\"width:325px; \">"; ?>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container content_gallery" style="text-align: center;"><h1> upload </h1>
        <div>
            <div>
                <form method="post" enctype="multipart/form-data" action="formaction/upload.php">
                    <input type="file" name="newimage"> <br/><br/>
                    <input type="submit" name="imagesubmit" value="Upload">
                </form>
            </div>
        </div>
    </div>
</section>

<?php require 'requires/foot.php'; ?>