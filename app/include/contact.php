<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h2 class="main"><span>КОНТАКТЫ</span></h2>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="tabs">
			<ul class="ah-contact-list">
				<li class="ah-tab1 ah-active"><a href="#tabs-1">контакты</a></li>
				<li class="ah-tab2"><a href="#tabs-2">Ответы на часто задаваемые вопросы</a></li>
				<li class="ah-tab3"><a href="#tabs-3">Вакансии</a></li>
			</ul>
			<div class="tabs-container">
				<div id="tabs-1">
					<div class="ah-tab1-wrapp">
						<div class="ah-location-info">
							<div class="ah-location-table ah-contact-table">
								<div class="ah-location-tabcell ah-contact-tabcell">
									<span class="ah-loctabcell-span"></span>
								</div>
								<div class="ah-location-tabcell1">
									<span class="ah-loctabcell1-span">192012 Москва,</span>
									<span class="ah-loctabcell1-span1">Ул. Красина д. 19<br>Метро: Краснопресненская, Баррикадная</span>
								</div>
							</div>
							<div class="ah-location-info1">
								<div class="ah-location-info1box1">
									<span class="ah-loctabcell1-span1 ah-locinfo-span1">Телефон: 7 (812) 999-97-77</span>
									<span class="ah-loctabcell1-span1 ah-locinfo-span2">E-mail: info@interJus.com</span>
								</div>
							</div>
						</div>
					</div>
					<span class="ah-tab1-title">Как добраться</span>
					<span class="ah-tab1-subtitle">От ст.  м. Баррикадная:</span>
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
							<div class="ah-location-mapbox">
								<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
								<script type="text/javascript">
									ymaps.ready(init);
									 var myMap1,
									     myPlacemark1;

									 function init(){     
									     myMap1 = new ymaps.Map("ah-map1", {
									         center: [59.851245,30.479254],
									         zoom: 16,
									         controls: []
									     });

									    myMap1.behaviors.disable('scrollZoom'); 

									     var myPlacemark1 = new ymaps.Placemark([59.851245,30.479254], {}, {
									      iconLayout: 'default#image',
									      iconImageHref: '/img/ah-bolun.png',
									      iconImageSize: [20, 37],
									      iconImageOffset: [-3, -42]
									  });


									     myMap1.geoObjects.add(myPlacemark1);
									 }
								</script>
								<div id="ah-map1"></div>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

						</div>
					</div>
				</div>
				<div id="tabs-2">
					<p>222Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
				</div>
				<div id="tabs-3">
					<p>333Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
				</div>
			</div>
		</div>
	</div>
</div>