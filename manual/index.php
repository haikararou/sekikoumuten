<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>関工務店様　WordPress更新マニュアル</title>
  <link rel="stylesheet" type="text/css" media="screen, print" href="style.css" />
</head>

<body>
  <div class="contents">
    <h1><span>関工務店様様サイト</span><br>WordPress更新マニュアル</h1>
    <p>2021.12.1 更新</p>
    <div align="right">
      <form><input value="このページを印刷する" onclick="window.print()" type="button"></form>
    </div>

    <?php require_once(dirname( __FILE__ ).'/../../../../wp-load.php');
  if(!is_user_logged_in()) { ?>
    WordPressにログインしてください。
    <?php  } else { ?>

    <ol>
      <li><a href="index.php#login">ログインする</a></li>
      <li><a href="index.php#blog">ブログ記事を追加する</a></li>
    </ol>

    <!-- LOGIN -->
    <h3 id="login">ログインする</h3>
    <ol>
      <li>管理画面にアクセス<br><a href="<?php echo esc_url(home_url('')); ?>/wp-admin" target="_blank"><?php echo esc_url(home_url('')); ?>/wp-admin</a></li>
      <li>IDとパスワードを入力しログインボタンをクリック<br>
        <img src="img/login.jpg"><br>
        <span class="attention">※パスワードは他人に知られないよう厳重に管理してください。</span>
      </li>
      <li>ログインしたら、左側のメニューの中からダッシュボードを選択してください。<br><img src="img/dashboard.jpg"></li>
    </ol>

    <!-- h3 -->
    <h3 id="blog">ブログ記事を追加する</h3>
    <ol>
      <li><strong>ダッシュボードから「ブログ記事を追加する」をクリックします。</strong></li>

      <li><strong>▼「ブログ」新規登録画面</strong><br>
        <img src="img/project/edit.jpg"><br>

        <ol class="num">
          <li><strong>タイトル<span class="attention">*</span>（必須）</strong><br>
            記事のタイトルを入力します。
          </li>
          <li><strong>本文を入力<span class="attention">*</span>（必須）</strong><br>
            記事の本文になります。<br><br>画像を挿入する際は、画像を挿入したいところで、「画像ブロック」を追加してください。<br>
            <strong>「画像ブロック」の追加方法</strong><br>
            <img src="./img/block-img1.jpg" class="imgM"><br>
            「＋」ボタンを押して「画像」をクリックします。<br>
            <img src="./img/block-img2.jpg" class="imgM"><br>
            画像入力用のブロックが作成されるので、任意の画像を選択してください。<br><br>
            ※画像の詳しいアップロード方法は<a href="#photo">こちら</a><br>
            ※画像のリサイズ方法は<a href="#howto">こちら</a>
            <br><br>見出しを挿入する際は、見出しを挿入したいところで、「/」（半角スラッシュ）を入力してください。<br>
            <strong>「見出し」の追加方法</strong><br>
            <img src="./img/block-head.jpg" class="imgM"><br>
            「/」（半角スラッシュ）を入力して表示されたリストの中から、「見出し」を選択します。<br>
            <img src="./img/block-head2.jpg" class="imgM"><br>
            上記画像のように「H2」と表示され、入力した文字が大きく表示されます。<br>
            <img src="./img/block-head3.jpg" class="imgM"><br>
            すでに入力している文字を見出しに変更する場合は、文字に文字にカーソルを合わせます。表示された一番左のアイコンを選択し、さらにリストから「見出し」を選択します。
          </li>

          <li><strong>カテゴリー</strong><br>
            カテゴリーを選択します。<br>
            カテゴリーを追加する場合は「新規カテゴリーを追加」から入力してください。
          </li>

          <li><strong>アイキャッチ画像</strong><br>
            「アイキャッチ画像を設定」を選択し、画像を設定します。
          </li>

          <li><strong>更新<span class="attention">*</span>（必須）</strong><br>
            青い「更新」ボタンを押してください。記事が公開されます。<br>
            <span class="attention">公開日時が新しいものから順番にHP上に並びます。</span>
          </li>
        </ol>
      </li>
    </ol>


    <!-- HOWTO -->
    <h3 id="howto">写真素材の作り方</h3>
    <ol>
      <li>使用する画像を用意し、適切なサイズに合わせます<br>
        <span class="attention">※ブログ本文中の画像サイズは横1000px位を目安としてください。</span><br>
        ※リサイズしないと、膨大なデータサイズのファイルをアップすることになってしまい、サーバを圧迫してしまいます。<br>
      </li>
      <li>解像度は72dpi、拡張子は「jpg」</li>
      <li>ファイル名の重複を避けるために<span class="attention">「170314a.jpg」</span>ように、日付を付与<br>
        ※一日に複数枚の画像をアップするときは“<strong>a</strong>”の部分をアルファベット順に変えます。<br>
        ※<span class="attention">ファイル名に使える文字は「半角英数字」のみです。日本語や全角英数字は使わないでください。</span></li>
    </ol>

    <h4>リサイズの方法</h4>
    <ol>
      <li>メディアライブラリを開き、データサイズが大きいままの画像を選択<br>
        <img src="img/howto1.jpg">
      </li>
      <li>「画像を編集」をクリック<br>
        <img src="img/howto2.jpg">
      </li>
      <li>「画像縮尺の変更」で新規サイズの横幅に「1000px」と入力し、<br>「縮尺変更」をクリックすると、リサイズされます<br>
        <img src="img/howto3.jpg">
      </li>
    </ol>

    <!-- PHOTO -->
    <h3 id="photo" class="print_break">写真をアップロードする</h3>
    <p class="attention"><strong>【アップロード時の写真のファイル名は必ず半角英数字にしてください】</strong></p><br>
    <ol>
      <li>画像ブロックで「アップロード」をクリック<br>
        <img src="img/photo1.png">
      </li>
    </ol>

    <h4>【新しいファイルをアップロードしたい場合】</h4>
    <ol start="2">
      <li>ファイルを選択する画面が開きますので「ファイルをアップロード」を選択し、<br>
        「アップロードするファイルをドロップまたはファイルを選択」から、挿入するファイルをドロップもしくは選択してアップロード完了<br>
        <img src="img/photo2.jpg">
      </li>
    </ol>

    <h4>【既にアップロードされているファイルを使用する場合】</h4>
    <ol start="3">
      <li>「メディアライブラリ」を選択し、挿入するファイルを選んで「投稿に挿入」をクリックして完了<br>
        <img src="img/photo3.jpg"><br>
        アップロードした画像が表示されない場合は、左上のプルダウンで「すべてのメディア」「すべての日付」を選択してください。<br>
        <img src="img/photo4.jpg">
      </li>
    </ol>


    <!-- EDIT -->
    <h3 id="edit">記事を編集・削除する</h3>
    <ol>
      <li>ダッシュボードから、編集・削除したい投稿の「修正・削除する」ボタンをクリックします。</li>
    </ol>

    <h4>【記事を編集したい場合】</h4>
    <ol start="2">
      <li>記事のタイトル・もしくは編集をクリックし個別ページに移動し、内容を修正したら「公開」ボタンをクリック<br>
        <img src="img/re-edit.jpg">
      </li>
    </ol>

    <h4>【記事を削除したい場合】</h4>
    <ol start="3">
      <li>一覧ページからタイトル左側のチェックボックスにチェック</li>
      <li>一括操作から「ゴミ箱へ移動」を選択</li>
      <li>「適用」ボタンをクリックで記事が削除されます<br>
        <img src="img/delete-edit.jpg">
      </li>
    </ol>

    <!-- <h4 id="sort">記事を並び替える</h4>
    <ol start="6">
      <li>並び替えたい記事にカーソルを合わせると、十字矢印が表示されます。<br>（表示されない場合は対応していません）<br>十字矢印が表示されている状態で、クリックの長押しで記事を掴みます。<br>ドラッグアンドドロップで記事の順番を入れ替えることが出来ます。<br>
        <img src="img/sort-edit.jpg">
      </li>
    </ol> -->
  </div>
  <?php } ?>
</body>
</html>