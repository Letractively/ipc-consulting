$(function() {
		
			$("#menu-448").change(function() {
				$("#language").load("textdata/" + $(this).val() + ".txt");
			});
			});
