// 1. 定義核心的篩選函式，接收一個 filterName 參數，找出腳色
function get_chars(filterName, mode) {
    // 發送 AJAX 請求給 PHP
    $.ajax({
        url: 'api/get_fetch_chars.php',
        type: 'POST',
        data: {
            currentFilter: filterName,
            mode: mode
            // 將目前的篩選條件傳給 PHP
        },
        success: function (response) {
            // 成功取得 PHP 渲染好的 HTML 後，動態塞入容器中
            $('#char-grid').html(response);
            refreshRevealObserver();
        },
        error: function () {
            console.log('資料載入失敗');
        }
    });
}

//彈出角色modal
$(document).on('click', '.char-card', function () {
    let imagePath = $(this).data('img-path');
    let game = $(this).data('game');
    let nameJp = $(this).data('name-jp');
    let nameZh = $(this).data('name-zh');
    let titleJp = $(this).data('title-jp');
    let color = $(this).data('color');
    let accentColor = $(this).data('accent-color');
    let ability = $(this).data('ability');
    let theme = $(this).data('theme'); // 讀取主題曲
    let spell = $(this).data('spell');
    let desc = $(this).data('desc');
    let artist = $(this).data('artist');


    $('#modal-imagePath').attr('src', imagePath);
    $('#charModalLabel').text(nameJp);
    $('#modal-nameZh').text(nameZh).css('color', accentColor);
    $('#modal-artist').text('繪 師 ♥ by ' + artist);

    if (titleJp) {
        $('#modal-title-badge').text(titleJp).css({
            'background': color + '40',
            'color': accentColor,
            'border': `1px solid ${accentColor}50`,
            'padding': '3px 8px',
            'display': 'inline-block'
        }).show();
    } else {
        $('#modal-title-badge').hide();
    }

    // 霓虹配色與文字綁定
    $('#modal-top-bar').css('background', `linear-gradient(90deg, ${color}, ${accentColor})`);
    $('#modal-divider').css('background', `linear-gradient(90deg, ${accentColor}40, transparent)`);
    $('#modal-ability-label').css('color', accentColor);
    $('#modal-theme-label').css('color', accentColor); // 主題曲標籤霓虹色

    $('#modal-desc').text(desc);
    $('#modal-ability').text(ability);
    $('#modal-theme').text(theme); // 塞入主題曲名稱（例如：幽雅に咲かせ、墨染の桜）
    $('#modal-spell').text(spell).css('color', accentColor);

    // Modal bg
    $('.touhou-modal .modal-content').css({
        background: 'linear-gradient(135deg,' + color + 'CC 0%,#1A0A2E 50%,rgba(13,5,32,0.98) 100%)',
        'box-shadow': '0 0 60px ' + color + '60, 0 0 20px rgba(201,168,76,0.2)'
    });

    // 🎯 1. 呼叫 Bootstrap 內建的 show
    $('#charModal').modal('show');
});
// 🎯 2. 安全防禦：當這個 Modal 關閉時，不管三七二十一，強制把所有殘留的黑布全部消滅！
$(document).on('hidden.bs.modal', '#charModal', function () {
    // 移除畫面上所有漏網之魚的黑色遮罩
    $('.modal-backdrop').remove();
    // 恢復網頁身體的滾動條（防止黑布消失了但網頁被鎖死不能滾動）
    $('body').removeClass('modal-open').css('overflow', '');
});
//彈出商品modal
$(document).on('click', '.product-img-wrap', function () {
    // 1. 向上尋找最接近、帶有所有 data 屬性的商品卡片節點
    let card = $(this).closest('[data-name]');

    // 2. 讀取卡片上藏好的所有商品細節


    let name = card.data('name');
    let price = card.data('price');
    let info = card.data('info');
    let sname = card.data('sname');
    let surl = card.data('surl');
    let imagesStr = card.data('images');
    let sid = card.data('sid');
    let pid = card.data('pid');

    // 3. 把資料精準塞入 Modal 的對應欄位中
    $('#modal-product-name').text(name);
    $('#modal-product-shop').attr('href', surl).html(`<i class="fa-solid fa-store me-1"></i> by ${sname}`);
    $('#modal-product-info').text(info); // 使用 .text() 會自動處理換行，且能防範 XSS 注入
    $('#modal-product-price').text(`NT$ ${price}`);

    // 4. 連動 Modal 裡面的購物車按鈕，把正確的商品 id 綁上去
    $('#modal-add-to-cart-btn').attr('data-sid', sid).attr('data-pid', pid);

    // 找好 Modal 內的點點容器與圖片容器（請對照你的 HTML 結構確保 id/class 對得上）
    let $indicatorsContainer = $('#carouselExampleIndicators .carousel-indicators');
    let $innerContainer = $('#carouselExampleIndicators .carousel-inner');

    // 🥊 動作一：每次打開，先無情地把上次的舊圖片清空！
    $indicatorsContainer.empty();
    $innerContainer.empty();

    if (imagesStr) {
        // 將字串用逗號切開，變成陣列，例如：['uploads/p1.jpg', 'uploads/p2.jpg']
        let imagesArray = imagesStr.split(',');

        // 🥊 動作二：跑迴圈組裝全新的輪播 HTML
        imagesArray.forEach(function (imgUrl, index) {
            // 第一張圖必須要有 active 類別，否則 Bootstrap 輪播會整塊隱形壞掉
            let isActive = (index === 0) ? 'active' : '';
            let isCurrent = (index === 0) ? 'aria-current="true"' : '';

            // 1. 組裝底部的點點 (Indicators)
            let indicatorHtml = `<button type="button" 
                                    data-bs-target="#carouselExampleIndicators" 
                                    data-bs-slide-to="${index}" 
                                    class="${isActive}" 
                                    ${isCurrent} 
                                    aria-label="Slide ${index + 1}">
                                 </button>`;
            $indicatorsContainer.append(indicatorHtml);

            // 2. 組裝圖片區塊 (Carousel Item)
            let itemHtml = `<div class="carousel-item ${isActive}">
                            <img src="${imgUrl}" 
                            class="d-block w-100" 
                            style="object-fit: contain; max-height: 350px; min-height: 350px;height: auto;" 
                            alt="商品圖片">
                            </div>`;
            $innerContainer.append(itemHtml);
        });

        // 🥊 動作三：如果只有 1 張圖片，就把左右切換按鈕隱藏，這樣畫面比較漂亮
        if (imagesArray.length <= 1) {
            $('#carouselExampleIndicators .carousel-control-prev, #carouselExampleIndicators .carousel-control-next').hide();
            $indicatorsContainer.hide(); // 只有一張也把點點藏起來
        } else {
            $('#carouselExampleIndicators .carousel-control-prev, #carouselExampleIndicators .carousel-control-next').show();
            $indicatorsContainer.show();
        }
    }


    // 5. 零延遲直接喚醒 Modal
    let detailModal = new bootstrap.Modal(document.getElementById('productDetailModal'));
    detailModal.show();

    // 🥊 動作四：大魔王防禦！強迫 Bootstrap 輪播歸零（跳回第一張），避免上次看商品滑到第三張，這次打開直接卡在第三張
    let carouselEl = document.getElementById('carouselExampleIndicators');
    let carouselInstance = bootstrap.Carousel.getOrCreateInstance(carouselEl);
    carouselInstance.to(0);
});
//加入購物車
function addcart(s_id, p_id, action) {
    // 🎯 核心防呆：不管你的輸入框叫 #qty 還是 #modal-product-qty，通通去撈撈看
    var qtyInput = $("#modal-product-qty").val();
    // 🎯 轉型與預設值：強迫轉成整數。如果抓到 undefined、空字串或打錯字(NaN)，「一律強制當作 1 件」！
    var qty = parseInt(qtyInput, 10);

    if (isNaN(qty) && qty <= 0) {
        qty = 1;
    }

    $.ajax({
        url: 'api/addcart.php',
        type: 'get',
        data: {
            p_id: p_id,
            s_id: s_id,
            qty: qty,
            action: action
        },
        dataType: 'json', // 明確指定 JSON 格式
        success: function (data) {
            if (data.c == "login_required") {
                // 🎯 捕捉到未登入狀態，提示並導向登入頁面
                alert(data.m);
                window.location.href = 'member.php?action=login';

            } else if (data.c == true) {
                alert(data.m);
                $('#modal-product-qty').val(1);
                $('#nav-cart-badge, #nav-cart-badge-desk').text(data.total_qty).show();

            } else {
                alert(data.m);
            }
        },
        error: function (data) {
            alert("系統目前無法連接到後台資料庫。");
        }
    });
}
