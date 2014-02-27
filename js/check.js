function check()
{
if($("input[name$='cb']").filter(':checked').size()==0) {
alert('Vi nichego ne vibraly')
}else{
var count = $("input[name$='cb']").filter(':checked').size();
//for (i=0; i>count; i++)
//	{
//		if 
//		var count = $("input[name$='cb']").filter(':checked').val();

		alert (count)
//	} 
}
}

