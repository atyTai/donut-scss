<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">

  <link href="<?php echo $path; ?>css/style.css" rel="stylesheet">

  

  <!-- ************************************************ Font Awesome -->
 
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
  
  <link href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" rel="stylesheet">

   

</head>

<body>


  <header>
    <div class="l-container header-nav">
      <a  <?php  if(!$is_home): ?> href="<?php  echo $path; ?>index.php" class="logo" <?php else: ?> class="<?php  echo "home" ?>"<?php endif ?> style="text-decoration:none;">
        <h3 class="logo-text">ドーナツ屋ドナッツ</h3>
        <h6 class="logo-text">手作りドーナツ</h6>
      </a>
    
    <div class="menu-bottun  u-sp">
    
      <i class="fa fa-bars fa-2x"></i>

    </div>


    <nav class="global-nav u-pc">
      
        <ul class="nav">
          <li ><a  <?php  if($now == "top"): ?> class="<?php  echo "now" ?>"<?php else: ?> href="<?php echo $path; ?>"<?php endif ?>>ホーム</a></li>
          <li ><a  <?php  if($now == "menu"): ?> class="<?php  echo "now" ?>"<?php else: ?> href="<?php echo $path; ?>menu" <?php endif ?>>メニュー</a></li>
          <li ><a <?php  if($now == "access"): ?> class="<?php  echo "now" ?>"<?php else: ?>  href="<?php echo $path; ?>access"<?php endif ?>>アクセス</a></li>
          <li ><a <?php  if($now == "contact"): ?> class="<?php  echo "now" ?>"<?php else: ?>  href="<?php echo $path; ?>contact"<?php endif ?>>お問合せ</a></li>

        </ul>

      
    </nav>

   
  </header>

  

  <main>

  <div class="bottun-saport">
<a href="#"></a>
</div>
