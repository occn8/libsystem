<?php
require_once('config/configurations.php');
// require_once('widgets/detail.php');
?>

<?php
$currentpage = 'edit';
include('widgets/header.php');
require_once('config/user_detail.php');

?>
<main>
  
    <div class="container py-4">
        <form class="needs-validation" method="post" action="edit.php" novalidate>
            <?php include('config/errors.php'); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="<?php echo $firstname; ?>" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lname" placeholder="" value="<?php echo $lastname; ?>" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" placeholder="luwum Main St" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <select class="custom-select d-block w-100" id="country" name="country" required>
                        <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                        <option>Kenya</option>
                        <option>Rwanda</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="state">District</label>
                    <select class="custom-select d-block w-100" id="district" name="district" required>
                        <option value="<?php echo $district; ?>"><?php echo $district; ?></option>
                        <option>Kampala</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid district.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="" value="<?php echo $zip; ?>" required>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
            </div><br>
            <center>
                <button class="btn btn-warning rounded-pill btn-block font-size-20 col-md-6" type="submit" name="save_details"><b> Save Changes</b></button>
            </center>
        </form>
    </div>


</main>
<script src="assets/scripts/validate.js"></script>

<?php
include('widgets/footer.php');
?>