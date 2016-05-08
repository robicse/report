$(document).ready(function(){

	var i=1; 
	$(".addmore").on('click',function(){
		//$("input:text").val("Glenn Quagmire");
		
		var Status=$('#status').val();
		var EffectiveDate=$('#idate').val();
		var Designation=$('#designation').val();
		var PayScale=$('#pay_scale').val();
		var Note=$('#note').val();
		
		
		//alert(EffectiveDate);
		//exit();
		// tr row insert 
		var data="<tr><td><input type='text' id='Status"+i+"' name='Status"+i+"' class='form-control' /></td> <td><input type='text' id='EffectiveDate"+i+"' name='EffectiveDate"+i+"' class='form-control' /></td><td><input type='text' id='Designation"+i+"' name='Designation"+i+"' class='form-control' /></td><td><input type='text' id='PayScale"+i+"' name='PayScale"+i+"' class='form-control' /></td><td><input type='text' id='Note"+i+"' name='Note"+i+"' class='form-control' /></td>";
		data +="<td><button class='btnDelete'>Del</button></td><td><input type='hidden' id='count' name='count' class='form-control' value='"+i+"'/></td></td>";
		
		$('#tab').append(data);
		
		document.getElementById('Status'+i).value=Status;
		document.getElementById('EffectiveDate'+i).value=EffectiveDate;
		document.getElementById('Designation'+i).value=Designation;
		document.getElementById('PayScale'+i).value=PayScale;
		document.getElementById('Note'+i).value=Note;
		
		document.getElementById('status').value='';
		document.getElementById('idate').value='';
		document.getElementById('designation').value='';
		document.getElementById('pay_scale').value='';
		document.getElementById('note').value='';
		
		i++;
		//alert(Status);
		
		
	});
	
	
	// to delete
	$("#tab").on('click', '.btnDelete', function (event) {
		//alert();
		$(this).closest('tr').remove();
	});
});