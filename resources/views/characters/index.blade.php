@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')
@section('title', '角色介紹-幻想商鋪：香霖堂')
@section('content')
    <style>
        .pagination .page-link {
            background-color: #1A0A2E;
            border-color: #C9A84C40;
            color: #F5E6C8;
        }

        .pagination .page-item.active .page-link {
            background-color: #C9A84C;
            border-color: #C9A84C;
            color: #0D0520;
        }

        .pagination .page-link:hover {
            background-color: #2A1550;
            color: #F5E6C8;
        }

        /* 隱藏分頁元件自帶的「Showing X to Y of Z results」文字 */
        .small {
            display: none;
        }
    </style>
    <section class="py-5" style="background:#0D0520; min-height:80vh;">
        <div class="container-xl">

            <div class="text-center mb-5">
                <div style="color:#C9A84C;">── 人物介紹 ──</div>
                <h2 style="color:#F5E6C8;">幻想郷の居民</h2>
            </div>
            {{-- 篩選表單 --}}
            <form method="GET" action="{{ route('characters.index') }}" class="mb-5 text-center">
                <select name="game" class="form-select d-inline-block w-auto" onchange="this.form.submit()">
                    <option value="">全部作品</option>
                    @foreach ($games as $game)
                        <option value="{{ $game->id }}" @selected(request('game') == $game->id)>
                            {{ $game->name }}
                        </option>
                    @endforeach
                </select>
            </form>
            {{-- 角色卡片列表 --}}
            <div class="row g-4">
                @forelse ($characters as $character)
                    <div class="col-md-3 col-6">
                        <div class="card h-100"
                            style="background:#1A0A2E; border:1px solid {{ $character->accent_color }}40">
                            @if ($character->image_path)
                                <img src="{{ $character->image_path }}" class="card-img-top" alt="{{ $character->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title" style="color:{{ $character->accent_color }}">{{ $character->name }}
                                </h5>
                                @if ($character->title)
                                    <p style="color:white; font-size:12px; opacity:0.7;">{{ $character->title }}</p>
                                @endif

                                <p style="color:white; font-size:12px; opacity:0.5;">{{ $character->game->name }}</p>

                                @if ($character->description)
                                    <p style="color:white; font-size:13px;">{{ Str::limit($character->description, 40) }}
                                    </p>
                                @endif

                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">此作品分類下目前尚無角色資料。</p>
                @endforelse
            </div>
            {{-- 分頁按鈕 --}}
            <div class="mt-5 d-flex justify-content-center">
                {{ $characters->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
@endsection
