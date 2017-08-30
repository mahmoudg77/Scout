$(document).ready(function () {
	$('[data-toggle="popover"]').popover();
	$('#interA').on('click',function(){
		$('#interest').toggleClass('fa fa-star-o fa-4x fa fa-star fa-4x');
	})
});
//var _self = this;
//$("#eventmage").on("change", function () {
//	//alert(this.val);
//	//alert(this.files[0].name);
//	_self.readURL(this);
//	$("#review").attr("src", this.files[0].name);
//
//});
//
//
//function readURL(input) {
//	if (input.files && input.files[0]) {
//		var reader = new FileReader();
//
//		reader.onload = function (e) {
//			$('#ImgReview').attr('src', e.target.result);
//			$('#ImgReview').css({
//				'width': '30%',
//			});
//		}
//
//		reader.readAsDataURL(input.files[0]);
//	}
//};




