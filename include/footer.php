    
    <div class="footer navbar-fixed-bottom">
        <?php include 'include/social_footer.php'; ?>
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
<?php
include 'include/universal_calculator_model.php';
include 'include/add_university_model.php';
include 'include/login_reg_model.php';
include 'include/contact_model.php';
?>    
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>

<?php mysqli_close($con); ?>
