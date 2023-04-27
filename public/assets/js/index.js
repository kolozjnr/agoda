var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
navItems.forEach(function(e, i) {
	e.addEventListener("click", function(e) {
		navItems.forEach(function(e2, i2) {
			e2.classList.remove("mobile-bottom-nav__item--active");
		})
		this.classList.add("mobile-bottom-nav__item--active");
	});
});

//Submit orders

	//alert()
	$("#create-order").on("submit", function(){
		var formData = $("#create-order").serialize()
		alert(formData)

		$.ajax({
			type:"POST",
			url:"{{route('order.store')}}",
			data:formData,

			beforeSend:function(){

			},
			success:function(){
				console.log("success")
			}
		})

		
	});

