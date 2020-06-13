	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "telegram.php", //Change
			data: th.serialize()
		}).done(function() {
      document.location.href = "thank-you.html";
      			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
  });