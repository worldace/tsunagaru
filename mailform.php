<?php

メール送信('tokaiknight@yahoo.co.jp', 'musou@s38.xrea.com', 'つながる経済学フォーム', 'つながる経済学の感想', $_POST['mailform']);

print "<html><head><meta charset=\"utf-8\"><meta http-equiv=\"refresh\" content=\"1;URL=http://musou.s38.xrea.com/tsunagaru/\"><title>送信成功</title></head>";
print "<body>メールを送信しました。<br><br><a href=\"http://musou.s38.xrea.com/tsunagaru/\">画面を切り替える</a>までしばらくお待ち下さい。</body></html>";


function メール送信($to, $from_email = '', $from_name = '', $subject = '', $contents = ''){
	mb_internal_encoding("UTF-8");
	if($from_email and $from_name) {
		$name = mb_encode_mimeheader(mb_convert_encoding($from_name, "ISO-2022-JP", "UTF-8"));
		$from = "From: $name<$from_email>";
	}
	elseif($from_email) {
		$from = "From: $from_email";
	}
	return mb_send_mail($to, $subject, $contents, $from);
}
