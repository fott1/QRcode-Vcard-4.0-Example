<?php

require 'qrclass.php'; // Include the QRCode class

/**
 * If you have PHP 5.4 or higher, you can instantiate the object like this:
 * (new QRCode)->fullName('...')->... // Create vCard Object
 */
$oQRC = new QRCode; // Create vCard Object
$oQRC->fullName('Fotis Karalis') // Add Full Name
    ->nickName('known as Fott1') // Add Nickname
    ->role('Full Stack Web Developer')
    ->workPhone('+30 6976 612-760') 
    ->email('karalisfotis@gmail.com') // Add Email Address
    ->url('www.3e.gr') // Add URL Website
    ->note('Hey, i am Fotis and i was sure you gonna scan this. I am a Web Developer that loves technology and i would love to work with you! I love code, NBA and swimming.') // Add Note
    ->finish(); // End vCard

// echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
$oQRC->display(); // Display