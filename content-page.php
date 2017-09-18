	<!-- content for pages --> 
	 
	<!-- only if post has thumbnail then use .has-thumbnail class styling --> 
	<article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">

		<!-- post-thumbnail -->
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		</div><!-- /post-thumbnail -->

			<?php

			$tags = get_the_tags();;
			$separator = ", ";
			$output = '';

			if ($tags) {

				foreach ($tags as $tags) {

					$output .= '<a href="' . get_the_tags($tags->term_id) . '">' . $tags->tag_name . '</a>'  . $separator;

				}

				echo trim($output, $separator);

				} else {

				the_content();

			}

			?>

			</p>
