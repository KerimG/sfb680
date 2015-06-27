// Publications script.

// Publications namespace.
var Publications = {
    // See below.
};

// Show abstract.
Publications.showAbstract = function(uid)
{
    var e0ID = "abstractP" + uid;
    var e1ID = "abstractI" + uid;
    var e0 = $(e0ID);
    var e1 = $(e1ID);
    e0.show();
    e1.src = "images/arrow_d_02.png";
}

// Hide abstract.
Publications.hideAbstract = function(uid)
{
    var e0ID = "abstractP" + uid;
    var e1ID = "abstractI" + uid;
    var e0 = $(e0ID);
    var e1 = $(e1ID);
    e0.hide();
    e1.src = "images/arrow_r_02.png";
}

// Toggle abstract.
Publications.toggleAbstract = function(uid)
{
    var elementID = "abstractP" + uid;
    var e0 = $(elementID);
    if (e0.visible())
        Publications.hideAbstract(uid);
    else
        Publications.showAbstract(uid);
}


