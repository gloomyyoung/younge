<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Board Sample</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/board/css/style.css">
  <link rel="stylesheet" href="/board/css/media.css">
</head>

<body>
  <div class="wrap clear">
    
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/board/include/header.php';
    ?>

    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/board/include/landing.php';
    ?>

    <section id="community">

      <div class="write_insert_form details">
        <div class="center">
          <h2 class="title">Board Detail List</h2>

          <?php

            $con_idx = $_GET['idx'];
            include $_SERVER['DOCUMENT_ROOT']."/board/connect/db_connect.php";
            $sql = "SELECT * FROM bor_comm WHERE 	BOR_comm_idx = $con_idx";

            $detail_result = mysqli_query($dbConn, $sql);
            //var_dump($detail_result);
            $detail_row = mysqli_fetch_array($detail_result);

            $detail_idx = $detail_row['BOR_comm_idx'];
            $detail_id = $detail_row['BOR_comm_id'];
            $detail_tit = $detail_row['BOR_comm_tit'];
            $detail_con = $detail_row['BOR_comm_con'];
            $detail_reg = $detail_row['BOR_comm_reg'];
            $detail_hit = $detail_row['BOR_comm_hit'];
            //echo $detail_id;

            $new_hit = $detail_hit + 1;
            $sql = "UPDATE bor_comm SET BOR_comm_hit=$new_hit WHERE BOR_comm_idx=$detail_idx";
            mysqli_query($dbConn, $sql);
            //echo $useridx;
            $like_unlike_type=-1;

            //like unlike function codes
            $status_query = "SELECT count(*) as cntStatus, like_unlike_type FROM bor_like_unlike WHERE like_unlike_postidx=".$detail_idx;
            $status_result = mysqli_query($dbConn, $status_query);
            $status_row = mysqli_fetch_array($status_result);
            $cnt_status = $status_row['cntStatus'];
            
            //echo $cnt_status;

            if($cnt_status > 0){
              $like_unlike_type = $status_row['like_unlike_type'];
            }

            //echo $like_unlike_type;

            //like total count
            $like_query = "SELECT count(*) AS cntLikes FROM bor_like_unlike WHERE like_unlike_type=1 AND like_unlike_postidx=".$detail_idx;
            $like_result = mysqli_query($dbConn, $like_query);
            $like_row = mysqli_fetch_array($like_result);
            $total_likes = $like_row['cntLikes'];

            //unlike total count
            $unlike_query = "SELECT count(*) AS cntUnlikes FROM bor_like_unlike WHERE like_unlike_type=0 AND like_unlike_postidx=".$detail_idx;
            $unlike_result = mysqli_query($dbConn, $unlike_query);
            $unlike_row = mysqli_fetch_array($unlike_result);
            $total_unlikes = $unlike_row['cntUnlikes'];
          ?>

          <div class="like_unlike">
            <?php
              if(!$userid){
            ?>
            <span onclick="plz_login()">
              Like
              <i class="fa fa-thumbs-up"></i>
              <b id="likes_<?=$detail_idx?>"><?=$total_likes?></b>
            </span>
            
            <span onclick="plz_login()">
              Unike
              <i class="fa fa-thumbs-down"></i>
              <b id="unlikes_<?=$detail_idx?>"><?=$total_unlikes?></b>
            </span>
            <?php
              } else {
            ?>
            <span class="like" id="like_<?=$detail_idx?>" style="<?php if($like_unlike_type == 1){echo "background:red; color:#fff;";} ?>">
              Like
              <i class="fa fa-thumbs-up"></i>
              <b id="likes_<?=$detail_idx?>"><?=$total_likes?></b>
            </span>
            
            <span class="unlike" id="unlike_<?=$detail_idx?>" style="<?php if($like_unlike_type == 0){echo "background:blue; color:#fff;";}?>">
              Unike
              <i class="fa fa-thumbs-down"></i>
              <b id="unlikes_<?=$detail_idx?>"><?=$total_unlikes?></b>
            </span>
            <?php
              }
            ?>
      
          </div>
          
          <form action="/board/php/detail_update.php?update_idx=<?=$detail_idx?>" method="post" class="update_form">
            <div class="detail_tit">
              <h3 class="detail_tit_txt"><?=$detail_tit?></h3>
              <input type="text" value="<?=$detail_tit?>" class="detail_input" name="detail_update_tit">
            </div>

            <div class="board_list update_list">
              <ul class="board_table">
                
              <li class="board_tit">
                <span>번호</span>
                <span>아이디</span>
                <span>내용</span>
                <span>등록일</span>
                <span>조회수</span>
              </li>
              <li class="board_contents detail_contents">
                <span><?=$detail_idx?></span>
                <span><?=$detail_id?></span>
                <span>
                  <em class="detail_txt"><?=$detail_con?></em>
                  <textarea class="detail_textarea" name="detail_update_con"><?=$detail_con?></textarea>
                </span>
                <span><?=$detail_reg?></span>
                <span><?=$detail_hit?></span>
              </li>

              </ul>
            </div> 
            <div class="update_smt_btn">
              <button type="submit">수정하기</button> 
            </div>        
          </form>
          <div class="insert_btn detail_btn">  

            <?php
              if(!$userid || $userid != $detail_id){
            ?>
              <button type="button" class="go_back">돌아가기</button>
            <?php
              } else {
            ?>
              <button type="button" class="detail_update">수정</button>        
              <button type="button" onClick="detail_delete(<?=$detail_idx?>)">삭제</button>      
              <button type="button" class="go_back">돌아가기</button>   
            <?php
              }
            ?>
          </div> 
          <!-- end of insert buttons tag -->

          <!-- reply input section -->
          <div class="reply_input">
              <form action="/board/php/reply_insert.php?reply_idx=<?=$detail_idx?>&reply_id=<?=$userid?>" method="post" name="reply_form">
                <textarea placeholder="답글을 작성해 주세요." name="reply_cont"></textarea>

                <?php
                if(!$userid){
                ?>
                <button type='button' onClick="plz_login()">답글입력</button>
                <?php
                } else {
                ?>
                <button type='button' onClick="submit_replay()">답글입력</button>
                <?php
                }
                ?>

              </form>
          </div>
          <!-- end of input section -->

          <?php
            $reply_result_idx = $_GET['idx'];

            include $_SERVER['DOCUMENT_ROOT']."/board/connect/db_connect.php";
            $sql1 = "SELECT * FROM bor_ans WHERE BOR_ans_comm_num = $reply_result_idx ORDER BY BOR_ans_idx DESC";

            $reply_result = mysqli_query($dbConn, $sql1);
            while($reply_row = mysqli_fetch_array($reply_result)){
              $reply_idx=$reply_row['BOR_ans_idx'];
              $reply_id=$reply_row['BOR_ans_id'];
              $reply_con=$reply_row['BOR_ans_con'];
              $reply_reg=$reply_row['BOR_ans_reg'];
          ?>
          
          <!-- reply result section -->
          <div class="reply_result">

            <div class="writer_info">
              <p><?=$reply_id?></p>
              <em><?=$reply_reg?></em>

              <?php
              if(!$userid){
              ?>
              <input type="hidden" style="display:none">
              <?php
              } else {
                if($userid != $reply_id){
              ?>
                <input type="hidden" style="display:none">
              <?php
                } else {
              ?>
              <form action="/board/php/reply_update.php?update_key=<?=$reply_idx?>" name="update_form" method="post">
              <div class="info_btns">
                <button type="submit">수정</button>
                <a href="/board/php/update_delete.php?del_key=<?=$reply_idx?>&del_id=<?=$reply_id?>">삭제</a>
            
              <?php
                }
              }
              ?>
            </div>
            <div class="reply_text">
              
                <textarea name="update_con"><?=$reply_con?></textarea>
              </div></form>
            
          </div>
          <?php
          }
          ?>
        </div>
        <!-- end of center class tag -->  
      </div>
        </div>
    </section>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/board/js/custom.js"></script>
  <script>
    //const detail_update = document.querySelector('.detail_update');
    //const detail_delete = document.querySelector('.detail_delete');
    const go_back = document.querySelector('.go_back');
    const update_btn = document.querySelectorAll('.update_btn');
    //console.log(update_btn);
    const submitForm = document.querySelectorAll('.update_form');

    for(let i = 0; i < update_btn.length; i++){
      update_btn[i].addEventListener('click', function(e){
        
      });
    }

    go_back.addEventListener('click', function(){
      location.href='/board/pages/community.php';
    });

    function detail_delete(delete_idx){
      const isDelete = confirm('정말로 삭제하시겠습니까?');
      if(!isDelete){
        return false;
      } else {
        location.href='/board/php/detail_delete.php?delete_idx=' + delete_idx;
      }   
    }

    function plz_login(){
      alert('로그인이 필요합니다.');
      return;
    }

    function submit_replay(){
      if(!document.reply_form.reply_cont.value){
        alert('답글을 입력해 주세요.');
        return;
      }

      document.reply_form.submit();
    }

    
  </script>
  <script>
    $(function(){
      $(".detail_update").click(function(){
        $(this).toggleClass("on");
        if($(this).hasClass('on')){
          $(this).text('수정취소');
          $(".detail_input, .detail_textarea, .update_smt_btn").show();
          $(".detail_tit_txt, .detail_txt").hide();
        } else {
          $(this).text('수정');
          $(".detail_input, .detail_textarea, .update_smt_btn").hide();
          $(".detail_tit_txt, .detail_txt").show();
        }
      });
    });
  </script>
  <script src="/board/js/like_unlike.js"></script>
</body>

</html>