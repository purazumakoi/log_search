<?php

$mode = $_GET['mode'];
$word = $_POST['word'];
$text = $_POST['text'];
$res = "";

if($mode === 'search' && $word && $text){

	$data = explode( "\n", $text );
	$cnt = count( $data );
	for( $i=0; $i<$cnt; $i++ )
	{
		if(strpos( $data[$i], (string)$word) ){
			$res .= $data[$i]."\n";
		}

	}

}

	
?>
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>テキスト内検索プログラム</title>
	<style type="text/css">
		textarea {
			width: 50em;
			height: 20em;
			font-size: 0.8em;
			padding: 5px;
		}

	</style>
</head>
<body>
<form method="post" action="./?mode=search">
	<p>生ログからの検索用です。一行単位で指定した文字列があるデータを抽出します。</p>
	<p>検索文字 <input type="text" name="word" value="<?php echo $word; ?>"> <input type="submit" value="検索"></p>
	<p>検索対象 <br/> <textarea class="textTarget" name="text"><?php echo $text; ?></textarea></p>
	<p>検索文字 該当列 <br/> <textarea name=""><?php echo $res; ?></textarea></p>
</form>
</body>
</html>
		