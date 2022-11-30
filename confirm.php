<?php 
	// フォームのボタンが押されたら
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// フォームから送信されたデータを各変数に格納
        $sex = $_POST["sex"];
        $name = $_POST["name"];
		/* $furigana = $_POST["furigana"]; */
		$email = $_POST["email"];
	/* 	$tel = $_POST["tel"]; */
		$item = $_POST["item"];
		$content  = $_POST["content"];
	}

	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {
		// 送信ボタンが押された時に動作する処理をここに記述する
        	
		// 日本語をメールで送る場合のおまじない
     	mb_language("ja");
		mb_internal_encoding("UTF-8");
		 //mb_send_mail("kanda.it.school.trial@gmail.com", "メール送信テスト", "メール本文");

        	// 件名を変数subjectに格納
        	$subject = "歯科キャリア登録フォーム受付完了のお知らせ【自動送信】";

        	// メール本文を変数bodyに格納
$body = <<< EOM
{$name}　様

この度はお忙しい中歯科キャリアにご登録頂き誠にありがとうございます。
以下の登録内容を、メールにて確認させていただきました。
        
==============================
【 ご職業 】 
{$sex}
        
【 お名前 】 
{$name}
        
【 メール 】 
{$email}
        
【 都道府県 】 
 {$item}
        
【 ご質問・ご要望等 】 
{$content}
==============================
        
内容を確認のうえ、キャリアコンサルタントより1日以内に連絡させて頂きます。
しばらくお待ちください。
        
━━━━━━━━━━━━━━━━━
        
AIキャリアデザイン
(歯科キャリア運営事業所)
〒201-0003 
東京都狛江市和泉本町3-23-7-202号
TEL: 050-3033-2308　　
Email: info@sika-cari.com
URL: https://sika-cari.com/
        
━━━━━━━━━━━━━━━━━
        
EOM;
        
		// 送信元のメールアドレスを変数fromEmailに格納
		$fromEmail = "info@sika-cari.com";

		// 送信元の名前を変数fromNameに格納
		$fromName = "info@sika-cari.com";

		// ヘッダ情報を変数headerに格納する		
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

		// メール送信を行う
        $to = 'info@sika-cari.com';
        mb_send_mail($to, $subject, $body, $header);
		mb_send_mail($email, $subject, $body, $header);

 		// サンクスページに画面遷移させる
		 header("Location: https://sika-cari.com/thanks.php");
		exit;
	}
?>
<html lang="ja">
<head>
     <!-- LINE Tag Base Code -->
<!-- Do Not Modify -->
<script>
(function(g,d,o){
  g._ltq=g._ltq||[];g._lt=g._lt||function(){g._ltq.push(arguments)};
  var h=location.protocol==='https:'?'https://d.line-scdn.net':'http://d.line-cdn.net';
  var s=d.createElement('script');s.async=1;
  s.src=o||h+'/n/line_tag/public/release/v1/lt.js';
  var t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);
    })(window, document);
_lt('init', {
  customerType: 'lap',
  tagId: '896d47e6-a6b0-4f92-8bc9-97b423c88889'
});
_lt('send', 'pv', ['896d47e6-a6b0-4f92-8bc9-97b423c88889']);
</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://tr.line.me/tag.gif?c_t=lap&t_id=896d47e6-a6b0-4f92-8bc9-97b423c88889&e=pv&noscript=1" />
</noscript>
<!-- End LINE Tag Base Code -->

     <!-- Global site tag (gtag.js) - Google Ads: 374362906 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-374362906"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-374362906');
</script>
<meta charset="UTF-8">
    <meta name="robots" content="index,follow">
    <title>入力内容確認｜歯科の求人・転職なら歯科キャリア｜全国</title>
    <meta name="description" content="歯科衛生士、歯科医師、歯科助手の転職支援、復職支援、キャリアプランニングを行っています。">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#"></head>
    <mpheta property="og:type" content="website or article">
    <meta property="og:title" content="入力内容確認｜歯科の求人・転職なら歯科キャリア｜全国">
    <meta property="og:description" content="歯科衛生士、歯科医師、歯科助手の転職支援、復職支援、キャリアプランニングを行っています。" />
 <meta property="og:url" content="https://ai-career.design/">
 <meta property="og:image" content="./images/seo.png">
 <meta property="og:site_name" content="歯科キャリア">
 <meta property="og:locale" content="ja_JP">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="index.css">
<link rel="icon" type="image/x-icon" href="https://www.sika-cari.com/images/fa.ico">
<!-- 太字普通体500 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
<!-- ロゴフォント -->
<script type="module" src="https://unpkg.com/ionicons@5.1.0/dist/ionicons/ionicons.esm.js" data-stencil-namespace="ionicons"></script>
<script src="https://kit.fontawesome.com/2ea09aa937.js" crossorigin="anonymous"></script>
<!-- 普通普通体300 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">

