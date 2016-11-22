<?php
include("template.php");
include("engine.php");

templateBefore("Main Room");

//Start: clear room
if (strlen($_POST[send_msg]) < 1){
    clear_conversation();
}

$conversation_text = "";
if (isset($_POST[send_msg])) {
    //User is going to be php unique server param (no time for better option)

    $message = trim($_POST[send_msg]);
    $user = "user ".substr($_SERVER['UNIQUE_ID'], 1, 4);
    $display_message = send_message($user, $message);
    $conversation_text = $display_message;
}

?>

<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-bottom-clear">


    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-8">
                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Chat Room</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->

                <div class="contact-form">
                    <form action="chat-room.php" method="post" class="margin-clear"  novalidate="novalidate">
                        <div class="form-group has-feedback">
                            <label for="message">Conversation</label>
                            <?php echo '<textarea class="form-control" rows="10" id="conversation" name="conversation" placeholder="" >'.$conversation_text.'</textarea>'; ?>
                            <i class="fa fa-pencil form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="send_msg" name="send_msg" placeholder="">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <input type="submit" value="Send" class="btn btn-default">
                    </form>
                </div>
            </div>
            <!-- main end -->



        </div>
    </div>



</section>
<!-- main-container end -->

<?php

templateAfter();

?>