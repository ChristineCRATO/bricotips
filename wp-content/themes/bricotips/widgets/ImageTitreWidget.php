<?php

/**
 * Adds Foo_Widget widget.
 */
class Image_Titre_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'image_titre_widget', // Base ID
            'Widget Image Titre', // Name
            array( 'description' => __( 'Widget d\'image avec titre', 'text_domain' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = $instance['title'];
        $urlImage = $instance['url_image'];
       
        echo $before_widget;

        if ( ! empty( $urlImage ) ) {
            ?>
            <div class="image-titre-widget">
                <img src="<?= $urlImage ?>" alt="<?= $title ?>">
                <div class="titre"><?= $title ?></div>
        </div>
        <?php
        }

        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if (isset( $instance[ 'title' ] ) ) {
            $title = $instance['title'];
        }
        else {
            $title = "Titre d'image";
        }
        if (isset( $instance[ 'url_image' ] ) ) {
            $urlImage = $instance[ 'url_image' ];
        }
        else {
            $urlImage = "";
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>">Titre</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'url_image' ); ?>">Url de L'image</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'url_image' ); ?>" name="<?php echo $this->get_field_name( 'url_image' ); ?>" type="text" value="<?php echo esc_attr( $urlImage ); ?>" />
        </p>
        
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['url_image'] = ( !empty( $new_instance['url_image'] ) ) ? strip_tags( $new_instance['url_image'] ) : '';
        
        return $instance;
    }

} // class Foo_Widget

?>