<!-- 数字フォント300 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<!-- AOSスライド -->
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

<!-- キャンペーンフォント -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">

<!-- 見出し英語フォント -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">

<!-- 見出し数字フォント-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">

<!-- 数字フォント700 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

<!-- 数字フォント900 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>
<body>

<div>
<div class="oneArea2">
<div class="inner">
  <div class ="hidari">
      <div class="kakunin2">
  <h1 class="mada"><i class="fas fa-exclamation-triangle"></i>まだご登録は完了しておりません。</h1>
  </div>

  <div class="kakunin"> 
  <ul id="breadcrumbs-one">
      <li>入力</li>
      <li class="naka">確認</li>
      <li>完了</li>
  </ul>
  </div>

	<form action="confirm.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="item" value="<?php echo $item; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
           
			<div class="huki"> 
	  <img src="./images/huki3.svg" alt="" class="hukinaka">
           <h1 class="contact-title contact-title2">登録フォーム&nbsp;入力内容確認</h1></div>
			<dl class="haikei">

		    <div >
				<dt class="hai"><label>ご職業&nbsp;<span>&nbsp;必須&nbsp;</span></label></dt>
					<dd class="siro"> <p><?php echo $sex ?></p></dd>
            </div>

                <div>
                <dt class="hai"><label>お名前&nbsp;<span>&nbsp;必須&nbsp;</span></label></dt>
				<dd class="siro">  <p><?php echo $name; ?></p></dd>
                </div>

               <!--  <div>
                    <label>ふりがな</label>
                    <p><?php echo $furigana; ?></p>
                </div> -->

                <div>
                <dt class="hai"><label>メール&nbsp;<span>&nbsp;必須&nbsp;</span></label></dt>
				<dd class="siro"> <p><?php echo $email; ?></p></dd>
                </div>
               
              
                <div>
				<dt class="hai"> <label>都道府県&nbsp;<span>&nbsp;必須&nbsp;</span></label></dt>
				<dd class="siro"> <p><?php echo $item; ?></p></dd>
                </div>

                <div>
                <dt class="hai"><label>ご質問・ご要望等</label></dt>
				<dd class="siro sai">  <p><?php echo nl2br($content); ?></p></dd>
                </div>
			</dl>
	    <div class="kaku2">
		<h1 class="kakuh1">個人情報に基づく利用規約</h1>
		<div class="isoto3">
<div class="example">  <p>AIキャリアデザイン(歯科キャリア運営事業所)は，本ウェブサイト上で提供するサービスにおける，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシーを定めます。</p>
  <br>
  <dl> 
<dt>第1条（個人情報）</dt>  
<br>
<dd>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</dd>
</dl>
<br>
<dl> 
<dt>第2条（個人情報の収集方法）</dt> 
<br>
 <dd>私たちは，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を私たちの提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。</dd>
</dl>

<br>
<dl> 
 <dt>第3条（個人情報を収集・利用する目的）</dt> 
 <br>
 <dd>私たちが個人情報を収集・利用する目的は，以下のとおりです。<br>
  <p> </p>
 1.私たちサービスの提供・運営のため<br>
 2.ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）<br>
 3.ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び私たちが提供する他のサービスの案内のメールを送付するため<br>
 4.メンテナンス，重要なお知らせなど必要に応じたご連絡のため<br>
 5.利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため<br>
 6.ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため<br>
 7.有料サービスにおいて，ユーザーに利用料金を請求するため<br>
 8.上記の利用目的に付随する目的<br></dd>

</dl>
<br>
 <dl> 
<dt> 第4条（利用目的の変更）</dt>
<br>
 <dd>
 1.私たちは，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。<br>
 <p> </p>
 2.利用目的の変更を行った場合には，変更後の目的について，私たち所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。<br></dd>
</dl>
 <dl> 
  <br>
     <dt> 第5条（個人情報の第三者提供）</dt> 
     <br>
     <dd> 1.私たちは，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。<br>
         <p></p>
         &nbsp;&nbsp;&nbsp;1.人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき<br>
         &nbsp;&nbsp;&nbsp;2.公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき<br>
         &nbsp;&nbsp;&nbsp;3.国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>
         &nbsp;&nbsp;&nbsp;4.予め次の事項を告知あるいは公表し，かつ私たちが個人情報保護委員会に届出をしたとき<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.利用目的に第三者への提供を含むこと<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.第三者に提供されるデータの項目<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.第三者への提供の手段または方法<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.本人の求めに応じて個人情報の第三者への提供を停止すること<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.本人の求めを受け付ける方法<br>
         <p></p>
 2.前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。<br>
 <p></p>
 &nbsp;&nbsp;&nbsp;1.私たちが利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合<br>
 &nbsp;&nbsp;&nbsp;2.合併その他の事由による事業の承継に伴って個人情報が提供される場合<br>
 &nbsp;&nbsp;&nbsp;3.個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合<br></dd>
