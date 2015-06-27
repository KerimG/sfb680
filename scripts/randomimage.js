// Random image script.

// Random image namespace.
var RandomImage = {
    
    IMAGES: [
        "images/header-01.jpg", 
        "images/header-02.jpg", 
        "images/header-03.png", 
        "images/header-04.png", 
        "images/header-05.png", 
        "images/header-06.png", 
        "images/header-07.jpg", 
        "images/header-08.jpg", 
        "images/header-09.png", 
        "images/header-10.jpg", 
        "images/header-11.jpg", 
        "images/header-12.jpg", 
        "images/header-13.jpg", 
        "images/header-15.jpg"
    ],
    
    IMAGE_ELEMENT_ID: "mainHeaderImageR"
};

// Pick random image.
RandomImage.pickImage = function() 
{
    var i = Math.floor(Math.random() * RandomImage.IMAGES.length);
    return RandomImage.IMAGES[i];
}

// Change image.
RandomImage.changeImage = function() 
{
    $(RandomImage.IMAGE_ELEMENT_ID).src = RandomImage.pickImage();
}

Event.observe(document, 'dom:loaded', 
    RandomImage.changeImage.bindAsEventListener());

