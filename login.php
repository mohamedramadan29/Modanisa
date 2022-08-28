<?php
ob_start();
session_start();
include 'init.php';
?>

<div class="cars hero faq">
    <div class="overlay">
        <div class="container data">
            <h2> <?php echo  $lang["login_h1"]; ?> </h2>
        </div>
    </div>
</div>
<!-- START PROFILE DATA -->
<div class="profile_data contact_form login_form">
    <div class="container">
        <div class="data">
            <form class="form-group" action="" method="POST" enctype="multipart/form-data">
                <div class="info">
                    <h2> <?php $lang["login"]; ?> </h2>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput"> <?php echo  $lang["email"]; ?> </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="password" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput"> <?php echo  $lang["password"]; ?> </label>
                    </div>
                    <input type="submit" class="btn button" value="<?php echo $lang["login"]; ?>">
                </div>
            </form>
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $stmt = $connect->prepare(
                    'SELECT  * FROM customer WHERE cus_email=? AND cus_pwd=?'
                );
                $stmt->execute([$email, $password]);
                $data = $stmt->fetch();
                $admindata = $stmt->rowcount();
                if ($admindata > 0) {
                    $_SESSION['cus_id'] = $data['cus_id'];
                    header('Location:account.php?lang=ar');
                    exit();
                }
            } ?>
        </div>
    </div>
</div>
<!-- END PROFILE DATA -->
<?php
include $tem . 'footer_section.php';
include $tem . 'footer.php';


?>