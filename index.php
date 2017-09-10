<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="tr" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>RaspberryPi ve DS18B20 ile Termometre</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
setInterval(function(){
$("#screen").load("ds_temp.php")
}, 1000);
});
</script>

<style type="text/css">
.auto-style2 {
background-image: url('http://roboturka.com/wp-content/uploads/bulut.png');
}
.auto-style3 {
text-align: center;
font-family: Tahoma;
font-size: x-large;
color: #F1DFDF;
}
.auto-style4 {
text-align: center;
font-family: Tahoma;
font-size: xx-large;
color: #F1DFDF;
}
</style>

</head>

<body>

<table class="auto-style2" style="width: 388px; height: 324px">
<tr>
<td class="auto-style3" style="height: 31px" valign="top"><strong>
RaspberryPi ve<br />
DS18B20 ile Termometre</strong></td>
</tr>
<tr>
<td class="auto-style4" style="height: 31px" valign="bottom"><strong>
<div id = "screen"></strong></div></td>

</tr>
</table>

</body>

</html>