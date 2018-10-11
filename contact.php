<?php require 'requires/head.php'; ?>

<section class="main">
    <div class="container content">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <h1>Contact</h1>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque hic officiis quas quae corporis, repellendus odio quo eius? Non sapiente aliquid pariatur molestias tempora obcaecati animi labore aut exercitationem. Veritatis optio dolore odio necessitatibus laudantium iusto tempore, dolorem quos atque perferendis molestiae adipisci ullam, dolorum praesentium ipsa voluptatem excepturi aliquid.
                </p>

                <br>

                <!-- Email functionality -->
                <?php
                    // set variables
                    $to         = "microniek@live.nl";
                    $subject    = "[Contact Form] | " . $_POST["inputTopic"];
                    $sender     = $_POST['inputEmail'];
                    $message    = wordwrap(str_replace("\n.", "\n..", $_POST["inputMessage"]), 70, "\r\n");
                    $headers    =   "From: $sender" . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();
                
                    // notification logic
                    if (isset($_POST["submitContact"])) {
                        
                        // send mail, store result
                        $mail = mail($to, $subject, $message, $headers);

                        // echo "<div class='col-sm-8 alert alert-success'><p><strong>Mail content:</strong></p><p>Sender: $sender <br> Subject: $subject <br> Message: $message <br> Headers: $headers </p></div>";

                        if($mail) 
                        {
                            echo "<div class='col-sm-8 alert alert-success'><p>Mail succesfully sent!</p></div>";
                        }
                        else 
                        {
                            echo "<div class='col-sm-8 alert alert-warning'><p>Something went wrong sendgin your email</p></div>";
        
                            // dump variable
                            var_dump($mail);
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