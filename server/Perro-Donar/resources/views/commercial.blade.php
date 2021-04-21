@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('contents')
    <h1 class="text-danger text-center mt-5">特定商取引法に基づく表記</h1>
    <div class="container">
      <h2 class="mt-5">WEBサービス提供者</h2>
      <p>PERRO DONAR株式会社</p>
      <br>
      <h2>サイト代表者名</h2>
      <p>氏田 裕樹</p>
      <br>
      <h2>所在地</h2>
      <p>〒361-0025 埼玉県行田市埼玉5056-1</p>
      <br>
      <h2>販売価格</h2>
      <p>寄付金の10％を運営費として差し引く</p>
    </div>


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