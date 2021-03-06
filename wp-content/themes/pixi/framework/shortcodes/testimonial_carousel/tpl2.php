<article <?php post_class(); ?>>
    <div class="item">
        <div class="testimonial-details">
          <?php echo '<div class="content">
			<svg version="1.1" class="quot" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 512 512" xml:space="preserve"><linearGradient gradientUnits="userSpaceOnUse" x1="256" y1="437" x2="256" y2="79" gradientTransform="matrix(1 0 0 -1 0 514)"><stop offset="0" class="stop1"/><stop  offset="1" class="stop2"/></linearGradient><path class="quot_stop" d="M177.126,435H89.543l7.216-25.455C103.812,384.665,115,339.712,115,325
			c0-3.591-0.107-6.216-0.251-8.119c-30.471-1.311-58.917-13.961-80.375-35.812C12.208,258.497,0,228.641,0,197
			C0,130.832,53.832,77,120,77s120,53.832,120,120c0,135.148-54.68,224.797-57.007,228.547L177.126,435z M142.059,395h12.13
			C167.164,369.834,200,296.32,200,197c0-44.112-35.888-80-80-80s-80,35.888-80,80c0,43.262,35.176,79.141,78.413,79.979l0.878,0.022
			c17.538,0.099,26.09,9.106,30.178,16.669C154.06,302.162,155,312.336,155,325C155,340.959,147.806,372.416,142.059,395z
			 M119.936,317.042L119.936,317.042L119.936,317.042z M449.126,435h-87.583l7.216-25.455C375.812,384.665,387,339.712,387,325
			c0-3.591-0.107-6.216-0.251-8.119c-30.471-1.311-58.917-13.961-80.375-35.812C284.208,258.497,272,228.641,272,197
			c0-66.168,53.832-120,120-120s120,53.832,120,120c0,135.148-54.68,224.797-57.007,228.547L449.126,435z M414.059,395h12.13
			C439.164,369.834,472,296.32,472,197c0-44.112-35.888-80-80-80s-80,35.888-80,80c0,43.262,35.176,79.141,78.413,79.979l0.878,0.022
			c17.538,0.099,26.09,9.106,30.178,16.669C426.06,302.162,427,312.336,427,325C427,340.959,419.806,372.416,414.059,395z
			 M391.936,317.042L391.936,317.042L391.936,317.042z"/></svg>

			  <p>'.get_post_meta(get_the_ID(),'testimonial_content',true).'</p>
			  </div>'; ?>
          <?php if (has_post_thumbnail()) the_post_thumbnail('thumbnail'); ?>
          <h5><?php the_title(); ?></h5>
          <h6><?php echo get_post_meta(get_the_ID(),'role',true); ?></h6>
        </div>
      </div>
</article>
