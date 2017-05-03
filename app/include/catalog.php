<div class="az-catalog">
	<h1 class="main"><span>Каталог недвижимости</span></h1>
	<div class="az-filter">
		<div class="az-filter-col1">
			<h3 class="az-select-title">Страна</h3>
			<div class="az-select-wrap">
				<select class="az-select">
				  <option>Франция</option>
				  <option>Германия</option>
				  <option>Польша</option>
				  <option>Англия</option>
				  <option>Финляндия</option>
				</select>
			</div>
			<h3 class="az-select-title">Город</h3>
			<div class="az-select-wrap">
				<select class="az-select">
				  <option>Париж</option>
				  <option>Берлин</option>
				  <option>Варшава</option>
				  <option>Лондон</option>
				  <option>Хельсинки</option>
				</select>
			</div>
		</div>
		<div class="az-filter-col2">
			<h3 class="az-col2-title">Тип недвижимости</h3>
			<h4 class="az-col2-subtitle">коммерческая</h4>
			<div class="az-radio-wrap">
				<input type="radio" name="radio1" id="radio1">
				<label for="radio1">Коммерческая недвижимость</label>
			</div>
			<h4 class="az-col2-subtitle">некоммерческая</h4>
			<div class="az-radio-wrap">
				<input type="radio" name="radio1" id="radio2">
				<label for="radio2">Квартиры, апартаменты</label>
			</div>
			<div class="az-radio-wrap">
				<input type="radio" name="radio1" id="radio3">
				<label for="radio3">Дома, виллы, коттеджи</label>
			</div>
			<div class="az-radio-wrap">
				<input type="radio" name="radio1" id="radio4">
				<label for="radio4">Таунхаус</label>
			</div>
		</div>
		<div class="az-filter-col3">
			<h3 class="az-col3-title">Цена</h3>
			<div class="clearfix az-range">
				<div class="az-col3-left">
					<span class="az-span-filter">От</span>
					<input type="text" id="minCost" value="0"/>
					<input type="text" id="startCost" value="500" class="az-DistSpan"/>
				</div>
				<div class="az-col3-right">
					<span class="az-span-filter">До</span>
					<input type="text" id="maxCost" value="100000"/>
					<input type="text" id="endCost" value="50000" class="az-DistSpan"/>
				</div>
			</div>
			<div class="az-range-slider">
				<div id="az-slider"></div>
			</div>
		</div>
		<div class="az-filter-col4">
			<div class="az-filter-submit">
				<input type="submit" value="Применить" class="az-submit">
				<input type="reset" value="Сбросить" class="az-reset">
			</div>
		</div>
	</div>
</div>