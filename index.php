<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="utf-8">
<title>××××に関するアンケート</title>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>document.createElement('main');</script>
<![endif]-->
<link rel="stylesheet" href="css/style.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
<header>
<div id="header">
<h1 id="logo">××××</h1>
</div>
</header><!--/header -->

<main role="main">

<div class="text-area">
<h2>××××サービスに関するアンケート</h2>
</div>

<div id="form-area">

<form id="enquete-form" method="post">
<dl class="enquete-list">
<dt>現在××××をご利用されていますか？</dt>
<dd>
	<label><input type="radio" value="利用している" name="answer1"> 利用している</label><br>
	<label><input type="radio" value="利用していない" name="answer1"> 利用していない</label><br>
	<label><input type="radio" value="登録していない" name="answer1"> 登録していない</label>
</dd>

<dt>××××にどのようなイメージをお持ちですか？</dt>
<dd><textarea id="answer2"></textarea></dd>

<dt>今後××××に求めることは何ですか？</dt>
<dd><textarea id="answer3"></textarea></dd>

</dl>

<div class="button-area">
<button id="button">送信する</button>
</div>

</form>

</div>
</main>

<footer>
<address>&copy; ××××</address>
</footer>

<script src="js/func.js"></script>
</body>

</html>