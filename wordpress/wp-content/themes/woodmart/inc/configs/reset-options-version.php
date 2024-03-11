<?php if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );}

return apply_filters(
	'woodmart_get_reset_options_version',
	array(
		'single_product_header',
		'age_verify',
		'primary-color',
		'primary-font',
		'text-font',
		'post-titles-font',
		'navigation-font',
		'widget-titles-font',
		'blog_style',
		'blog_with_shadow',
		'products_hover',
		'prefooter_area',
		'footer-style',
		'footer-layout',
		'footer-bar-bg',
		'btns_shop_bg',
		'btns_shop_bg_hover',
		'btns_shop_style',
		'btns_default_style',
		'shop_categories',
		'title-background',
		'page-title-color',
		'page-title-size',
		'form_border_width',
		'shop_filters',
		'shop_layout',
		'products_columns',
		'shop_pagination',
		'shop_products_count',
		'shop_title',
		'widget_heights',
		'product-background',
		'product_summary_shadow',
		'form_fields_style',
		'header',
		'sticky_footer',
		'site_width',
		'btns_shop_color_scheme',
		'btns_shop_color_scheme_custom',
		'product_design',
		'shop_hide_sidebar_desktop',
		'body-background',
		'disable_copyrights',
		'disable_footer',
		'copyrights-layout',
		'copyrights2',
		'categories_design',
		'dark_version',
		'btns_shop_color_scheme_hover',
		'btns_shop_color_scheme_hover_custom',
		'btns_default_bg',
		'btns_default_color_scheme',
		'btns_default_bg_hover',
		'btns_default_color_scheme_hover',
		'products_spacing',
		'products_spacing_tablet',
		'products_spacing_mobile',
		'label_shape',
		'attr_after_short_desc',
		'thums_position',
		'single_product_style',

		'pages-background',
		'shop-background',
		'product-background',
		'blog-background',
		'blog-post-background',
		'portfolio-background',
		'portfolio-project-background',

		'header_banner',
		'header_banner_bg',
		'header_banner_link',
		'header_banner_shortcode',
		'header_banner_height',
		'header_banner_mobile_height',
		'header_banner_color',
		'header_close_btn',

		'sticky_social',

		'single_post_design',
		'single_post_header',

		'multi_custom_fonts',
		'advanced_typography',
		'icon_font',
		'secondary-color',
		'rev_slider_inherit_theme_font',
		'font_awesome_css',
		'products_columns_mobile',
		'secondary-font',
		'footer_content_type',
		'footer_html_block',
		'blog_design',
		'popup-background',
		'categories_under_title',
		'prefooter_content_type',
		'prefooter_html_block',
		'lazy_loading',
		'catalog_mode',
		'blog_excerpt',
		'before_add_to_cart_content_type',
		'after_add_to_cart_content_type',
		'after_add_to_cart_html_block',
		'before_add_to_cart_html_block',
		'content_before_add_to_cart',
		'content_after_add_to_cart',
		'per_page_options',
		'mini_cart_quantity',
		'product_quantity',
		'shop_per_page',
		'categories_with_shadow',
		'product_tabs_layout',
		'popup_html_block',
		'hover_image',
		'blog_layout',
		'add_to_cart_action',
		'form_color',
		'form_placeholder_color',
		'form_brd_color',
		'form_brd_color_focus',
		'products_bordered_grid_style',
		'products_bordered_grid',
		'page-title-design',
		'form_bg',
		'stock_status_position',
		'show_empty_star_rating',
		'counter_visitor_enabled',
		'buy_now_enabled',
		'show_sku_in_mini_cart',
		'show_sku_in_cart',
		'show_sku_in_email_order',
		'shipping_progress_bar_enabled',
		'shipping_progress_bar_location_card_page',
		'shipping_progress_bar_location_mini_cart',
		'shipping_progress_bar_location_checkout',
		'shipping_progress_bar_location_single_product',
		'base_hover_content',
		'advanced_typography_button',
		'popular_requests',
		'full_search_content_type',
		'single_sticky_add_to_cart',
		'stock_status_design',
		'stretch_product_desktop',
		'stretch_product_tablet',
		'stretch_product_mobile',
		'rounding_size',
		'custom_rounding_size',

		'bought_together_enabled',
		'bought_together_column',
		'bought_together_column_tablet',
		'bought_together_column_mobile',
		'bought_together_form_width',

		'show_single_variation',
		'hide_variation_parent',

		'compare',
		'compare_by_category',
		'wishlist',
		'wishlist_expanded',

		'sticky_navigation_menu',
		'sticky_navigation_title',
		'grid_gallery',
		'reviews_style',
		'reviews_columns',
		'reviews_enable_pros_cons',
		'reviews_enable_likes',
		'show_reviews_purchased_indicator',
		'reviews_sorting',
		'show_reviews_only_image_filter',
		'reviews_rating_summary',
		'reviews_rating_by_criteria',
		'checkout_product_quantity',
		'checkout_show_product_image',
		'checkout_remove_button',
		'checkout_link_to_product',
		'products_with_background',
		'products_color_scheme',
		'products_shadow',
		'pagination_main_gallery',
		'single_product_thumbnails_vertical_items',
		'reviews_section_columns',
		'popup_color_scheme',
		'single_product_main_gallery_video',
		'single_product_thumbnails_items_desktop',
		'single_product_thumbnails_items_tablet',
		'single_product_thumbnails_items_mobile',
		'reviews_form_location',
		'shop_widgets_collapse',
		'reviews_rating_summary_content',
		'reviews_rating_summary_filter',
		'reviews_criteria_rating_required',
		'update_cart_quantity_change',
		'disable_wordpress_lazy_loading',
		'quick_shop_variable_type',
		'quick_shop_variable',
		'swatches_limit',
		'swatches_limit_count',
		'single_product_swatches_limit',
		'single_product_swatches_limit_count',
		'discounts_enabled',
		'show_discounts_table',
		'sold_counter_enabled',
		'percentage_label',
		'sale_label_bg_color',
		'sale_label_text_color',
		'new_label',
		'new_label_days_after_create',
		'new_label_bg_color',
		'new_label_text_color',
		'hot_label_bg_color',
		'hot_label_text_color',
		'stock_label_bg_color',
		'stock_label_text_color',
		'attribute_label_bg_color',
		'attribute_label_text_color',
		'quick_view',
		'show_stock_quantity_on_grid',
		'categories_rounding',
		'custom_categories_rounding_size',
		'show_reviews_count',
		'insta_delete_outdated_images',
		'load_text_domain',
		'main_gallery_on_tablet',
		'main_gallery_on_mobile',
		'single_product_grid_column_desktop',
		'single_product_grid_column_tablet',
		'single_product_grid_column_mobile',
		'single_product_grid_columns_gap',
		'parts_title',
		'parts_meta',
		'parts_text',
		'parts_btn',
		'popup_width',
		'android_browser_bar_color',
		'link-color',
		'shop_filters_columns',
		'shop_filters_columns_tablet',
		'shop_filters_columns_mobile',
		'shop_filters_spacing',
		'shop_filters_spacing_tablet',
		'shop_filters_spacing_mobile',
		'blog_spacing',
		'blog_spacing_tablet',
		'blog_spacing_mobile',
		'portfolio_spacing',
		'portfolio_spacing_tablet',
		'portfolio_spacing_mobile',
		'carousel_arrows_position',
		'carousel_arrows_hover_style',
		'carousel_arrows_icon_type',
		'carousel_arrows_sep_size',
		'carousel_arrows_sep_icon_size',
		'carousel_arrows_sep_offset_h',
		'carousel_arrows_sep_offset_v',
		'carousel_arrows_sep_color',
		'carousel_arrows_sep_color_hover',
		'carousel_arrows_sep_color_dis',
		'carousel_arrows_sep_bg_color',
		'carousel_arrows_sep_bg_color_hover',
		'carousel_arrows_sep_bg_color_dis',
		'carousel_arrows_sep_border_radius',
		'carousel_arrows_sep_border_width',
		'carousel_arrows_sep_border_style',
		'carousel_arrows_sep_border_color',
		'carousel_arrows_sep_border_color_hover',
		'carousel_arrows_sep_border_color_dis',
		'carousel_arrows_sep_box_shadow',
		'carousel_arrows_sep_box_shadow_color',
		'carousel_arrows_sep_box_shadow_color',
		'carousel_arrows_together_gap',
		'carousel_arrows_together_size',
		'carousel_arrows_together_icon_size',
		'carousel_arrows_together_offset_h',
		'carousel_arrows_together_offset_v',
		'carousel_arrows_together_color',
		'carousel_arrows_together_color_hover',
		'carousel_arrows_together_color_dis',
		'carousel_arrows_together_bg_color',
		'carousel_arrows_together_bg_color_hover',
		'carousel_arrows_together_bg_color_dis',
		'carousel_arrows_together_border_radius',
		'carousel_arrows_together_border_style',
		'carousel_arrows_together_border_width',
		'carousel_arrows_together_border_color',
		'carousel_arrows_together_border_color_hover',
		'carousel_arrows_together_border_color_dis',
		'carousel_arrows_together_box_shadow',
		'carousel_arrows_together_box_shadow_color',
		'carousel_pagin_size',
		'carousel_pagin_bg_color',
		'carousel_pagin_bg_color_hover',
		'carousel_pagin_bg_color_active',
		'carousel_pagin_border_radius',
		'carousel_pagin_border_style',
		'carousel_pagin_border_width',
		'carousel_pagin_border_color',
		'carousel_pagin_border_color_hover',
		'carousel_pagin_border_color_active',
		'carousel_scrollbar_height',
		'carousel_scrollbar_width',
		'carousel_scrollbar_bg_color',
		'carousel_scrollbar_drag_bg_color',
		'carousel_scrollbar_drag_bg_hover_color',
		'related_product_columns',
		'related_product_columns_tablet',
		'related_product_columns_mobile',
		'show_sku_in_thank_you_page',
		'popup_padding',
		'share_email',
		'share_viber',
		'share_tg',
		'share_vk',
		'share_whatsapp',
		'share_ok',
		'share_linkedin',
		'share_pinterest',
		'share_twitter',
		'share_fb',
		'hide_categories_product_count',
		'grid_swatches_attribute',
		'quick_view_layout',
	)
);
