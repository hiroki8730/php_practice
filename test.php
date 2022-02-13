<?php
// 変数
// ブログのタイトル
const ID = 1;
$title = "PHPテスト";
$content = 'PHPテストです';
$post_at = '2020/01/19';
$tag = ['PHP', 'プログラミング'];
$status = true; //公開 //非公開 false

// 二つの記事データを配列に入れて、ループ処理で表示する：前半
// ブログ①
$blog1 = array(
    'id' => ID,
    'title' => $title,
    'content' => $content,
    'post_at' => $post_at,
    'tag' => $tag,
    'status' => $status
);

// 変数
// ブログのタイトル
const ID2 = 2;
$title2 = "PHPテスト2";
$content2 = 'PHPテストです2';
$post_at2 = '2020/01/19';
$tag2 = ['PHP2', 'プログラミング2'];
$status2 = true; //公開 //非公開 false

// 配列の取り出し方
// 配列の中から添字orキーを指定する
// echo $blog1['title'];

// PHP5.4以降では配列の短縮構文が追加され、
// array()の代わりに[]を使えるようになった


// ブログ②
$blog2 = [
    'id2' => ID2,
    'title2' => $title2,
    'content2' => $content2,
    'post_at2' => $post_at2,
    'tag2' => $tag2,
    'status2' => $status2
];

// echo '<pre>';
// var_dump($blog2);
// echo '</pre>';

// 多次元配列
// 配列の中に配列
$blogs = [$blog1, $blog2];
echo '<pre>';
var_dump($blogs);
echo '</pre>';

// do {繰り返す処理} while (条件)
// $i = 0;
// do{
//     echo $i;
//     $i++;
// } while ($i < 11)
// whileとの違いはdo~の中の処理を必ず実行

// // for (条件) {繰り返す処理}
// for ($i = 0; $i < 11; $i++) {
//     echo $i;
// }


?>