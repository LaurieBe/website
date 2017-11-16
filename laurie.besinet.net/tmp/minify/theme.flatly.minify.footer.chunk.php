<footer class="container"><hr>
<div class="row">
<div class="col-md-12">
<div><?php echo Chunk::get('footer-links'); ?></div>
</div>
</div>
</footer>
<?php echo Snippet::get('google-analytics'); ?>
<script>
$(document).ready(function() {
var owl = $('.owl-carousel');
owl.owlCarousel({
items: 1,
loop: true,
margin: 0,
autoplay: true,
autoplayTimeout: 3000,
autoplayHoverPause: true
});
})
</script>
</body>
</html>