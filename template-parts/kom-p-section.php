<section class="kom-p">
	<div class="inner">
		<h1>Сформировать комерческое предложение</h1>
		<form action="" class="kom-p__form">
			<div class="form-block">
				<label for="email">E-mail</label>
				<input type="email" id="email" name="email" placeholder="E-mail" value="<?echo $_REQUEST["email"]?>">
			</div>
			<div class="form-block">
				<label for="category">Категория</label>
				<input type="text" name="category" id="category" placeholder="Категория" value="<?echo $_REQUEST["category"]?>">
			</div>
			<div class="form-block">
				<label for="marka">Марка</label>
				<input type="text" name="marka" id="marka" placeholder="Марка" value="<?echo $_REQUEST["marka"]?>">
			</div>
			<div class="form-block">
				<label for="model">Модель</label>
				<input type="text" name="model" id="model" placeholder="Модель" value="<?echo $_REQUEST["model"]?>">
			</div>
			<div class="form-block">
				<label for="number">Госномер</label>
				<input type="text" name="number" id="number" placeholder="Госномер" value="<?echo $_REQUEST["number"]?>">
			</div>
			<div class="form-block">
				<label for="power">Мощность ЛС</label>
				<input type="text" name="power" id="power" placeholder="Мощность ЛС" value="<?echo $_REQUEST["power"]?>">
			</div>
			<div class="form-block">
				<label for="price">Стоимость страховки</label>
				<input type="text" name="price" id="price" placeholder="Стоимость страховки">
			</div>
			<button type="submit" class="agent-form-cooper__btn">Сформировать</button>
		</form>
	</div>
</section>