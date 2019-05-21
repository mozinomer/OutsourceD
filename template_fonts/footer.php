<footer>
	<div class="container">
		<div class="row dis-flex main-row-top-footer">
			<div class="col-md-4 text-center">
				<span class="footer_icons footer_icons1">sales@outsourcedesigning.com </span>
			</div>
			<div class="col-md-4 text-center">
				<span class="footer_icons footer_icons2">14 Wall Street, 20th floor Manhattan, New York, 10005 </span>
			</div>
			<div class="col-md-4 text-center">
				<span class="footer_icons footer_icons3">Phone: 1-800-664-1945</span>
			</div>
		</div>
	</div>
	<div class="row container footer_bottom">
		<div class="col-md-6">
			<img src="<?php echo get_template_directory_uri(); ?>/images/footer_socials.PNG">
		</div>
		<div class="col-md-6">
			<ul class="dis-flex list_footer_middle">
				<li>terms of services</li>
				<li>private policy</li>
				<li>information</li>
			</ul>
		</div>
	</div>
	<div class="row container footer_bottom_bottom">
		<span class="footer_logo">&copy; 2019. All right reserved</span>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
jQuery(document).ready( function() 
{
	jQuery('.logo-img-container').click( function(e) {
	  	e.preventDefault();
	  	jQuery( ".sub-menu-lgo-container" ).slideToggle();

	});
	jQuery('.request_a_quote a').click( function(e) {
	  	e.preventDefault();
	  	jQuery( ".form_quote_req" ).css({'display': 'flex'});
	  	jQuery( ".form_quote_req" ).css({'align-item': 'center'});

  	});
	jQuery('.cross_icon_req_form').click( function(e) {
	  	e.preventDefault();
	  	jQuery( ".form_quote_req" ).css({'display': 'none'});

  	});
  	
		jQuery('.heading_form span').click( function(e) {
		e.preventDefault();
		jQuery('.modal_pop_up').css({'display':'none'});
		jQuery('body').css({'overflow':'scroll'});
		jQuery('body').css({'overflow-x':'hidden'});
	});
	jQuery('.list_icon_row').click( function(e) {
		e.preventDefault();
		jQuery('.gird_view_work').fadeOut("slow");
		jQuery('.list_view_works').fadeIn("slow");
	});
	jQuery('.grid_icon_row').click( function(e) {
		e.preventDefault();
		jQuery('.gird_view_work').fadeIn("fast");
		jQuery('.list_view_works').fadeOut("slow");
	});
	var out = 1;
	jQuery('.proposal_but').click( function(e) {
		if(out){
		jQuery('.modal_pop_up').css({'display':'block'});
		jQuery('body').css({'overflow':'hidden'});
		out= 0;
		return out;
	}
	else
	{
		jQuery('.modal_pop_up').css({'display':'none'});
		jQuery('body').css({'overflow':'scroll'});
		jQuery('body').css({'overflow-x':'hidden'});
		out = 1;
		return out;
	}
	});
});
$('.carousel').carousel();
$('.corousal_2').carousel();
$('.corousal_3').carousel();

(function(){
  var words = [
      'Chef',
      'Designer',
      'Driver',
      'Developer',
      'Poet',
      'Teacher',
      'Happy Person'
      ], i = 0;
  setInterval(function(){
      jQuery('#changingword').fadeIn(function(){
          jQuery(this).html(words[i=(i+1)%words.length]).css({'display':'block'});
      });
  }, 380);
    
})();



</script>
<script>
  AOS.init();
</script>

<script type="text/javascript">
	// Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
</script>
</div>
</body>
</html>
<?php wp_footer();?>