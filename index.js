$('dropdown > a').click(function(){
    $('this').parent().siblings().find('ul').fadeOut(500);
     $('this').next('ul').stop(true,false,true).fadeToggle(500);
     return false;
});
