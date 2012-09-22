<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 * @since _s 1.0
 */
?>

			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div id="about-me" class="span6">

					<img id="my-avatar" class="pull-left img-polaroid" width="100px" src="<?php echo get_template_directory_uri() . "/images/julien-bourdeau.jpg";?>" />
					<h3 class="no-margin">About me <small><a href="/about">(more)</a></small> </h3>
					<p>Hello I'm <strong><a href="http://www.julienbourdeau.com">Julien Bourdeau</a></strong> and I quite love computers.</p>
					<p>I finished my studies some months ago and now I'm the <stong>co-founder of an innovative
						start-up in France</strong>. My fresh company built a product on 
						<a href="http://symfony.com/">Symfony2</a> for small shops.</p>
					<?php /* <p>I'm a geek I'm still doing some extra stuff that you can check out on <a href="http://github.com/julienbourdeau">github</a>.</p> 
					<p><a href="/about">More about me</a></p>*/ ?>

				</div><!-- #about-me -->

				<div class="span5 offset1">

					<h3 class="no-margin">Stalk me online</h3>
					<div class="clearfix">
						<a id="linkedin" class="social_link" href="http://www.linkedin.com/in/julienbourdeau"></a>
						<a id="googleplus" class="social_link" href="https://plus.google.com/u/0/106765980258232747369/posts"></a>
						<a id="facebook" class="social_link" href="http://facebook.com/julienbourdeau"></a>
						<a id="twitter" class="social_link" href="http://twitter.com/julienbourdeau"></a>
						<a id="tumblr" class="social_link" href="http://1670mm.tumblr.com/"></a>
						<a id="github" class="social_link" href="http://github.com/julienbourdeau/"></a>
						<a id="youtube" class="social_link" href="http://fr.youtube.com/user/julienbourdeau"></a>
						<a id="flickr" class="social_link" href="http://www.flickr.com/photos/julienbourdeau/"></a>
					</div>

				</div>

				<?php /*
				<div class="span2">
					<h3>My resume</h3>
					<a class="big-pdf-icon" href="http://sigerr.org/cv/CV-julien-bourdeau.pdf"></a>
				</div>
				*/ ?>
				
			</div>
		</div>
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-13064797-1']);
  _gaq.push(['_setDomainName', 'sigerr.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>