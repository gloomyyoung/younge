$(function(){

  $(".like, .unlike").click(function(){
    
    const likeUlikeId = $(this).attr('id');
    const splitText = likeUlikeId.split("_");
    const text = splitText[0];
    const postId = splitText[1];
    let type = 0;
    //alert(likeUlikeId);
    //console.log(splitText[0]);
    //console.log(splitText[1]);

    if(text == "like"){
      type = 1;
    } else {
      type = 0;
    }

    //console.log(postId);
    //console.log(type);

    $.ajax({
      url : "/board/php/like_unlike.php",
      type : 'post',
      data : {postId : postId, type : type},
      //type : 'json',
      success : function(data){
        
        //console.log(data);
        const jsonObj = JSON.parse(data);
        console.log(jsonObj);
        const likes = jsonObj.likes;
        const unlikes = jsonObj.unlikes;

        $("#likes_" + postId).text(likes);
        $("#unlikes_" + postId).text(unlikes);

        if(type == 1){
          $("#like_" + postId).css({
            "color":"#fff",
            "background":"red"
          });
          $("#unlike_" + postId).css({
            "color":"#555",
            "background":"#fff"
          });
        }

        if(type == 0) {
          $("#unlike_" + postId).css({
            "color":"#fff",
            "background":"blue"
          });
          $("#like_" + postId).css({
            "color":"#555",
            "background":"#fff"
          });
        }
      }
    });

  });

});