<?php

// Регистрируем новый тип записей 
add_action('init', 'my_custom_init',0);
function my_custom_init(){
	register_post_type('news', array(
		'labels'             => array(
			'name'               => __('Новости'), // Основное название типа записи
			'singular_name'      => __('Новости'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Новости'),
			'add_new_item'       => __('Добавить новые Новости'),
			'edit_item'          => __('Редактировать Новости'),
			'new_item'           => __('Новые Новости'),
			'view_item'          => __('Посмотреть Новости'),
			'search_items'       => __('Найти Новости'),
			'not_found'          => __('Новостей не найдено'),
			'not_found_in_trash' => __('Новостей не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Новости')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt')
	) );

    register_post_type('fiberglass', array(
        'labels'             => array(
            'name'               => __('Стеклопластиковые'), // Основное название типа записи
            'singular_name'      => __('Стеклопластиковые'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Стеклопластиковые'),
            'add_new_item'       => __('Добавить новые Стеклопластиковые'),
            'edit_item'          => __('Редактировать Стеклопластиковые'),
            'new_item'           => __('Новые Стеклопластиковые'),
            'view_item'          => __('Посмотреть Стеклопластиковые'),
            'search_items'       => __('Найти Стеклопластиковые'),
            'not_found'          => __('Стеклопластиковых не найдено'),
            'not_found_in_trash' => __('Стеклопластиковых не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Стеклопластиковые')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    register_post_type('metal', array(
        'labels'             => array(
            'name'               => __('Металлические'), // Основное название типа записи
            'singular_name'      => __('Металлические'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Металлические'),
            'add_new_item'       => __('Добавить новые Металлические'),
            'edit_item'          => __('Редактировать Металлические'),
            'new_item'           => __('Новые Металлические'),
            'view_item'          => __('Посмотреть Металлические'),
            'search_items'       => __('Найти Металлические'),
            'not_found'          => __('Металлические не найдено'),
            'not_found_in_trash' => __('Металлические не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Металлические')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    

    register_post_type('omus', array(
        'labels'             => array(
            'name'               => __('Обратного омуса'), // Основное название типа записи
            'singular_name'      => __('Обратного омуса'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Обратного омуса'),
            'add_new_item'       => __('Добавить новые Обратного омуса'),
            'edit_item'          => __('Редактировать Обратного омуса'),
            'new_item'           => __('Новые Обратного омуса'),
            'view_item'          => __('Посмотреть Обратного омуса'),
            'search_items'       => __('Найти Обратного омуса'),
            'not_found'          => __('Обратного омуса не найдено'),
            'not_found_in_trash' => __('Обратного омуса не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Обратного омуса')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    

    register_post_type('water', array(
        'labels'             => array(
            'name'               => __('Водоснабжение'), // Основное название типа записи
            'singular_name'      => __('Водоснабжение'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Водоснабжение'),
            'add_new_item'       => __('Добавить новые Водоснабжение'),
            'edit_item'          => __('Редактировать Водоснабжение'),
            'new_item'           => __('Новые Водоснабжение'),
            'view_item'          => __('Посмотреть Водоснабжение'),
            'search_items'       => __('Найти Водоснабжение'),
            'not_found'          => __('Водоснабжение не найдено'),
            'not_found_in_trash' => __('Водоснабжение не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Водоснабжение')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
    register_post_type('sewerage', array(
        'labels'             => array(
            'name'               => __('Канализация'), // Основное название типа записи
            'singular_name'      => __('Канализация'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Канализация'),
            'add_new_item'       => __('Добавить новые Канализация'),
            'edit_item'          => __('Редактировать Канализация'),
            'new_item'           => __('Новые Канализация'),
            'view_item'          => __('Посмотреть Канализация'),
            'search_items'       => __('Найти Канализация'),
            'not_found'          => __('Канализация не найдено'),
            'not_found_in_trash' => __('Канализация не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Канализация')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
    register_post_type('pumping', array(
        'labels'             => array(
            'name'               => __('Насосные станции'), // Основное название типа записи
            'singular_name'      => __('Насосные станции'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Насосные станции'),
            'add_new_item'       => __('Добавить новые Насосные станции'),
            'edit_item'          => __('Редактировать Насосные станции'),
            'new_item'           => __('Новые Насосные станции'),
            'view_item'          => __('Посмотреть Насосные станции'),
            'search_items'       => __('Найти Насосные станции'),
            'not_found'          => __('Насосные станции не найдено'),
            'not_found_in_trash' => __('Насосные станции не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Насосные станции')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
    
    register_post_type('clearing', array(
        'labels'             => array(
            'name'               => __('Очистные сооружения'), // Основное название типа записи
            'singular_name'      => __('Очистные сооружения'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Очистные сооружения'),
            'add_new_item'       => __('Добавить новые Очистные сооружения'),
            'edit_item'          => __('Редактировать Очистные сооружения'),
            'new_item'           => __('Новые Очистные сооружения'),
            'view_item'          => __('Посмотреть Очистные сооружения'),
            'search_items'       => __('Найти Очистные сооружения'),
            'not_found'          => __('Очистные сооружения не найдено'),
            'not_found_in_trash' => __('Очистные сооружения не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Очистные сооружения')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
    
    register_post_type('gutters', array(
        'labels'             => array(
            'name'               => __('Водостоки'), // Основное название типа записи
            'singular_name'      => __('Водостоки'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Водостоки'),
            'add_new_item'       => __('Добавить новые Водостоки'),
            'edit_item'          => __('Редактировать Водостоки'),
            'new_item'           => __('Новые Водостоки'),
            'view_item'          => __('Посмотреть Водостоки'),
            'search_items'       => __('Найти Водостоки'),
            'not_found'          => __('Водостоки не найдено'),
            'not_found_in_trash' => __('Водостоки не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Водостоки')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
    register_post_type('hydrotechnical', array(
        'labels'             => array(
            'name'               => __('Гидротехнические сооружения'), // Основное название типа записи
            'singular_name'      => __('Гидротехнические сооружения'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Гидротехнические сооружения'),
            'add_new_item'       => __('Добавить новые Гидротехнические сооружения'),
            'edit_item'          => __('Редактировать Гидротехнические сооружения'),
            'new_item'           => __('Новые Гидротехнические сооружения'),
            'view_item'          => __('Посмотреть Гидротехнические сооружения'),
            'search_items'       => __('Найти Гидротехнические сооружения'),
            'not_found'          => __('Гидротехнические сооружения не найдено'),
            'not_found_in_trash' => __('Гидротехнические сооружения не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Гидротехнические сооружения')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    
    
    
    register_post_type('irrigation', array(
        'labels'             => array(
            'name'               => __('Орошение'), // Основное название типа записи
            'singular_name'      => __('Орошение'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Орошение'),
            'add_new_item'       => __('Добавить новые Орошение'),
            'edit_item'          => __('Редактировать Орошение'),
            'new_item'           => __('Новые Орошение'),
            'view_item'          => __('Посмотреть Орошение'),
            'search_items'       => __('Найти Орошение'),
            'not_found'          => __('Орошение не найдено'),
            'not_found_in_trash' => __('Орошение не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Орошение')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );
    

    register_post_type('security', array(
        'labels'             => array(
            'name'               => __('Охрана окружающей среды'), // Основное название типа записи
            'singular_name'      => __('Охрана окружающей среды'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Охрана окружающей среды'),
            'add_new_item'       => __('Добавить новые Охрана окружающей среды'),
            'edit_item'          => __('Редактировать Охрана окружающей среды'),
            'new_item'           => __('Новые Охрана окружающей среды'),
            'view_item'          => __('Посмотреть Охрана окружающей среды'),
            'search_items'       => __('Найти Охрана окружающей среды'),
            'not_found'          => __('Охрана окружающей среды не найдено'),
            'not_found_in_trash' => __('Охрана окружающей среды не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Охрана окружающей среды')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );


    register_post_type('drainage', array(
        'labels'             => array(
            'name'               => __('Дренаж'), // Основное название типа записи
            'singular_name'      => __('Дренаж'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Дренаж'),
            'add_new_item'       => __('Добавить новые Дренаж'),
            'edit_item'          => __('Редактировать Дренаж'),
            'new_item'           => __('Новые Дренаж'),
            'view_item'          => __('Посмотреть Дренаж'),
            'search_items'       => __('Найти Дренаж'),
            'not_found'          => __('Дренаж не найдено'),
            'not_found_in_trash' => __('Дренаж не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Дренаж')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );



    register_post_type('gabion', array(
        'labels'             => array(
            'name'               => __('Габионные сооружения'), // Основное название типа записи
            'singular_name'      => __('Габионные сооружения'), // отдельное название записи типа Book
            'add_new'            => __('Добавить Габионные сооружения'),
            'add_new_item'       => __('Добавить новые Габионные сооружения'),
            'edit_item'          => __('Редактировать Габионные сооружения'),
            'new_item'           => __('Новые Габионные сооружения'),
            'view_item'          => __('Посмотреть Габионные сооружения'),
            'search_items'       => __('Найти Габионные сооружения'),
            'not_found'          => __('Габионные сооружения не найдено'),
            'not_found_in_trash' => __('Габионные сооружения не найдено'),
            'parent_item_colon'  => __(''),
            'menu_name'          => __('Габионные сооружения')
    
          ),
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        
        'menu_icon'			 => 'dashicons-businessman',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );


    register_post_type('hide', array(
      'labels'             => array(
          'name'               => __('Скрытый блок'), // Основное название типа записи
          'singular_name'      => __('Скрытый блок'), // отдельное название записи типа Book
          'add_new'            => __('Добавить Скрытый блок'),
          'add_new_item'       => __('Добавить новые Скрытый блок'),
          'edit_item'          => __('Редактировать Скрытый блок'),
          'new_item'           => __('Новые Скрытый блок'),
          'view_item'          => __('Посмотреть Скрытый блок'),
          'search_items'       => __('Найти Скрытый блок'),
          'not_found'          => __('Скрытый блок не найдено'),
          'not_found_in_trash' => __('Скрытый блок не найдено'),
          'parent_item_colon'  => __(''),
          'menu_name'          => __('Скрытый блок')
  
        ),
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      
      'menu_icon'			 => 'dashicons-businessman',
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title','editor','thumbnail','excerpt')
  ) );
  
  
    
    

}
