<?php
include 'header.php'; ?>
    
<!-- Felső kattintható galéria Carousel
================================================== -->
<div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#homeCarousel" data-slide-to="1"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="assets/images/slider/0.jpg" alt="">
			<div class="container">
				<div class="carousel-caption">
					<h2 class="carousel-title bounceInDown animated slow">Istentisztelet minden vasárnap 10 órától</h2>
					<h4 class="carousel-subtitle bounceInUp animated slow ">Békásmegyeri gyülekezetünkben</h4>
					<a href="#alkalom" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow"> Részletek itt</a>
				</div>
				<!-- /.carousel-caption -->
			</div>
		</div>
		<!-- /.item -->
		<div class="item ">
			<img src="assets/images/slider/3.jpg" alt="">
			<div class="container">
				<div class="carousel-caption">
					<h2 class="carousel-title bounceInDown animated slow">Istentisztelet minden vasárnap 10 órától</h2>
					<h4 class="carousel-subtitle bounceInUp animated slow ">Békásmegyeri gyülekezetünkben</h4>
					<a href="#alkalom" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow"> Részletek itt</a>
					<!--h2 class="carousel-title bounceInDown animated slow">Minden héten két korcsoport számára ifik</h2>
					<h4 class="carousel-subtitle bounceInUp animated slow">6-tól 13, és 18-tól 22 éveseknek</h4>
					<a href="#alkalom" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow">Részletek itt</a-->
				</div>
				<!-- /.carousel-caption -->
			</div>
		</div>
		<!-- /.item -->
	</div>
	<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
		<span class="fa fa-angle-left" aria-hidden="true"></span>
		<span class="sr-only">Előző</span>
	</a>
	<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
		<span class="fa fa-angle-right" aria-hidden="true"></span>
		<span class="sr-only">Következő</span>
	</a>
</div>
<!-- /.carousel -->


<div class="section-home about-us fadeIn animated">
	<div class="container">
		<div class="row">
			<a href="#gyuli">
				<div class="col-md-3 col-sm-6">
					<div class="about-us-col">
						<div class="col-icon-wrapper"> <img src="assets/images/icons/koszonto.png" style="max-height: 80px;" alt="koszonto"> </div>
						<h3 class="col-title">Köszöntő</h3>
						<div class="col-details">
							<p class="text-justify"><br>Üdvözlünk! Egy kis, keresztény gyülekezet vagyunk Békásmegyer közepén. Nézz körül oldalunkon, és ha még nem tetted, egyszer feltétlenül ugorj be hozzánk az Istentiszteletre! :)</p>
						</div>
					</div>
				</div>
			</a>
			<a href="#alkalom">
				<div class="col-md-3 col-sm-6">
					<div class="about-us-col">
						<div class="col-icon-wrapper"> <img src="assets/images/icons/alkalmaink.png" style="max-height: 80px;" alt=""> </div>
						<h3 class="col-title">Alkalmaink</h3>
						<div class="col-details">
							<br>
							<ul style="margin-left: -20px;">
								<li>
									</strong> <i><a href="#alkalom"> Vasárnap 10 órától kétnyelvű Istentisztelet</a></i>
								</li>
								<li>
									</strong> <i><a href="#alkalom"> Vasárnap 10 órától Vasárnapi Iskola és gyermekfelügyelet</a></i>
								</li>
								<li>
									</strong> <i><a href="#alkalom"> Csütörtök 18 órától angol nyelvű Biblia tanulmányozás</a></i>
								</li>
								<li>
									</strong> <i><a href="#alkalom"> Havonta Női alkalom</a></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</a>
			<a href="#cim">
				<div class="col-md-3 col-sm-6">
					<div class="about-us-col">
						<div class="col-icon-wrapper"> <img src="assets/images/icons/cimunk.png" style="max-height: 80px;" alt=""> </div>
						<h3 class="col-title">Címünk</h3>
						<div class="col-details">
							<p class="text-justify">
								<br>1039 Bp., Madzsar József u. 13.
								<br>Békásmegyeren a piachoz közeli zöld szolgáltatóházban (bejárat a Bálint György utca felől) találsz minket. Az Árpád híd M-tól induló 34-es busszal is könnyen eljuthatsz hozzánk ;)
							</p>
						</div>
					</div>
				</div>
			</a>
			<div class="col-md-3 col-sm-6">
				<div class="about-us-col">
					<div class="col-icon-wrapper"> <img src="assets/images/icons/frissesropogos.png" style="max-height: 80px;" alt=""> </div>
					<h3 class="col-title">Friss és ropogós</h3>
					<div class="col-details">
						<p>
							<br><strong>Hirdetés: </strong> 
							<br><i><a href="#hir1"> Pünkösdi Csendeshétvége Vajtán</a></i>
							<br><i><a href="#hir2"> Jún. 5-én az Istentisztelet elmarad</a></i><br>
							<!--<br><strong>Hanganyag: </strong> <i><a href="#hangok"> Vasárnapi IT</a></i> -->
							<!--<br><strong>Képek: </strong> <i><a href="" data-toggle="modal" data-target="#csh20170603"> Tavaszi CSH 2017</a></i> -->
							<a href="#media">
								<i>
									<br>
									<br>Média anyagokat ide kattintva találsz.
									<br>
								</i>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Hirdetések -->
