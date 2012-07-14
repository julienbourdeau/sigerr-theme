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
				<div id="about-me" class="span5">

					<img class="pull-left" width="100px" src="<?php echo get_template_directory_uri() . "/images/julien-bourdeau.jpg";?>" />
					<p>Hello I'm <strong><a href="http://www.julienbourdeau.com">Julien Bourdeau</a></strong> and I quite love computers.</p>
					<p>I finished my studies some months ago and now I'm the <stong>co-founder of an innovative
						start-up in France</strong>. My fresh company built a product on 
						<a href="http://symfony.com/">Symfony2</a> for small shops and we are member 
						of the Audencia's incubator (One of the top french business school).</p>
					<p>I like code a lot so im still doing some extra stuff that you can check out here on
						on <a href="http://github.com/julienbourdeau">github</a>. <a href="/about">More about me</a></p>

				</div><!-- #about-me -->

				<div class="span4 offset1">

					<h3>Find me online with this</h3>
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
					<div>
						<div><div id="phone" class="big-icons"></div>(+33) 6 4974 4364</div>
	                    <div class="clear"></div>
						<div><div id="skype" class="big-icons"></div>jubourdeau</div>
					</div>

				</div>

				<div class="span2">
					<h3>My resume</h3>
					<a class="big-pdf-icon" href="http://sigerr.org/cv/CV-julien-bourdeau.pdf"></a>
				</div>

			</div>
		</div>
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>