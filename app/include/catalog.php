<div class="az-catalog">
	<h1 class="main"><span>Каталог недвижимости</span></h1>
	<div class="az-filter">
		<div class="az-filter-col1">
			<h3 class="az-select-title">Страна</h3>
			<div class="az-select-wrap">
				<select class="az-selectpicker">
				  <option>Mustard</option>
				  <option>Ketchup</option>
				  <option>Relish</option>
				</select>
			</div>
			<h3 class="az-select-title">Город</h3>
			<div class="az-select-wrap">
				<select class="az-selectpicker">
				  <option>Mustard</option>
				  <option>Ketchup</option>
				  <option>Relish</option>
				</select>
			</div>
		</div>
		<div class="az-col2">
			<h3 class="az-col2-title">Тип недвижимости</h3>
			<h4>коммерческая</h4>
			<div class="az-radio-wrap">
				<input type="radio" name="radio1" id="">
				<label>Коммерческая недвижимость</label>
			</div>
			<h4>некоммерческая</h4>
			<div class="az-radio-wrap">
				<input type="radio" name="radio1" id="">
				<label>Квартиры, апартаменты</label>
			</div>
			<div class="az-radio-wrap">
				<input type="radio" name="radio1" id="">
				<label>Дома, виллы, коттеджи</label>
			</div>
			<div class="az-radio-wrap">
				<input type="radio" name="radio1" id="">
				<label>Таунхаус</label>
			</div>
		</div>
		<div class="az-col3">
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
				<div id="az-slider2"></div>
			</div>
		</div>
		<div class="az-col4">
			<div class="az-filter-submit">
				<input type="submit" value="Найти">
				<input type="reset" value="сбросить фильтр">
			</div>
		</div>
	</div>
</div>