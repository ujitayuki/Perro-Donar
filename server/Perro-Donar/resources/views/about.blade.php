@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('contents')
    <section class="section-container2">
      <h2 class="text-center text-white pt-5 description-title">「わんちゃん好き」と「愛犬」をつなげるプラットフォーム
      </h2>
      <div class="mt-5 text-center">
        <ul class="description">
          <li class="border1">
            <h2>お好きなワンちゃんを選ぶ</h2>
            <img src="img/description1.png" alt="">
            <p class="text-right">上記の検索BOXからお好きな犬種をさがします。<br>
              その他にも「NEWわんちゃん」や「人気ランキング」からも探せます。</p>
          </li>
          <li class="border2">
            <h2>愛犬を登録する<br>
              <br>
            </h2>
            <img src="img/description2.png" alt="">
            <p>ご自身の愛犬も「愛犬を掲載する」から登録してみよう。<br>
              わんちゃん好きの方がいっぱいです。</p>
          </li>
          <li>
            <h2>お互いのスポンサーになる</h2>
            <img src="img/description3.png" alt="">
            <p>お互いにスポンサーになってみよう。<br>
              お好きなわんちゃんを探して、お気に入りの子のスポンサーとして寄付をしよう。
              また、ご自身の愛犬を登録して、たくさんの方にスポンサーになってもらおう。</p>
          </li>
        </ul>
      </div>
      <div class="wave">
      </div>
    </section>

    <section class="mt-5">
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">お問い合わせ</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <p>お名前</p>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <p>メールアドレス</p>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <p>お問い合わせ内容</p>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">閉じる</button>
              <button type="button" class="btn btn-primary text-white">送信</button>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection