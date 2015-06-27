// Random image script.

// Random image namespace.
var RandomImage = {
    
    IMAGES: [
        "images/header-01.jpg", 
        "images/header-02.jpg", 
        "images/header-03.png", 
        "images/header-04.png", 
        "images/header-05.png"
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

