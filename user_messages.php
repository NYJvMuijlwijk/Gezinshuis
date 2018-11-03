<?php require 'requires/head.php'; ?>
<?php require 'requires/connection.php'; ?>

<?php

    // get all messages
    $messages = $connection->prepare("SELECT * FROM messages");
    $messages->execute();
    $messages = $messages->fetchAll(PDO::FETCH_ASSOC);

?>

<section class="user">
    <div class="container-fluid content">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <?php require 'requires/sidenav.php'; ?>

                <table class='table table-hover'>
                    <thead>
                        <th>nr</th>
                        <th>Email</th>
                        <th>Topic</th>
                        <th>Message</th>
                    </thead>
                    <tbody>
                        <?php 
                        
                            foreach($messages as $message) {

                                ?> <tr> 
                                    <td style="width: 2%"><?= $message['id']; ?></td>
                                    <td style="width: 15%"><?= $message['user_email']; ?></td>
                                    <td style="width: 15%"><?= $message['topic']; ?></td>
                                    <td style="width: 68%"><?= $message['message']; ?></td>
                                </tr> <?php

                            }
                        
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    
</section>

<?php require 'requires/foot.php'; ?>
