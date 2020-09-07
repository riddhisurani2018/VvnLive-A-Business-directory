<?php
session_start();
unset($_SESSION['couponlogin']);
unset($_SESSION['reviewid']);
unset($_SESSION['firstname']);
if(isset($_SESSION['categorycoupon']))
{
	unset($_SESSION['categorycoupon']);
}
if(isset($_SESSION['businesscoupon']))
{
	unset($_SESSION['businesscoupon']);
}

echo "<script type='text/javascript'> window.location='couponlogin.php'</script>"; 
?>