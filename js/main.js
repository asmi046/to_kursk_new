// Функция верификации e-mail
function isEmail(email) {
	var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return regex.test(email);
}

jQuery(document).ready(function() {
	
	// Сразу маскируем все поля телефонов
	var inputmask_phone = {"mask": "+7(999)999-99-99"};
	jQuery("input[type=tel]").inputmask(inputmask_phone);

	var mask_gn = {"mask_gn": "999"};
	jQuery(".gosnomer").inputmask("A999AA99[9]");

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
		var per_rus =/^([а-яё]+|[А-Я]+)$/i;
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
		var per_rus =/^([а-яё]+|[А-Я]+)$/i;
		var per_cur =/^([0-9]+)$/i;
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
		if (gosnomer.val().indexOf('_') >= 0 ) {
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

