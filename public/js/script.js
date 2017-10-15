$(function(){
  $('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })


  $.ajax({
    url: '/sin-anemia/resources/views/contentPages/tab-1-1.php',
    type: 'GET',
    // data: {param1: 'value1'}
  })
  .done(function(e) {
    $('#content').append(e);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });


});
