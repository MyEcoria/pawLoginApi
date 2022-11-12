<?php 

$url = 'http://51.91.103.54:2650/login/create/';
// Initialize a CURL session.
$ch = curl_init();
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
$result = json_decode($result);
$add = $result->account;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<button id="btn" style="background: none; border: none;"><img src="pawLogin/img/logo.png" height="80px"></button>
<script>
  
  const btn = document.getElementById('btn');
    btn.onclick = function(){
      swal({
		  title: "Please send $100PAW to this address:",
		  text: "<?php echo $add; ?>",
		  icon: "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=nano:<?php echo $add; ?>?amount=100000000000000000000000000000",
		  buttons: ["Cancel 😭", "Check 🚀"],
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		    swal("kkk", {
		      icon: "success",
		    });
		  } else {
		    swal("You gave up 😞", {
		    	icon: "error",
		    });
		  }
		});
    }
 </script>
