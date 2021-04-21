<!doctype html>
<html lang="ja">

  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"> 
    <meta charset="UTF-8">
    <title>ぺろドナ | Perro donar</title>
    <meta name="description" content="サイトの説明文">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="あなたのサイトURL">
    <link rel="icon" type="img/ico" href="img/favicon.ico" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="あなたのサイトURL" />
    <meta property="og:image" content="SNSで表示させたい画像のパス" />
    <meta property="og:title" content="ページタイトル" />
    <meta property="og:description" content="サイトの説明文" />
    <meta property="fb:app_id" content="facebookのApp ID" />
    <meta property="article:publisher" content="FacebookページのURL">
    <meta name="twitter:card" content="Twitterカードの種類">
    <meta name="twitter:site" content="@ユーザー名">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/commercial.css">
    <link rel="stylesheet" href="js/modal.js">
    <link rel="stylesheet" href="css/picture.css">
    <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
      integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  </head>

  <body>
    <header>
      @yield('header')
    </header>

    <main>
      @yield('contents')
    </main>

    <footer id="footer" class="bg-light">
      @yield('footer')
    </footer>

    <div class="text-white bg-primary">
      <p class="text-center mb-0 py-2"><small>Copyright (C) ぺろドナ | Perro donar All Rights Reserved.</small></p>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"></script>
  </body>

</html>