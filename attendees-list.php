<?php
/**
 * Renders the attendee list for an event
 *
 * @version 4.1
 *
 */
?>
<div class='tribe-attendees-list-container'>
	<h4><?php echo esc_html( sprintf( _n( 'One person is attending %2$s', '%d people are attending %s', $attendees_total, 'event-tickets-plus' ), $attendees_total, get_the_title( $event->ID ) ) ); ?></h4>

	<ul class='tribe-attendees-list'>
	<?php foreach ( $attendees_list as $attendee_id => $avatar_html ) { ?>
		
		<?php

		$attendee_name = '';

		foreach ( $attendees as $key => $attendee_obj  ) {

			if ( isset( $attendees[ $key ]['attendee_id'] ) && $attendee_id == $attendees[ $key ]['attendee_id'] ) {
				$attendee_name = $attendees[ $key ]['purchaser_name'];
			}

		} ?>

		<li class='tribe-attendees-list-item'>

			<?php if ( ! empty( $attendee_name ) ) : ?>
			<span class="tribe-attendees-list-item-name">
				<strong style="color:#f7d93e">/</strong> <?php echo $attendee_name; ?>  
			</span>
			<?php endif ?>		</li>
	<?php } ?>
	</ul>
</div>
