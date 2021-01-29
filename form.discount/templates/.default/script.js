(function($){
	$(document).ready(function(){
		$('.close-form').click(function(){
			$('.form-discount-wrap').css({'display':'none'});
		});
		$('#form-discount').on('submit', function(e){
			e.preventDefault;
			var ajaxUrl = $('#form-discount').attr('action');
			console.log(ajaxUrl);
			$.post(ajaxUrl, $('#form-discount').serialize(), function(response){
				console.dir(response);
				if (response.success) {
					$('#form-discount').hide();
					$('#form-discount__result').show();
					$('#form-discount__about').hide();
				}
			}, "json");
            return false;
		});
		$('.open-discount').on('click', function(e){
			e.preventDefault();
			$('#form-discount').show();
			$('#form-discount__result').hide();
			$('#form-discount__about').show();
			$('.form-discount-wrap').show();
		});
	});
})(jQuery);