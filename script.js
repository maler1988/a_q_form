$(document).ready(function () {

		$.validator.addMethod('phone', function (value, element) {
			return this.optional(element) || /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test(value);
		});

		$.validator.addMethod('subject', function (value, element) {	// Это попытка написать пользовательский метод
			console.log(value);
			console.log(element);

			return true;
		});


		//Валидация и отправка данных формы
		$("#message-form").validate({
			rules: {
				PHONE_NUMBER: {
					required: true,
					phone: true,
				},

				SUBJECT: {
					required: true,
					subject: true,
				}
			},

			messages: {
				PHONE_NUMBER: {
					phone: 'Формат должен быть +7 (000) 000-00-00',
				},

				SUBJECT: {
					subject: 'Укажите тему сообщения',
				}

			},

		 submitHandler: function(form) {

			function showResponseMessageForm(responseText, statusText, xhr, $form)  { 

				$("#message-form input[type='text']").each(function(){
					$(this).val("");	//Очищаем значения всех полей формы
				});

				$("#message-form textarea").each(function(){
					$(this).val("");	//Очищаем значения всех полей формы
				});

				//Выводим сообщение об успехе
				$("#form-send-success").click();

			}

			var options = {
				success: showResponseMessageForm
			};

			$(form).ajaxSubmit(options);

		 }

		});
		
		
		//Записываем в скрытое поле формы, выбранное значение из красивого выпадающего списка
			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-1').removeClass('active');
				});

			});

			//Маска телефонного номера		
			$("#message-form #phone_number").mask("+7 (999) 999-99-99");
			
			//Модальное окно
			$('.btn-popup').fancybox();

			//Закрыть модельное окно
			$('.popup .btn-close').on('click', function (e) {
				e.preventDefault();
				$.fancybox.close();
			});
	
	
		
});