<?php require_once('inc/header.php'); ?>
<?php require_once('inc/baner.php'); ?>

<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <?php if(has_session('success')): ?>
                            <div class="alert alert-success p-2">
                                <?php echo flash_session('success'); ?>
                            </div>
                    <?php endif; ?>

                    <?php if(has_session('errors')): ?>
                        <?php foreach(flash_session('errors') as $error): ?>
                            <div class="alert alert-danger p-2">
                            <?php echo $error; ?>
                            </div>
                        <?php endforeach;?>
                    <?php endif; ?>              <!-- to get an API token!-->
       
                    <form action="<?php echo BASE_URL."index.php?page=send-message"; ?>"  method="POST" >
                        <div class="form-floating">
                            <input class="form-control" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                            <label for="phone">Phone Number</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <br />
        
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once('inc/footer.php'); ?>