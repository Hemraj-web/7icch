// welcome message js
$(document).ready(function(){
    $("#welcome__btn__js").click(function(){
        $("#hide__show__Welcome").slideToggle("slow");
        $("#welcome__btn__js").toggleClass("active");
    });
    // Committees
    //international
    $("#internation__tg__Btn").click(function(){
        $("#international__more").slideToggle("slow");
        $("#internation__tg__Btn").toggleClass("active");

    });
    //local

    $("#local__js__btn").click(function(){
        $("#local__hide__show").slideToggle("slow");
        $("#local__js__btn").toggleClass("active");

    });

    // programme
    $(".keynote__speakers__Btn").click(function(){
        $(this).siblings("p").slideToggle("slow");
        $(this).toggleClass("active");

    });

    //Topic PAge
    $("#open__sessions__js__btn").click(function(){
        $("#open__hide__show").slideToggle("slow");
        $("#open__sessions__js__btn").toggleClass("active");

    });

    $("#thematic__btn__js").click(function(){
        $("#thematic__show__hide").slideToggle("slow");
        $("#thematic__btn__js").toggleClass("active");
    });
});










