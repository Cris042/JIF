$(function(){
	
	$(":input[class=input-busca]").bind('keyup change input', function () {
		sendRequest();
	});

	function sendRequest(){

		$('.ajax').ajaxSubmit({
            success:function(data)
            {
                $('.listagen').html(data);
                console.log("olaa mundo");
			}
		})
	}
	
})