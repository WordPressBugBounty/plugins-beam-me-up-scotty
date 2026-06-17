<?php
$icon = get_option(
    $this->settings->base . 'icon',
    $this->get_default_value( 'icon' )
);
?>

<div class="otb-beam-me-up-scotty hidden <?php echo get_option( $this->settings->base . 'size', $this->get_default_value( 'size' ) ); ?> <?php echo get_option( $this->settings->base . 'style', $this->get_default_value( 'style' ) ); ?> <?php echo get_option( $this->settings->base . 'animation', $this->get_default_value( 'animation' ) ); ?> <?php echo get_option( $this->settings->base . 'hide_when_inactive', $this->get_default_value( 'hide_when_inactive' ) ) ? 'hide-when-inactive' : ''; ?>">
	<?php if ( $icon === 'arrow' ) : ?>
		<i class="otb-fa otb-fa-angle-up"></i>
	<?php else : ?>
		<svg class="bmus-icon bmus-icon-delta" viewBox="299 451 101 162" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
			<path
	d="M350.6714,451.2887c-36.3264,51.9337-48.7244,103.6278-50.6919,162.147,11.98671-11.7398,50.14366-58.4529,63.7557-61.16914,9.08363-1.81174,19.47003,12.64405,36.2853,49.08336-2.19193-50.75678-22.49534-116.4719-49.34906-150.0612z" fill="currentColor"
	
/>
			<path
	d="m350.6579,451.2887c-35.59494,50.64347-48.41479,99.37433-50.34267,156.4396,11.74539-11.44722,49.13407-57.00074,62.47212-59.64864,8.90069-1.76736,16.72784,8.97178,35.21875,44.1712-4.49726-49.49654-25.06368-108.5433-47.3482-140.9622z" fill="currentColor"
	
/>
		</svg>
	<?php endif; ?>
	<div class="rollover"></div>
</div>
