console.log('This would be the main JS file.');

// page Topフェードイン・アウト
$(function(){
    $(window).bind("scroll", function() {
    // トップから150px以上スクロールしたら
    if ($(this).scrollTop() > 150) { 
     // ページトップのリンクをフェードインする
        $(".pageTop").fadeIn();
    } else { // それ以外は
     // ページトップのリンクをフェードアウトする
        $(".pageTop").fadeOut();
    }
});
