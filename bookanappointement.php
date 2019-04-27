<!doctype html>
<html lang="en">
  <head>
    <title>Dental Studio 32</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'load_resources.php';?>
  </head>
  <body>
    <div class="main_container">
        <!-- logo -->
        <div class="banner5">
            <?php include 'navbar.php';?>

            <div class="appoiment_bg" style="margin:10%;text-align: center;">
                    <span class="strong_font">BOOK AN APPOINTMENT</span>
                <div class="testimonial_form" >
                    <div class="contact_form">
                        <div class="">
                            <form action="sendappointment_detail.php"  method="POST" enctype="multipart/form-data".>
                                <div class="input-field">
                                        <input type="text" id="name" name="name" placeholder="Enter your name" required><br>
                                </div>
                                <div class="input-field">
                                        <input type="email" id="email" name="email" placeholder="Enter your email address" required=""><br>
                                </div>
                                <div class="input-field">
                                        <input type="text" id="mobilenumber" name="mobile" placeholder="Enter your number"><br>
                                </div>
                               <button type="submit" class="btn">Book an appoiment</button>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>
    <!-- footer -->
     <?php include 'footer.php';?>
  </div>
</body>
</html>
<style type="text/css">
    .banner5
    {
         background-image: url('img/1_5.jpg');
        background-position: center;
        background-size: cover;
        height:100%;
        max-height:100%;
    }
</style>