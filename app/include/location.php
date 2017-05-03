<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h2 class="main"><span>как нас найти</span></h2>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-5 col-lg-push-7 col-md-5 col-md-push-7 col-sm-12 col-xs-12">
		<div class="ah-location-info">
			<div class="ah-location-table">
				<div class="ah-location-tabcell">
					<span class="ah-loctabcell-span"></span>
				</div>
				<div class="ah-location-tabcell1">
					<span class="ah-loctabcell1-span">192012 Санкт-Петербург,</span>
					<span class="ah-loctabcell1-span1">пр. Обуховской обороны 271 лит. а<br>Бизнес-центр «Обухов-Центр»<br>офис 1020</span>
				</div>
			</div>
			<div class="ah-location-info1">
				<div class="ah-location-info1box1">
					<span class="ah-loctabcell1-span1 ah-locinfo-span1">Телефон: 7 (812) 999-97-77</span>
					<span class="ah-loctabcell1-span1 ah-locinfo-span2">E-mail: info@interJus.com</span>
				</div>
				<div class="ah-location-info1box2">
					<a href="#" class="ah-location-info1box2-link">Онлайн заявка</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-7 col-lg-pull-5 col-md-7 col-md-pull-5 col-sm-12 col-xs-12">
		<div class="ah-location-mapbox">
			<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			<script type="text/javascript">
				ymaps.ready(init);
				 var myMap,
				     myPlacemark;

				 function init(){     
				     myMap = new ymaps.Map("ah-map", {
				         center: [59.851245,30.479254],
				         zoom: 16,
				         controls: []
				     });

				    myMap.behaviors.disable('scrollZoom'); 

				     var myPlacemark = new ymaps.Placemark([59.851245,30.479254], {}, {
				      iconLayout: 'default#image',
				      iconImageHref: '/img/ah-bolun.png',
				      iconImageSize: [20, 37],
				      iconImageOffset: [-3, -42]
				  });


				     myMap.geoObjects.add(myPlacemark);
				 }
			</script>
			<div id="ah-map"></div>
		</div>
	</div>
</div>