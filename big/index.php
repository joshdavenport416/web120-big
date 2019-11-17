<?php include "includes/header.php"?>

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "jfdavenport416@gmail.com";  //place your/your client's email address here
        $toName = "Joshua"; //place your client's name here
        $website = "davenportwebdesign.com";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>
    <p><a href="https://support.google.com/calendar/answer/41207?hl=en" target="_top">Add a Google calendar to your website</a></p>
    
    <p><a href="https://www.jotform.com/help/2-How-to-Create-Your-First-Web-Form" target="_top">How to Create Your First Web Form</a></p>
    
    <p><a href="https://www.awwwards.com/wireframe-basics-for-beginners-an-agency-perspective.html" target="_top">Wireframe Basics for Beginners: An Agency Perspective</a></p>
    
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php"?> 