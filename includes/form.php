<?php
/**
 * Widget forms.
 *
 * @package    Recent_Posts_Widget_Extended
 * @since      0.9.4
 * @author     Satrya
 * @copyright  Copyright (c) 2014, Satrya
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<div class="rpwe-columns-3">

	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">
			<?php _e( 'Title', 'rpwe' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'title_url' ); ?>">
			<?php _e( 'Title URL', 'rpwe' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title_url' ); ?>" name="<?php echo $this->get_field_name( 'title_url' ); ?>" type="text" value="<?php echo esc_url( $instance['title_url'] ); ?>" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'cssID' ); ?>">
			<?php _e( 'CSS ID', 'rpwe' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'cssID' ); ?>" name="<?php echo $this->get_field_name( 'cssID' ); ?>" type="text" value="<?php echo sanitize_html_class( $instance['cssID'] ); ?>"/>
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'styles_default' ); ?>" name="<?php echo $this->get_field_name( 'styles_default' ); ?>" type="checkbox" <?php checked( $instance['styles_default'] ); ?> />
		<label class="input-checkbox" for="<?php echo $this->get_field_id( 'styles_default' ); ?>">
			<?php _e( 'Use Default Styles', 'rpwe' ); ?>
		</label>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'before' ); ?>">
			<?php _e( 'HTML or text before the recent posts', 'rpwe' );?>
		</label>
		<textarea class="widefat" id="<?php echo $this->get_field_id( 'before' ); ?>" name="<?php echo $this->get_field_name( 'before' ); ?>" rows="5"><?php echo htmlspecialchars( stripslashes( $instance['before'] ) ); ?></textarea>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'after' ); ?>">
			<?php _e( 'HTML or text after the recent posts', 'rpwe' );?>
		</label>
		<textarea class="widefat" id="<?php echo $this->get_field_id( 'after' ); ?>" name="<?php echo $this->get_field_name( 'after' ); ?>" rows="5"><?php echo htmlspecialchars( stripslashes( $instance['after'] ) ); ?></textarea>
	</p>

</div>

<div class="rpwe-columns-3">

	<p>
		<input class="checkbox" type="checkbox" <?php checked( $instance['ignore_sticky'], 1 ); ?> id="<?php echo $this->get_field_id( 'ignore_sticky' ); ?>" name="<?php echo $this->get_field_name( 'ignore_sticky' ); ?>" />
		<label for="<?php echo $this->get_field_id( 'ignore_sticky' ); ?>">
			<?php _e( 'Ignore sticky posts', 'rpwe' ); ?>
		</label>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'post_type' ); ?>">
			<?php _e( 'Post Type', 'rpwe' ); ?>
		</label>
		<?php /* pros Justin Tadlock - http://themehybrid.com/ */ ?>
		<select class="widefat" id="<?php echo $this->get_field_id( 'post_type' ); ?>" name="<?php echo $this->get_field_name( 'post_type' ); ?>">
			<option value="any" <?php selected( 'any', $instance['post_type'] ); ?>><?php _e( 'Any', 'rpwe' ); ?></option>
			<?php foreach ( get_post_types( array( 'public' => true ), 'objects' ) as $post_type ) { ?>
				<option value="<?php echo esc_attr( $post_type->name ); ?>" <?php selected( $instance['post_type'], $post_type->name ); ?>><?php echo esc_html( $post_type->labels->singular_name ); ?></option>
			<?php } ?>
		</select>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'post_status' ); ?>">
			<?php _e( 'Post Status', 'rpwe' ); ?>
		</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'post_status' ); ?>" name="<?php echo $this->get_field_name( 'post_status' ); ?>" style="width:100%;">
			<?php foreach ( get_available_post_statuses() as $status_value => $status_label ) { ?>
				<option value="<?php echo esc_attr( $status_label ); ?>" <?php selected( $instance['post_status'], $status_label ); ?>><?php echo esc_html( ucfirst( $status_label ) ); ?></option>
			<?php } ?>
		</select>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'order' ); ?>">
			<?php _e( 'Order', 'rpwe' ); ?>
		</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'order' ); ?>" name="<?php echo $this->get_field_name( 'order' ); ?>" style="width:100%;">
			<option value="DESC" <?php selected( $instance['order'], 'DESC' ); ?>><?php _e( 'Descending', 'rpwe' ) ?></option>
			<option value="ASC" <?php selected( $instance['order'], 'ASC' ); ?>><?php _e( 'Ascending', 'rpwe' ) ?></option>
		</select>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'orderby' ); ?>">
			<?php _e( 'Orderby', 'rpwe' ); ?>
		</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'orderby' ); ?>" name="<?php echo $this->get_field_name( 'orderby' ); ?>" style="width:100%;">
			<option value="ID" <?php selected( $instance['orderby'], 'ID' ); ?>><?php _e( 'ID', 'rpwe' ) ?></option>
			<option value="author" <?php selected( $instance['orderby'], 'author' ); ?>><?php _e( 'Author', 'rpwe' ) ?></option>
			<option value="title" <?php selected( $instance['orderby'], 'title' ); ?>><?php _e( 'Title', 'rpwe' ) ?></option>
			<option value="date" <?php selected( $instance['orderby'], 'date' ); ?>><?php _e( 'Date', 'rpwe' ) ?></option>
			<option value="modified" <?php selected( $instance['orderby'], 'modified' ); ?>><?php _e( 'Modified', 'rpwe' ) ?></option>
			<option value="rand" <?php selected( $instance['orderby'], 'rand' ); ?>><?php _e( 'Random', 'rpwe' ) ?></option>
			<option value="comment_count" <?php selected( $instance['orderby'], 'comment_count' ); ?>><?php _e( 'Comment Count', 'rpwe' ) ?></option>
			<option value="menu_order" <?php selected( $instance['orderby'], 'menu_order' ); ?>><?php _e( 'Menu Order', 'rpwe' ) ?></option>
		</select>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'cat' ); ?>">
			<?php _e( 'Limit to Category', 'rpwe' ); ?>
		</label>
	   	<select class="widefat" multiple="multiple" id="<?php echo $this->get_field_id( 'cat' ); ?>" name="<?php echo $this->get_field_name( 'cat' ); ?>[]" style="width:100%;">
			<optgroup label="Categories">
				<?php $categories = get_terms( 'category' ); ?>
				<?php foreach( $categories as $category ) { ?>
					<option value="<?php echo $category->term_id; ?>" <?php if ( is_array( $instance['cat'] ) && in_array( $category->term_id, $instance['cat'] ) ) echo ' selected="selected"'; ?>><?php echo $category->name; ?></option>
				<?php } ?>
			</optgroup>
	    </select>
	    <small>Please just use the <strong>Limit to Taxonomy</strong> option to display posts based on category, I will remove this option in the next release.</small>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'tag' ); ?>">
			<?php _e( 'Limit to Tag', 'rpwe' ); ?>
		</label>
	   	<select class="widefat" multiple="multiple" id="<?php echo $this->get_field_id( 'tag' ); ?>" name="<?php echo $this->get_field_name( 'tag' ); ?>[]" style="width:100%;">
			<optgroup label="Tags">
				<?php $tags = get_terms( 'post_tag' ); ?>
				<?php foreach( $tags as $post_tag ) { ?>
					<option value="<?php echo $post_tag->term_id; ?>" <?php if ( is_array( $instance['tag'] ) && in_array( $post_tag->term_id, $instance['tag'] ) ) echo ' selected="selected"'; ?>><?php echo $post_tag->name; ?></option>
				<?php } ?>
			</optgroup>
	    </select>
	    <small>Please just use the <strong>Limit to Taxonomy</strong> option to display posts based on tag, I will remove this option in the next release.</small>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'taxonomy' ); ?>">
			<?php _e( 'Limit to Taxonomy', 'rpwe' ); ?>
		</label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'taxonomy' ); ?>" name="<?php echo $this->get_field_name( 'taxonomy' ); ?>" value="<?php echo esc_attr( $instance['taxonomy'] ); ?>" />
		<small><?php _e( 'Ex: category=1,2,4&amp;post_tag=6,12', 'rpwe' );?><br />
		<?php _e( 'Available: ', 'rpwe' ); echo implode( ', ', get_taxonomies( array( 'public' => true ) ) ); ?></small>
	</p>

