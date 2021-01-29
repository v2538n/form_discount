<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="form-discount-wrap">
	<div class="form-discount">
		<div class="form-discount__left-side" style="background: url('<?=$templateFolder . '/images/form_back.jpg';?>') no-repeat;"></div>
		<div class="form-discount__right-side">
			<div class="close-form"></div>
			<div class="form-discount__header">На кабинеты руководителей скидка <span>до 20%</span></div>
			<div class="form-discount__text" id="form-discount__about">когда вы оставите заявку в этом окне, мы поможем вам подобрать идеальный для вас вариант и рассчитаем <span>персональную скидку</span></div>
			<div class="form-discount__text" id="form-discount__result" style="display: none;">Спасибо , с вами свяжутся в течении 3 минут</div>
			<form action="<?=$templateFolder . '/ajax.php';?>" method="post" id="form-discount">
				<input type="text" name="name" placeholder="Введите ваше имя" required autocomplete="off">
				<input type="tel" name="phone" placeholder="Введите ваш телефон" required autocomplete="off">
				<input type="hidden" name="send" value="Y">
				<input type="submit" value="Отправить" class="form-discount__button" id="formDiscount">
			</form>
		</div>
	</div>
</div>