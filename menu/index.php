<?php
$title = 'ドーナツ屋ドナッツ/メニュー';
$description = '説明（トップページ）';
$is_home = false; //トップページの判定用の変数
$now = "menu" ;
$path = '../'; 
include $path . 'inc/header.php'; // header.php の読み込み
?>



<div class="l-container title">
  <h2 class="">メニュー</h2>                   
</div>

<div class="l-container title">
  <h3 class="">人気メニュー</h3>                   
</div>


<div class="l-container images">

<?php
$menus = array(
  '1' =>array('name' => 'テキスト1', 'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキストテ', 'pay' => '￥yyX円'),
  '2' =>array('name' => 'テキスト2', 'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト', 'pay' => '￥yyy円'),
  '3' =>array('name' => 'テキスト3', 'detail' => 'テキストテキストテキストテキストテキストテキストテキスト', 'pay' => '￥sss円'),
  '4' =>array('name' => 'テキスト4', 'detail' => 'テキストテキストテキストテキストテキストテキストテキストテキストテキストテ', 'pay' => '￥XXX円'),
  '5' =>array('name' => 'テキスト5', 'detail' => 'テキストテキストテキストテキストテキストテキストテキスト', 'pay' => '￥Xyz円'),
  '6' =>array('name' => 'テキスト6', 'detail' => 'テキストテキストテキストテキストテキストテキストテキスト', 'pay' => '￥zzz円')
);
foreach($menus as $menu_key => $menu_value): ?>
    
<div class="image img<?php echo $menu_key ?>">
  <span></span>
  <div class="title">
  <h5>メニュー名<br><?php echo $menu_value['name'] ?></h5>
</div>
  <p>詳細<br><?php echo $menu_value['detail'] ?></p>
  <div class="payment">
<?php echo $menu_value['pay'] ?>
</div>


</div>

<?php endforeach ?>



</div>


<div class="l-container title">
  <h3 class="">店長の一言</h3>                   
</div>
    
<div class="l-container explanation">
    <div class="title">
  <h4 >当店のメニューの一番の自慢はテキストテキスト</h4>
   </div>

<p>
テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
</p>





</div>









    <?php include  $path . 'inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>
</html>