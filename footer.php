    <footer class="main-footer">
        <div class="footer-top"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4 class="footer-title">Rólunk <span class="title-under"></span></h4>
                        <div class="footer-content">
                            <p> Kedves Látogató! <br> Üdvözlünk a Békási Golgota Gyülekezet honlapján. Reméljük minden fontos információt megtalálsz honlapunkon, és ha még így is maradt kérdésed, bátran vedd fel velünk a kapcsolatot, akár üzenetben, de még
                                jobb lenne, ha személyesen tudnánk találkozni Veled! :) <br> Címünk: 1039 Bp., Madzsar József utca 13.<br> Istentiszteletünk: minden vasárnap 10 órakkor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4 class="footer-title">Friss hírek <span class="title-under"></span></h4>
                        <div class="footer-content">
                            <ul class="tweets list-unstyled">
                                <li class="tweet"><a href="/#hirdetesek">Online Istentisztelet!!</a></li>
                                <li class="tweet"><a href="/#hirdetesek">Ünnepi köszöntő!</a></li>
                            </ul>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4 class="footer-title">Írj nekünk <span class="title-under"></span></h4>
                        <div class="footer-content">
                            <div class="footer-form">
                                <form action="mail.php" class="ajax-form" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Neved" required> </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail címed" required> </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Üzeneted" required></textarea>
                                    </div>
                                    <div class="form-group alerts">
                                        <div class="alert alert-success" role="alert"></div>
                                        <div class="alert alert-danger" role="alert"></div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6Lc4CTAUAAAAAF4CQaYwmu9uPft7wO3uvOcq0Jse"></div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-submit pull-right">Üzenet küldése</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <br>
        </div>
        <div class="footer-bottom">
            
            <div class="container text-right"> Békási Golgota © Minden jog fenntartva <?= date('Y') ?> - készítette
                <i><a target="parent" href="mailto:dorqa95@gmail.com">&nbsp;Dóri</a></i>
            </div>
        </div>
    </footer>
    <!-- main-footer -->
    
	<?php
    if (basename($_SERVER['PHP_SELF']) === 'index.php') : ?>
		<!-- The Bootstrap Image Gallery lightbox -->
		<div id="blueimp-gallery" class="blueimp-gallery">
			<!-- The container for the modal slides -->
			<div class="slides"></div>
			<!-- Controls for the borderless lightbox -->
			<a class="prev">‹</a>
			<a class="next">›</a>
			<a class="close">×</a>
			<a class="play-pause"></a>
			<ol class="indicator"></ol>
			<!-- The modal dialog, which will be used to wrap the lightbox content -->
			<div class="modal fade">
				<div class="modal-dialog" style="width: 70%;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body next" style="margin-left: 20px;"></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left prev" title="Használja a nyilakat a gyors navigáláshoz!">
								<i class="glyphicon glyphicon-chevron-left"></i>
								Előző
							</button>
							<button type="button" class="btn btn-primary next" title="Használja a nyilakat a gyors navigáláshoz!">
								Következő
								<i class="glyphicon glyphicon-chevron-right"></i>
							</button>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap Image Gallery -->
		<?php
	endif; ?>
    
    <!-- Facebook like page -->
    <div class="facebookpager">
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fgolgotabekas%2F&width=66&layout=box_count&action=like&size=small&show_faces=true&share=false&height=65&appId" width="66" height="65" style="border:none;overflow:hidden"></iframe><br>
        <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2Fgolgotabekas%2F&layout=button&size=small&mobile_iframe=true&width=85&height=20&appId" width="85" height="20" style="border:none;overflow:hidden"></iframe>
    </div>
    <a href="#" class="backtotopbutton"></a>
    <!-- Facebook like page vége -->
    
	<?php
    if (basename($_SERVER['PHP_SELF']) === 'index.php') : ?>
		<div id="ifitabor2016" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Ifitábor 2016</h4>
					</div>
					<div class="modal-body">
						<div class="container">
							<div id="links2">
								<a href="assets/images/Ifitabor2016/20160804_134433.jpg" title="" data-gallery>
									<img src="assets/images/Ifitabor2016/20160804_134433_thumb.png" alt="">
								</a>
								<a href="assets/images/Ifitabor2016/20160804_163218.jpg" title="" data-gallery>
									<img src="assets/images/Ifitabor2016/20160804_163218_thumb.png" alt="">
								</a>
								<a href="assets/images/Ifitabor2016/20160804_175213.jpg" title="" data-gallery>
									<img src="assets/images/Ifitabor2016/20160804_175213_thumb.png" alt="">
								</a>
								<a href="assets/images/Ifitabor2016/20160804_163143.jpg" title="" data-gallery>
									<img src="assets/images/Ifitabor2016/20160804_163143_thumb.png" alt="">
								</a>
								<a href="assets/images/Ifitabor2016/20160804_121700.jpg" title="" data-gallery>
									<img src="assets/images/Ifitabor2016/20160804_121700_thumb.png" alt="">
								</a>
								
								<a href="assets/images/Ifitabor2016/20160804_163740.jpg" title="" data-gallery>
									<img src="assets/images/Ifitabor2016/20160804_163740_thumb.png" alt="">
								</a>
								<a href="assets/images/Ifitabor2016/20160804_163939.jpg" title="" data-gallery>
									<img src="assets/images/Ifitabor2016/20160804_163939_thumb.png" alt="">
								</a>
							</div>
						</div>
					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Bezárás</button>
					</div>
				</div>
			</div>
		</div>
		<div id="kirandulas20161126" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Kirándulás 2016.11.26.</h4>
					</div>
					<div class="modal-body">
						
						<div class="container">
							Légy türelemmel míg a nagyméretű képek betöltődnek :)
							<div class="links">
								<!-- Bettitől-->
								<a href="assets/images/Kirandulas20161126/DSC_001.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_001_thumb.png" alt="1"></a>
								<a href="assets/images/Kirandulas20161126/DSC_002.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_002_thumb.png" alt="2"></a>
								<a href="assets/images/Kirandulas20161126/DSC_003.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_003_thumb.png" alt="3"></a>
								<a href="assets/images/Kirandulas20161126/DSC_004.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_004_thumb.png" alt="4"></a>
								<a href="assets/images/Kirandulas20161126/DSC_005.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_005_thumb.png" alt="5"></a>
								<a href="assets/images/Kirandulas20161126/DSC_006.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_006_thumb.png" alt="6"></a>
								<a href="assets/images/Kirandulas20161126/DSC_007.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_007_thumb.png" alt="7"></a>
								<a href="assets/images/Kirandulas20161126/DSC_008.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_008_thumb.png" alt="8"></a>
								<a href="assets/images/Kirandulas20161126/DSC_009.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_009_thumb.png" alt="9"></a>
								<a href="assets/images/Kirandulas20161126/DSC_010.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_010_thumb.png" alt="10"></a>
								<a href="assets/images/Kirandulas20161126/DSC_011.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_011_thumb.png" alt="11"></a>
								<a href="assets/images/Kirandulas20161126/DSC_012.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_012_thumb.png" alt="12"></a>
								<a href="assets/images/Kirandulas20161126/DSC_013.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_013_thumb.png" alt="13"></a>
								<a href="assets/images/Kirandulas20161126/DSC_014.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_014_thumb.png" alt="14"></a>
								<a href="assets/images/Kirandulas20161126/DSC_015.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_015_thumb.png" alt="15"></a>
								<a href="assets/images/Kirandulas20161126/DSC_016.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_016_thumb.png" alt="16"></a>
								<a href="assets/images/Kirandulas20161126/DSC_017.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_017_thumb.png" alt="17"></a>
								<a href="assets/images/Kirandulas20161126/DSC_018.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_018_thumb.png" alt="18"></a>
								<a href="assets/images/Kirandulas20161126/DSC_019.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_019_thumb.png" alt="19"></a>
								<a href="assets/images/Kirandulas20161126/DSC_020.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_020_thumb.png" alt="20"></a>
								<a href="assets/images/Kirandulas20161126/DSC_021.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_021_thumb.png" alt="21"></a>
								<a href="assets/images/Kirandulas20161126/DSC_022.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_022_thumb.png" alt="22"></a>
								<a href="assets/images/Kirandulas20161126/DSC_023.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_023_thumb.png" alt="23"></a>
								<a href="assets/images/Kirandulas20161126/DSC_024.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_024_thumb.png" alt="24"></a>
								<a href="assets/images/Kirandulas20161126/DSC_025.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_025_thumb.png" alt="25"></a>
								<a href="assets/images/Kirandulas20161126/DSC_026.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_026_thumb.png" alt="26"></a>
								<a href="assets/images/Kirandulas20161126/DSC_027.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_027_thumb.png" alt="27"></a>
								<a href="assets/images/Kirandulas20161126/DSC_028.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_028_thumb.png" alt="28"></a>
								<a href="assets/images/Kirandulas20161126/DSC_029.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_029_thumb.png" alt="29"></a>
								<a href="assets/images/Kirandulas20161126/DSC_030.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_030_thumb.png" alt="30"></a>
								<a href="assets/images/Kirandulas20161126/DSC_031.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_031_thumb.png" alt="31"></a>
								<a href="assets/images/Kirandulas20161126/DSC_032.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_032_thumb.png" alt="32"></a>
								<a href="assets/images/Kirandulas20161126/DSC_033.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_033_thumb.png" alt="33"></a>
								<a href="assets/images/Kirandulas20161126/DSC_034.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_034_thumb.png" alt="34"></a>
								<a href="assets/images/Kirandulas20161126/DSC_035.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_035_thumb.png" alt="35"></a>
								<a href="assets/images/Kirandulas20161126/DSC_036.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_036_thumb.png" alt="36"></a>
								<a href="assets/images/Kirandulas20161126/DSC_037.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_037_thumb.png" alt="37"></a>
								<a href="assets/images/Kirandulas20161126/DSC_038.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_038_thumb.png" alt="38"></a>
								<a href="assets/images/Kirandulas20161126/DSC_039.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_039_thumb.png" alt="39"></a>
								<a href="assets/images/Kirandulas20161126/DSC_040.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_040_thumb.png" alt="40"></a>
								<a href="assets/images/Kirandulas20161126/DSC_041.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_041_thumb.png" alt="41"></a>
								<a href="assets/images/Kirandulas20161126/DSC_042.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_042_thumb.png" alt="42"></a>
								<a href="assets/images/Kirandulas20161126/DSC_043.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_043_thumb.png" alt="43"></a>
								<a href="assets/images/Kirandulas20161126/DSC_044.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_044_thumb.png" alt="44"></a>
								<a href="assets/images/Kirandulas20161126/DSC_045.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_045_thumb.png" alt="45"></a>
								<a href="assets/images/Kirandulas20161126/DSC_046.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_046_thumb.png" alt="46"></a>
								<a href="assets/images/Kirandulas20161126/DSC_047.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_047_thumb.png" alt="47"></a>
								<a href="assets/images/Kirandulas20161126/DSC_048.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_048_thumb.png" alt="48"></a>
								<a href="assets/images/Kirandulas20161126/DSC_049.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_049_thumb.png" alt="49"></a>
								<a href="assets/images/Kirandulas20161126/DSC_050.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_050_thumb.png" alt="50"></a>
								<a href="assets/images/Kirandulas20161126/DSC_051.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_051_thumb.png" alt="51"></a>
								<a href="assets/images/Kirandulas20161126/DSC_052.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_052_thumb.png" alt="52"></a>
								<a href="assets/images/Kirandulas20161126/DSC_053.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_053_thumb.png" alt="53"></a>
								<a href="assets/images/Kirandulas20161126/DSC_054.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_054_thumb.png" alt="54"></a>
								<a href="assets/images/Kirandulas20161126/DSC_055.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_055_thumb.png" alt="55"></a>
								<a href="assets/images/Kirandulas20161126/DSC_056.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_056_thumb.png" alt="56"></a>
								<a href="assets/images/Kirandulas20161126/DSC_057.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_057_thumb.png" alt="57"></a>
								<a href="assets/images/Kirandulas20161126/DSC_058.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_058_thumb.png" alt="58"></a>
								<a href="assets/images/Kirandulas20161126/DSC_059.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_059_thumb.png" alt="59"></a>
								<a href="assets/images/Kirandulas20161126/DSC_060.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_060_thumb.png" alt="60"></a>
								<a href="assets/images/Kirandulas20161126/DSC_061.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_061_thumb.png" alt="61"></a>
								<a href="assets/images/Kirandulas20161126/DSC_062.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_062_thumb.png" alt="62"></a>
								<a href="assets/images/Kirandulas20161126/DSC_063.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_063_thumb.png" alt="63"></a>
								<a href="assets/images/Kirandulas20161126/DSC_064.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_064_thumb.png" alt="64"></a>
								<a href="assets/images/Kirandulas20161126/DSC_065.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_065_thumb.png" alt="65"></a>
								<a href="assets/images/Kirandulas20161126/DSC_066.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_066_thumb.png" alt="66"></a>
								<a href="assets/images/Kirandulas20161126/DSC_067.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_067_thumb.png" alt="67"></a>
								<a href="assets/images/Kirandulas20161126/DSC_068.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_068_thumb.png" alt="68"></a>
								<a href="assets/images/Kirandulas20161126/DSC_069.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_069_thumb.png" alt="69"></a>
								<a href="assets/images/Kirandulas20161126/DSC_070.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_070_thumb.png" alt="70"></a>
								<a href="assets/images/Kirandulas20161126/DSC_071.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_071_thumb.png" alt="71"></a>
								<a href="assets/images/Kirandulas20161126/DSC_072.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_072_thumb.png" alt="72"></a>
								<a href="assets/images/Kirandulas20161126/DSC_073.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_073_thumb.png" alt="73"></a>
								
								<!-- Esztitől-->
								<a href="assets/images/Kirandulas20161126/DSC_074.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_077_thumb.png" alt="147"></a>
								<a href="assets/images/Kirandulas20161126/DSC_075.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_078_thumb.png" alt="148"></a>
								<a href="assets/images/Kirandulas20161126/DSC_076.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_079_thumb.png" alt="149"></a>
								<a href="assets/images/Kirandulas20161126/DSC_077.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_080_thumb.png" alt="150"></a>
								<a href="assets/images/Kirandulas20161126/DSC_078.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_081_thumb.png" alt="151"></a>
								<a href="assets/images/Kirandulas20161126/DSC_079.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_082_thumb.png" alt="152"></a>
								<a href="assets/images/Kirandulas20161126/DSC_080.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_083_thumb.png" alt="153"></a>
								<a href="assets/images/Kirandulas20161126/DSC_081.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_084_thumb.png" alt="154"></a>
								<a href="assets/images/Kirandulas20161126/DSC_082.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_085_thumb.png" alt="155"></a>
								<a href="assets/images/Kirandulas20161126/DSC_083.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_086_thumb.png" alt="156"></a>
								<a href="assets/images/Kirandulas20161126/DSC_084.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_087_thumb.png" alt="157"></a>
								<a href="assets/images/Kirandulas20161126/DSC_085.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_088_thumb.png" alt="158"></a>
								<a href="assets/images/Kirandulas20161126/DSC_086.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_089_thumb.png" alt="159"></a>
								<a href="assets/images/Kirandulas20161126/DSC_087.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_090_thumb.png" alt="160"></a>
								<a href="assets/images/Kirandulas20161126/DSC_088.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_091_thumb.png" alt="161"></a>
								<a href="assets/images/Kirandulas20161126/DSC_089.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_092_thumb.png" alt="162"></a>
								<a href="assets/images/Kirandulas20161126/DSC_090.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_093_thumb.png" alt="163"></a>
								<a href="assets/images/Kirandulas20161126/DSC_091.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_094_thumb.png" alt="164"></a>
								<a href="assets/images/Kirandulas20161126/DSC_092.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_095_thumb.png" alt="165"></a>
								<a href="assets/images/Kirandulas20161126/DSC_093.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_096_thumb.png" alt="166"></a>
								<a href="assets/images/Kirandulas20161126/DSC_094.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_097_thumb.png" alt="167"></a>
								<a href="assets/images/Kirandulas20161126/DSC_095.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_098_thumb.png" alt="168"></a>
								<a href="assets/images/Kirandulas20161126/DSC_096.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_099_thumb.png" alt="169"></a>
								<a href="assets/images/Kirandulas20161126/DSC_097.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_100_thumb.png" alt="170"></a>
								<a href="assets/images/Kirandulas20161126/DSC_098.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_101_thumb.png" alt="171"></a>
								<a href="assets/images/Kirandulas20161126/DSC_099.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_102_thumb.png" alt="172"></a>
								<a href="assets/images/Kirandulas20161126/DSC_100.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_103_thumb.png" alt="173"></a>
								<a href="assets/images/Kirandulas20161126/DSC_101.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_104_thumb.png" alt="174"></a>
								<a href="assets/images/Kirandulas20161126/DSC_102.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_105_thumb.png" alt="175"></a>
								<a href="assets/images/Kirandulas20161126/DSC_103.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_106_thumb.png" alt="176"></a>
								<a href="assets/images/Kirandulas20161126/DSC_104.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_107_thumb.png" alt="177"></a>
								<a href="assets/images/Kirandulas20161126/DSC_105.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_108_thumb.png" alt="178"></a>
								<a href="assets/images/Kirandulas20161126/DSC_106.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_109_thumb.png" alt="179"></a>
								<a href="assets/images/Kirandulas20161126/DSC_107.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_110_thumb.png" alt="180"></a>
								<a href="assets/images/Kirandulas20161126/DSC_108.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_111_thumb.png" alt="181"></a>
								<a href="assets/images/Kirandulas20161126/DSC_109.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_112_thumb.png" alt="182"></a>
								<a href="assets/images/Kirandulas20161126/DSC_110.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_113_thumb.png" alt="183"></a>
								<a href="assets/images/Kirandulas20161126/DSC_111.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_074_thumb.png" alt="184"></a>
								<a href="assets/images/Kirandulas20161126/DSC_112.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_075_thumb.png" alt="185"></a>
								<a href="assets/images/Kirandulas20161126/DSC_113.JPG" title="" data-gallery=""><img src="assets/images/Kirandulas20161126/DSC_076_thumb.png" alt="186"></a>
							</div>
						</div>
					
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Bezárás</button>
					</div>
				</div>
			</div>
		</div>
		
		<div id="csh20170603" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tavaszi CSH 2017</h4>
					</div>
					<div class="modal-body">
						<div class="container">Légy türelemmel míg a nagyméretű képek betöltődnek
							<div class="links">
								<a href="assets/images/TavasziCSH2017/DSC_001.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_001_thumb.png" alt="1"></a>
								<a href="assets/images/TavasziCSH2017/DSC_002.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_002_thumb.png" alt="2"></a>
								<a href="assets/images/TavasziCSH2017/DSC_003.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_003_thumb.png" alt="3"></a>
								<a href="assets/images/TavasziCSH2017/DSC_004.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_004_thumb.png" alt="4"></a>
								<a href="assets/images/TavasziCSH2017/DSC_005.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_005_thumb.png" alt="5"></a>
								<a href="assets/images/TavasziCSH2017/DSC_006.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_006_thumb.png" alt="6"></a>
								<a href="assets/images/TavasziCSH2017/DSC_007.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_007_thumb.png" alt="7"></a>
								<a href="assets/images/TavasziCSH2017/DSC_008.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_008_thumb.png" alt="8"></a>
								<a href="assets/images/TavasziCSH2017/DSC_009.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_009_thumb.png" alt="9"></a>
								<a href="assets/images/TavasziCSH2017/DSC_010.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_010_thumb.png" alt="10"></a>
								<a href="assets/images/TavasziCSH2017/DSC_011.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_011_thumb.png" alt="11"></a>
								<a href="assets/images/TavasziCSH2017/DSC_012.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_012_thumb.png" alt="12"></a>
								<a href="assets/images/TavasziCSH2017/DSC_013.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_013_thumb.png" alt="13"></a>
								<a href="assets/images/TavasziCSH2017/DSC_014.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_014_thumb.png" alt="14"></a>
								<a href="assets/images/TavasziCSH2017/DSC_015.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_015_thumb.png" alt="15"></a>
								<a href="assets/images/TavasziCSH2017/DSC_016.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_016_thumb.png" alt="16"></a>
								<a href="assets/images/TavasziCSH2017/DSC_017.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_017_thumb.png" alt="17"></a>
								<a href="assets/images/TavasziCSH2017/DSC_018.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_018_thumb.png" alt="18"></a>
								<a href="assets/images/TavasziCSH2017/DSC_019.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_019_thumb.png" alt="19"></a>
								<a href="assets/images/TavasziCSH2017/DSC_020.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_020_thumb.png" alt="20"></a>
								<a href="assets/images/TavasziCSH2017/DSC_021.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_021_thumb.png" alt="21"></a>
								<a href="assets/images/TavasziCSH2017/DSC_022.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_022_thumb.png" alt="22"></a>
								<a href="assets/images/TavasziCSH2017/DSC_023.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_023_thumb.png" alt="23"></a>
								<a href="assets/images/TavasziCSH2017/DSC_024.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_024_thumb.png" alt="24"></a>
								<a href="assets/images/TavasziCSH2017/DSC_025.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_025_thumb.png" alt="25"></a>
								<a href="assets/images/TavasziCSH2017/DSC_026.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_026_thumb.png" alt="26"></a>
								<a href="assets/images/TavasziCSH2017/DSC_027.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_027_thumb.png" alt="27"></a>
								<a href="assets/images/TavasziCSH2017/DSC_028.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_028_thumb.png" alt="28"></a>
								<a href="assets/images/TavasziCSH2017/DSC_029.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_029_thumb.png" alt="29"></a>
								<a href="assets/images/TavasziCSH2017/DSC_030.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_030_thumb.png" alt="30"></a>
								<a href="assets/images/TavasziCSH2017/DSC_031.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_031_thumb.png" alt="31"></a>
								<a href="assets/images/TavasziCSH2017/DSC_032.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_032_thumb.png" alt="32"></a>
								<a href="assets/images/TavasziCSH2017/DSC_033.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_033_thumb.png" alt="33"></a>
								<a href="assets/images/TavasziCSH2017/DSC_034.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_034_thumb.png" alt="34"></a>
								<a href="assets/images/TavasziCSH2017/DSC_035.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_035_thumb.png" alt="35"></a>
								<a href="assets/images/TavasziCSH2017/DSC_036.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_036_thumb.png" alt="36"></a>
								<a href="assets/images/TavasziCSH2017/DSC_037.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_037_thumb.png" alt="37"></a>
								<a href="assets/images/TavasziCSH2017/DSC_038.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_038_thumb.png" alt="38"></a>
								<a href="assets/images/TavasziCSH2017/DSC_039.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_039_thumb.png" alt="39"></a>
								<a href="assets/images/TavasziCSH2017/DSC_040.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_040_thumb.png" alt="40"></a>
								<a href="assets/images/TavasziCSH2017/DSC_041.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_041_thumb.png" alt="41"></a>
								<a href="assets/images/TavasziCSH2017/DSC_042.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_042_thumb.png" alt="42"></a>
								<a href="assets/images/TavasziCSH2017/DSC_043.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_043_thumb.png" alt="43"></a>
								<a href="assets/images/TavasziCSH2017/DSC_044.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_044_thumb.png" alt="44"></a>
								<a href="assets/images/TavasziCSH2017/DSC_045.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_045_thumb.png" alt="45"></a>
								<a href="assets/images/TavasziCSH2017/DSC_046.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_046_thumb.png" alt="46"></a>
								<a href="assets/images/TavasziCSH2017/DSC_047.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_047_thumb.png" alt="47"></a>
								<a href="assets/images/TavasziCSH2017/DSC_048.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_048_thumb.png" alt="48"></a>
								<a href="assets/images/TavasziCSH2017/DSC_049.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_049_thumb.png" alt="49"></a>
								<a href="assets/images/TavasziCSH2017/DSC_050.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_050_thumb.png" alt="50"></a>
								<a href="assets/images/TavasziCSH2017/DSC_051.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_051_thumb.png" alt="51"></a>
								<a href="assets/images/TavasziCSH2017/DSC_052.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_052_thumb.png" alt="52"></a>
								<a href="assets/images/TavasziCSH2017/DSC_053.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_053_thumb.png" alt="53"></a>
								<a href="assets/images/TavasziCSH2017/DSC_054.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_054_thumb.png" alt="54"></a>
								<a href="assets/images/TavasziCSH2017/DSC_055.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_055_thumb.png" alt="55"></a>
								<a href="assets/images/TavasziCSH2017/DSC_056.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_056_thumb.png" alt="56"></a>
								<a href="assets/images/TavasziCSH2017/DSC_057.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_057_thumb.png" alt="57"></a>
								<a href="assets/images/TavasziCSH2017/DSC_058.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_058_thumb.png" alt="58"></a>
								<a href="assets/images/TavasziCSH2017/DSC_059.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_059_thumb.png" alt="59"></a>
								<a href="assets/images/TavasziCSH2017/DSC_060.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_060_thumb.png" alt="60"></a>
								<a href="assets/images/TavasziCSH2017/DSC_061.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_061_thumb.png" alt="61"></a>
								<a href="assets/images/TavasziCSH2017/DSC_062.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_062_thumb.png" alt="62"></a>
								<a href="assets/images/TavasziCSH2017/DSC_063.jpg" title="" data-gallery=""><img src="assets/images/TavasziCSH2017/DSC_063_thumb.png" alt="63"></a>
							</div>
						</div>
					</div>
					<div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Bezárás</button></div>
				</div>
			</div>
		</div>
		
		<div id="csoportkepek" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Csoportképek</h4>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="links"><a href="assets/images/Csoportkepek/DSC_001.jpg" title="" data-gallery=""><img src="assets/images/Csoportkepek/DSC_001_thumb.png" alt="1"></a></div>
						</div>
					</div>
					<div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Bezárás</button></div>
				</div>
			</div>
		</div>
		
		<!-- átírandó mappaX, és a *5, valamint a mappa elérhetősége, irfanViewban pedig 'B' billentyűvel thumb és név konverzió -->
		<!--div#mappaX.modal.fade[role="dialog"]>div.modal-dialog.modal-lg>div.modal-content>div.modal-header>button.close[type="button" data-dismiss="modal"]{&times;}+h4.modal-title{MAPPA NEVE}^div.modal-body>div.container{Légy türelemmel míg a nagyméretű képek betöltődnek}>div#links>a[href="assets/images/mappaX/DSC_$$$.JPG" title="" data-gallery]*5>img[src="assets/images/mappaX/DSC_$$$_thumb.png" alt="$"]^^^^div.modal-footer>button.btn.btn-default[type="button" data-dismiss="modal"]{Bezárás}-->
		<?php
	endif; ?>
    
    <!--  Scripts
    ================================================== -->
    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<?php
    if (basename($_SERVER['PHP_SELF']) === 'index.php') : ?>
		<!-- owl carouseljavascript file -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Blueimp Gallery script file -->
		<script src="assets/js/jquery.blueimp-gallery.min.js"></script>
		<!-- Bootstrap Image Gallery script file -->
		<script src="assets/js/bootstrap-image-gallery.min.js"></script>
		<!-- Google map  -->
		<?php
	endif; ?>
	
	<!-- Template main javascript -->
	<script src="assets/js/main.js"></script>

	<?php
    if (basename($_SERVER['PHP_SELF']) === 'index.php') : ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGv-o_2qb4JgXVstf4AOT-WK1gwbPdzGo&callback=initMap"></script>
		<?php
	endif; ?>
	
    <!-- TODO Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-80312632-2', 'auto');
        ga('send', 'pageview');
    
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 550) {
                    $('.backtotopbutton').fadeIn();
                } else {
                    $('.backtotopbutton').fadeOut();
                }
            });
            $('.backtotopbutton').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
    
            $('.facebookpager').fadeOut();
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 200) {
                    if ($(window).width() >= 900) {
                        $('.facebookpager').fadeIn();
                    }
                } else {
                    $('.facebookpager').fadeOut();
                }
            });
    
            location.hash && $(location.hash + '.collapse').collapse('show');
    
    
            $("img.swap-audio").click(function (event) {
                $(this).replaceWith('<audio autoplay controls><source src="/media/hang/mp3/' + $(this).attr('alt') + '.mp3" type="audio/mpeg"></audio>');
            });
        });
    
        $('#a_kepek').click(function() {
            $('#li_kepek').find('a').trigger('click');
        });
        $('#a_hangok').click(function() {
            $('#li_hangok').find('a').trigger('click');
        });
        $('#a_enek').click(function() {
            $('#li_enek').find('a').trigger('click');
        });
        $('#a_gyuli').click(function() {
            $('#heading1_1').find('a').trigger('click');
        });
        $('#a_heading').click(function() {
            $('#heading2_4').find('a').trigger('click');
        });
    </script>
</body>
</html>
