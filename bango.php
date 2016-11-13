<HTML>
<HEAD><META http-equiv="Content-Type" content="text/html;charset=utf8">
<TITLE>抽選番号入手</TITLE>
</HEAD>
<BODY>
おめでとうございます！<BR>
あなたの番号は<BR>
<?php
	for ($i = 0 ; $i < 1 ; $i++){
	print(mt_rand(0, 1000).'<br>');
	}
	?>
です。


</BODY>
</HTML>