$(document).ready(function() {

 $('input,textarea').focus(function(){
   $(this).data('placeholder',$(this).attr('placeholder'))
   $(this).attr('placeholder','');
 });
 $('input,textarea').blur(function(){
   $(this).attr('placeholder',$(this).data('placeholder'));
 });
 
	jQuery('.UpBtn').click(function(event) {
        
        var valInp = jQuery('.cart .quantity input').val();
		jQuery('.cart .quantity input').val(parseInt(valInp)+1);
    });
	
	jQuery('.DvnBtn').click(function(event) {
        
        var valInp = jQuery('.cart .quantity input').val();
		if (parseInt(valInp)-1 > 0)
			jQuery('.cart .quantity input').val(parseInt(valInp)-1);
    });
	
	$(".wpcf7-response-output").click(function(){ 
		$(this).css("display", "none");
	});

});
