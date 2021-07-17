<?php
require_once('config/configurations.php');
// require_once('widgets/detail.php');
?>

<?php
$currentpage = 'account';
include('widgets/header.php');
require_once('config/user_detail.php');
?>
<main>
    <div class="container py-4">
        <form class="" method="post" action="account.php">
            <?php include('config/errors.php'); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control clr-bg" id="firstName" placeholder="" value="<?php echo $firstname; ?>" disabled>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control clr-bg" id="lastName" placeholder="" value="<?php echo $lastname; ?>" disabled>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="form-control clr-bg" id="username" value="<?php echo $username; ?>" placeholder="Username" disabled>
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control clr-bg" id="email" value="<?php echo $email; ?>" placeholder="you@example.com" disabled>
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control clr-bg" id="address" value="<?php echo $address; ?>" placeholder="luwum Main St" disabled>
            </div>

            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <input type="text" class="form-control clr-bg" id="country" value="<?php echo $country; ?>" placeholder="" disabled>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="state">District</label>
                    <input type="text" class="form-control clr-bg" id="district" value="<?php echo $district; ?>" placeholder="" disabled>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control clr-bg" id="zip" placeholder="" value="<?php echo $zip; ?>" disabled>

                </div>
            </div><br>
            <center>
                <a class="btn btn-warning rounded-pill btn-block font-size-20 col-md-6" href="edit.php" type="submit" name="edit_details"><b> Edit Details</b></a>
            </center>
        </form>
    </div>


</main>
<script src="assets/scripts/validate.js"></script>

<?php
include('widgets/footer.php');
?>