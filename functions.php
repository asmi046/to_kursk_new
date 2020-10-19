<?php

define("COMPANY_NAME", "ТО и ОСАГО");
define("MAIL_RESEND", "<noreply@tehosago24.ru>");


define('TELEGRAM_TOKEN', '1277609895:AAG_TP96PFSd3Lp04dleM6I5RT8VjXDySFQ');
define('TELEGRAM_CHATID', '86447923');
function message_to_telegram($text)
{
	$arr_chat = carbon_get_theme_option('to_telegramm_id');
	if($arr_chat) {
		$arr_chat = explode(",",$arr_chat);
	    $ch = curl_init();
		for ($i = 0; $i<count($arr_chat); $i++) {
		    curl_setopt_array(
		        $ch,
		        array(
		            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
		            CURLOPT_POST => TRUE,
		            CURLOPT_RETURNTRANSFER => TRUE,
		            CURLOPT_TIMEOUT => 10,
		            CURLOPT_POSTFIELDS => array(
		                'chat_id' => trim($arr_chat[$i]),
		                'text' => $text,
		            ),
		        )
		    );
		    $output = curl_exec($ch);
		}
	}
	
}

//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' ); 
function crb_attach_theme_options() {
	require_once __DIR__ . "/themes-fields.php";
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

//-----Блок описания вывода меню
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

register_nav_menus( array(
	'header_menu' => 'Главное меню'
) );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 185, 185 ); 

