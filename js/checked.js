 function selAll(){
 $(document).ready( function() {
       $("#main_check").click( function() { // ��� ����� �� �������� ��������
            if($('#main_check').attr('checked')){ // ��������� ��� ��������
                $('.check:enabled').attr('checked', true); // ���� ������� �������, �������� ��� ��������
            } else {
                $('.check:enabled').attr('checked', false); // ���� ������� �� �������, ������� ������� �� ���� ���������
            }
       });
    });
   
 }