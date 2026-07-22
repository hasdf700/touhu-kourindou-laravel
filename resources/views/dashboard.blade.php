@extends('layouts.app')

@section('title', '會員中心 - 幻想商鋪：香霖堂')

@section('content')

    <section class="py-5" style="background:#0D0520; min-height:80vh;">
        <div class="container-xl" style="max-width:600px;">

            <div class="text-center mb-5">
                <div style="color:#C9A84C;">── 會員中心 ──</div>
                <h2 style="color:#F5E6C8;">歡迎回來,{{ auth()->user()->name }}</h2>
            </div>

            <div class="card" style="background:#1A0A2E; border:1px solid #C9A84C40;">
                <div class="card-body" style="color:#F5E6C8;">
                    <p>電子信箱:{{ auth()->user()->email }}</p>
                    <p>會員編號:#{{ auth()->user()->id }}</p>
                </div>
            </div>

            <div class="mt-4 d-flex gap-3">
                <a href="{{ route('profile.edit') }}" class="btn btn-outline-light">
                    修改個人資料
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">
                        登出
                    </button>
                </form>
            </div>

        </div>
    </section>

@endsection
