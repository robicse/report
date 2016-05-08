$(document).ready(function(){
		
		
		// insert row in academic
		var i=1; 
		$(".addmore").on('click',function(){
			//$("input:text").val("Glenn Quagmire");
			
			var AcaExamTitle=$('#aca_exam_title').val();
			var AcaInstituteName=$('#aca_institute_name').val();
			var AcaResult=$('#aca_result').val();
			var AcaPassingYear=$('#aca_passing_year').val();
			var AcaNote=$('#aca_note').val();
			
			
			//alert(EffectiveDate);
			//exit();
			// tr row insert 
			var data="<tr><td><input type='text' id='AcaExamTitle"+i+"' name='AcaExamTitle"+i+"' class='form-control' /></td> <td><input type='text' id='AcaInstituteName"+i+"' name='AcaInstituteName"+i+"' class='form-control' /></td><td><input type='text' id='AcaResult"+i+"' name='AcaResult"+i+"' class='form-control' /></td><td><input type='text' id='AcaPassingYear"+i+"' name='AcaPassingYear"+i+"' class='form-control' /></td><td><input type='text' id='AcaNote"+i+"' name='AcaNote"+i+"' class='form-control' /></td>";
			data +="<td><button class='btnDelete'>Del</button></td><td><input type='hidden' id='count' name='count' class='form-control' value='"+i+"'/></td></td>";
			
			$('#tab').append(data);
			
			document.getElementById('AcaExamTitle'+i).value=AcaExamTitle;
			document.getElementById('AcaInstituteName'+i).value=AcaInstituteName;
			document.getElementById('AcaResult'+i).value=AcaResult;
			document.getElementById('AcaPassingYear'+i).value=AcaPassingYear;
			document.getElementById('AcaNote'+i).value=AcaNote;
			
			document.getElementById('aca_exam_title').value='';
			document.getElementById('aca_institute_name').value='';
			document.getElementById('aca_result').value='';
			document.getElementById('aca_passing_year').value='';
			document.getElementById('aca_note').value='';
			
			i++;
			//alert(Status);
			
			
		});
		
		
		 // insert row in qualification
		var j=1;
		$(".AddmoreQua").on('click',function(){
			//$("input:text").val("Glenn Quagmire");
			
			var QuaExamTitle=$('#qua_exam_title').val();
			var QuaInstituteName=$('#qua_institute_name').val();
			var QuaResult=$('#qua_result').val();
			var QuaPassingYear=$('#qua_passing_year').val();
			var QuaNote=$('#qua_note').val();
			
			
			//alert(EffectiveDate);
			//exit();
			// tr row insert 
			var dataQua="<tr><td><input type='text' id='QuaExamTitle"+j+"' name='QuaExamTitle"+j+"' class='form-control' /></td> <td><input type='text' id='QuaInstituteName"+j+"' name='QuaInstituteName"+j+"' class='form-control' /></td><td><input type='text' id='QuaResult"+j+"' name='QuaResult"+j+"' class='form-control' /></td><td><input type='text' id='QuaPassingYear"+j+"' name='QuaPassingYear"+j+"' class='form-control' /></td><td><input type='text' id='QuaNote"+j+"' name='QuaNote"+j+"' class='form-control' /></td>";
			dataQua +="<td><button class='btnDelete'>Del</button></td><td><input type='hidden' id='countQua' name='countQua' class='form-control' value='"+j+"'/></td></td>";
			
			$('#tabQua').append(dataQua);
			
			document.getElementById('QuaExamTitle'+j).value=QuaExamTitle;
			document.getElementById('QuaInstituteName'+j).value=QuaInstituteName;
			document.getElementById('QuaResult'+j).value=QuaResult;
			document.getElementById('QuaPassingYear'+j).value=QuaPassingYear;
			document.getElementById('QuaNote'+j).value=QuaNote;
			
			document.getElementById('qua_exam_title').value='';
			document.getElementById('qua_institute_name').value='';
			document.getElementById('qua_result').value='';
			document.getElementById('qua_passing_year').value='';
			document.getElementById('qua_note').value='';
			
			j++;
			//alert(Status);
			
			
		});  
		
		
		
		 // insert row in career
		var k=1;
		$(".AddmoreCar").on('click',function(){
			//$("input:text").val("Glenn Quagmire");
			
			var CarCompanyName=$('#car_company_name').val();
			var CarDesignation=$('#car_designation').val();
			var CarFrom=$('#car_from').val();
			var CarTo=$('#car_to').val();
			var CarNote=$('#car_note').val();
			
			
			//alert(EffectiveDate);
			//exit();
			// tr row insert 
			var dataCar="<tr><td><input type='text' id='CarCompanyName"+k+"' name='CarCompanyName"+k+"' class='form-control' /></td> <td><input type='text' id='CarDesignation"+k+"' name='CarDesignation"+k+"' class='form-control' /></td><td><input type='text' id='CarFrom"+k+"' name='CarFrom"+k+"' class='form-control' /></td><td><input type='text' id='CarTo"+k+"' name='CarTo"+k+"' class='form-control' /></td><td><input type='text' id='CarNote"+k+"' name='CarNote"+k+"' class='form-control' /></td>";
			dataCar +="<td><button class='btnDelete'>Del</button></td><td><input type='hidden' id='countCar' name='countCar' class='form-control' value='"+k+"'/></td></td>";
			
			$('#tabCar').append(dataCar);
			
			document.getElementById('CarCompanyName'+k).value=CarCompanyName;
			document.getElementById('CarDesignation'+k).value=CarDesignation;
			document.getElementById('CarFrom'+k).value=CarFrom;
			document.getElementById('CarTo'+k).value=CarTo;
			document.getElementById('CarNote'+k).value=CarNote;
			
			document.getElementById('car_company_name').value='';
			document.getElementById('car_designation').value='';
			document.getElementById('car_from').value='';
			document.getElementById('car_to').value='';
			document.getElementById('car_note').value='';
			
			k++;
			//alert(Status);
			
			
		});  
		
		
		
		
		// to delete
		$("#tab").on('click', '.btnDelete', function (event) {
			//alert();
			$(this).closest('tr').remove();
		});
		
	
			
		
				
	});