<div class="section-home our-causes animate-onscroll fadeIn">
	<div class="container" id="hirdetesek">
		<h2 class="title-style-1">Hirdetések <span class="title-under"></span></h2>
		<div class="panel panel-primary" id="hir1">
			<div class="panel-heading">
				<h3 class="panel-title">Pünkösdi Csendeshétvége Vajtán</h3>
			</div>
			<div class="panel-body">
				A 2022. évi Pünkösdi Csendeshétvégét Vajtán tartjuk június 3 (péntek) - június 6. (hétfő) között.<br>
				A jelentkezés lezárult.<br>
				<ul>
					<li><a target="blank" href="https://docs.google.com/document/d/1GbyWDW5AD9aO4t8pLI0DEn6N4IZPU9UlGte8XkN1PH4/edit?usp=sharing">További információk</a></li>
					<li><a target="blank" href="https://docs.google.com/document/d/1xK6wssBQxeAy8Z1QZcnsG6PF-GNLyMly/edit?usp=sharing&ouid=117398403430155988672&rtpof=true&sd=true">Vajta házirend</a></li>
				</ul>
				==========================<br>
				We plan the Church Retreat in 2022. on the Pentecostal Holiday between 3th June - 6th June at Vajta.<br>
				The application is closed.<br>
				<ul>
					<li><a target="blank" href="https://docs.google.com/document/d/1GbyWDW5AD9aO4t8pLI0DEn6N4IZPU9UlGte8XkN1PH4/edit?usp=sharing">For more information</a></li>
				</ul>
			</div>
		</div>
		<div class="panel panel-primary" id="hir2">
			<div class="panel-heading">
				<h3 class="panel-title">Június 5-én az Istentisztelet elmarad</h3>
			</div>
			<div class="panel-body">
				Június 5-én Gyülekezetün Vajtán táborozik, az Istentisztelet elmarad.
				<br>
				<!-- <ul>
					<li><a target="blank" href="https://www.facebook.com/events/s/fordulat-ferfi-konferencia/1122024325216526/">További információk</a></li>
					<li><a target="blank" href="https://docs.google.com/forms/d/e/1FAIpQLScaY6hbSQyeld4aRsN0807e9Ei9mkX8xrYK8c2Di6kChgt-qQ/viewform?fbclid=IwAR1JvRmK5bZHaWzHCe4qHatCzprDkfJjKGIjUrPbZvwiTMMU3l4HxmJ9Fu0">Jelentkezési lap</a></li>
				</ul> -->
			</div>
		</div>
		<!--div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Új hír cím</h3>
			</div>
			<div class="panel-body">
			Új hír szöveg
			</div>
		</div-->
	</div>
</div>
<!-- Hirdetések vége -->

<!-- Naptár -->
<div class="section-home our-causes animate-onscroll fadeIn">
	<div class="container" id="naptar">
		<h2 class="title-style-1">Naptár <span class="title-under"></span></h2>
		<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;wkst=2&amp;hl=hu&amp;bgcolor=%231f76bd&amp;src=uh01l793tb1h98bps87sdai0f0%40group.calendar.google.com&amp;color=%2304365f&amp;ctz=Europe%2FBudapest" style="border-width:0; border-radius: 6px; width: 100%; height: 500px" ></iframe>
	</div>
</div>
<!-- Naptár vége -->

<!-- Gyülekezetünk -->
<div class="section-home our-causes animate-onscroll fadeIn">
	<div class="container" id="gyuli">
		<h2 class="title-style-1">Gyülekezetünk <span class="title-under"></span></h2>
		<div class="col-md-12 fadeIn animate-onscroll">
			<div class="panel-group" role="tablist" aria-multiselectable="true">
				<!--amennyiben itt van egy id=accordion záródik auto-->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading1_1" data-toggle="collapse" data-parent="#accordion" href="#collapse1_1" aria-expanded="false" aria-controls="collapse1_1">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Történetünk
						</h4>
					</div>
					<div id="collapse1_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1_1">
						<div class="panel-body">
							<p class="text-justify">
								A gyülekezetet 2003-ban alapították tradícionális hátterű keresztény fiatalok. Lelkipásztunk
								2009-től Márkus Szilárd. <br>
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading1_2" data-toggle="collapse" data-parent="#accordion" href="#collapse1_2" aria-expanded="false" aria-controls="collapse1_2">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Jelenleg
						</h4>
					</div>
					<div id="collapse1_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1_2">
						<div class="panel-body">
							<p class="text-justify">Gyülekezetünk nagy hangsúlyt fektet a családosok és a gyermekek támogatására.
								<u><a target="blank" href="https://kima.hu/">Alapítványunk</a></u> üzemeltet például keresztény bölcsődét
								<u><a target="blank" href="https://barkacsana.kima.hu/">Bárka Családi Napközi</a></u> néven. Az Istentisztelet alatt van gyermekfelügyeletet és vasárnapi
								iskolát is tartunk. Fontosnak tartjuk, hogy az ország legnagyobb lakótelepére csöppenve mécsesként világítsunk az itt élők számára.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading1_3" data-toggle="collapse" data-parent="#accordion" href="#collapse1_3" aria-expanded="false" aria-controls="collapse1_3">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Közösségi élet
						</h4>
					</div>
					<div id="collapse1_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1_3">
						<div class="panel-body">
							<p class="text-justify">
								Minden hónap utolsó vasárnapján Úrvacsorai Istentiszteletet tartunk,
								szeretetvendégséggel. Ennek során lehetőségünk van közös étkezésre és beszélgetésre,
								ismerkedésre. Évente szervezünk gyülekezeti csendes hétvégét. Emellett időnként egyéb
								programokat is szervezünk pl.: társasjátékozás, piknikezés, kirándulás, kajakozás.
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading1_4" data-toggle="collapse" data-parent="#accordion" href="#collapse1_4" aria-expanded="false" aria-controls="collapse1_4">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Hasznos linkek
						</h4>
					</div>
					<div id="collapse1_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1_4">
						<div class="panel-body">
							<ul>
								<li><a target="blank" href="https://www.facebook.com/groups/bekasigolgota/">Gyülekezetünk facebook csoportja</a></li>
								<li><a target="blank" href="https://webzegezis.hu/">Baji Péter blogja</a></li>
								<li><a target="blank" href="https://kima.hu/">Alapítványunk oldala</a></li>
								<li><a target="blank" href="https://barkacsana.kima.hu/">Bárka Családi Napközi honlapja</a></li>
								<li><a target="blank" href="https://vetitomagus.hu/">Vetítőszolgálat oldala</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading1_5" data-toggle="collapse" data-parent="#accordion" href="#collapse1_5" aria-expanded="false" aria-controls="collapse1_5">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Gyülekezet vezetősége
						</h4>
					</div>
					<div id="collapse1_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1_5">
						<div class="panel-body">
							<div class="col-lg-4">
								<div class="text-center">
									<img class="img-circle" src="assets/images/Csati.png" alt="Csatlós Gábor" width="140" height="140">
									<h4>Csatlós Gábor</h4>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="text-center">
									<img class="img-circle" src="assets/images/Szilárd.png" alt="Márkus Szilárd" width="140" height="140">
									<h4>Márkus Szilárd - <i>lelkipásztorunk</i></h4>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="text-center">
									<img class="img-circle" src="assets/images/Harold.png" alt="Harold Golden" width="140" height="140">
									<h4>Harold Golden</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Gyüli vége -->

