<?php  require_once 'inc/head.php';?>
<body>
<style>
    span{
        color:red;
    }
    img{
        border-radius:15px;
    }
</style>
<?php  require_once 'inc/header.php';?>
    <!-- End of header -->
    <h1 class="my-4 text-center">Contact Us</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p><b>Vikas Saree Emporium: </b>Dinesh Kumar Jain<b>(Owner)</b></p>
                <p><b>Vikas Mens Wear: </b>Sunny Jain<b>(Owner)</b></p>
                <p><b>Address: </b>Gandhi Market,Etah, 207001</p>
                <p><b>Hours Open: </b>9:30 am - 9:30 pm</p>
                <p><b>Phone: </b>9412282654, 9997579199</p>
                <p><b>Email: </b>kirtisunny@gmail.com</p>
            </div>
            <div class="col-md-5"><img src="images/slide3.jpg" class="img-fluid"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="contact_mail.php" method="post" onsubmit="return contact_form()">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name">
                        <span id="nameError"></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Mobile Number: </label>
                        <input type="text" class="form-control" id="customer_mobile" name="customer_mobile">
                        <span id="mobileError"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="text" class="form-control" id="customer_email" name="customer_email">
                        <span id="emailError"></span>
                    </div>
                        <div class="form-group ">
                            <div class="form-group">
                                <label for="comment">Your Message: </label>
                                <textarea class="form-control" rows="5" id="comcustomer_commentment" name="customer_comment"></textarea>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-dark mb-3" name="customer_form_submit" value="submit">
                    </form>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <?php  require_once 'inc/footer.php';?>

</body>
<script>
        function contact_form(){
        var emailValidation = /^[A-za-z0-9 .]{2,20}[@]{1}[A-za-z.]{2,10}$/;
        var nameValidation = /^[A-Za-z 0-9]{3,30}$/;
        var mobileValidation = /^[0-9]{3,12}$/;
        var customer_name = document.getElementById('customer_name').value;
        var customer_mobile = document.getElementById('customer_mobile').value;
        var customer_email = document.getElementById('customer_email').value;

            if (!nameValidation.test(customer_name)) {
                    document.getElementById('nameError').textContent = "Please Enter Valid Name";
                    document.getElementById('emailError').textContent = "";
             
                    document.getElementById('mobileError').textContent = "";
                    return false;
            }
            if(!mobileValidation.test(customer_mobile)){
                    document.getElementById('mobileError').textContent = "Please Enter Valid Mobile Number";
                    document.getElementById('emailError').textContent = "";
             
                    document.getElementById('nameError').textContent = "";
                    return false;
            }
            if (!emailValidation.test(customer_email)) { 
                document.getElementById('emailError').textContent = "Please Provide the valid Email Address";
                document.getElementById('nameError').textContent = "";
             
                document.getElementById('mobileError').textContent = "";
                    return false;
            }
        }
</script>
</html>