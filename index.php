<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="viewport" content="width=700,initial-scale="1">
<title>若月アンケート</title>
<link rel= "stylesheet" href="style.css">
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script>
$(function(){
	$("body").append("<div id='layer_min'></div><div id='layer_max'></div>");
	$("#layer_min").click(function(){
		$(this).hide();
		$("#layer_max").hide();
	});
	$("a.modal").click(function(){
		$("#layer_min").show();
		$("#layer_max").show().html("<img src='img/close.png' class='close' />"+"<img src='"+$(this).attr("href")+"'>");
		$("#layer_max img.close").click(function(){
		$("#layer_max").hide();
		$("#layer_min").hide();
		});
		return false;
	});
});
</script>
</head>
	<body>
		<br>
		<h1>あなたの若月ベストショットアンケート</h1>
		<div class="center">
			<p class="txt">第１回集計結果は．．．このようになりました！<br>ご協力いただいた皆様、本当にありがとうございました！<p/>
		</div>
		<div id="modal_window">
		<form id="ankertForm" name="ankertForm" action="" method="POST" accept-charset="UTF-8">
				<h2 class="rank1">
				<span class="red">れ</span><span class="pink">か</span><span class="blue">つき</span></h2>
				<table border="1" cellspacing="0" cellpadding="1">
				<tr class = "row5">
					<td>
						<a href="img/waka17.jpg" class="modal"><img src="img/waka17_thum.jpg" title="若１７"></a>
					</td>
				</tr>
				</table>
				<h2 class="rank2">可愛い彼女感</h2>
				<table border="1" cellspacing="0" cellpadding="1">
				<tr class = "row5">
					<td>
						<a href="img/waka14.jpg" class="modal"><img src="img/waka14_thum.jpg" title="若１４"></a>
					</td>
				</tr>
				</table>
				<h2 class="rank3">最高の一枚 , ぷくキュート</h2>
				<table border="1" cellspacing="0" cellpadding="1">
				<tr class = "row4">
					<td>
						<a href="img/waka16.jpg" class="modal"><img src="img/waka16_thum.jpg" title="若１６"></a>
						<br>
					</td>
					<td>
						<a href="img/waka2.jpg" class="modal"><img src="img/waka2_thum.jpg" title="若２"></a>
						<br>
					</td>
				</tr>
				</table>
				<br>
				<br>
			<a href="javascript:window.open('about:blank','_self').close();">画面を閉じる</a>
			<br>
		</form>
		</div>
    </body>
</html>
