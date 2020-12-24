
  'use strict';

//アンサーボックスを増やす
  $(".add").on("click", function() {
    let adds = $(this).parent().clone(true);
      if($(".ans").parent().length < 4){
        adds.insertAfter($(this).parent());
    }
  });

//アンサーボックスを削除
  $(".del").on("click", function(){
     if($(".del").parent('.answerarea').length > 1) {
       $('.answerarea:last').remove();
     }
  });

  //timeセレクト増やす
  for (let i = 0; i <= 7; i++){
    let days = (`<option value="day${i}">${i}</option>`);
    day.insertAdjacentHTML('beforeend', days);
    }
    
    for (let i = 0; i <= 23; i++){
    let times = (`<option value="time${i}">${i}</option>`);
    time.insertAdjacentHTML('beforeend', times);
    }
    
    for (let i = 0; i <= 59; i++){
    let minutes = (`<option value="minute${i}">${i}</option>`);
    minute.insertAdjacentHTML('beforeend', minutes);
    }

  

