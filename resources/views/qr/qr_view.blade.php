

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<title>test</title>
	<style>
		body{
			width: 100%;
		}
	</style>
</head>
<body>
	
<div style="margin:auto; align-content: center;">
	<p>Phone number QR Code</p>
	<button id="phone">Hide</button>
	<span  id="phone1" hidden>{!!$test->phoneNumber($phonenumber); !!}</span>
</div>
<div style="margin:auto; align-content: center;">
	<p>Email QR Code</p>
	<button id="email">Hide</button>
	<span id="email1" hidden>{!!$test->generate(mailto:$email); !!}</span>
</div>
<div style="margin:auto; align-content: center;">
	<p>Instagram QR Code</p>
	<button id="instagram">Hide</button>
	<span id="instagram1" hidden>{!!$test->generate($instagram); !!}</span>
</div>
<div style="margin:auto; align-content: center;">
	<p>Whatsapp QR Code</p>
	<button id="ws">Hide</button>
	<span id="ws1" hidden>{!!$test->generate($whatsapp); !!}</span>
</div>
</body>
<script>
	
	$(document).ready(function(){
    $("#phone").click(function(){
        $("#phone1").toggle(500).css('','');
    });
    $("#email").click(function(){
        $("#email1").toggle(500);
    });
    $("#instagram").click(function(){
        $("#instagram1").toggle(500);
    });
    $("#ws").click(function(){
        $("#ws1").toggle(500);
    });
});
</script>

</script>
</html>




