<?php
ob_start();
session_start();
include 'init.php';
?>

<div class="cars hero faq">
    <div class="overlay">
        <div class="container data">
            <h2><?php echo $lang["contact_h1"]; ?></h2>
        </div>
    </div>
</div>
<!-- END HERO SECTION -->
<!-- START CONTACT FORM -->
<div class="contact_form">
    <div class="container">
        <div class="data">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="info">
                        <p> <?php echo $lang["contact_p1"]; ?> </p>
                        <h2> Destination d.o.o. </h2>
                        <p>Dr Mustafe Pintola 23</p>
                        <ul class="list-unstyled">
                            <li> <i class="fa fa-phone"> </i> +387 62 22 33 11 </li>
                            <li> <i class="fa fa-phone"> </i> +387 61 54 54 56 </li>
                            <li> <i class="fa fa-envelope"> </i> <a href="mailto://info@car-rental.com">
                                    info@car-rental.com </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <form action="" method="POST">
                        <div class="info message_form">
                            <div class="form-floating mb-3">
                                <input required type="text" name="name" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput"><?php echo $lang["name"]; ?></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="email" name="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput"><?php echo $lang["email"]; ?></label>
                            </div>
                            <div class="form-floating">
                                <textarea required class="form-control" name="message" placeholder="Message"
                                    id="floatingTextarea"></textarea>
                                <label for="floatingTextarea"><?php echo $lang["message"]; ?></label>
                            </div>
                            <div>
                                <input class="btn btn-primary" type="submit" value="<?php echo $lang["send"]; ?>">
                            </div>
                        </div>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $message = $_POST["message"];
                        $stmt = $connect->prepare("INSERT INTO message (name, email, message) 
                        VALUES (:zname, :zemail,:zmessage)");
                        $stmt->execute(array(
                            "zname" => $name,
                            "zemail" => $email,
                            "zmessage" => $message,
                        ));
                        if ($stmt) { ?>
                    <style>
                    .message_form {
                        display: none !important;
                    }
                    </style>
                    <div class='container'>
                        <div class='alert alert-success text-center'> <?php echo $lang["contact_message"]; ?>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACT FORM -->
<!-- START MAPS -->
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d950645.7063804097!2d39.77166654999316!3d21.450468415099117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d01fb1137e59%3A0xe059579737b118db!2z2KzYr9ipINin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1657182468579!5m2!1sar!2seg"
        height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- END MAPS -->
<?php
include $tem . 'footer_section.php';
include $tem . 'footer.php';


?>