</div>

<div class="rpwe-columns-3 rpwe-column-last">

	<p>
		<label for="<?php echo $this->get_field_id( 'limit' ); ?>">
			<?php _e( 'Number of posts to show', 'rpwe' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>" type="number" step="1" min="-1" value="<?php echo (int)( $instance['limit'] ); ?>" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'offset' ); ?>">
			<?php _e( 'Offset (the number of posts to skip)', 'rpwe' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'offset' ); ?>" name="<?php echo $this->get_field_name( 'offset' ); ?>" type="number" step="1" min="0" value="<?php echo (int)( $instance['offset'] ); ?>" />
	</p>

	<?php if ( current_theme_supports( 'post-thumbnails' ) ) { ?>

		<p>
			<input id="<?php echo $this->get_field_id( 'thumb' ); ?>" name="<?php echo $this->get_field_name( 'thumb' ); ?>" type="checkbox" <?php checked( $instance['thumb'] ); ?> />
			<label class="input-checkbox" for="<?php echo $this->get_field_id( 'thumb' ); ?>">
				<?php _e( 'Display Thumbnail', 'rpwe' ); ?>
			</label>
		</p>

		<p>
			<label class="rpwe-block" for="<?php echo $this->get_field_id( 'thumb_height' ); ?>">
				<?php _e( 'Thumbnail (width,height,align)', 'rpwe' ); ?>
			</label>
			<input class= "small-input" id="<?php echo $this->get_field_id( 'thumb_height' ); ?>" name="<?php echo $this->get_field_name( 'thumb_height' ); ?>" type="number" step="1" min="0" value="<?php echo (int)( $instance['thumb_height'] ); ?>" />
			<input class="small-input" id="<?php echo $this->get_field_id( 'thumb_width' ); ?>" name="<?php echo $this->get_field_name( 'thumb_width' ); ?>" type="number" step="1" min="0" value="<?php echo (int)( $instance['thumb_width'] ); ?>"/>
			<select class="small-input" id="<?php echo $this->get_field_id( 'thumb_align' ); ?>" name="<?php echo $this->get_field_name( 'thumb_align' ); ?>">
				<option value="rpwe-alignleft" <?php selected( $instance['thumb_align'], 'rpwe-alignleft' ); ?>><?php _e( 'Left', 'rpwe' ) ?></option>
				<option value="rpwe-alignright" <?php selected( $instance['thumb_align'], 'rpwe-alignright' ); ?>><?php _e( 'Right', 'rpwe' ) ?></option>
				<option value="rpwe-aligncenter" <?php selected( $instance['thumb_align'], 'rpwe-aligncenter' ); ?>><?php _e( 'Center', 'rpwe' ) ?></option>
			</select>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'thumb_default' ); ?>">
				<?php _e( 'Default Thumbnail', 'rpwe' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'thumb_default' ); ?>" name="<?php echo $this->get_field_name( 'thumb_default' ); ?>" type="text" value="<?php echo $instance['thumb_default']; ?>"/>
			<small><?php _e( 'Leave it blank to disable.', 'rpwe' ); ?></small>
		</p>

	<?php } ?>

	<p>
		<input id="<?php echo $this->get_field_id( 'excerpt' ); ?>" name="<?php echo $this->get_field_name( 'excerpt' ); ?>" type="checkbox" <?php checked( $instance['excerpt'] ); ?> />
		<label class="input-checkbox" for="<?php echo $this->get_field_id( 'excerpt' ); ?>">
			<?php _e( 'Display Excerpt', 'rpwe' ); ?>
		</label>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'length' ); ?>">
			<?php _e( 'Excerpt Length', 'rpwe' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'length' ); ?>" name="<?php echo $this->get_field_name( 'length' ); ?>" type="number" step="1" min="0" value="<?php echo (int)( $instance['length'] ); ?>" />
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'readmore' ); ?>" name="<?php echo $this->get_field_name( 'readmore' ); ?>" type="checkbox" <?php checked( $instance['readmore'] ); ?> />
		<label class="input-checkbox" for="<?php echo $this->get_field_id( 'readmore' ); ?>">
			<?php _e( 'Display Readmore', 'rpwe' ); ?>
		</label>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'readmore_text' ); ?>">
			<?php _e( 'Readmore Text', 'rpwe' ); ?>
		</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'readmore_text' ); ?>" name="<?php echo $this->get_field_name( 'readmore_text' ); ?>" type="text" value="<?php echo strip_tags( $instance['readmore_text'] ); ?>" />
	</p>

	<p>
		<input id="<?php echo $this->get_field_id( 'date' ); ?>" name="<?php echo $this->get_field_name( 'date' ); ?>" type="checkbox" <?php checked( $instance['date'] ); ?> />
		<label class="input-checkbox" for="<?php echo $this->get_field_id( 'date' ); ?>">
			<?php _e( 'Display Date', 'rpwe' ); ?>
		</label>
	</p>

</div>

<div class="clear"></div>

<p>
	<label for="<?php echo $this->get_field_id( 'css' ); ?>">
		<?php _e( 'Custom CSS', 'rpwe' ); ?>
	</label>
	<textarea class="widefat" id="<?php echo $this->get_field_id( 'css' ); ?>" name="<?php echo $this->get_field_name( 'css' ); ?>" style="height:150px;"><?php echo $instance['css']; ?></textarea>
	<small><?php _e( 'If you turn off the default styles, you can use these css code to customize the recent posts style.', 'rpwe' ); ?></small>
</p>