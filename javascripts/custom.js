function mainmenu(){
$(" #globalNavi li").hover(function(){
        $(this).find('ul:first').css({visibility: "visible",display: "none"}).show(600);//※表示速度変更は、show(600)の数字を変更で可能。
        },function(){
        $(this).find('ul:first').css({visibility: "hidden"});
        });
}
 
  
  
$(document).ready(function(){                   
    mainmenu();
});
    
