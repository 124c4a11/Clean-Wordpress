<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'clean'),
		'type'         => 'switch',
	),
	'container_id' => array(
		'label' => __('Section Id', 'clean'),
		'desc'  => __('Please enter ID of section', 'clean'),
		'type'  => 'text',
	),
	'container_class' => array(
		'label' => __('Section Class', 'clean'),
		'desc'  => __('Please enter Class of section', 'clean'),
		'type'  => 'text',
	),
	'container_title' => array(
		'label' => __('Section Title', 'clean'),
		'desc'  => __('Please enter Title of section', 'clean'),
		'type'  => 'text',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	)
);
