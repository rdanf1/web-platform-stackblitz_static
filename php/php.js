function like(){
  $.ajax({
      type:"POST",
      data: {like:true},
      url: "./like.php",
      success: function(result){
          $('#count').text(result);
      }
  });
}