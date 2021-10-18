<?php
get_header();

while (have_posts()){
    the_post();
    pageBanner();
    ?>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program') ?>"><i
                        class="fa fa-home" aria-hidden="true"></i>All Programs</a> <span
                    class="metabox__main"><?php the_title() ?></span>
            </p>
            </p>
        </div>
        <div class="generic-content"><?php the_content();?></div>
	    <?php

	    //custom query for retrieving professors related to the current program
            $relatedProfessors = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'professor',
                'orderby' => 'title',
                'meta_query' => array(
                    'key' => 'related_programs',
                    'compare' => 'LIKE',
                    'value' => '"' . get_the_ID() . '"'
                )
            ));

            //display professors related to the current program
            if ($relatedProfessors->have_posts()){
	            echo '<hr class="section-break">';
	            echo '<h2 class="headline headline--medium">Professor teaching ' . get_the_title()  . '</h2>';
	            //display events related to the current program
                echo '<ul class="professor-cards">';
	            while($relatedProfessors->have_posts()){
		            $relatedProfessors->the_post();?>
                    <li class="professor-card__list-item">
                        <a class="professor-card" href="<?php the_permalink(); ?>">
                            <img class="professor-card__image" src="<?php the_post_thumbnail_url('professorLandscape');?>">
                            <span class="professor-card__name"><?php the_title();?></span>
                        </a>
                    </li>
		            <?php
                    echo '</ul>';
	            }
            }
	    //custom query for retrieving events related to the current program
	    $today = date('Ymd');
	    $relatedEvents = new WP_Query(array(
			    'posts_per_page' => -1,
			    'post_type' => 'event',
			    'meta_key' => 'event_date',
			    'orderby' => 'meta_value_num',
			    'order' => 'ASC',
			    'meta_query' => array(
				    array(
					    'key' => 'event_date',
					    'compare'=> '>=',
					    'value' => $today,
					    'type' => 'numeric'
				    ),
				    array(
					    'key'=>'related_programs',
					    'compare'=> 'LIKE',
					    'value' => '"' . get_the_ID() . '"'
				    )
			    )
		    )
	    );

        wp_reset_postdata();
	    //custom query for retrieving events related to the current program
	    $today = date('Ymd');
	    $relatedEvents = new WP_Query(array(
			    'posts_per_page' => -1,
			    'post_type' => 'event',
			    'meta_key' => 'event_date',
			    'orderby' => 'meta_value_num',
			    'order' => 'ASC',
			    'meta_query' => array(
				    array(
					    'key' => 'event_date',
					    'compare'=> '>=',
					    'value' => $today,
					    'type' => 'numeric'
				    ),
				    array(
					    'key'=>'related_programs',
					    'compare'=> 'LIKE',
					    'value' => '"' . get_the_ID() . '"'
				    )
			    )
		    )
	    );
	    //display related events to the current program
	    if ($relatedEvents->have_posts()){
		    echo '<hr class="section-break">';
		    echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Events</h2>';
		    //display events related to the current program
		    while($relatedEvents->have_posts()){
			    $relatedEvents->the_post();
                get_template_part('template-parts/content-event');
		    }
	    }
	    ?>


    </div>
    <?php
}

get_footer();
?>
