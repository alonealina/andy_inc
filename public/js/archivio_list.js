function clickStorePref1() {
    if ($('#store1').css('display') == 'flex') {
        // 表示されている場合の処理
        $('#store1').css( 'display', 'none' );
    } else {
        // 非表示の場合の処理
        $('#store1').css( 'display', 'flex' );
        $('#store2').css( 'display', 'none' );
        $('#store3').css( 'display', 'none' );
        $('#store4').css( 'display', 'none' );
        $('#store5').css( 'display', 'none' );
        $('#store6').css( 'display', 'none' );
    }
}

function clickStorePref2() {
    if ($('#store2').css('display') == 'flex') {
        // 表示されている場合の処理
        $('#store2').css( 'display', 'none' );
    } else {
        // 非表示の場合の処理
        $('#store1').css( 'display', 'none' );
        $('#store2').css( 'display', 'flex' );
        $('#store3').css( 'display', 'none' );
        $('#store4').css( 'display', 'none' );
        $('#store5').css( 'display', 'none' );
        $('#store6').css( 'display', 'none' );
    }
}

function clickStorePref3() {
    if ($('#store3').css('display') == 'flex') {
        // 表示されている場合の処理
        $('#store3').css( 'display', 'none' );
    } else {
        // 非表示の場合の処理
        $('#store1').css( 'display', 'none' );
        $('#store2').css( 'display', 'none' );
        $('#store3').css( 'display', 'flex' );
        $('#store4').css( 'display', 'none' );
        $('#store5').css( 'display', 'none' );
        $('#store6').css( 'display', 'none' );
    }
}

function clickStorePref4() {
    if ($('#store4').css('display') == 'flex') {
        // 表示されている場合の処理
        $('#store4').css( 'display', 'none' );        
    } else {
        // 非表示の場合の処理
        $('#store1').css( 'display', 'none' );
        $('#store2').css( 'display', 'none' );
        $('#store3').css( 'display', 'none' );
        $('#store4').css( 'display', 'flex' );
        $('#store5').css( 'display', 'none' );
        $('#store6').css( 'display', 'none' );
    }
}

function clickStorePref5() {
    if ($('#store5').css('display') == 'flex') {
        // 表示されている場合の処理
        $('#store5').css( 'display', 'none' );        
    } else {
        // 非表示の場合の処理
        $('#store1').css( 'display', 'none' );
        $('#store2').css( 'display', 'none' );
        $('#store3').css( 'display', 'none' );
        $('#store4').css( 'display', 'none' );
        $('#store5').css( 'display', 'flex' );
        $('#store6').css( 'display', 'none' );
    }
}

function clickStorePref6() {
    if ($('#store6').css('display') == 'flex') {
        // 表示されている場合の処理
        $('#store6').css( 'display', 'none' );
    } else {
        // 非表示の場合の処理
        $('#store1').css( 'display', 'none' );
        $('#store2').css( 'display', 'none' );
        $('#store3').css( 'display', 'none' );
        $('#store4').css( 'display', 'none' );
        $('#store5').css( 'display', 'none' );
        $('#store6').css( 'display', 'flex' );
    }
}

