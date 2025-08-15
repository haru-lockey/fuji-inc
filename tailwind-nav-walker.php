<?php
/**
 * Custom Walker for Tailwind CSS navigation menus.
 */
class Tailwind_Nav_Walker extends Walker_Nav_Menu {
    /**
     * Starts the list before the elements are added.
     */
    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "	";
            $n = "
";
        }
        $indent = str_repeat( $t, $depth );

        $is_mobile = isset($args->is_mobile) && $args->is_mobile;

        if ($is_mobile) {
            // A simple, nested list for mobile. Hidden by default.
            $classes = array( 'sub-menu', 'hidden', 'mt-2', 'space-y-2', 'pl-4' );
        } else {
            // Desktop dropdown classes
            $classes = array( 'sub-menu', 'absolute', 'hidden', 'group-hover:block', 'py-2', 'bg-white', 'rounded-md', 'shadow-lg', 'ring-1', 'ring-black', 'ring-opacity-5', 'z-50' );
        }

        $output .= "{$n}{$indent}<ul class=\"" . implode(' ', $classes) . "\">{$n}";
    }

    /**
     * Starts the element output.
     */
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "	";
            $n = "
";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $is_mobile = isset($args->is_mobile) && $args->is_mobile;

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        if ( !$is_mobile && in_array( 'menu-item-has-children', $classes ) ) {
            $classes[] = 'group';
            $classes[] = 'relative';
        }

        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $has_children = in_array( 'menu-item-has-children', $classes );

        // For mobile menus, wrap parent items in a div to separate link and toggle button
        if ($is_mobile && $has_children) {
            $item_output = '<div class="flex items-center justify-between">';
            $item_output .= '<a href="' . esc_url( ! empty( $item->url ) ? $item->url : '' ) . '" class="flex-grow">';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= '<button type="button" aria-expanded="false" class="p-2 mobile-submenu-toggle">';
            $item_output .= '<span class="sr-only">Open submenu</span>';
            $item_output .= '<svg class="w-4 h-4 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>';
            $item_output .= '</button>';
            $item_output .= '</div>';
        } else {
            $atts = array();
            $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
            $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
            if ( '_blank' === $item->target && empty( $item->xfn ) ) {
                $atts['rel'] = 'noopener noreferrer';
            } else {
                $atts['rel'] = $item->xfn;
            }
            $atts['href']         = ! empty( $item->url ) ? $item->url : '';
            $atts['aria-current'] = $item->current ? 'page' : '';

            if ( !$is_mobile && $has_children && $depth === 0 ) {
                $atts['class'] = 'inline-flex items-center p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-ymd-blue';
            } elseif ( !$is_mobile && $depth > 0) {
                $atts['class'] = 'block w-full text-left py-2 px-4 text-sm text-gray-700 hover:bg-gray-100';
            }

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $title = apply_filters( 'the_title', $item->title, $item->ID );
            $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

            if ( !$is_mobile && $has_children && $depth === 0 ) {
                $title .= ' <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>';
            }

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}