
<!-- table content right side -->
<section class="table-ui">
  <div class="new-update">
    <div class="tit-box">
      <p>Recent Update</p>
      <a href="#">More</a>
    </div>

    <ul class="con-detail">
    <?php
      include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
      $sql = "SELECT*FROM sp_table ORDER BY SP_idx DESC LIMIT 5"; //데이터베이스를 조회하여 불러들이는 문법
      $ta_result = mysqli_query($dbConn, $sql);

      if(!$ta_result){ 
    ?>
    <li>
      <p>입력된 일정이 없습니다.</p>
    </li>
    <?php
      } else {
        while($ta_row=mysqli_fetch_array($ta_result)){ //결과값이 있다면 배열을 찾아 ta_row 변수에 저장
          $ta_row_cate = $ta_row['SP_cate']; //각 결과값들을 매치시키기 위해 각각의 변수에 저장
          $ta_row_tit = $ta_row['SP_tit'];
          $ta_row_reg = $ta_row['SP_reg'];
    ?>
      <li>
        <i class="fa fa-<?=$ta_row_cate?>"></i> <!--데이터베이스 값들을 html에 매칭-->
        <div class="con-txt">
          <p><a href="#"><?=$ta_row_tit?></a></p>
          <em><?=$ta_row_reg?></em>
        </div>
      </li>
      <?php
          }
        }
      ?>
    </ul>
  </div>
  <div class="each-contents">
    <div class="each-btns">
      <a href="?key=database" class="active">Database</a>
      <a href="?key=api">API</a>
      <a href="?key=renewal">Renewal</a>
      <a href="?key=planning">Planning</a>
    </div>
      <ul class="con-detail">
        <?php
        $tab_path = $_GET['key'];
          // echo $tab_path;
          include $_SERVER["DOCUMENT_ROOT"].'/schedule/include/tabs/'.$tab_path.'.php';
        ?>
      </ul>
    </div>
  </div>
</section>


