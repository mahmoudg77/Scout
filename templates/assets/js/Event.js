$(document).ready(function () {
	$('[data-toggle="popover"]').popover();
});
var _self = this;
$("#eventmage").on("change", function () {
	//alert(this.val);
	//alert(this.files[0].name);
	_self.readURL(this);
	$("#review").attr("src", this.files[0].name);

});
//});

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#ImgReview').attr('src', e.target.result);
			$('#ImgReview').css({
				'width': '30%',
			});
		}

		reader.readAsDataURL(input.files[0]);
	}
};
