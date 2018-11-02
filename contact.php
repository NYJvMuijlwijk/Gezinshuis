<?php require 'requires/head.php'; ?>
<?php require 'requires/connection.php'; ?>

<section class="main">
    <div class="container content">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <h1>Contact</h1>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque hic officiis quas quae corporis, repellendus odio quo eius? Non sapiente aliquid pariatur molestias tempora obcaecati animi labore aut exercitationem. Veritatis optio dolore odio necessitatibus laudantium iusto tempore, dolorem quos atque perferendis molestiae adipisci ullam, dolorum praesentium ipsa voluptatem excepturi aliquid.
                </p>

                <br>

                <?php
                    // send message to database
                    if (isset($_POST['submitContact'])){
                        // prepare query
                        $usermemail = $_POST['inputEmail'];
                        $topic = $_POST['inputTopic'];
                        $message = $_POST['inputMessage'];

                        $query = $connection->prepare("INSERT INTO messages (user_email, topic, message) VALUES ('$usermemail', '$topic', '$message')");

                        // execute query
                        try {
                            $query->execute();
                            // succes message ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Bericht verzonden!</strong> Uw bericht is met succes door ons ontvangen. U hoort binnen 3 dagen van ons terug.
                            </div> <?php
                        }
                        catch(PDOException $e) {
                            echo $e->getmessage(); 
                            // error message ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Oeps!</strong> Er ging iets mis bij het verzenden van uw bericht.
                            </div> <?php
                        }
                    }
                ?>

                <!-- Contact form -->
                <form action="contact.php" method="post">
                    <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="inputEmail" placeholder="Email" required>
                            </div>
                            <br>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputTopic" placeholder="Onderwerp" required>
                            </div>

                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" name="inputMessage" placeholder="Bericht" required></textarea>
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submitContact" class="btn btn-primary">Verstuur</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<?php require 'requires/foot.php'; ?>