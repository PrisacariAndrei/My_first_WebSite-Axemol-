$(function () {
    let nav = $("#nav");
    let navToggle = $("#navT");
    navToggle.on("click", function(event){

        nav.toggleClass("show");
    });
});
