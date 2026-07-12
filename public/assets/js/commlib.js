// JavaScript Document
// common lib
//認證碼產生函數captchaCode(drawArea, width, height, bgcolor, fontColor, fontSize,codeLength)
//返迴認證碼產生的值，需回寫入input的value
//網頁需先建立<canvas id="can"></canvas>的ID區塊
//drawArea為canvas的ID名稱
//width=影像寬，height=影像高，bgcolor=影像背景顏色
//fontColor=文字顏色，fontSize=文字大小，codeLength=認證碼長度
// 例子：
// <canvas id="can"></canvas>
// <input type="text" id="genCode01" name="genCode01" value="">
// var inputTxt = document.getElementById("genCode01");
// inputTxt.value = captchaCode("can", 100, 100, "blue", "white", "28px",5);
function captchaCode(drawArea, width, height, bgcolor, fontColor, fontSize, codeLength) {
    const canvas = document.getElementById(drawArea);
    const ctx = canvas.getContext('2d');
    canvas.width = width;
    canvas.height = height;

    // 背景顏色
    ctx.fillStyle = (bgcolor == '') ? 'rgb(' + rand(0, 255) + ',' + rand(0, 255) + ',' + rand(0, 255) + ')' : bgcolor;
    ctx.fillRect(0, 0, width, height);

    // 隨機產生 4 個字元
    const code = generateCode(codeLength);

    // 文字顏色
    ctx.fillStyle = (fontColor == '') ? 'rgb(' + rand(0, 255) + ',' + rand(0, 255) + ',' + rand(0, 255) + ')' : fontColor;
    ctx.font = 'bold ' + fontSize + ' sans-serif';
    ctx.textBaseline = 'middle';
    // 獲取文字寬度
    const textWidth = ctx.measureText(code).width;
    // 計算平均間距
    const spacing = (canvas.width - textWidth) / (code.length + 1);
    // 繪製驗證碼文本
    let x = spacing;
    for (let i = 0; i < code.length; i++) {
        ctx.fillText(code[i], x, canvas.height / 2);
        x += spacing + ctx.measureText(code[i]).width;
    }
    // 繪製隨機線條
    for (let i = 0; i < 5; i++) {
        ctx.beginPath();
        ctx.moveTo(Math.random() * canvas.width, Math.random() * canvas.height);
        ctx.lineTo(Math.random() * canvas.width, Math.random() * canvas.height);
        ctx.strokeStyle = 'rgba(' + rand(0, 255) + ',' + rand(0, 255) + ',' + rand(0, 255) + ',1)';
        ctx.stroke();
    }
    // 繪製隨機點
    for (let i = 0; i < 50; i++) {
        ctx.beginPath();
        ctx.arc(Math.random() * canvas.width, Math.random() * canvas.height, 1, 0, 2 * Math.PI);
        ctx.fillStyle = 'rgba(' + rand(0, 255) + ',' + rand(0, 255) + ',' + rand(0, 255) + ',1)';;
        ctx.fill();
    }
    return code;
}
//認證碼產生generateCode(characters) ，characters產生的字元長度
function generateCode(characters) {
    /* list all possible characters, similar looking characters and vowels have been removed */
    var possible = '2345789ABCDFGHKMNRSTWXYZ';
    var code = '';
    var i = 0;
    var len = possible.length;
    while (i < characters) {
        // code += substr(possible, mt_rand(0, strlen(possible)-1), 1);
        // code = code + possible.substr(Math.floor(Math.random() * len), 1);
        code = code + possible[rand(0, possible.length - 1)];
        i++;
    }
    return code;
}
//可自訂範圍min到max之間的亂數產生函數
//min亂數最小範圍，max亂數最大範圍
function rand(min, max) {
    //Math.random()，JS產生0-1之間的隨機亂數，包含0不包含1之間的值
    //Math.floor() 函式會回傳無條件捨去的整數，如12.3則回傳12。
    //Math.ceil() 函式會回傳無條件進位整數，如1.03則回傳2。
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);//回傳min到max之間的亂數
}

//是鄉鎮後端抓資料
$(function () {
    $('#myCity').change(function () {
        var CNo = $('#myCity').val();
        if (CNo == '') {
            return false;
        }
        $.ajax({
            url: 'api/gettown.php',
            type: 'post',
            dataType: 'json',
            data: {
                CNo: CNo
            },
            success: function (data) {
                if (data.c == true) {
                    $('#myTown').html(data.m);
                    $('#postal_code').val("");
                } else {
                    alert(data.m);
                }
            },
            error: function (data) {
                alert('系統目前無法連接後台資料庫');
            }
        });
    });
     $('#myTown').change(function () {
        // 找到目前被選中的那一個 <option> 標籤
        var $selectedOption = $(this).find('option:selected');
        var zipCode = $selectedOption.attr('data-zip');
        var townno = $selectedOption.attr('data-townno');

        console.log('zipCode:', zipCode);
        console.log('townno:', townno);  // 看這裡是什麼值

        if (zipCode) {
            $('#postal_code').val(zipCode);
            $('#town_no').val(townno);
        } else {
            // 如果選回提示字「選擇鄉鎮市區」，就清空輸入框
            $('#postal_code').val('');
        }
    });
});