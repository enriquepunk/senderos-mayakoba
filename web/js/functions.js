$(document).ready(function(){
	
	 $('#form').validate({
                submitHandler: function(form) {
                      $.ajax("send_mail.php",{
                    data:$("#form").serialize(),
                    type:'post',
                    cache:false,
                    beforeSend: function(result){
                        $("#response").html("Espere...")
                    },
                    success: function(result){
                        //alert(result)
                        $("#response").html(result);
                          $("#form").each(function(){
                            this.reset();
        
                            });
                    },
                    error:function(result){

                    }
                    })
              }});
});