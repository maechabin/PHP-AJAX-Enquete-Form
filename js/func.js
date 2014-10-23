$(document).ready(function () {

	var button = $("#button");

	button.on("click", function () {

		var answer1 = $("input[name='answer1']:checked").val();
		var answer2 = $("#answer2").val();
		var answer3 = $("#answer3").val();
		var data = {
			"answer1": answer1,
			"answer2": answer2,
			"answer3": answer3
		};

		$.ajax({

			type: "POST",
			url: "enquete.php",
			data: data,
			success: function (data, dataType) {

				if (dataType === "success") {

					//alert(data);

					var form_area = $("#form-area");
					var text = '<div id="text-area">'
						+ '<p>ご協力ありがとうございました！</p>'
						+ '<p style="margin: 16px auto 64px"><a href="#">××××に戻る</a></p>'
						+ '</div>'
						;
					form_area.html(text);

				}

			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				console.log("error:" + errorThrown);
			}

		});

		return false;

	});

});