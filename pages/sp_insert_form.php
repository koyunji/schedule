<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <title>Schedule Insert</title>

  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/schedule/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/schedule/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/schedule/images/favicon.ico">

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Font Link -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/schedule/css/reset.css">

  <!-- Plugin CSS Link -->
  <link rel="stylesheet" href="/schedule/lib/css/lightslider.css">
  <link rel="stylesheet" href="/schedule/lib/css/piechart.css">

  <!-- Main CSS Link -->
  <link rel="stylesheet" href="/schedule/css/style.css">

  <!-- Animation CSS Link -->
  <link rel="stylesheet" href="/schedule/css/animation.css">

  <!-- Media Query CSS Link -->
  <link rel="stylesheet" href="/schedule/css/media.css">
</head>
<body>
  <div class="wrapper">
    <!-- Main Dashboard Frame -->
    <div class="dashboard">

      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/header.php";
      ?>

      <section class="graph-ui">
        <?php
          include $_SERVER['DOCUMENT_ROOT']."/schedule/include/total_pofol.php";
        ?>

        <div class="input-box">
          <div class="title-box">
            <h3>Today's Schedule</h3>
          </div>
          <form action="/schedule/php/sp_insert.php" method="post" name="spInputForm">
            <div class="input-tit">
              <input type="text" placeholder="일정 요약을 입력해 주세요." name="spInputTit">
              <select name="spInputCate">
                <option value="database">DB Project</option>
                <option value="thermometer-half">API Project</option>
                <option value="clone">Renewal Project</option>
                <option value="bar-chart-o">Planning Project</option>
              </select>
            </div>  
            <div class="input-con">
              <textarea placeholder="상세 일정을 작성해 주세요." name="spInputCon"></textarea>
            </div>    
          </form>

          <div class="btns">
            <button onclick="spInsert()">진행 상황 작성</button>
          </div>
          <script>

            document.addEventListener('keydown', function(e){
              const keyCode = e.keyCode;
              //console.log(keyCode);
              if(keyCode == 13){
                e.preventDefault();
                spInsert();
              }
            });

            function spInsert(){
              if(!document.spInputForm.spInputTit.value){
                alert('일정 요약을 작성해 주세요.');
                document.spInputForm.spInputTit.focus();
                return;
              }

              if(!document.spInputForm.spInputCon.value){
                alert('상세 일정을 작성해 주세요.');
                document.spInputForm.spInputCon.focus();
                return;
              }

              document.spInputForm.submit();
            }
          </script>
        </div>
      </section>

      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/table_ui.php";
      ?>

      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/modal.php";
      ?>

        </div>

    </div>
    <!-- End of Main Dashboard Frame -->
  </div>

  <!-- Jquery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Plugins Load -->
  <script src="/schedule/lib/js/lightslider.js"></script>
  <script src="/schedule/lib/js/jquery.easypiechart.min.js"></script>
  <!-- Vanilla JS Code Load -->
  <script src="/schedule/js/index.js"></script>
  <script src="/schedule/js/modalAjax.js"></script>
  <!-- jQuery Code Load -->
  <script src="/schedule/js/total_avg.js"></script>
  <script src="/schedule/js/jquery.index.js"></script>
</body>
</html>