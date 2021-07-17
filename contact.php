<?php
require_once('config/configurations.php');
?>

<?php
$currentpage = 'contact';
include('widgets/header.php');
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="container py-5">
                        <h2>CONTACT INFO</h2>
                        <h6><i class="bx bx-current-location color-primary"></i><b> Address</b></h6>
                        <p>Ntinda valley, 21st st, Kampala, UGANDA</p>
                        <h6><i class="bx bx-phone color-primary"></i><b> Phone</b></h6>
                        <p>+256 7887 06532 <b>|</b> +256 7887 00002</p>
                        <h6><i class="bx bx-help-circle color-primary"></i><b> Support</b></h6>
                        <p>libsystem@lib.com</p>
                    </div>
                </div>
                <div class="col-md-7 py-4 text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.488276152467!2d32.61199473173798!3d0.34939106407119286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dba2d8070fce1%3A0x598ab3b2d69230e2!2sCapital%20Shoppers%20City!5e0!3m2!1sen!2sug!4v1610429361352!5m2!1sen!2sug" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="assets/products/poufs/8.jpg" height="400px" alt="">
                </div>
                <div class="col-md-6">
                    <div class="container py-5">
                        <h2>GET IN TOUCH</h2>
                        <form class="needs-validation" method="post" action="contact.php" novalidate>
                            <input class="form-control col-12 my-2" type="text" name="usr_name" placeholder="Name" required>
                            <div class="invalid-feedback">
                                Please provide a valid Name.
                            </div>
                            <input class="form-control col-12 my-2" type="text" name="usr_email" placeholder="Email" required>
                            <div class="invalid-feedback">
                                Please provide a valid Email.
                            </div>
                            <input class="form-control col-12 my-2" type="text" name="usr_country" placeholder="Country" required>
                            <div class="invalid-feedback">
                                Please provide a valid Country.
                            </div>
                            <textarea class="form-control col-12 my-2 py-5" name="usr_msg" placeholder="Message" required></textarea>
                            <div class="invalid-feedback">
                                Please write Message.
                            </div>
                            <button type="submit" class="btn btn-warning rounded-pill my-2" name="send_msg"><b>Send Message</b></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section></section>
</main>
<script src="assets/scripts/validate.js"></script>

<?php
include('widgets/footer.php');
?>