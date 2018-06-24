$(document).ready(function(){
	load_deparments()
	load_towns()
})

function load_deparments(){
	$.ajax({
		method: "GET",
		url: 'load_deparments',
		type: 'json',
	}).done(function(response){
		response.forEach(function(element) {
			element.forEach(function(value) {
				$("#department").append('<option value="'+ value.id +'">'+ value.name +'</option>');
			})
		})
	})
}

function load_towns(id_deparment){
	$("#department").on('change', function(){
		$('#town').empty()
		$.ajax({
			method: "GET",
			url: 'load_towns/' + this.value,
			type: 'json',
		}).done(function(response){
			response.forEach(function(element) {
				element.forEach(function(value) {
					$("#town").append('<option value="'+ value.id +'">'+ value.name +'</option>');
				})
			})
		})
	})
}