<div class="add-q">
	<div class="add-q__title">
		<h2>Задайте вопрос</h2>
			<p>
				Вы можете задать свой вопрос 
				специалистам «Омнитрейд» и ответ 
				будет опубликован на этой странице
			</p>
	</div>
				<div class="add-q__main">
					<form id="message-form" novalidate="novalidate" method="post" action="<?=$APPLICATION->GetCurPage();?>" >
						<div class="form__row">
							<div class="form__row__title">
								<p>Ваше имя:</p>
							</div>
							<div class="form__row__item">
								<div class="input">
									<input type="text" data-msg-required="Ввведите  имя" data-rule-required="true" name="USER_NAME" placeholder="Иван Иванов">
								</div>
							</div>
						</div>
						<div class="form__row">
							<div class="form__row__title">
								<p>E-mail:</p>
							</div>
							<div class="form__row__item">
								<div class="input">
									<input type="text" data-msg-email="Введите валидный email адрес" data-msg-required="Ввведите email адрес" data-rule-email="true" data-rule-required="true" name="USER_EMAIL" placeholder="kostya@mail.ru">
								</div>
							</div>
						</div>
						<div class="form__row">
							<div class="form__row__title">
								<p>Номер телефона:</p>
							</div>
							<div class="form__row__item">
								<div class="input">
									<input type="text" id="phone_number" data-msg-required="Ввведите телефон" data-rule-required="true" name="PHONE_NUMBER" placeholder="+7 (999) 999-99-99">
								</div>
							</div>
						</div>

						<div class="form__row">
							<div class="form__row__title">
								<p>Тема вопроса:</p>
							</div>
							<div class="form__row__item">
								<div class="input">


									<div id="dd" class="wrapper-dropdown-1" tabindex="1">
										<span>Обязательно укажите тему</span>
									    <ul class="dropdown" tabindex="1" >
									    	<? foreach ($arResult["QUESTION_SUBJECTS"] as $sKey => $Section) { ?>
									        	<li sectionId="<?=$Section["ID"]?>" >
									        		<a href="#" >
									        			<?=$Section["NAME"];?>
									        		</a>
									        	</li>
									        <? } ?>
									    </ul>
									</div>
									<input id="subject-value" type="hidden"  name="SUBJECT" value="" data-msg-required="Укажите тему вопроса" data-rule-required="true" > 
								</div>
							</div>
						</div>

						<div class="form__row">
							<div class="form__row__title">
								<p>Ваш вопрос:</p>
							</div>
							<div class="form__row__item">
								<div class="textarea">
									<textarea placeholder="Хотел бы задать вопрос" id="" name="QUESTIONS" ></textarea>
								</div>
							</div> 
						</div>


						<div class="form__btns">
						<input type="submit" name="submit" class="btn btn_red" value="Задать вопрос">
						</div>
						<a id="form-send-success" class="btn-popup fancybox.ajax" href="/kontakty/soobshchenie-uspeshno-otpravleno.php?ajax=Y">&nbsp;</a>
					</form>
				</div>
			</div>
