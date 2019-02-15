<h1>Add contact</h1>

<div class="container">

    <div class="row">

        <div class="col-lg-8 col-lg-offset-2">

            <form id="contact-form" method="post" action="" role="form">

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Firstname *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Lastname *</label>
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_phone">Phone</label>
                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone" required="required" data-error="Valid phone is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Message *</label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" value="Send message">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted"><strong>*</strong> These fields are required.
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>

</div>

<script>

    $(function() {
        // init the validator

        $("#contact-form").validator();

        // when the form is submitted
        $("#contact-form").on("submit", function(e) {
            // if the validator does not prevent form submit
            if (!e.isDefaultPrevented()) {
                var url = "form.php";

                var messageAlert = "alert-success";
                var messageText =
                    "Your message was sent, thank you. I will get back to you soon.";

                // let's compose Bootstrap alert box HTML
                var alertBox =
                    '<div class="alert ' +
                    messageAlert +
                    ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                    messageText +
                    "</div>";

                // If we have messageAlert and messageText
                if (messageAlert && messageText) {
                    // inject the alert to .messages div in our form
                    $("#contact-form").find(".messages").html(alertBox);
                    // empty the form
                    $("#contact-form")[0].reset();
                }

                return false;
            }
        });
    });


</script>