add_post_type_support( 'page', 'excerpt' );

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin(){
	wp_enqueue_style("style-adm",get_template_directory_uri()."/style-admin.css");
	
	wp_localize_script( 'jquery', 'allAjax', array(
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
}

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 

define("STYLEVERSION", "1.0.1");
define("SCRIPTVERSION", "1.0.1");

add_action( 'wp_enqueue_scripts', 'my_assets' );
	function my_assets() {

		// Подключение стилей 

		wp_enqueue_style("style-lightbox", get_template_directory_uri()."/css/lightbox.min.js", array(), STYLEVERSION, 'all'); //Лайтбокс (стили)
		wp_enqueue_style("style-slik", get_template_directory_uri()."/css/slick.css", array(), STYLEVERSION, 'all'); //Слайдер (стили)

		wp_enqueue_style("main-style", get_stylesheet_uri(), array(), STYLEVERSION, 'all' ); // Подключение основных стилей в самом конце

		// Подключение скриптов
		
		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'amodal', get_template_directory_uri().'/js/jquery.arcticmodal-0.3.min.js', array(), SCRIPTVERSION , true); //Модальные окна
		wp_enqueue_script( 'mask', get_template_directory_uri().'/js/jquery.inputmask.bundle.js', array(), SCRIPTVERSION , true); //маска для инпутов
		wp_enqueue_script( 'lightbox', get_template_directory_uri().'/js/lightbox.min.js', array(), SCRIPTVERSION , true); //Лайтбокс
		wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array(), SCRIPTVERSION , true); //Слайдер

		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), SCRIPTVERSION , true); // Подключение основного скрипта в самом конце
		
		
		wp_localize_script( 'main', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
	}

	add_action( 'wp_ajax_sendTO', 'sendTO' );
	add_action( 'wp_ajax_nopriv_sendTO', 'sendTO' );

	function sendTO() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			$headers = array(
				'From: '.COMPANY_NAME.' '.MAIL_RESEND,
				'content-type: text/html',
			);

			parse_str($_REQUEST["alldata"], $param);

			$message_telegram = 'Заказ на оформление ТО c сайта ' . $_SERVER['SERVER_NAME'] 
					."\nТелефон: ".$param["pers_tel"]
					."\nФамилия: ".$param["lastname"]
					."\nИмя: ".$param["name"]
					."\nОтчество: ".$param["patronymic"]
					."\nПочта: ".$param["pers_mail"]
					."\nМарка авто: ".$param["doc_marka"]
					."\nМодель авто: ".$param["doc_model"]
					."\nГод выпуска: ".$param["doc_godvip"]
					."\nМарка шин: ".$param["shini"]
					."\nПробег: ".$param["probeg"]
					."\nКатегория ТС: ".$param["doc_cat_ts"]
					."\nГосномер: ".$param["gosnomer"]
					."\nVIN: ".$param["doc_vin"]
					."\nНомер кузова: ".$param["doc_kuzov"]
					."\nНомер рамы: ".$param["doc_hassi"]
					."\nТип документа: ".$param["type_doc"]
					."\nНомер документа: ".$param["doc_seria"]." ".$param["doc_number"]
					."\nДата выдачи документа: ".$param["doc_data_v"]
					."\nКем выдан документ: ".$param["doc_org"]
					."\nМаксимальная масса: ".$param["doc_r_massa"]
					."\nМасса без нагрузки: ".$param["doc_m_massa"]
					."\nТип ТС: ".$param["type_ts"]
					."\nТип топлива: ".$param["toplivo"]
					."\nГород: ".$param["pers_city"]
					."\nКомментарий: ".$param["pers_message"];
			message_to_telegram($message_telegram);
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		
		if (wp_mail(carbon_get_theme_option('to_main_sendmail'), 'Заказ на оформление ТО', 
					"<strong>Телефон:</strong> ".$param["pers_tel"]
					."<br/><strong>Фамилия:</strong> ".$param["lastname"]
					."<br/><strong>Имя:</strong> ".$param["name"]
					."<br/><strong>Отчество:</strong> ".$param["patronymic"]
					."<br/><strong>Почта:</strong> ".$param["pers_mail"]
					."<br/><strong>Марка авто:</strong> ".$param["doc_marka"]
					."<br/><strong>Модель авто:</strong> ".$param["doc_model"]
					."<br/><strong>Год выпуска:</strong> ".$param["doc_godvip"]
					."<br/><strong>Марка шин:</strong> ".$param["shini"]
					."<br/><strong>Пробег:</strong> ".$param["probeg"]
					."<br/><strong>Категория ТС:</strong> ".$param["doc_cat_ts"]
					."<br/><strong>Госномер:</strong> ".$param["gosnomer"]
					."<br/><strong>VIN:</strong> ".$param["doc_vin"]
					."<br/><strong>Номер кузова:</strong> ".$param["doc_kuzov"]
					."<br/><strong>Номер рамы:</strong> ".$param["doc_hassi"]
					."<br/><strong>Тип документа:</strong> ".$param["type_doc"]
					."<br/><strong>Номер документа:</strong> ".$param["doc_seria"]." ".$param["doc_number"]
					."<br/><strong>Дата выдачи документа:</strong> ".$param["doc_data_v"]
					."<br/><strong>Кем выдан документ:</strong> ".$param["doc_org"]
					."<br/><strong>Максимальная масса:</strong> ".$param["doc_r_massa"]
					."<br/><strong>Масса без нагрузки:</strong> ".$param["doc_m_massa"]
					."<br/><strong>Тип ТС:</strong> ".$param["type_ts"]
					."<br/><strong>Тип топлива:</strong> ".$param["toplivo"]
					."<br/><strong>Город:</strong> ".$param["pers_city"]
					."<br/><strong>Комментарий:</strong> ".$param["pers_message"]
					
					, $headers))
				wp_die($message_telegram);
			else wp_die( 'Error!', '', 403 );;


		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}
	
	
	/* Отправка почты
		
			$headers = array(
				'From: Сайт '.COMPANY_NAME.' <MAIL_RESEND>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			$adr_to_send = <Присваиваем поле карбона c адресами для отправки>;
			$mail_content = "<Тело письма>";
			$mail_them = "<Тема письма>";

			if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
				wp_die(json_encode(array("send" => true )));
			}
			else {
				wp_die( 'Ошибка отправки!', '', 403 );
			}
	*/
	
	
	/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/
	
?>