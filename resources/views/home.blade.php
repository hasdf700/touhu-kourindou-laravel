@extends('layouts.app')

@section('title', '首頁 - 幻想商鋪：香霖堂')

@section('content')

    <section class="py-5 text-center" style="min-height:60vh; display:flex; flex-direction:column; justify-content:center;">
        <div class="font-jp mb-3" style="font-size:13px;letter-spacing:0.6em;color:#C9A84C;">歡迎來到幻想鄉</div>
        <h1 style="font-size:48px; color:#F5E6C8;">幻想商鋪</h1>
        <div class="mb-4" style="color:#C9A84C;">TOUHOU PROJECT STORE</div>
        <div>
            <a href="#" class="btn btn-outline-light px-5 py-2 me-2">進入商店</a>
            <a href="#" class="btn btn-outline-light px-5 py-2">認識角色</a>
        </div>
    </section>

    <section class="py-5" style="background:#150A28;">
        <div class="container-xl">
            <div class="text-center mb-5">
                <div style="color:#C9A84C;">── 商品 ──</div>
                <h2 style="color:#F5E6C8;">推薦商品</h2>
            </div>

            <div class="row g-4">
                @forelse ($featuredProducts as $product)
                    <div class="col-md-3 col-6">
                        <div class="card h-100" style="background:#1A0A2E; border:1px solid #C9A84C40;">
                            @if ($product->images->first())
                                <img src="{{ asset($product->images->first()->path) }}"
                                     class="card-img-top"
                                     alt="{{ $product->name }}">
                            @endif
                            <div class="card-body text-center">
                                <h5 class="card-title" style="color:#F5E6C8; font-size:15px;">
                                    {{ $product->name }}
                                </h5>
                                <p style="color:#C9A84C;">NT$ {{ $product->price }}</p>
                                <p style="font-size:12px; opacity:0.6;">{{ $product->shop->name }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">目前還沒有上架商品。</p>
                @endforelse
            </div>
        </div>
    </section>

@endsection