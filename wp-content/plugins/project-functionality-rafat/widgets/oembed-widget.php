<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_oEmbed_Widget extends \Elementor\Widget_Base
{



    /**
     * Get widget name.
     *
     * Retrieve oEmbed widget name.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'custom_search_rafat';
    }

    /**
     * Get widget title.
     *
     * Retrieve oEmbed widget title.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget title.
     */
    public function get_title()
    {
        return esc_html__('Search Field Porto', 'elementor-custom_search_rafat-widget');
    }

    /**
     * Get widget icon.
     *
     * Retrieve oEmbed widget icon.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'eicon-code';
    }

    /**
     * Get custom help URL.
     *
     * Retrieve a URL where the user can get more information about the widget.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget help URL.
     */
    public function get_custom_help_url()
    {
        return 'https://developers.elementor.com/docs/widgets/';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the oEmbed widget belongs to.
     *
     * @since 1.0.0
     * @access public
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return ['rafat-cat'];
    }

    /**
     * Get widget keywords.
     *
     * Retrieve the list of keywords the oEmbed widget belongs to.
     *
     * @since 1.0.0
     * @access public
     * @return array Widget keywords.
     */
    public function get_keywords()
    {
        return [];
    }

    /**
     * Register oEmbed widget controls.
     *
     * Add input fields to allow the user to customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls()
    {
        $home_page = home_url($_SERVER['REQUEST_URI']);

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'elementor-custom_search_rafat-widget'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'url',
            [
                'label' => __('Search Page URL', 'elementor-custom_search_rafat-widget'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'value' => $home_page,
                'placeholder' => __($home_page, 'elementor-custom_search_rafat-widget'),
            ]
        );

        $this->end_controls_section();
    }

    /**
     * Render oEmbed widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {

        $settings = $this->get_settings_for_display();

        // """
        // <form action="http://localhost/wordpress/" method="get" class="searchform">
        //     <div class="searchform-fields">
        //         <span class="text">
        //                        <input name="s" type="text" value="" placeholder="Search…" autocomplete="off"></span>
        //                         <input type="hidden" name="post_type" value="product">
        //                         <span class="button-wrap">
        //                         <button class="btn btn-special" title="Search" type="submit"><i class="fas fa-search"></i></button>
        //                     </span>
        //     </div>
        //             <div class="live-search-list"><div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div></div>
        //         </form>
        // """

        // $element = '<form action="http://localhost/wordpress/" method="get" class="searchform">';
        // $element .= '<div class="searchform-fields">';
        // $element .= '<div class="searchform-fields">';

        echo  '<div class="" style="
        border-radius: 30px;
        border: 1px solid #000;
    ">';
        echo '<form action="' . $settings['url'] . '" method="get" class="d-flex align-items-center justify-content-between">';
        echo  '<div>';
        echo  '<span class="text">';
        echo  '<input name="s" type="text" value="" placeholder="Search…" autocomplete="off" 
        style="min-width: 100%;height: 42px;font-size: 14px; background: transparent; border: 0" />
        ';
        echo  '</span>';
        echo  '</div>';
        echo  '<input type="hidden" name="post_type" value="product" />';
        // echo  '<div>';
        // echo  '<span class="button-wrap">';
        echo  '<button title="Search" type="submit" style="background: none; border:0; color:black;"> 
        <i class="fas fa-search fa-lg"></i> 
        </button>';
        // echo  '</span>';
        // echo  '</div>';
        echo '</form>';
        echo  '</div>';
    }
}
