function like(){
  $.ajax({
      type:"POST",
      data: {like:true},
      url: "/php/like.php",
      success: function(result){
          $('#count').text(result);
      }
  });
}