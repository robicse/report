/* $(function (){
	$(window).load(function() 
	{
	   // executes when complete page is fully loaded, including all frames, objects and images
	   alert("(window).load was called - window is loaded!");
	});
}); */

$(function (){
	$(window).load(function() 
	{
		$(".table2excel").table2excel({
			exclude: ".noExl",
			name: "Excel Document Name",
			filename: "myFileName",
			fileext: ".xls",
			exclude_img: true,
			exclude_links: true,
			exclude_inputs: true
		});
	});
});
