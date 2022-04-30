document.addEventListener("DOMContentLoaded", function(event) {

    // Show search dropdown
    document.getElementById("search-more-angle")
        .addEventListener("click", function(){
            let moreInputs = document.querySelectorAll(".search-more-input");
            for (let i = 0; i < moreInputs.length; i++) {
                (moreInputs.item(i).classList.toggle("d-none"));
            }
    });


});
