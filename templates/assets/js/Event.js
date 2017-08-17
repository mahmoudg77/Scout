$(document).ready(function () {
	$('[data-toggle="popover"]').popover();
	$('#interA').on('click',function(){
		$('#interest').toggleClass('fa fa-star-o fa-4x fa fa-star fa-4x');
	})
});
var _self = this;
$("#eventmage").on("change", function () {
	//alert(this.val);
	//alert(this.files[0].name);
	_self.readURL(this);
	$("#review").attr("src", this.files[0].name);

});


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

$("#fixedA").on('click',function(){
	alert("addP/E");
    $("#AE").animate({margin: "0 100px 60px 0"});
	alert("addP/E");
	$("#AP").animate({margin: "0 100px 60px 0"});
	alert("addP/E");
});

/*Postsssss*/
$("#postmage").on("change", function () {
	//alert(this.val);
	//alert(this.files[0].name);
	_self.readURL(this);
	$("#review").attr("src", this.files[0].name);

});


function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#ImgReview1').attr('src', e.target.result);
			$('#ImgReview1').css({
				'width': '30%',
			});
		}

		reader.readAsDataURL(input.files[0]);
	}
};