<!-- Alkalmaink -->
<div class="section-home about-us fadeIn animated">
	<div class="container">
		<div class="row">
			<div class="row" id="alkalom">
				<h2 class="title-style-1">Alkalmaink<span class="title-under"></span></h2>
			</div>
			<div class=" col-md-3 col-sm-6"> <!--col-md-offset-3 col-sm-offset-0 col-md-3 col-sm-6-->
				<div class="about-us-col">
					<h3 class="col-title">Istentisztelet</h3>
					<div class="col-details"
						<br>
					<p class="text-justify">
						Gyülekezeti Istentiszteletünk minden vasárnap délelőtt 10 órakor kezdődik, melyet magyar és angol
						nyelven tartunk. Az alkalom elején dicsőítünk, majd Biblia tanulmányozás következik. A tanítás után
						egyéni bizonyságtételekre és imakérésre nyílik lehetőség.
					</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="about-us-col">
					<h3 class="col-title">Vasárnapi iskola</h3>
					<div class="col-details">
						<br>
						<p class="text-justify">
							Az Istentisztelet ideje alatt a gyermekeknek külön alkalom van 2 különböző korosztály számára is.
							A nagyobbaknak 6-13 éveseknek különböző kreatív foglalkozásokat tartunk, a kisebbeknek (0-5
							évesek) a játszószobában biztosítunk felügyeletet.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="about-us-col">
					<h3>Bible Chat</h3>
					<div class="col-details">
						<p class="text-justify">
							Angol nyelvű beszélgetés a Bibliáról, csütörtökönként, nem csak hívőknek!
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="about-us-col">
					<h3>Női alkalom</h3>
					<div class="col-details">
						<p class="text-justify">
							Beszélgetős alkalom közös ebéddel hölgyeknek, havi rendszerességgel, a vasárnapi Istentisztelet
							után. Az aktuális dátumot és helyszínt a naptárban találod.
						</p>
					</div>
				</div>
			</div-->
		</div>
	</div>
</div>
<!-- Alkalmaink vége -->

