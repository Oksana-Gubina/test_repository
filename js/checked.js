 function selAll(){
 $(document).ready( function() {
       $("#main_check").click( function() { // при клике по главному чекбоксу
            if($('#main_check').attr('checked')){ // проверяем его значение
                $('.check:enabled').attr('checked', true); // если чекбокс отмечен, отмечаем все чекбоксы
            } else {
                $('.check:enabled').attr('checked', false); // если чекбокс не отмечен, снимаем отметку со всех чекбоксов
            }
       });
    });
   
 }