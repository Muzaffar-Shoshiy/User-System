<?php

require_once "assets/php/header.php";

?>
    
    <section id="notificationPage">
        <div class="container">
            <div class="row justify-content-center my-2">
                <div class="col-lg-8 mt-4" id="showAllNotification">
                    
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>

    <script>
        $(document).ready(function(){
            // fetch notification
            fetchNotification()
            function fetchNotification(){
                $.ajax({
                    url: "assets/php/process.php",
                    method: "post",
                    data: { action: "fetchNotification" },
                    success:function(response){
                        // console.log(response)
                        $("#showAllNotification").html(response)
                    }
                })
            }
            // check notification
            checkNotification()
            function checkNotification(){
                $.ajax({
                    url: "assets/php/process.php",
                    method: "post",
                    data: { action: "checkNotification" },
                    success:function(response){
                        // console.log(response)
                        $("#checkNotification").html(response)
                    }
                })
            }
            // remove notification
            $("body").on("click", ".close", function(e){
                e.preventDefault()

                notification_id = $(this).attr("id")

                $.ajax({
                    url: "assets/php/process.php",
                    method: "post",
                    data: { notification_id: notification_id },
                    success:function(response){
                        checkNotification()
                        fetchNotification()
                    }
                })
            })
        })
    </script>
</body>
</html>