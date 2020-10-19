// Функция верификации e-mail
function isEmail(email) {
	var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return regex.test(email);
}

//Регуларные выражения
var per_rus =/^([а-яё]+|[А-Я]+)$/i;
var per_cur =/^([0-9]+)$/i;

jQuery(document).ready(function() {
	
	// Сразу маскируем все поля телефонов
	var inputmask_phone = {"mask": "+7(999)999-99-99"};
	jQuery("input[type=tel]").inputmask(inputmask_phone);

	var mask_gn = {"mask_gn": "999"};
	jQuery(".gosnomer").inputmask("A999AA99[9]");
	jQuery(".doc_data_v").inputmask("99.99.9999");
	// Типовой скрипт для отправки сообщений на почту


	jQuery(".location").click(function(e){ 
		e.preventDefault();
		console.log(111);
		jQuery("#popupTO").arcticmodal();
	});

	jQuery(".location-2").click(function(e){ 
		e.preventDefault();
		console.log(111);
		jQuery("#popupOS").arcticmodal();
	});

	function toStapIndex(index) {
		jQuery(".control-panel__item").removeClass("current");
		jQuery(".input-panel__step").removeClass("active");
		jQuery("#control-panel_"+index).addClass("current");
		jQuery("#input-panel__step_"+index).addClass("active");
	}

	jQuery("#toStep2").click(function(e){ 
		e.preventDefault();
		
		let flag = true;

		let lastname = jQuery(".request-form-to .lastname");
		if (!per_rus.test(lastname.val())) {
			jQuery(lastname).parent().addClass("error");
			flag = false;
		} else {
			jQuery(lastname).parent().removeClass("error");
		}

		let name = jQuery(".request-form-to .name");
		if (!per_rus.test(name.val())) {
			jQuery(name).parent().addClass("error");
			flag = false;
		} else {
			jQuery(name).parent().removeClass("error");
		}

		let patronymic = jQuery(".request-form-to .patronymic");
		if (!per_rus.test(patronymic.val())) {
			jQuery(patronymic).parent().addClass("error");
			flag = false;
		} else {
			jQuery(patronymic).parent().removeClass("error");
		}

		if (flag) {
			toStapIndex(2);
		}
	});
	
	jQuery("#bacStep1").click(function(e){ 
		e.preventDefault();
		toStapIndex(1);
	});


	jQuery("#toStep3").click(function(e){ 
		e.preventDefault();
		let flag = true;

		let shini = jQuery(".request-form-to .shini");
		if (shini.val() == "") {
			jQuery(shini).parent().addClass("error");
			flag = false;
		} else {
			jQuery(shini).parent().removeClass("error");
		}

		let probeg = jQuery(".request-form-to .probeg");
		if (!per_cur.test(probeg.val())) {
			jQuery(probeg).parent().addClass("error");
			flag = false;
		} else {
			jQuery(probeg).parent().removeClass("error");
		}

		let toplivo = jQuery(".request-form-to .toplivo");
		if (!per_rus.test(toplivo.val())) {
			jQuery(toplivo).parent().addClass("error");
			flag = false;
		} else {
			jQuery(toplivo).parent().removeClass("error");
		}

		let gosnomer = jQuery(".request-form-to .gosnomer");
		console.log(gosnomer.val().indexOf('_'));
		console.log(gosnomer.val());
		if ((gosnomer.val() == "" )||(gosnomer.val().indexOf('_') >= 0 )) {
			jQuery(gosnomer).parent().addClass("error");
			flag = false;
		} else {
			jQuery(gosnomer).parent().removeClass("error");
		}

		if (flag) {
			toStapIndex(3);
		}
	});
	
	jQuery("#bacStep2").click(function(e){ 
		e.preventDefault();
		toStapIndex(2);
	});

	
	jQuery("#toStep4").click(function(e){ 
		e.preventDefault();
		
		let flag = true;

		let doc_seria = jQuery(".request-form-to .doc_seria");
		if (doc_seria.val() == "") {
			jQuery(doc_seria).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_seria).parent().removeClass("error");
		}

		let doc_number = jQuery(".request-form-to .doc_number");
		if (doc_number.val() == "") {
			jQuery(doc_number).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_number).parent().removeClass("error");
		}

		let doc_org = jQuery(".request-form-to .doc_org");
		if (doc_org.val() == "") {
			jQuery(doc_org).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_org).parent().removeClass("error");
		}

		let doc_data_v = jQuery(".request-form-to .doc_data_v");
		if ((doc_number.val() == "" )||(doc_number.val().indexOf('_') >= 0 )) {
			jQuery(doc_data_v).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_data_v).parent().removeClass("error");
		}

		let doc_marka = jQuery(".request-form-to .doc_marka");
		if (doc_marka.val() == "" ) {
			jQuery(doc_marka).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_marka).parent().removeClass("error");
		}

		let doc_model = jQuery(".request-form-to .doc_model");
		if (doc_model.val() == "" ) {
			jQuery(doc_model).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_model).parent().removeClass("error");
		}

		let doc_vin = jQuery(".request-form-to .doc_vin");
		if (doc_vin.val() == "" ) {
			jQuery(doc_vin).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_vin).parent().removeClass("error");
		}

		let doc_hassi = jQuery(".request-form-to .doc_hassi");
		if (doc_hassi.val() == "" ) {
			jQuery(doc_hassi).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_hassi).parent().removeClass("error");
		}

		let doc_kuzov = jQuery(".request-form-to .doc_kuzov");
		if (doc_kuzov.val() == "" ) {
			jQuery(doc_kuzov).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_kuzov).parent().removeClass("error");
		}

		let doc_godvip = jQuery(".request-form-to .doc_godvip");
		if (doc_godvip.val() == "" ) {
			jQuery(doc_godvip).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_godvip).parent().removeClass("error");
		}

		let doc_r_massa = jQuery(".request-form-to .doc_r_massa");
		if (doc_r_massa.val() == "" ) {
			jQuery(doc_r_massa).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_r_massa).parent().removeClass("error");
		}

		let doc_m_massa = jQuery(".request-form-to .doc_m_massa");
		if (doc_m_massa.val() == "" ) {
			jQuery(doc_m_massa).parent().addClass("error");
			flag = false;
		} else {
			jQuery(doc_m_massa).parent().removeClass("error");
		}

		if (flag) {
			toStapIndex(4);
		}
	});
	
	jQuery("#bacStep2").click(function(e){ 
		e.preventDefault();
		toStapIndex(2);
	});
	


	jQuery("#sendTOform").click(function(e){ 
		e.preventDefault();
		
		let flag = true;

		let pers_tel = jQuery(".request-form-to .pers_tel");
		if ((pers_tel.val() == "" )||(pers_tel.val().indexOf('_') >= 0 )) {
			jQuery(pers_tel).parent().addClass("error");
			flag = false;
		} else {
			jQuery(pers_tel).parent().removeClass("error");
		}

		let pers_mail = jQuery(".request-form-to .pers_mail");
		if ((pers_mail.val() == "")||(!isEmail(pers_mail.val()))) {
			jQuery(pers_mail).parent().addClass("error");
			flag = false;
		} else {
			jQuery(pers_mail).parent().removeClass("error");
		}

		let pers_city = jQuery(".request-form-to .pers_city");
		if (!per_rus.test(pers_city.val())) {
			jQuery(pers_city).parent().addClass("error");
			flag = false;
		} else {
			jQuery(pers_city).parent().removeClass("error");
		}

		let policy_checed = jQuery(".request-form-to .policy_checed");
		if (!jQuery(policy_checed).is(':checked')) {
			jQuery(policy_checed).parent().siblings(".consent-mess").addClass("error");
			flag = false;
		} else {
			jQuery(policy_checed).parent().siblings(".consent-mess").removeClass("error");
		}

		if (flag) {
			console.log("COOL");
		}
	});

	jQuery("#bacStep3").click(function(e){ 
		e.preventDefault();
		toStapIndex(3);
	});

	jQuery("#clsubmit").click(function(){ 

		e.preventDefault();

		var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'send_mail',		
						nonce: allAjax.nonce,
						formsubject: jQuery("#formsubject").val(),
					}
					
		);
				
				
		jqXHR.done(function (responce) {  //Всегда при удачной отправке переход для страницу благодарности
					document.location.href = 'https://osagoprofi.su/stranica-blagodarnosti';	
		});
				
		jqXHR.fail(function (responce) {
					jQuery('#messgeModal #lineMsg').html("Произошла ошибка. Попробуйте позднее.");
					jQuery('#messgeModal').arcticmodal();
		});
	});
});

