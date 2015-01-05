/*
 Author: Chris Darby (cmd08)
 Created On: 29th January 2012
*/

$(document).ready(function(){
    /* About */
    $("article").hide();
    $("article#ic").show();
    
    $('nav a').addClass(function(){return $(this).attr('href').slice(2);});
    $('nav a').each(function(){$(this).text("");});
    
    $("ul.sub_nav li").each(function(){
        $(this).click(function(){
            var id = $(this).attr("id");
            console.log(id);
            $("ul.sub_nav li").removeClass("selected");
            $("ul.sub_nav li#"+id).addClass("selected");
            $("article").hide();
            $("article#"+id).show();
        });
    });
    
    /* FAQ */
    $("dl#faq dd").hide();
    $("dl#faq dt").each(function(){
        $(this).click(function(){
            $(this).toggleClass("selected");
            $(this).find("+ dd").slideToggle();
        });
    });
    
    jQuery("#formID").validationEngine();

});

function win1() {
    window.open("lookup.php","Lookup","menubar=no,width=800,height=360,toolbar=no,scrollbar=yes");
}