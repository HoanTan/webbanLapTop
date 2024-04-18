<script src="/Yikes/assets/vendor/frontend/js/jquery-3.3.1.min.js"></script>

<script src="/Yikes/assets/vendor/frontend/js/bootstrap.min.js"></script>

<script src="/Yikes/assets/vendor/frontend/js/jquery.nice-select.min.js"></script>

<script src="/Yikes/assets/vendor/frontend/js/jquery-ui.min.js"></script>

<script src="/Yikes/assets/vendor/frontend/js/jquery.slicknav.js"></script>

<script src="/Yikes/assets/vendor/frontend/js/mixitup.min.js"></script>

<script src="/Yikes/assets/vendor/frontend/js/owl.carousel.min.js"></script>

<script src="/Yikes/assets/vendor/frontend/js/main.js"></script>

<script src="/Yikes/assets/vendor/frontend/jquery-validation/dist/jquery.validate.min.js"></script>

<script src="/Yikes/assets/vendor/frontend/jquery-validation/dist/localization/messages_vi.min.js"></script>
<script>
  $(document).ready(function(){

	$('#search_data').autocomplete({
	  source: "/Yikes/frontend/api/fetch.php",
	  minLength: 1,
	  select: function(event, ui)
	  {
		$('#search_data').val(ui.item.value);
	  }
	}).data('ui-autocomplete')._renderItem = function(ul, item){
	  return $("<li class='ui-autocomplete-row'></li>")
		.data("item.autocomplete", item)
		.append(item.label)
		.appendTo(ul);
	};

  });
</script>