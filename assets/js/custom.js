
$(document).ready(function(){
 
	// Company name id to Department
	$(document).on('change','#comToDept',function(){
        var comNameId = ($(this).val());
		//alert(comNameId);
		$("#departmentIdDiv").load( "Internal_Ajax/department/"+comNameId );
	
    });
	
	// Department name id to Section
	$(document).on('change','#showComNameId',function(){
        var deptNameId = ($(this).val());
		
		$("#sectionIdDiv").load( "Internal_Ajax/section/"+deptNameId );
	
    });
	
	// Type name id To Designation
	$(document).on('change','#typeToDesig',function(){
        var typeNameId = ($(this).val());
		
		$("#designationIdDiv").load( "Internal_Ajax/type/"+typeNameId );
	
    });
	
	// Employee Name Id to EmployeeID
	$(document).on('change','#empNameToId',function(){
        var empNameId = ($(this).val());
		
		$("#empIdDiv").load( "Internal_Ajax/employee/"+empNameId );
	
    });
	
	// Supervisor Designation Id To namesdfsf
	$(document).on('change','#supIdToName',function(){
        var supNameId = ($(this).val());
		
		$("#supNameDiv").load( "Internal_Ajax/supervisor/"+supNameId );
	
    });
	
	// bank
	$(document).on('click','#bank_payment',function(){
		
		$("#showbank").load("Internal_Ajax/bank/");
	});
	
	// bank toggle
	$("#showbank").hide();
	$('input[type="radio"]').click(function(){
		
		if($(this).attr("id")=="bank_payment"){
			$("#showbank").toggle();
		}
	});
	
	
	// cash toggle
	$(document).on('click','#cash_payment',function(){
	
		$("#showbank").toggle();
		//$("#showbranch").toggle();
		//$("#accountno").toggle();
	}); 
	
	// bank to branch
	$(document).on('click','.bankToBranch',function(){
		//alert();
		$("#showbranch").load("Internal_Ajax/branch/");
	});
	
	
	// branch to account
	$(document).on('change','.branchToAcc',function(){
		//alert();
		$("#accountno").load("Internal_Ajax/account/");
	});
	
	//salary pachage show hide 
	$(document).on('click','#package',function(){
		
		$(".show_salary_package").toggle();
	})
	
	
	// Duration
	$(document).on('blur','.set_duration',function(){
		var startDate=($("#datepicker1").val());
		var endDate=($("#datepicker2").val());
		
		$("#find_duration").load( "Internal_Ajax/duration/"+startDate+"/"+endDate );
	
    });
	
	
	// leave date maintains
	$(document).on('change','.leave_error_calculation',function(){
		
		var startDate=($("#datepicker1").val());
		var endDate=($("#datepicker2").val());
		var leaveType=($("#leavetype").val());
		
		$("#calculation").load( "Internal_Ajax/leavedate/"+startDate+"/"+endDate+"/"+leaveType );
	}) 
	
	
});