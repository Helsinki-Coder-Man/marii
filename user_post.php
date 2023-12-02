<?php>

include 'strangeness.php';

function user_post($db, $txt_content, $date, $name, $post_num) {
	$db->exec("INSERT INTO posts (content, date, name, postid) VALUES ('{$txt_content}', '{$date}', '{$name}', '{$post_num}')");

	$post_num++;
}

user_post($database, $_POST["txt"], "PLACEHOLDER", $_POST["name"], $global_post_counter);

?>
