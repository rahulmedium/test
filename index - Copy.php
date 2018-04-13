<?php include('include/header.php'); ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 loginBox">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading login_logo">
                        <img src='img/wager-logo.png'>
                    </div>
                    <div class="panel-body">
                        <form id="login-form" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail or User name" id="email" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" id="login" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                        <div id="sbcrbmsg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php'); ?>

    <script>
        /* User Login Script end */
        $(function () {
            $('.panel-body').on('submit', '#login-form', function (e) {
                e.preventDefault();

                var email = $("#email").val();
                var pass = $("#password").val();
                if (email == "") {
                    var color = $(this).css("red");
                    $("#sbcrbmsg").text('Please provide  value for User name').css("color", "red");
                } else if (pass == "") {
                    var color = $(this).css("red");
                    $("#sbcrbmsg").text('Please provide  value for Password').css("color", "red");
                } else {
                    $("#login").html('Please Wait <i class="fa fa-spinner fa-pulse fa-1x fa-fw margin-bottom"></i>');
                    var info = 'email=' + email + '&pass=' + pass
                    $.ajax({
                        type: "POST",
                        url: "ajaxReq/login.php",
                        data: info,
                        success: function (data) {
                            $("#login").text("Login");
                            if ($.trim(data) === "yes") {
                                window.location.href = "dashboard.php";
                            } else {
                                $("#sbcrbmsg").html(data).css("color", "red");
                            }
                        }
                    });
                }

            });
        });
    </script>
