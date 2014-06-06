$(document).ready(function(){

  $('button').on('click',function(){
    $('.welcome').fadeOut(1000,function(){
     $('.login').fadeIn(1000);   
    });
  });
  
  $('.login input[type="submit"]').hide();
  
  $('input[type="password"]').focusin(function(){
    $('.login input[type="submit"]').fadeIn(300);
  });
  
  $('input[type="submit"]').on('click',function(){
    var user = $('input[name="user"]').val();
    var pass = $('input[name="pass"]').val();
    if (user == 'hello' && pass == 'password') {
      $('.login').fadeOut(650);
      window.location.href = "/pages/list.php";
    }
    return false;
  });



});