<?php
$title = 'ドーナツ屋ドナッツ/お問合せ';
$description = '説明（トップページ）';
$is_home = false; //トップページの判定用の変数
$now = "contact" ;
$path = '../'; 
include $path . 'inc/header.php'; // header.php の読み込み
?>


<div class="l-container title">
                    <h2 class="contact-title">お問合せ</h2>
                    <p class="contact-title-s">お気軽にご連絡ください。</p>          
        </div>


        <div class="l-container">


<form id="form" action="https://api.staticforms.xyz/submit" method="post">
    <input type="text" name="honeypot" style="display:none">
    <input type="hidden" name="accessKey" value="4b6b92a3-476f-4c38-8fab-93cffcddf501">
    <input type="hidden" name="subject" value="Webサイトからお問い合わせがありました" />
    <input type="hidden" name="replyTo" value="at2y-5667@jcom.zaq.ne.jp">
    <input type="hidden" name="redirectTo" value="">





   
    <label>氏名</label><br>
    <input id="name" name="name" type="text" placeholder="名前をご入力ください" ><br>

    <br>
    <label>氏名（ふりがな）</label><br>
    <input id="furigana" name="hurigana" type="text" placeholder="ふりがなで氏名をご入力ください" >
    <br><br>
    <label>メールアドレス</label><br>
    <input id="email" name="email" type="text" placeholder="メールアドレスをご入力ください" class="contact-textbox"
        >

    <br><br>
    <label>お問合せタイトル</label><br>
    <input id="tel" name="tel" type="text" placeholder="件名をご入力ください" class="contact-textbox"
        >
    <br><br>


    <div>
        <div >
            <label class="contact-label">お問い合わせ内容</label>
        </div>
        <div>
            <textarea id="message" class="contact-textarea" placeholder="メッセージをご入力ください" name="message"
                ></textarea>
        </div>
    </div>

   

    <div class="bottuns" >
        <input id="submit" class="boton" type="submit" value="送信" 
            >
        <input type="reset" id="reset" value="リセット"
            >
    </div>

</form>

</div>




    <?php include  $path . 'inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>
</html>