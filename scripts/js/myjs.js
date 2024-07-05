// JavaScript Document
$(document).ready(function(e) {

    
    
    $('.ajax-link').click(function() {
           
    		var url =  $(this).attr('href');
    		$.ajax({
    		type: "GET",
    		url: url,
            beforeSend: function() {
                //$('html, body').animate({ scrollTop: 0 }, 0);
                $('html, body').animate({ scrollTop: $('#num').offset().top }, 1000);
                $('ul.sca').fadeIn();
                $("#loading").show();
           },
    		success: function(msg){
                $('#num').html(msg);
                $("#loading").hide();
                $('#lstcart').load('list_cart.php');
                $('ul.sca').fadeIn();

            }
    	});
  		return false
    });

       //script to automatically display the cart 
   /* $('ul.edit li.dropdown').hover(function (){
        $('#lstcart').load('list_cart.php');
        $('ul.dropdown-menu', this).fadeIn();
    },function() {
        setTimeout(function(){
            $('ul.dropdown-menu','ul.edit li.dropdown').slideUp("slow");  

        },8000)
    });*/


    $('#sbtn').click(function(){
        $('#frm').submit();
    });

   
    /*$('ul.ca li.dropdown').hover(function () {
        $('ul.dropdown-menu',this).fadeIn();
    },function() {
        $('ul.dropdown-menu',this).fadeOut();
    })*/

    $('.edit .dropdown').hover(function() {
    $('#lstcart').load('list_cart.php');
    $(this).addClass('open').find('.dropdown-menu').first().stop(true, true).show();
    }, function() {
    $(this).removeClass('open').find('.dropdown-menu').first().stop(true, true).hide();
    });
    

    $('.ca .dropdown').hover(function() {
    $(this).addClass('open').find('.dropdown-menu').first().stop(true, true).show();
    }, function() {
    $(this).removeClass('open').find('.dropdown-menu').first().stop(true, true).hide();
    });

    $("#cshop").click(function() {
        window.location = "/"
    })

    $('#ptc').click(function() {
     
    })
		

});