<!-- Mi a Golgota? -->
<div class="section-home our-causes animate-onscroll fadeIn">
	<div class="container" id="golgota">
		<h2 class="title-style-1">Mi a Golgota? <span class="title-under"></span></h2>
		<div class="col-md-12 fadeIn animate-onscroll">
			<div class="panel-group" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading2_1" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_1" aria-expanded="true" aria-controls="collapse2_1">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Az egyházról röviden
						</h4>
					</div>
					<div id="collapse2_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_1">
						<div class="panel-body">
							<p class="text-justify">
								A Golgota Gyülekezet az amerikai eredetű Calvary Chapel magyarországi gyülekezete.
								Magyarországon 1991 óta működő protestáns felekezet. Bejegyzett egyházként 1994 óta működik.
								Hazánkban több gyülekezete is van. Igehirdetéseken a fő alapelvünk, hogy a Bibliát
								versről-versre tanítjuk. Az egyház számos keresztény misszióban vesz részt, Vajtán saját
								Bibliaiskolát tart fenn. Gyülekezeteink ma már megtalálhatóak az ország legtöbb nagy
								városában, számos településen jelenleg is zajlik új közösségek elindítása.
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading2_2" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_2" aria-expanded="false" aria-controls="collapse2_2">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Hasznos linkek
						</h4>
					</div>
					<div id="collapse2_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_2">
						<div class="panel-body">
							<ul>
								<li><a target="blank" href="http://www.golgotabudapest.hu/">A gyülekezet központi lapja</a></li>
								<li><a target="blank" href="http://www.golgotabudapest.hu/tortenetunk/magyarorszagon/">Golgota Gyülekezet Magyarországon</a></li>
								<li><a target="blank" href="http://hu.wikipedia.org/wiki/Golgota_Kereszt%C3%A9ny_Gy%C3%BClekezet">Wikipédia szócikk</a></li>
								<li><a target="blank" href="http://vattee.googlepages.com/ggys">A Golgota gyülekezetek sajátosságai</a></li>
								<li><a target="blank" href="http://gtf.ccbce.com/">Golgota Teológiai Főiskola</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading2_3" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_3" aria-expanded="false" aria-controls="collapse2_3">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Golgota Gyülekezetek hazánkban
						</h4>
					</div>
					<div id="collapse2_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_3">
						<div class="panel-body">
							<div class="col-lg-4">
								<ul>
									<li><a target="blank" href="http://bajaigolgota.hu/">Baja</a></li>
									<li><i>Budapest, Békásmegyer</i></li>
									<li><a target="blank" href="http://golgotabudapest.hu/">Budapest, Erzsébet körút</a></li>
									<li><a target="blank" href="http://delpest.golgota.hu/">Budapest, Dél-Pest</a></li>
									<li><a target="blank" href="https://www.golgota11.hu/">Budapest, Újbuda</a></li>
									<li><a target="blank" href="http://debrecen.golgota.hu/">Debrecen</a></li>
									<li><a target="blank" href="http://dunaujvaros.golgota.hu/">Dunaújváros</a></li>
									<li><a target="blank" href="http://eger.golgota.hu/">Eger</a></li>
									<li><a target="blank" href="http://esztergom.golgota.hu/">Esztergom</a></li>
								</ul>
							</div>
							<div class="col-lg-4">
								<ul>
									<li><a target="blank" href="http://www.golgotagardony.hu/">Gárdony</a></li>
									<li><a target="blank" href="https://golgotagyor.hu/">Győr</a></li>
									<li><a target="blank" href="https://www.facebook.com/Golgota-Kereszt%C3%A9ny-Gy%C3%BClekezet-Kaposv%C3%A1r-141878869335608/">Kaposvár</a></li>
									<li><a target="blank" href="http://kecskemet.golgota.hu/">Kecskemét</a></li>
									<li><a target="blank" href="https://www.facebook.com/GolgotaKeszthely/">Keszthely</a></li>
									<li><a target="blank" href="https://golgotakistarcsa.hu/">Kistarcsa</a></li>
									<li><a target="blank" href="http://www.halado.hu/">Miskolc</a></li>
									<li><a target="blank" href="http://nyiregyhaza.golgota.hu/">Nyíregyháza</a></li>
								</ul>
							</div>
							<div class="col-lg-4">
								<ul>
									<li><a target="blank" href="http://golgotapecs.hu/">Pécs</a></li>
									<li><i>Sárbogárd</i></li>
									<!-- <li><a target="blank" href="http://sopron.golgota.hu/">Sopron</a></li> -->
									<li><a target="blank" href="http://golgotaszeged.hu/">Szeged</a></li>
									<li><a target="blank" href="http://szolnok.golgota.hu/">Szolnok</a></li>
									<!-- <li><i>Szombathely</i></li> -->
									<li><a target="blank" href="https://www.facebook.com/golgotatatabanya/">Tatabánya</a></li>
									<li><a target="blank" href="https://www.facebook.com/GolgotaTompa/">Tompa</a></li>
									<li><a target="blank" href="https://www.kegy.hu/">Törökbálint</a></li>
									<li><a target="blank" href="https://golgotavac.hu/">Vác</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading2_4" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_4" aria-expanded="false" aria-controls="collapse2_4">
						<h4 class="panel-title"><i class="fa fa-plus"></i>
							Hitvallásunk
						</h4>
					</div>
					<div id="collapse2_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_4">
						<div class="panel-body">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading3_1" data-toggle="collapse" data-parent="#accordion3" href="#collapse3_1" aria-expanded="false" aria-controls="collapse3_1">
									<h4 class="panel-title"><i class="fa fa-plus"></i>
										Elfogadjuk
									</h4>
								</div>
								<div id="collapse3_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3_1">
									<div class="panel-body">
										<h4><strong>Az Apostoli Hitvallást</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hiszek egy Istenben, Mindenható Atyában, mennynek és földnek Teremtőjében és Jézus Krisztusban, az Ő Egyszülött Fiában, a mi Urunkban, aki fogantatott Szentlélektől, született Szűz Máriától, Szenvedett Poncius Pilátus alatt, megfeszítették, meghalt és
												eltemették, alászállt a poklokra, harmadnapon feltámadt a halottak közül, felment a mennybe, ott ül a Mindenható Atyaisten jobbján, onnan jön el ítélni élőket és holtakat. Hiszek Szentlélekben, hiszem
												az egyetemes keresztyén anyaszentegyházat, a szentek közösségét, a bűnök bocsánatát, a test feltámadását és az örök életet. Ámen
											</li>
										</ul>
										<h4><strong>Kulcsfontosságú igeként a Szentírásból</strong></h4>
										<ul style="padding-left:25px;">
											<li><strong><i>János evangéliuma 3:16</i></strong><br> "Mert úgy szerette Isten a világot, hogy egyszülött Fiát adta, hogy aki hisz Őbenne, el ne vesszen, hanem örök élete legyen."<br>
											</li>
											<li><strong><i>2 Timóteus 3:16</i></strong><br> "A teljes írás Istentől ihletett, és hasznos a tanításra, feddésre, megjobbításra és az igazságban való nevelésre."
											</li>
										</ul>
										<h4><strong>Továbbá</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Tudjuk, hogy "töredékes az ismeretünk", ezért a "lényeges dolgokban egység, egyebekben szabadság, de mindenben szeretet" elvét valljuk, és az esetleges teológiai különbségek ellenére minden keresztény egyházzal lelki közösségben tudjuk magunkat.
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default" id="3_2">
								<div class="panel-heading" role="tab" id="heading3_2" data-toggle="collapse" data-parent="#accordion3" href="#collapse3_2" aria-expanded="false" aria-controls="collapse3_2">
									<h4 class="panel-title"><i class="fa fa-plus"></i>
										Hitbeli meggyőződésünket az alábbi témákban tartjuk fontosnak kifejteni I.
									</h4>
								</div>
								<div id="collapse3_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3_2">
									<div class="panel-body">
										<h4><strong>A Szentírás</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy a Biblia a 39 könyvet tartalmazó Ószövetségből és a 27 könyvet tartalmazó Újszövetségből áll. Hisszük, hogy a teljes Szentírás Istentől ihletett, és eredeti formájában hibátlan. Tanítása a hit és gyakorlat kérdéseiben mértékadó, az élet
												minden területéről tett kijelentései megbízhatóak. Hisszük, hogy Isten kijelentése minden szempontból feljebbvaló az emberi kijelentésnél, és hogy az Istentől jövő emberi kijelentések összhangban vannak
												a Bibliával.
											</li>
										</ul>
										<h4><strong>A Háromegy Isten</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hiszünk az egyetlen, igaz és tökéletes Istenben, aki örökkévaló Szentháromság - Atya, Fiú, Szentlélek. Hisszük, hogy a mindenható Isten minden élőlény és élettelen dolog Teremtője, Fenntartója és Ura.
											</li>
										</ul>
										<h4><strong>Jézus Krisztus</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy Jézus a Krisztus, a megígért és eljött Messiás. Hisszük, hogy benne Isten lett emberré, ezért Jézus teljesen Isten és teljesen ember volt, aki a Szentlélek által fogant, szűztől született, és bűntelen életet élt. Hiszünk csodatételeiben
												és tanításaiban. Hisszük, hogy helyettünk bűnhődve halt meg a kereszten, kifizetve bűneinkért a váltságdíjat, így Ő a Megváltónk és életünk Ura. Hisszük, hogy harmadnapra testben feltámadt, majd felemeltetett
												az Atya jobbjára, ahol örökké él, Főpapként közbenjár értünk, és egy napon hatalommal és dicsőségben visszatér a földre, hogy Királyként uralkodjon.
											</li>
										</ul>
										<h4><strong>A Szentlélek</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy az Atyától és a Fiútól jött Szentlélek az, aki meggyőzi a világot a bűnről, az igazságról és az ítéletről. Ő szüli újjá, szenteli meg és teszi képessé a szolgálatra mindazokat, akik hisznek Jézusban. Hisszük, hogy a Szentlélek minden Jézus
												Krisztusban hívő emberben lakozást vesz, hogy Ő az Egyház Pártfogója, Tanítója és Vezetője, és a szolgálati ajándékok adományozója.
											</li>
										</ul>
										<h4><strong>Az ember</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy Isten arra teremtette az embert, hogy Vele közösségben éljen, hogy egyre jobban megismerje és megszeresse, illetve hogy lélekben és igazságban imádja Őt. Hisszük, hogy Isten az embert szabad akarattal ruházta fel, ezért a tetteiért felelősséggel
												tartozik. Hisszük, hogy az első ember bűnbeesése által minden ember természeténél fogva bűnös, vétkeiben halott, és ítélet alatt áll.
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default" id="3_3">
								<div class="panel-heading" role="tab" id="heading3_3" data-toggle="collapse" data-parent="#accordion3" href="#collapse3_3" aria-expanded="false" aria-controls="collapse3_3">
									<h4 class="panel-title"><i class="fa fa-plus"></i>
										Hitbeli meggyőződésünket az alábbi témákban tartjuk fontosnak kifejteni II.
									</h4>
								</div>
								<div id="collapse3_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3_3">
									<div class="panel-body">
										<h4><strong>A megváltás</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy üdvösség kizárólag Isten kegyelméből, a Jézus Krisztus befejezett váltságművébe vetett hit által adatik. Hisszük, hogy Jézus minden ember bűnét magára vette, és áldozata minden hívő minden bűnét képes elfedezni. Bár vannak, akik ellenállnak
												Isten megtérésre hívó szavának, aki megbánja bűneit, és elfogadja Jézus Krisztust személyes megváltójának és Urának, az abban a pillanatban bocsánatot nyer bűneire, újjászületik és elpecsételtetik a
												Szentlélek által, Isten gyermeke lesz, és az örökkévalóságot az Úrral fogja tölteni.
											</li>
										</ul>
										<h4><strong>Az egyház</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hiszünk az egyetemes egyházban, Krisztus élő lelki Testében, amelynek Ő maga a feje, és minden újjászületett hívő a tagja. Hisszük, hogy az egyház legfontosabb feladata az evangéliumnak a hirdetése és a teljes Biblia tanítása. Hisszük, hogy a gyülekezet
												vezetéséért a lelkipásztor felelős, akinek Istentől kapott feladata, hogy hűségesen táplálja és szeresse az Ő népét. Hisszük, hogy Isten a pásztor és a gyülekezet szolgálatának a segítésére presbitereket
												és diakónusokat rendelt.
											</li>
										</ul>
										<h4><strong>A szertartások</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy Jézus Krisztus két szertartást hagyott az Egyházra: a keresztelést és az úrvacsorát. Az úrvacsorán csak hívők vehetnek részt, de minden hívőt, így vendégeinket is szeretettel hívjuk Krisztus asztalához. A testét és vérét jelképező kenyérrel
												és a borral / szőlőlével Jézusra emlékezünk, és váltsághalálát hirdetjük, amíg újra el nem jön.
											</li>
										</ul>
										<h4><strong>A végső dolgok</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy halála után minden hívő a mennybe kerül Krisztus jelenlétébe. Hisszük, hogy az utolsó napon Isten megítéli az élőket és a holtakat, örök áldást adva az igazaknak, és el nem múló szenvedéssel fizetve a gonoszaknak. Hisszük, hogy Isten végül
												új eget és új földet fog teremteni.
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default" id="3_4">
								<div class="panel-heading" role="tab" id="heading3_4" data-toggle="collapse" data-parent="#accordion3" href="#collapse3_4" aria-expanded="false" aria-controls="collapse3_4">
									<h4 class="panel-title"><i class="fa fa-plus"></i>
										Néhány állásfoglalás
									</h4>
								</div>
								<div id="collapse3_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3_4">
									<div class="panel-body">
										<p class="text-justify">
											Hisszük, hogy a keresztény közösség és szolgálat egyetlen hiteles alapja a krisztusi szeretet, amely hatalmasabb minden felekezeti különbségnél, mert Isten ismeretéből fakad, és az Ő dicséretére indít. Ennek ellenére bizonyos vitatott témákat illetően
											szükségesnek tartjuk megfogalmazni a saját meggyőződésünket:
										</p>
										<h4><strong>A karizmák használatáról</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hiszünk a Szentlélek ajándékaiban, ahogy azok a Bibliában megjelennek. Hisszük, hogy az ajándékok ma is működnek, és hogy bibliai irányelvek szerinti használatuk Krisztus testének az építését szolgálja. Hisszük, hogy a Szentlélek legfontosabb ajándéka
												az a krisztusi szeretet, amely nélkül minden más karizma gyakorlása értéktelen. Hisszük, hogy Jézus Krisztus az odaszánt hívőt Szentlelkével újra meg újra betölti, és így a szolgálat végzésére alkalmassá
												teszi. Valljuk, hogy a Lélekkel való teltség sokféle módon megnyilvánulhat, és a jele nemcsak egy karizma lehet. Hisszük, hogy a korai egyházhoz hasonlóan mi is rászorulunk a Szentlélek vezetésére, erejére
												és ajándékaira a keresztény élet és a szolgálat minden területén. A karizmák használatával kapcsolatban azonban alapvetőnek tartjuk, hogy nem emberi szélsőségekre, hanem a Bibliára kell reagálnunk.
											</li>
										</ul>
										<h4><strong>Az engesztelés egyetemességéről</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy Jézus Krisztus az egész világ, azaz minden egyes ember bűnéért bűnhődött és minden bűnért váltságot adott. Isten azt akarja, hogy mindenki üdvözüljön, és eljusson az igazság megismerésére. Ennek nem mond ellent, hogy csak azok fognak üdvözülni,
												akik hittel elfogadják az értük adott váltságot.
											</li>
										</ul>
										<h4><strong>A kiválasztás és szabad akarat viszonyáról</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy a Biblia a mindenható Isten kiválasztó akaratára és az ember döntési felelősségére egyaránt rámutat. Ugyanakkor hisszük, hogy az ember döntésében a mindenható Isten akarata valósul meg. Ezért aki elveszik, nem okolhatja Istent, aki pedig
												megmenekül, az mindent Istennek köszönhet.
											</li>
										</ul>
										<h4><strong>A hívők megtartatásáról</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy a Biblia Isten megtartó hatalmára és a hívő engedelmességének fontosságára egyaránt rámutat. A hívőnek helyzetétől függően ma is a Biblia bátorító vagy figyelmeztető szavaira van szüksége. Szolgálatának sikeressége vagy csődje nem érinti
												az üdvösségét.
											</li>
										</ul>
										<h4><strong>Az isteni gondviselésről</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy a mindenható Isten szerető gondviselésének nem mond ellent az, hogy a hívő ki lehet téve betegségeknek, szegénységnek és üldöztetésnek.
											</li>
										</ul>
										<h4><strong>A szellemi harcról</strong></h4>
										<ul style="list-style-type: none; padding-left:15px;">
											<li>
												Hisszük, hogy az újjászületett hívőben a Szentlélek lakozik, ezért nem lehetnek benne démonok. Befolyást gyakorolhatnak rá - ha ennek valamilyen módon teret ad -, de Krisztusban ellenállhat nekik.
											</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Mi a Golgota? -->

