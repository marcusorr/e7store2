<?php
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\


// OTHER
// Song of your choice. If you don't want it, don't add it.
$youtubeMusicLink = "https://www.youtube.com/watch?v=SR2_rRTE1X4&ab_channel=AbraCadabra-Topic";

// Invite Link To Your Discord + If you don't want, go to index.php and delete line 21 to line 23.
$discord = "https://t.me/kzstorechat";
$discordimg = "assets/img/telegram.png";

// META TAG SECTION
// Name of your site.
$Title ="E7's Store";

// Site's logo.
$favicon ="https://ukdata.cc/img/fullz-cvv-dumps-uk-data-900-1.webp";

//Your URL
$Url = "Google.com";

// Limit of 150 words. Summarize your page's contents. Such as a description of your site.
$Description = "E7's Store";

// NAVBAR Section
// If you want none just don't put anything here
// These are top right and link off page. They open a new browser window. The first one is the name such as "Home" and the second one is where it will link to.
$navbar = [
    [
        "item" => "Made by @marcus-orr",
        "href" => "https://www.snapchat.com/add/marcus-orr",
    ],
    [
        "item" => "Telegram chat",
        "href" => "https://t.me/kzstorechat",
    ]
    [
        "item" => "MK Approved",
        "href" => "https://ww.snapchat.com/add/xmk.x1",
    ]
];


// Site Content
// This is the "T" of your site. Such as a little introduction.
$STitle = "E7's Store";

// This is the Sub Title. Its a little slogan type thing under your title.
$SDesc = "The best quality accounts at the best price!";

// Site Buttons - usually used for Discord, Telegram and Shop Link
// First is the text of the button. Second is the link you want it to go to.
$btns = [
    [
        "Txt" => "Telegram Updates",
        "link" => "https://t.me/xkzupdates",
    ],
    [
        "Txt" => "Snapchat",
        "link" => "https://www.snapchat.com/add/lu.fraud",
    ],
    [
        "Txt" => "Telegram Support",
        "link" => "https://t.me/joinchat/R9DzvByVV8StcaTk7IDoeA",
    ],
];

// Feature Section

$FTitle = "Features";
$FDesc = "What you get from purchasing from us!";

// This is the features section, you can remove and add as many as you want. If you don't want any just remove everything inside.
$Features = [
    [
        "Icon" => "fas fa-users",
        "Title" => "24/7 Support",
        "Desc" => "We have a reliable Support Team that want to make sure that our clients have the best experience!",
    ],
    [
        "Icon" => "far fa-star",
        "Title" => "Very Popular",
        "Desc" => "We have a strong history of extremely satisfied clients who have come back costantly.",
    ],
    [
        "Icon" => "fas fa-dollar-sign",
        "Title" => "Cheap",
        "Desc" => "We believe in high quality at very affordable prices, making a product for all!",
    ],
    [
        "Icon" => "far fa-handshake",
        "Title" => "Reliable",
        "Desc" => "To make sure our clients are satisfied, we strive to be as reliable as possible!",
    ],
    [
        "Icon" => "fas fa-boxes",
        "Title" => "Works Everywhere",
        "Desc" => "Our products are in stock at all times meaning you can have whatever you want, whenever.",
    ],
    [
        "Icon" => "far fa-clock",
        "Title" => "Quick Delivery",
        "Desc" => "All purchases are delivered automatically at really fast speeds making sure you get the product.",
    ],
];

// Products
// Product Section Title
$PTitle = "Products";

// Product Section Description
$PDesc = "Get some juicy products and services off us!";

// The Actual Products.
// First is the Product Name. Second is the Product Description. Third is the Product ID can be found int he URL. Fourth is your product Image.
$Products = [
    [
        "Name" => "Mail Access",
        "Desc" => "These are email accounts that log in and may have amazon, ebay and paypal attached and you can bypass reset passwords and otp using them.",
        "ID" => "5f8de914be93a",
        "Image" => "https://cdn.sellix.io/static/images/products/95087fa1386013965a57eabe27ed7173a8ee0b33c91fcaa582721b6e96ba3f7a.png",
    ],
   
];

// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\
// BEFORE EDITING THIS FILE, PLEASE READ THE README FILE! OR JUST SUFFER. \\

// IGNORE THIS SECTION \\

function embedMusic($path) {
    $result = preg_replace('/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/', '$5', $path);
    if (!empty($result) || !isset($result)) {
        echo "<iframe style=\"visibility: hidden;\"  src=\"https://www.youtube.com/embed/${result}?controls=0;autoplay=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}