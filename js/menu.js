jQuery(document).ready(function() {
jQuery("#front_menu ul").css({display: "none"}); // Opera Fix
jQuery("#front_menu li").hover(function(){
jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show();
},function(){
jQuery(this).find('ul:first').css({visibility: "hidden"});
});
});


