<nav class="navbar navbar-expand-md fixed-top" style="background:rgba(10,5,25,0.95);">
    <div class="container-xl py-2 px-3 d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-white" href="{{ route('home') }}">
            幻想商鋪 <span style="color:#C9A84C;">香霖堂</span>
        </a>

        <div class="d-flex gap-3">
            <a href="{{ route('home') }}" class="nav-link text-white">首頁</a>
            <a href="#" class="nav-link text-white">商店</a>
            <a href="{{ route('characters.index') }}" class="nav-link text-white">角色介紹</a>
            <a href="#" class="nav-link text-white">會員</a>
            <a href="#" class="nav-link text-white">購物車</a>
        </div>
    </div>
</nav>
