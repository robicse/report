// dateTimePicker 1
		$(function (){
			$('#datetimepicker1').datetimepicker({
				format: 'YYYY-MM-DD HH:mm:ss',
			});
		});
		$('#datetimepicker1 input').click(function(event){
		   $('#datetimepicker1').data("DateTimePicker").show();
		});
	   
		// dateTimePicker 2
		$(function (){
			$('#datetimepicker2').datetimepicker({
				format: 'YYYY-MM-DD HH:mm:ss',
			});
		});
		$('#datetimepicker2 input').click(function(event){
		   $('#datetimepicker2').data("DateTimePicker").show();
		});
		
		//datePicker 1
		$(function (){
			$('#datepicker1').datetimepicker({
				format: 'YYYY-MM-DD',
			});
		});
		$('#datepicker1 input').click(function(event){
			$('#datepicker1').data("DateTimePicker").show();
		});
		
		//datePicker 2
		$(function (){
			$('#datepicker2').datetimepicker({
				format: 'YYYY-MM-DD',
			});
		});
		$('#datepicker2 input').click(function(event){
			$('#datepicker2').data("DateTimePicker").show();
		});
		
		//datePicker 3
		$(function (){
			$('#datepicker3').datetimepicker({
				format: 'YYYY-MM-DD',
			});
		});
		$('#datepicker3 input').click(function(event){
			$('#datepicker3').data("DateTimePicker").show();
		});
		
		//timePicker 1
		$(function(){
			$('#timepicker1').datetimepicker({
				format: 'HH:mm:ss',
			});
		});
		$('#timepicker1 input').click(function(event){
			$('#timepicker1').data("DateTimePicker").show();
		});
		
		//timePicker 2
		$(function(){
			$('#timepicker2').datetimepicker({
				format: 'HH:mm:ss',
			});
		});
		$('#timepicker2 input').click(function(event){
			$('#timepicker2').data("DateTimePicker").show();
		});
		
		//timePicker 3
		$(function(){
			$('#timepicker3').datetimepicker({
				format: 'HH:mm:ss',
			});
		});
		$('#timepicker3 input').click(function(event){
			$('#timepicker3').data("DateTimePicker").show();
		});