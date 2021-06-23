//Cutting Contents Text
const conTxt = document.querySelectorAll('.con-txt p a');

conTxt.forEach(element => {
  const cutTxt = element.textContent.slice(0, 10) + "...";
  element.textContent = cutTxt;
});

//Pie Chart Rendering Code
$(function(){
  $(window).ajaxComplete(function(){
    let lWidth = 10;
    let tWidth = 8;
    let eachSize = 110;

    let pieSize = 200;
    let clearSet;
    const winWidth = $(window).width();

    if(winWidth <= 1280 && winWidth > 950){
      pieSize = 150;
    } else if(winWidth <= 950 && winWidth > 400) {
      pieSize = 170;
    } else if(winWidth <= 400) {
      pieSize = 140;
    } else {
      pieSize = 200;
    }

    // var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
    $('.total-chart .chart').easyPieChart({
      easing: 'easeOutElastic',
      delay: 3000,
      barColor: '#7c41f5',
      trackColor: '#c1a5fa',
      scaleColor: false,
      lineWidth: 18,
      trackWidth: 18,
      size: pieSize,
      lineCap: 'butt',
      onStep: function(from, to, percent) {
        this.el.children[0].innerHTML = Math.round(percent);
      }
    });

    //window.addEventListener('resize', function(){
    $(window).resize(function(){
      const winWidth = $(window).width();

      if(winWidth <= 1280 && winWidth > 950){
        pieSize = 150;
      } else if(winWidth <= 950 && winWidth > 400) {
        pieSize = 170;
      } else if(winWidth <= 400) {
        pieSize = 140;
      } else {
        pieSize = 200;
      }

      console.log(pieSize);

      clearTimeout(clearSet);
      clearSet = setTimeout(function(){
        $('.total-chart .chart').removeData('easyPieChart').find('canvas').remove();
        //var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
        $('.total-chart .chart').easyPieChart({
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#7c41f5',
        trackColor: '#c1a5fa',
        scaleColor: false,
        lineWidth: 18,
        trackWidth: 18,
        size: pieSize,
        lineCap: 'butt',
        onStep: function(from, to, percent) {
          this.el.children[0].innerHTML = Math.round(percent);
        }
      }, 150);
    }); 
  });

  //------------each charts
  if(winWidth <= 950){
    lWidth = 5;
    tWidth = 5;
  } else {
    lWidth = 8;
    tWidth = 8;
  }

  if(winWidth <= 1280){
    eachSize = 90;
  } else {
    eachSize = 110;
  }

  //$(window).ajaxComplete(function(){

  const poData = [
    {poKind:'.db-pofol', bColor:'#7c41f5', tColor:'#c1a5fa'},
    {poKind:'.api-pofol', bColor:'#ff9062', tColor:'#ffbca1'},
    {poKind:'.renewal-pofol', bColor:'#3acbe8', tColor:'#a2dce8'},
    {poKind:'.planning-pofol', bColor:'#69c', tColor:'#ace'},
    // {poKind:'.total-chart', bColor:'#69c', tColor:'#ace'}
  ];

  function startPie(){
    poData.map(value => {
      //console.log(value.b);
      //document.querySelector(value.poKind + ' .chart canvas').remove();
      //var chart = window.chart = new EasyPieChart(document.querySelector(value.poKind + ' .chart'), {
      $(value.poKind + ' .chart').easyPieChart({
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: value.bColor,
        trackColor: value.tColor,
        scaleColor: false,
        lineWidth: lWidth,
        trackWidth: tWidth,
        size: eachSize,
        lineCap: 'round',
        onStep: function (from, to, percent) {
          this.el.children[0].innerHTML = Math.round(percent);
        }
      });
    });
  }
  startPie();

  });

  //Mobile Menu Activate
  // const mobileMenu = document.querySelector('.mobile-menu');

  // mobileMenu.onclick = () => {
  //   mobileMenu.classList.toggle('active');
  // }

  $(".mobile-menu").click(function(){
    $(this).toggleClass("active");
    
    if($(this).hasClass("active")){  
      $(this).next().removeClass("hide");   
      $(this).next().addClass("show");
    } else {
      $(this).next().removeClass("show");   
      $(this).next().addClass("hide");
    }
  });
});

//Open Modal for Input Rates
//1. 버튼 DOM 저장 => index.php 134번줄
const modalBtn = document.querySelector('#open-modal');
//5. modal변수에 모달박스 DOM 저장
const modal = document.querySelector('#myModal');
//6. X 버튼 DOM 저장
const times = document.querySelector('#times');

//4. modalBtn을 클릭했을 때 모달 박스 보이기
// When the user clicks on the button, open the modal
modalBtn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
//7. X 버튼 클릭 시 모달창 제거 (사용 XXXXXXXX)
// times.onclick = function() {
//   modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
//8. 모달 이외 영역 클릭 시 모달창 제거
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