</dl>    
 <dl> 
  <br>
     <dt> 第6条（個人情報の開示）</dt> 
     <br>
     <dd> 1.私たちは，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。<br>
         <p></p>
         &nbsp;&nbsp;&nbsp;1.本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合<br>
         &nbsp;&nbsp;&nbsp;2.私たちの業務の適正な実施に著しい支障を及ぼすおそれがある場合<br>
         &nbsp;&nbsp;&nbsp;3.その他法令に違反することとなる場合<br>
 2.前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。<br></dd>
</dl>
 <dl> 
  <br>
     <dt> 第7条（個人情報の訂正および削除）</dt> 
     <br>
     <dd> 1.ユーザーは，私たちの保有する自己の個人情報が誤った情報である場合には，私たちが定める手続きにより，私たちに対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。<br>
 <p></p>
         2.私たちは，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。<br>
 <p></p>
         3.私たちは，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。<br></dd>
</dl>
 <dl> 
  <br>
     <dt> 第8条（個人情報の利用停止等）</dt> 
     <br>
     <dd> 1.私たちは，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。<br>
 <p></p>
         2.前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。<br>
 <p></p>
         3.私たちは，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。<br>
 <p></p>
         4.前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。<br></dd>
</dl>  
 <dl> 
  <br>
     <dt> 第9条（プライバシーポリシーの変更）</dt> 
     <br>
     
     <dd> 1.本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。<br>
 <p></p>
         2.私たちが別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。<br></dd> 

</dl></div>
</div>
		<input type="button" value="&lt;&nbsp;修正" onclick="history.back(-1)"  class="kakunaka3">
		<button type="submit" name="submit"  class="kakunaka2">規約に同意して送信</button>
        </div>
	</form>
</div>
 <div class ="migi migi2">
			   <div class ="migiin">
                 <h1 class="ue"><img src="./images/can1.svg" alt="" class="u" ><!-- ご登録&お仕事開始<br>キャンペーン --></h1>
				 <div class="kikan"><h2 class="ue2"><img src="./images/chec.svg" alt="" class ="chec">&nbsp;Amazonギフトカード5万円分をプレゼント</h2></div>
				<div class="kikan"> <h2 class="ue2"><img src="./images/chec.svg" alt="" class ="chec">&nbsp;期間限定2022年3月1日~2022年4月30日</h2></div> 
				<dl class ="can">
				<dt class="cant"><img src="./images/touroku1.svg" alt=""></dt>
					<dd class="step"><span class="ei">STEP</span><span class="su">1</span></dd>
					<dd class="bun bun1">『歯科キャリア 登録フォーム』よりご登録下さい。担当者よりカウンセリング日程調整のご連絡をさせて頂きます。</dd>
					</dl>

				<dl class ="can">
				<dt class="cant"><img src="./images/saiyou2.svg" alt=""></dt>
				<dd class="step"><span class="ei">STEP</span><span class="su">2</span></dd>
				<dd class="bun bun2">カウンセリング実施後、ご利用者様のご要望にピッタリの求人をご紹介させて頂きます。またご希望に応じ応募書類の添削や面接対策を実施し、採用までのご支援をさせて頂きます。<br><span class="kome">※強制的な転職の斡旋はございません。</span>
				</dd></dl>

				<dl class ="can can3">
					<dt class="cant"><img src="./images/sintei3.svg" alt=""></dt>
					<dd class="step"><span class="ei">STEP</span><span class="su">3</span></dd>
					<dd class="bun bun3">無事採用が決定したら<span class="gifu">Amazonギフトカード5万円分</span>をプレゼント!!また入職日の調整~入職後のフォローまで引き続きご支援させて頂きます。<br><span class="kome">※入職日から1~3ヶ月経過後郵送でお届けします。<br>※本キャンペーンはAIキャリアデザイン(歯科キャリア運営事業所)によるご提供です。本キャンペーンについての問い合わせはAmazonではお受けしておりません。AmazonはAmazon.com, Inc.またはその関連会社の商標です。 </span>
					</dd></dl>
				</div>
               </div> 
</div>

</div>
<div class="fed1">
	   <h1><a href="https://ai-career.design/about.html">運営事業所:AIキャリアデザイン</a></h1>
     <h1><a href="https://ai-career.design/contact.html#pri">個人情報保護方針</a></h1>
     <h2>©&nbsp;歯科キャリア</h2>
     <!--  <img src="./images/rogo.svg" alt=""> -->
	</div>
</body>
</html>