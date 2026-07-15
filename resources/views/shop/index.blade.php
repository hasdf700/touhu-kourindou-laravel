@extends('layouts.app')

@section('title', '首頁 - 幻想商鋪：香霖堂')

@section('content')
    <section class="py-5" style="background:#0D0520; min-height:80vh;">
        <div class="container-xl">

            <div class="text-center mb-5">
                <div style="color:#C9A84C;">── 商店 ──</div>
                <h2 style="color:#F5E6C8;">商品一覽</h2>
            </div>

            {{-- 篩選 + 搜尋表單 --}}
            <form method="GET" action="{{ route('shop.index') }}" class="mb-5">
                <div class="row justify-content-center g-2">
                    {{-- 商品分類選擇 --}}
                    <div class="col-12 text-center mb-3">
                        <div class="btn-group flex-wrap" role="group">
                            <input type="radio" class="btn-check" name="category" id="category-all" value=""
                                autocomplete="off" @checked(request('category') === null) onchange="this.form.submit()">
                            <label class="btn btn-outline-light" for="category-all">全部分類</label>
                            @foreach ($categorys as $category)
                                <input type="radio" class="btn-check" name="category" id="category-{{ $category->id }}"
                                    value="{{ $category->id }}" autocomplete="off" @checked(request('category') == $category->id)
                                    onchange="this.form.submit()">
                                <label class="btn btn-outline-light"
                                    for="category-{{ $category->id }}">{{ $category->name }}</label>
                            @endforeach
                        </div>
                    </div>
                    {{-- 搜尋表單 --}}
                    <div class="col-auto">
                        <input type="text" name="search" class="form-control" placeholder="搜尋商品名稱或商店名稱"
                            value="{{ request('search') }}">
                    </div>
                    {{-- 送出按鈕 --}}
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-light">搜尋</button>
                    </div>
                </div>
            </form>

            {{-- 商品卡片列表 --}}
            <div class="row g-4">
                @forelse ($products as $product)
                    <div class="col-md-3 col-6">
                        <div class="card h-100" style="background:#1A0A2E; border:1px solid #C9A84C40;">
                            @if ($product->images->first())
                                <img src="{{ asset($product->images->first()->path) }}" class="cart-img-top"
                                    alt="{{ $product->name }}">
                            @endif
                            <div class="card-body text-center">
                                <h5 class="card-title" style="color:#F5E6C8; font-size:15px;">{{ $product->name }}</h5>
                                <p style="color:#C9A84C;">NT$ {{ $product->price }}</p>
                                <p style="font-size:12px; opacity:0.6;">{{ $product->category->name }} ·
                                    {{ $product->shop->name }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p>該分類目前的商品正整裝準備中，敬請期待！</p>
                    </div>
                @endforelse
            </div>

            {{-- 分頁 --}}
            <div class="mt-5 d-flex justify-content-center">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </section>
@endsection
