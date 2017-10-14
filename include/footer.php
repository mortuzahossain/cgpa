    
    <div class="footer navbar-fixed-bottom">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <a href="#"><i class="fb fa fa-facebook-square"></i></a>
                        <a href="#"><i class="yt fa fa-youtube-square"></i></a>
                        <a href="#"><i class="ph fa fa-phone-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <p>All &copy; Recieved By Md. Mortuza Hossain</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php
include 'include/add_university_model.php';
include 'include/login_reg_model.php';
include 'include/contact_model.php';
?>

        <script type="text/javascript">
            function universal(){
                swal({
                    title: "Comming Soon",
                    text: "This Feature will be available after <?php echo date('Y') ?>.",
                    imageUrl: 'img/thumbs-up.jpg'
                });
            }
        </script>