<!-- Média eleje -->
<div class="section-home our-causes animate-onscroll fadeIn">
	<div class="container" id="media">
		<div class="col-md-12 fadeIn animate-onscroll">
			<h2 class="title-style-1">Média<span class="title-under"></span></h2>
			<br>
			<div role="tabpanel" class="text-center">
				<ul class="nav nav-tabs" role="tablist">
					<li id="li_kepek" role="presentation">
						<a href="#kepek" aria-controls="kepek" role="tab" data-toggle="tab">
							<img src="assets/images/icons/pictures.png" style="max-height: 50px;" alt="pictures"> Képalbum
						</a>
					</li>
					<li id="li_hangok" role="presentation" class="active">
						<a href="#hangok" aria-controls="hangok" role="tab" data-toggle="tab">
							<img src="assets/images/icons/bible_icon.png" style="max-height: 50px;" alt="teaches"> Tanítások
						</a>
					</li>
					<li id="li_enek" role="presentation">
						<a href="#enek" aria-controls="enek" role="tab" data-toggle="tab">
							<img src="assets/images/icons/songbook.png" style="max-height: 50px;" alt="songbook"> Énekeskönyv
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane" id="kepek">
						<p> Feltöltés alatt...</p>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#csoportkepek"><img src="assets/images/Csoportkepek/DSC_001_thumb.png" style="max-height: 70px;" alt=""><br>Csoportképek</button>
						
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ifitabor2016">
							<img src="assets/images/Ifitabor2016/thumb.png" style="max-height: 70px;" alt=""><br>Ifitábor 2016
						</button>
						
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#kirandulas20161126">
							<img src="assets/images/Kirandulas20161126/thumb.png" style="max-height: 70px;" alt=""><br>Kirándulás 2016
						</button>

						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#csh20170603"><img src="assets/images/TavasziCSH2017/DSC_030_thumb.png" style="max-height: 70px;" alt=""><br>Tavaszi CSH 2017</button>
					</div>
					
					<div role="tabpanel" class="tab-pane active" id="hangok">
						<p id="hang1">
						
						</p>
						
						<!-- <div class="visible-xs visible-sm">
							<iframe width="320" height="180" src="https://www.youtube.com/embed/videoseries?list=PLWBVinGs0l4kHpALpr9TViY-W_JcBMQ5z&rel=0&enablejsapi=1&modestbranding=1&disablekb=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div> -->
						
						<p>
							<br>
							A legfrissebb hangfelvételek meghallgathatók
							<a href="https://drive.google.com/drive/folders/11L1mWnGG39czfEnwr2olUqWjs1LW3TQz?usp=sharing"><b>ide kattintva</b></a>!
							<br>
							Korábbi felvételek feltöltése folyamatban...
						</p>
						
						<!-- <div class="hidden-xs hidden-sm"> --> <!-- Youtube kép -->
						<!--	<iframe width="853" height="480" src="https://www.youtube.com/embed/videoseries?list=PLWBVinGs0l4kHpALpr9TViY-W_JcBMQ5z&rel=0&enablejsapi=1&modestbranding=1&disablekb=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div> -->
						<p>
							A 2021. előtti felvételek meghallgathatók a Youtube-on
							<a href="https://www.youtube.com/playlist?list=PLWBVinGs0l4kHpALpr9TViY-W_JcBMQ5z" target="_blank"><b>ide kattintva</b></a>!
							<br>
							<!-- További felvételek feltöltése folyamatban... -->
						</p>
						
						<!-- <div id="hang1" class="oszlopbal col-md-4 col-sm-12">
							
							<div class="none-break">
								<p class="audio-text"><b>Harold Golden 2022.05.22.</b>
									<br>1Moz. 12,1-17,21</p> <img class="swap-audio" src="https://bekas.golgota.hu/assets/images/tanitasok/img.png" alt="https://drive.google.com/drive/folders/1Ii3dTxYZTMs5v_CLMvUWb9OvAG2mPrF_"/>
								<hr>
							</div>
							
							<div class="none-break">
								<p class="audio-text"><b>Márkus Szilárd 2019.05.12.</b>
									<br>2Tim 1:1-7</p> <img class="swap-audio" src="https://bekas.golgota.hu/assets/images/tanitasok/img.png" alt="MarkusSzilard20190512"/>
								<hr>
							</div>
					  
						</div>
						<div class="oszlopkozep col-md-4 col-sm-12">
							
							<div class="none-break">
								<p class="audio-text"><b>Márkus Szilárd 2019.05.05.</b>
									<br>1Tim 6:12-21</p> <img class="swap-audio" src="https://bekas.golgota.hu/assets/images/tanitasok/img.png" alt="MarkusSzilard20190505"/>
								<hr>
							</div>
							
							<div class="none-break">
								<p class="audio-text"><b>Monte Baker 2019.04.28.</b>
									<br>&nbsp;</p> <img class="swap-audio" src="https://bekas.golgota.hu/assets/images/tanitasok/img.png" alt="MonteBaker20190428"/>
								<hr>
							</div>
							
						</div>
						<div class="opszlopjobb col-md-4 col-sm-12">
							
							<div class="none-break">
								<p class="audio-text"><b>Matt Christian 2019.02.24.</b>
									<br>1Tim 4:1-11</p> <img class="swap-audio" src="https://bekas.golgota.hu/assets/images/tanitasok/img.png" alt="MattChristian20190224"/>
								<hr>
							</div>
							
							<br>
						</div>
						<button type="button" class="btn btn-info btn-lg" style="margin-top: 0; margin-bottom: 17px;" onclick="window.open('felvetelek.php')">
							Korábbi felvételek
						</button> -->
					</div>
					
					<div role="tabpanel" class="tab-pane" id="enek">
						<!-- <p>Az Énekeskönyv letöltéséhez kattints a Letöltés gombra!</p>
							<button type="submit" class="btn btn-sm btn-info btn-lg" onclick="window.open('assets/media/Énekeskönyv_2020.pdf')">
							<i class="fa fa-download"></i> Letöltés
						</button> -->
						<p><br>Az énekeskönyvet <b><a href="https://drive.google.com/drive/folders/1IcwSnxcPTjH3Rdvl6PIUGcatm0KNP_by?usp=sharing" target="_blank">itt találod</a></b>.</p>
						<p><br>A vetítőszolgálat oldalát <b><a href="https://vetitomagus.hu" target="_blank">itt találod</a></b>.</p><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><br>
