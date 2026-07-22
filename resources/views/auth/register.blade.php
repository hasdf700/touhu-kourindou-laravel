@extends('layouts.app')

@section('title', '會員註冊 - 幻想商鋪：香霖堂')

@section('content')

    <div class="py-5" style="background:#0D0520; min-height:80vh;">
        <div class="container-xl" style="max-width: 480px;">
            <div class="text-center mb-5">
                <div style="color:#C9A84C;">── 會員註冊 ──</div>
                <h2 style="color:#F5E6C8;">加入幻想鄉</h2>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label" style="color:#F5E6C8;">姓名</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"  autofocus autocomplete="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label" style="color:#F5E6C8;">電子信箱</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"  autocomplete="username">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label" style="color:#F5E6C8;">密碼</label>
                    <input id="password" type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror"  autocomplete="new-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label" style="color:#F5E6C8;">確認密碼</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="form-control @error('password_confirmation') is-invalid @enderror"
                        autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('login') }}" style="color:#C9A84C; font-size:14px;">
                        已經有帳號？前往登入
                    </a>

                    <button type="submit" class="btn btn-outline-light px-4">
                        註冊
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
