(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();


		var preloader = $('.preloader');
		$(window).load(function(){
			preloader.remove();
		});
        


    });


    jQuery(window).load(function(){

        
    });


}(jQuery));	