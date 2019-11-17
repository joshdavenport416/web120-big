<?php

//site keys 
$siteKey = "6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX";
$secretKey = "6LeDaSoUAAAAACJ69mIHYOxL4atri9oPrjkIVMFv";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los_Angeles');

//this constant alows a page to knoow its own URL/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
        case 'index.php';
            $title = 'Web Dev Examples by Joshua Davenport';
            $logo = 'fa-home';
            $PageID = 'Client Questionnaire';
        break;
        
        case 'flexbox.php';
            $title = 'Flexbox Research';
            $logo = 'fa-home';//change this fontawesome icon!
            $PageID = 'Flexbox';
        break;
        
        case 'galleries.php';
            $title = 'Galleries Research';
            $logo = 'fa-pencil-square-o';//change this fontawesome icon!
            $PageID = 'Galleries';
        break;
        
        case 'map.php';
            $title = 'Google Map';
            $logo = 'fa-pencil-square-o';//change this fontawesome icon!
            $PageID = 'Google Map';
        break;
        
        case 'calendar.php';
            $title = 'Google Calendar';
            $logo = 'fa-pencil-square-o';//change this fontawesome icon!
            $PageID = 'Google Calendar';
        break;
        
        case 'youtube.php';
            $title = 'YouTube';
            $logo = 'fa-pencil-square-o';//change this fontawesome icon!
            $PageID = 'YouTube';
        break;
        
        case 'shoppingcarts.php';
            $title = 'Shopping Carts';
            $logo = 'fa-pencil-square-o';//change this fontawesome icon!
            $PageID = 'Shopping Carts';
        break;
        
        case 'siteapp.php';
            $title = 'Web Sites vs Native Apps';
            $logo = 'fa-pencil-square-o';//change this fontawesome icon!
            $PageID = 'Web Sites vs Native Apps';
        break;
        
        case 'webcam.php';
            $title = 'Live Webcams';
            $logo = 'fa-pencil-square-o';//change this fontawesome icon!
            $PageID = 'Live Webcams';
        break;
        
        default:
            $title = THIS_PAGE;
            $logo = '';
            $PageID = '';                    
}