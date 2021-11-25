<?php

    $conn = mysqli_connect('localhost','indiawebpro','}%GrUeGYZI-H','indiawebpro');
    
    if (isset($_POST['customer_form_submit'])) {
            $customer_name = $_POST['customer_name'];
            $customer_mobile = $_POST['customer_mobile'];
            $customer_email = $_POST['customer_email'];
            
            $customer_comment = $_POST['customer_comment']; 
            

            $sql = "INSERT INTO vikas_emporium (name ,mobile, email ,message) VALUES ('$customer_name','$customer_mobile' ,'$customer_email','$customer_comment')";
            
            $url = "http://api.msg91.com/api/sendhttp.php?country=91&sender=WEBPRO&route=4&mobiles=9997579199&authkey=258075Ac3xvxi70iR5c4951dc&message=Name: $customer_name Email: $customer_email please check your email inbox for further Detail";
            
            file_get_contents($url);
            
            //customer Mail
                
            mail($customer_email,"Thank you for getting in touch!","We appreciate you contacting us about Vikas. One of our colleagues will get back to you shortly."); 
            
            //Admin Mail
                
        mail('kirtisunny@gmail.com',"Contact","Name: .'$customer_name'.'\n'.'Email:'.'$customer_email'.'one person try to contact with you'.");    
            if (mysqli_query($conn , $sql)) {
                print  "<script type='text/javascript'>alert('Thank you for contacting us. We have received your enquiry and will respond to you within 24 hours.  For urgent enquiries please call us on 9997579199.')</script>";
                print  "<script type='text/javascript'>window.location.href = 'thanks.php';</script>";
                
                

            }
            else{
                echo  "<script type='text/javascript'>alert('Please Try Again Thaks...')</script>";
                header('location: index.php');
            }
            
    }
?>