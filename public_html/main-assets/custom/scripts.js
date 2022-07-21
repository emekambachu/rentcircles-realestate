// document.addEventListener("DOMContentLoaded", function(event) {
//
//     // Show search dropdown
//     document.getElementById("search-more-angle")
//         .addEventListener("click", function(){
//             let moreInputs = document.querySelectorAll(".search-more-input");
//             for (let i = 0; i < moreInputs.length; i++) {
//                 (moreInputs.item(i).classList.toggle("d-none"));
//             }
//     });
// });

// $(document).ready(function(){
//     $("#search-more-angle").click(function(){
//         if($('.search-more-input:visible').length){
//             $("#search-more-angle").removeClass('fa-angle-up').addClass('fa-angle-down');
//             $('.search-more-input').hide("slide", { direction: "right" }, 1000);
//         }else{
//             $("#search-more-angle").removeClass('fa-angle-down').addClass('fa-angle-up');
//             $('.search-more-input').show("slide", { direction: "right" }, 1000);
//         }
//     });
// });

$(document).ready(function(){
    $(".search-more-angle").click(function() {
        $(".search-more-angle").toggleClass("fa-angle-up", "fa-angle-down");
        $(".search-more-input").toggle( "slow", function() {
            // Animation complete.
        });
    });
});
