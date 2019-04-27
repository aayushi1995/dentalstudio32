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
        <div class="banner4">
            <?php include 'navbar.php';?>
            <div class="testimonial_bg">
                <div class="blue_belt " style="text-align:center;">
                    <span class="strong_font">REACH</span>US AT
                </div>
                <div class="testimonial_form">
                    <div class="contact_form">
                        <div class="container">
                            <form action="testimonial_data.php" id="testimonial-form" method="POST" enctype="multipart/form-data".>
                            <div class="input-field">
                                    <input type="text" id="name" name="name" placeholder="Enter your name" required><br>
                            </div>
                            <div class="input-field">
                                    <input type="email" id="email" name="email" placeholder="Enter your email address" required=""><br>
                            </div>
                            <div class="input-field">
                                    <input type="text" id="phone_mobile" name="mobilenumber" placeholder="Enter your number"><br>
                            </div>
                            <div class="input-field">
                                    <textarea id="message" name="message" rows="10" placeholder="Enter Your Review" cols="30" required></textarea>
                            </div><br>
                            <div class="input-field">
                                   <input type="file" name="file_photo" style="margin: auto;" value="default.jpg">
                            </div><br>
                           
                            <button type="submit" class="btn">submit</button>
                        </form>
                        </div>   
                    </div>
                </div>
            </div>
    <!-- footer -->
     <?php include 'footer.php';?>
  </div>
</body>

<script type="text/javascript">
        // mobile navbar
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    jQuery(document).ready(function() {

        var owl = $('.owl1');
            owl.owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },            
                    960:{
                        items:3
                    },
                    1200:{
                        items:4
                    }
                }
            });
        
            $('.owl2').owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:3
                    },
                    600:{
                        items:4
                    },            
                    960:{
                        items:6
                    },
                    1200:{
                        items:8
                    }
                }
            });
            $('.testimonial').owlCarousel({
                loop:false,
                margin:10,
                autoplay:true,
                autoplayTimeout:60000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },            
                    960:{
                        items:2
                    },
                    1200:{
                        items:2
                    }
                }
            });

            
    }); //end of ready function
</script>
<!-- contact form bg animation -->

</html>