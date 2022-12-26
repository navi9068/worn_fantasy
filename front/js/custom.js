$('.loginpop').click(function(){
    $('.modal-pop').addClass('active'); 
    $('form#login').show();
    $('form#signup').hide();
});
$('.signup-pop').click(function(){
    $('.modal-pop').addClass('active'); 
    $('form#login').hide();
    $('form#signup').show();
 });
$('b.singup').click(function(){
    $('form#login').hide();
    $('form#signup').show();
});
$('b.login').click(function(){
    $('form#signup').hide();
    $('form#login').show();
});
$('label.forgot').click(function(){
    $('form#login').hide();
    $('form#forgot').show();
});
$('.close').click(function(){
    $('.modal-pop').removeClass('active');
});
$('.recover-pop').click(function(){
    $('form#forgot').hide();
    $('form#recover').show();
});
$('.reset-form').click(function(){
    $('form#reset').show();
    $('form#recover').hide();
});
$('.success-form').click(function(){
    $('form#reset').hide();
    $('.success-message').show();
});
$('.login-form').click(function(){
    $('.success-message').hide();
    $('form#login').show();
});
$('aside li a').click(function(){
    $(this).parent().addClass('active').siblings().removeClass('active');
});
/*$('img.eye').click(function(){
    $(this).next('input').attr('type', 'text');          
});*/

$('img.eye').click(function(){
    if($(this).next('input').attr('type', 'password')){
        $(this).next('input').attr('type', 'text');
    }else{
        $(this).next('input').attr('type', 'password');
   }
});
$('.modal-pop').click(function(){
    $(this).removeClass('active');
});
$('.modal-pop .modal-content-pop').click(function(){
    event.stopPropagation(); 
 });