$("#update").click(function(e) {
  e.preventDefault();
  var name = $("#desc").val(); 
  var last_name = $("#last_name").val();

  $.ajax({
    type:'POST',
    data:desc,
    url:'insert.php',
    success:function(data) {
      alert(data);
    }
  });
});