function openProduct(productBox, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(productBox).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
(function () {
    $.post("clients/share/featured_products", {send: ''}, function (result) {
        $("#products_container").html(result);
        document.getElementById("defaultOpen").click();
    });
})();


// for developement purposes
document.getElementById("defaultOpen").click();


// this is called when someone tries to mute an ingredient

function reply_click(mute_id) {
    // we store the id in a variable
    var mute = mute_id;
        // slicing out the ending of the pressed ID
    var str = mute.slice(7);
    // storeing the id that is going to get class changed
    // since they are the same ending it's going to know 
    // which one we want to change.
    var span_id = ("ingr_" + str);
    var element = document.getElementById(span_id);
    element.classList.add("muted");
}

