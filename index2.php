<!DOCTYPE html>
<html>
<head>
	<title>Auto-Suggest Dropdown</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			// Event handler for district dropdown
			$("#district").change(function(){
				var district = $(this).val();
				// Send an AJAX request to fetch Taluk for the selected district
				$.ajax({
					type: "POST",
					url: "get_villages.php",
					data: { district: district },
					dataType: "json",
					success: function(data){
						// Clear the Taluk dropdown
						$("#Taluk").empty();
						// Populate the taluk dropdown with the fetched data
						$.each(data, function(index, Taluk){
							$("#Taluk").append('<option value="' + Taluk + '">' + Taluk + '</option>');
						});
					}
				});
			});

			// Event handler for taluk dropdown
			$("#Taluk").change(function(){
				var village = $(this).val();
				alert("You selected" + village);
			});
		});
	</script>
</head>
<body>
	<h1>Auto-Suggest Dropdown </h1>
	<label for="district">Select District:</label>
	<select id="district">
		<option value="coimbatore">coimbatore</option>
		<option value="dharmapuri">dharmapuri</option>
	</select>
	<br><br>
	<label for="Taluk">Select Taluk:</label>
	<select id="Taluk">
		<option>Select a district first</option>
	</select>
</body>
</html>
