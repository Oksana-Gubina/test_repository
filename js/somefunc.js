function somefunc(obj)
{
// $res = 'hgjfhf';
var res = $(obj).parents('tr').find('#hidden1');
var res2 = res[0].value;

                     
var wer =$('#idCat').load("http://localhost/www/editCat.php", {id:res2});
}

 