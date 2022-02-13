<?php
// 変数
// ブログのタイトル
$title = "PHPテスト";
$content = 'PHPテストです';
$post_at = '2020/01/19';
$tag = ['PHP', 'プログラミング'];
$status = true; //公開 //非公開 false

// 定数
const ID = 1;

echo ID;
echo '<br>';
echo $title;
echo '<br>';
echo $content;
echo '<br>';
echo $post_at;
echo '<br>';
print_r($tag);

// データ型
var_dump($title);

// ""と''の違い
echo '<br>';
echo "タイトル名：$title";
echo '<br>';
echo 'タイトル名：$title';
// ''の方が処理速度が速い

?>