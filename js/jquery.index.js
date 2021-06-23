$(document).ready(function() {
  //Lightslider Plugin Code
  $(".intro").lightSlider({
    item:1,
    pager:false,
    slideMargin: 0,
    loop:true,
    speed: 400, //ms'
    auto: true,
    pause: 7000,
    mode:'fade',
    adaptiveHeight:true,
  });

  $(".each-btns a").click(function(e){
    e.preventDefault();
  });

  const wHeight = $(window).height();
  const wWidth = $(window).width();

  if(wHeight > 720 && wWidth > 450){
    $(".wrapper").css('height', '100vh');
  } else {
    $(".wrapper").css('height', '100%');
  }

  if(wWidth > 768){
    $(".wrapper").css('height', '100vh');
  } else {
    $(".wrapper").css('height', '100%');
  }

  $(window).resize(function(){
    const wHeight = $(window).height();
    const wWidth = $(window).width();

    if(wHeight > 720 && wWidth > 450){
      $(".wrapper").css('height', '100vh');
    } else {
      $(".wrapper").css('height', '100%');
    }

    if(wWidth > 768){
      $(".wrapper").css('height', '100vh');
    } else {
      $(".wrapper").css('height', '100%');
    }
  });

});