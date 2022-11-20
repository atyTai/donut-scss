<?php
$title = 'ドーナツ屋ドナッツ/アクセス';
$description = '説明（トップページ）';
$is_home = false; //トップページの判定用の変数
$now = "access";
$path = '../';
include $path . 'inc/header.php'; // header.php の読み込み
?>
<!-- 特定のページでのみ読み込むスタイルシートなどがあればここに追加 -->




<div class="l-container title">
    <h2 class="">アクセス</h2>

</div>

<div class="l-container access-info">
    <div class="map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19158.673445185595!2d140.86779022236283!3d36.98085974616581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602113acbd299d81%3A0xd938935c44f57482!2zVFNVVEFZQSDjg5bjg4Pjgq_jgqjjg7zjgrnlsI_lkI3mtZzkvY_lkInlupc!5e0!3m2!1sja!2sjp!4v1660304279646!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>
    <div class="access-info-text">
        <!-- 営業時間などのテキストを追加 -->
        <div class="">
            <i class="fa-solid fa-location-dot"></i>
            <p>岡崎県宮市仮田3-4-5</p>
        </div>
        <div class="">
            <i class="fa-solid fa-clock"></i>
            <p class="">9:00-17:00&nbsp;&nbsp;(定休日：火曜日、水曜日）</p>
        </div>
        <div class="">
            <i class="fa-solid fa-phone"></i>
            <p class="">12-1233-1234</p>
        </div>
        <div class="">

            <i class="fa-solid fa-envelope"></i>
            <p class="">donattu@example.com</p>
        </div>
    </div>
</div>




<?php include  $path . 'inc/footer.php'; ?>
<!-- footer.php の読み込み -->
</body>

</html>