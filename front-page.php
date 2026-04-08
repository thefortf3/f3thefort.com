<?php
/**
 * The Front Page Template
 * 
 * Overrides the Sela parent theme's front page template
 * Displays custom layout with media box, welcome box, upcoming events, and navigation grid
 *
 * @package The Fort
 */

get_header(); ?>

<div id="primary" class="content-area front-page-content-area">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<!-- Top Half: Media Box + Welcome Box -->
			<div id="top-half" class="container-fluid">
				<div id="media-box" class="row vcenter">
					<div id="fort-logo" class="col-xs-12 col-md-3">
						<img class="img-responsive center-block" src="http://f3thefort.com/wp-content/uploads/2017/06/The_Fort_logo_Walpha-273x300.png" alt="The Fort Logo" />
					</div>
					<div id="media-caption" class="col-xs-12 col-md-6">
						The home for news and information about The Fort region of F3 Nation.
					</div>
					<div id="f3-logo" class="col-xs-12 col-md-3">
						<img class="img-responsive center-block" src="http://f3thefort.com/wp-content/uploads/2017/06/f3_logo_small.png" alt="F3 Logo" />
					</div>
				</div>
				<div id="welcome-box" class="row">
					Welcome to the online home of The Fort Region of F3 Nation. Here you will find all things Fort related including workout times, days and locations, pre-blasts, backblasts, news, calendar of upcoming events as well as links to other region sites.
				</div>
			</div>

			<!-- Upcoming Events Section -->
			<?php echo fort_get_upcoming_preblasts(); ?>

			<!-- Bottom Half: Navigation Grid -->
			<div id="bottom-half" class="container">
				<div class="row">
					<div id="locations" class="col-lg-6 col-sm-12 row">
						<div id="locations-img" class="col-xs-4">
							<a href="http://f3thefort.com/locations/" alt="locations">
								<img class="img-link pull-right" src="http://f3thefort.com/wp-content/uploads/2017/06/location_pin.png" alt="Location Pin" />
							</a>
						</div>
						<div id="locations-text" class="nav-grid-text col-xs-8">
							<h3 class="media-heading">Workout Locations</h3>
							Use map to find a Fort-area workout location near you.
							<a class="link-chevron" href="http://f3thefort.com/locations/" alt="locations">&gt;&gt;</a>
						</div>
					</div>
					
					<div id="schedule" class="col-lg-6 col-sm-12 row">
						<div id="schedule-img" class="col-xs-4">
							<a href="http://f3thefort.com/schedule/" alt="schedule">
								<img class="img-link pull-right" src="http://f3thefort.com/wp-content/uploads/2017/06/calendar.png" alt="Calendar" />
							</a>
						</div>
						<div id="schedule-text" class="nav-grid-text col-xs-8">
							<h3 class="media-heading">Workout Schedule</h3>
							Search by day of week or workout name.
							<a class="link-chevron" href="http://f3thefort.com/schedule/" alt="schedule">&gt;&gt;</a>
						</div>
					</div>
					
					<div id="principles" class="col-lg-6 col-sm-12 row">
						<div id="principles-img" class="col-xs-4">
							<a href="http://f3thefort.com/5-core-principles/" alt="core principles">
								<img class="img-link pull-right" src="http://f3thefort.com/wp-content/uploads/2017/06/5_core_principles.png" alt="Five Core Principles" />
							</a>
						</div>
						<div id="principles-text" class="nav-grid-text col-xs-8">
							<h3 class="media-heading">Five Core Principles</h3>
							No matter where you post, every workout has these.
							<a class="link-chevron" href="http://f3thefort.com/5-core-principles/" alt="core principles">&gt;&gt;</a>
						</div>
					</div>
					
					<div id="mission" class="col-lg-6 col-sm-12 row">
						<div id="mission-img" class="col-xs-4">
							<a href="http://f3thefort.com/mission-of-f3/" alt="mission of f3">
								<img class="img-link pull-right" src="http://f3thefort.com/wp-content/uploads/2017/06/shovel_flag.png" alt="Shovel Flag" />
							</a>
						</div>
						<div id="mission-text" class="nav-grid-text col-xs-8">
							<h3 class="media-heading">The Mission of F3</h3>
							More than a workout. Learn more about our mission.
							<a class="link-chevron" href="http://f3thefort.com/mission-of-f3/" alt="mission of f3">&gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
			
		</article>

	<?php endwhile; // end of the loop. ?>
</div><!-- #primary -->

<?php get_footer(); ?>
