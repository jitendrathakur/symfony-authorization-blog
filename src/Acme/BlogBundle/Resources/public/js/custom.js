$(function() {
	$(".changeBlogImage").click(function() {
		var row = '<div class="imageField"><label class="required" for="blog_image">Image</label><input type="file" required="required" name="blog[image]" id="blog_image"></div><a href="javascript:;" class="removeBlogImage">remove</a>';
		//alert("hi");
		$(".changeBlogImage").hide();
		$("#blog div:last").after(row);
	});

	$("#blog").on('click', '.removeBlogImage', function() {
		$(".imageField").remove();
		$(".changeBlogImage").show();
		$(".removeBlogImage").hide();
		//console.log("hi");

	});

});