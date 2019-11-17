<?php include "includes/header.php"?>
<article class="Gallery">
    <h1>Creating a Simple Image Gallery</h1>
    <p class="date">October 26th, 2019</p>
    <P class="author">By Joshua Davenport</P>
    <p>At first glance, creating an image gallery for a webpage might look like a daunting task for someone new to web development. Fortunately, it’s easier than it seems. There are a few basic steps to adding an image gallery to your website:</p>
    <ul>
    <li>Create an images folder </li>
    <li>Write your code</li>
    <li>Point the code at the images</li>
    </ul>
    <p>The first step is very simple; create a folder in your project and name it images. This is where all of your images for your website will live, including any logos or background images. It’s a good idea to give each image a relevant name that’s not too long. Also, be selective of the quality of images you use. Kara Jensen of Bop Design advises to “select only high-definition images, while also making sure they come in small file sizes. Don’t make any image larger than it has to be, in order to avoid distortion. (Jensen)”</p>
    <p>Next, you’ll need to write the base code for the images on your gallery page. A good, straight forward way of doing this is to start with a div with a class of “gallery”. Inside that, nest an a tag with a target attribute of “_blank” and an href attribute that we’ll fill in later. Nested inside the a tag will be the image tag with source, alt, width and height attributes. You can also add a div after the a tag to hold a description of the image. Your raw code will look something like this:</p>
    <img src="images/gallery1.JPG"><br />
    <div class="img-credit">(w3schools)</div>
    
    <p>Once you have your base code written, copy and paste it as many times as you have images you’d like to display in your gallery. For each image, enter its information into the unpopulated attributes of the code. For the href attribute in the a tag, enter in the relative image source path. This will be the image name preceded with the images folder. You’ll enter the same relative image path for the image source attribute.  For accessibility purposes, add a brief description of the image for the alt attribute, no more than just a few words. Enter in the desired width and height as well (you can also do this before you copy and paste the base code to make all of the images equally sized). Lastly, if you’ve chosen to add a description div, you can enter that description now:</p>
    <img src="images/gallery2.JPG"><br />
    <div class="img-credit">(w3schools)</div>
    <p>Your page will now display your images, but they will all be rather large and and unformatted. With a little CSS added to your page head you can turn the images into smaller thumbnails that, once clicked on, will load their full image size:</p>
    <img src="images/gallery3.JPG"><br />
    <div class="img-credit">(w3schools)</div>
    <p>Now your gallery is all set with a good jumping off point for further styling of your choice:</p>
    <img src="images/gallery4.JPG"><br />
    <div class="img-credit">(w3schools)</div>
</article>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Citations</h3>
    <p class="citation">Jensen, Kara. “How to Choose the Right Images for Your Website.” Bop Design, November 22, 2013, <br />
    <a href="https://www.bopdesign.com/bop-blog/2013/11/how-to-choose-the-right-images-for-your-website/">https://www.bopdesign.com/bop-blog/2013/11/how-to-choose-the-right-images-for-your-website/</a></p>
    <p class="citation">w3schools, CSS Image Gallery,<br />
    <a href="https://www.w3schools.com/css/css_image_gallery.asp">https://www.w3schools.com/css/css_image_gallery.asp</a></p>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php"?> 