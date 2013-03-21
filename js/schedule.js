$(document).ready(function () {
  var discipline_buttons = $('#discipline_buttons');
  discipline_buttons.hide();
  $('.day_select').click(function(){
    discipline_buttons.hide();
    if($(this).text() != 'Friday'){
      discipline_buttons.show();
    }
  })

  var $selector = $('.session_select');
  $selector.click(function(){
    var target = '.' + $(this).attr('target');
    $('.all').hide();
    $(target).show();
    $selector.css({
      'color': 'black',
      'font-weight':'normal',
      'background-color':'white'
    });
    $(this).css({
      'color': 'white' ,
      'font-weight':'bold',
      'background-color':'#00628b'
    });
    $('.session_table').each(function(index){
      var count = $(this).find(target).length;
     $(this).show();
      if(count < 1) {
        $(this).hide();
      }
    });


  })
});