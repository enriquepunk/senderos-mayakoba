$(document).ready(function(){
	alert(window.width)
	$('.top-menu li').hover(function(){
		l='';
		switch($(this).attr('id')){
			case 'link-menu-deli':
				l='40';
			break;
			case 'link-menu-rest':
				l='60';
			break;
			case 'link-menu-paste':
			l='60';
			break;
			case 'link-historia':
			l='30';
			break;
			case 'link-eventos':
			l='30';
			break;
			case 'link-bolsa':
			l='50';
			break;
			case 'link-contacto':
			l='35';
			break;
			case 'link-blog':
			l='20';
			break;
			default:
			break;

		}
		$(this).append('<img style="left:'+l+'px" class="hover-menu-top" src="web/image/Header/selector-menu.png">')
	},function(){
		$('.hover-menu-top').remove();
	});

	    $(".form").validate({
         onKeyup : true,
				eachValidField : function() {
					$(this).removeClass('error').addClass('success');
				},
				eachInvalidField : function() {
					$(this).removeClass('success').addClass('error');
				},
                                valid: function (){
                                    $.ajax({
                                        type: 'POST',
                                        url: "functions/ajax.php",
                                        data: $(this).serialize(),
                                        dataType: 'json',
                                        // Mostramos un mensaje con la respuesta de PHP
                                        success: function(data) {
                                            $.fancybox('<div id="popup-general">'+data+'</div>');
                                            $('.fancybox-skin').css('border','2px solid #572c15');
                                            $('.form').each(function(){
                                                this.reset();
                                            });
                                        }
                                    });
                                },
                                sendForm : false
    });
});