<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu-items'); ?>
<li><a href="#home">Home</a></li>
<li><a href="#services">Services</a></li>
<li><a href="#support">Support</a></li>
<li><a href="#get-in-touch">Contact</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body-content'); ?>
<div id="home" class="scrollspy-section container-fluid">
	<div class="background"></div>
	<div class="content center">
		<h1 class="scrollshow title">Pro Web Development</h1>
		<h2 class="scrollshow delayed-animation subtitle">elegant and easy design</h2>
	</div>
</div>
<div id="services" class="scrollspy-section container-fluid">
	<div class="background"></div>
	<div class="content center">
		<h2 class="section-title">Services</h2>
		<div class="scrollshow box">
			<h1 class="absolute-icon"><i class="fas fa-paint-brush"></i></h1>
			<h3>Easy Design</h3>
			<p class="description">
				Everything we create works on all devices. We take care of all the hard work so that you can focus on what you do!
			</p>
		</div>
		<div class="scrollshow box">
			<h1 class="absolute-icon"><i class="fas fa-clock"></i></h1>
			<h3>Automatic Maintenance</h3>
			<p class="description">
				Your websites will always stay current on the latest software, safe from malicious hacking attempts.
			</p>
		</div>
		<div class="scrollshow box">
			<h1 class="absolute-icon"><i class="fas fa-cubes"></i></h1>
			<h3>Full Support</h3>
			<p class="description">
				Reach out anytime for any questions or modifications, and we will respond in less than a few hours!
			</p>
		</div>
	</div>
</div>
<div id="support" class="scrollspy-section container-fluid">
	<div class="background"></div>
	<div class="content center">
		<h2 class="section-title">We Support...</h2>
		<div class="scrollshow">
		<div class="support">
			<img src="<?php echo e(asset('images/support/php.png')); ?>" /><span class="caption">PHP</span>
		</div>
		<div class="support">
			<img src="<?php echo e(asset('images/support/node.png')); ?>" /><span class="caption">NodeJS</span>
		</div>
		<div class="support">
			<img src="<?php echo e(asset('images/support/joomla.png')); ?>" /><span class="caption">Joomla!</span>
		</div>
		<div class="support">
			<img src="<?php echo e(asset('images/support/wordpress.png')); ?>" /><span class="caption">WordPress</span>
		</div>
		<div class="support">
			<img src="<?php echo e(asset('images/support/mysql.png')); ?>" /><span class="caption">MySQL</span>
		</div>
		<div class="support">
			<img src="<?php echo e(asset('images/support/django.png')); ?>" /><span class="caption">Django</span>
		</div>
		<div class="support">
			<img src="<?php echo e(asset('images/support/laravel.png')); ?>" /><span class="caption">Laravel</span>
		</div>
		</div>
		<p class="support-continue">...and more!</p>
	</div>
</div>
<div id="get-in-touch" class="scrollspy-section container-fluid">
	<div class="background"></div>
	<div class="content center">
		<h2 class="section-title">Get In Touch!</h2>
		<form class="contact-form scrollshow">
			<div class="col-sm-6">
			<div class="form-group">
				<label class="col-sm-2 col-form-label" for="name">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" placeholder="John Doe" required />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label" for="email">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="johndoe@example.com" required />
				</div>
			</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<textarea class="form-control" id="message" rows="4" placeholder="Message" required></textarea> 
				</div>
			</div>
			<button type="submit" class="btn btn-lg btn-outline-dark" style="color: #000;">Send Message</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body-scripts'); ?>
<script>
$("body").scrollspy({target: ".navbar", offset: 50});

$("#navbar a").on('click', function(event) {
	// make sure there is a #value before overriding it
	if(this.hash !== "") {
			event.preventDefault(); // stop the default anchor behavior
			var hash = this.hash;

			$('html, body').animate({
				scrollTop: ($(hash).offset().top)
			}, 800, function() {
				window.location.hash = hash;
			});
	}
});

(function($) {
// Thanks to Digital Fusion for this math!
$.fn.visible = function(partial) {
	var $t = $(this);
	var $w = $(window);
	var viewTop = $w.scrollTop();
	var viewBottom = viewTop + $w.height();
	var _top = $t.offset().top;
	var _bottom = _top + $t.height();
	var compareTop = partial === true ? _bottom : _top;
	var compareBottom = partial === true? _top : _bottom;
	
	return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
};
})(jQuery);

var w = $(window);
var animatedComponents = $(".scrollshow");

animatedComponents.each(function(i, el) {
	var el = $(el);
	if(el.visible(true)) {
		el.addClass("animate-start");
	}
});

w.scroll(function(event) {
	animatedComponents.each(function(i, el) {
		var el = $(el);
		if(el.visible(true)) {
			el.addClass("animate-start");
		}
	});
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>