<!-- Média vége -->

<!-- Címünk -->
<div class="section-home our-causes animate-onscroll fadeIn container">
	<div class="container" id="cim">
		<h2 class="title-style-1">Címünk<span class="title-under"></span></h2>
		<div class="row contact-items">
			<ul class="list-unstyled contact-items-list">
				<li class="contact-item">
					<span class="contact-icon"> <i class="fa fa-map-marker"></i></span>
					<b>
						<a target="blank" href="https://www.google.ca/maps/place/B%C3%A9k%C3%A1si+Golgota+Kereszt%C3%A9ny+Gy%C3%BClekezet/@47.6014605,19.0576722,17z/data=!3m1!4b1!4m5!3m4!1s0x4741d76051961d01:0x13f72ec35bc644fe!8m2!3d47.6014569!4d19.0598609">
							<u>1039 Bp., Madzsar József utca 13.</u>
						</a>
					</b>
				</li>
			</ul>
			<p><img src="assets/images/gy%C3%BCli_map_help.jpg" alt="gyuli_map_help"></p>
			<p class="text-justify"> <b>Megközelítés autóval</b></p>
			<ul>
				<li><b>Óbuda felől</b>
					<p class="text-justify" style="padding-left: 20px; padding-top:10px;">
						A 11-es úton vezess el a Pünkösdfürdő utcáig (HÉV-átjáró, Shell-benzinkút). A jelzőlámpánál fordulj jobbra a lakótelep felé, de utána szinte azonnal, 10 méter múlva a 11-es főúttól első párhuzamos utcába balra kanyarodj. A piacot elhagyva, a tizenöt emeletes
						házak után fordulj a kis zöld szolgáltatóházhoz jobbra (ez az útszakasz kb. 700 méter). Azon az úton a szolgáltatóház végéig érdemes eljönni mert ott vagyunk (a tömb ÉK-i oldalánál). <br><br>
					</p>
				</li>
				<li><b>Szentendre, Pomáz és a Megyeri-híd felől</b>
					<p class="text-justify" style="padding-left: 20px; padding-top:10px;">
						Az M0-ás (Megyeri híd) csomópontja után az első jelzőlámpánál fordulj balra! A lekanyarodást követően kb. 300 métert kell megtenni a 11-es úttal párhuzamosan, majd újfent kanyarodj balra, amikor meglátod a zöld tetős szolgáltatóházat. Azon az úton a szolgáltatóház
						végéig érdemes eljönni mert ott vagyunk (a tömb ÉK-i oldalánál).
					</p>
				</li>
			</ul>
			<br>
			<b>Tömegközlekedéssel</b>
			<ul style="list-style-type: none;">
				<li style="padding-top:10px; padding-bottom: 15px">
					Árpád híd, metróállomás és az Újmegyeri tér között közlekedő
					<a target="blank" href="https://bkk.hu/menetrendek/#34"><strong>34</strong></a>-es, a Rákospalota felől a Megyeri hídon át érkező <a target="blank" href="https://bkk.hu/menetrendek/#204"><strong>204</strong></a>-es
					és a Káposztásmegyer érintésével Újpalotáról induló
					<a target="blank" href="https://bkk.hu/menetrendek/#296"><strong>296</strong></a> -os busz „Szolgáltatóház” megállója van a legközelebb, de gyülekezetünk megközelíthető a
					<a target="blank" href="https://bkk.hu/menetrendek/#H5"><strong>H5</strong></a>-ös HÉV-vel, vagy a
					<a target="blank" href="https://bkk.hu/menetrendek/#134"><strong>134</strong></a>,
					<a target="blank" href="https://bkk.hu/menetrendek/#143"><strong>143</strong></a>,
					<a target="blank" href="https://bkk.hu/menetrendek/#160"><strong>160</strong></a>,
					<a target="blank" href="https://bkk.hu/menetrendek/#186"><strong>186</strong></a>,
					<a target="blank" href="https://bkk.hu/menetrendek/#243"><strong>243</strong></a> és a
					<a target="blank" href="https://bkk.hu/menetrendek/#204"><strong>204</strong></a>-es buszokkal Békásmegyer HÉV-állomásig, majd a Madzsar József utcán 500 métert gyalogolva.
					<br><br> A buszmenetrendeket a járatszámra kattintva tudod megtekinteni.
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- Címünk vége -->

<!-- Google map -->
<div id="contact-map" class="contact-map"></div>

<?php
include 'footer.php'; ?>
