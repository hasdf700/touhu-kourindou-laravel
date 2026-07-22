@extends('layouts.app')

@section('title', '會員登入 - 幻想商鋪:香林堂')

@section('content')
    <section class="py-5" style="background: #0d0420; min-height: 80vh;">
        <div class="container-xl" style="max-width: 480px;">
            <div class="text-center mb-5">
                <div style="color: #C9A48C;">── 會員登入 ──</div>
                <h2 style="color:#F5E6C8;">歡迎回到幻想鄉</h2>
            </div>

            {{-- 狀態訊息(例如密碼重設成功後的提示) --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label" style="color:#F5E6C8;">電子信箱</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" required autofocus
                        autocomplete="username">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label" style="color:#F5E6C8;">密碼</label>
                    <input id="password" type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" required
                        autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Remember Me --}}
                <div class="mb-3 form-check">
                    <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
                    <label for="remember_me" class="form-check-label" style="color:#F5E6C8;">記住我</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" style="color:#C9A84C; font-size:14px;">忘記密碼？</a>
                    @endif

                    <button type="submit" class="btn btn-outline-light px-4">
                        登入
                    </button>
                </div>
            </form>
        </div>

    </section>

@endsection
