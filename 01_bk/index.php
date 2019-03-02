<?php get_header(); ?>

<div id="top_content">
	<div id="main_v" class="top_slide">
		<div class="inner">
			<div class="item"><a href="<?php bloginfo('url'); ?>/seko"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide1.jpg" alt="外壁屋根塗装　創業69年の歴史" class="center-block" width="1070" height="470"></a>
			</div>
			<div class="item"><a href="<?php bloginfo('url'); ?>/asecplan/p_re"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide2.jpg" alt="プロタイムズ敦賀店の表彰実績" class="center-block" width="1070" height="470"></a>
			</div>
			<div class="item"><a href="<?php bloginfo('url'); ?>/asecplan/p_muki"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide3.jpg" alt="プラチナ無機シリーズ" class="center-block" width="1070" height="470"></a>
			</div>
			<div class="item"><a href="<?php bloginfo('url'); ?>/hyosyo"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide4.jpg" alt="超低汚染プラチナリファイン2000MF" class="center-block" width="1070" height="470"></a>
			</div>
		</div>
	</div>

<!--<div class="oshirase">
<strong>◆◇◆◇　ゴールデンウィーク休業のご案内　◆◇◆◇</strong><br />
誠に勝手ながら、2018年4月29日（日）～ 2018年5月6日（日）は休業させていただきます。<br />
通常営業は、5月7日（月）からとなります。<br />
休暇中にいただいたお問い合わせについては、通常営業日より順次対応させていただきますので、ご了承ください。<br />
今後も変わらぬご愛顧をどうぞよろしくお願いいたします。
</div>-->

<section id="t_seminar" class="wrap_inner">

<?php if (is_mobile()) : ?>

<?php else: ?>

<div class="col-sm-3">
<a href="/seminar"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/bnr_seminar.jpg" class="img-responsive center-block mb20"></a>
</div>

<?php endif; ?>

<img src="<?php echo get_template_directory_uri(); ?>/page_image/top/seminar_main.jpg" class="img-responsive center-block col-sm-4 mb20">

		<!-- ======================セミナーここから======================= -->
		<div class="col-sm-5">
			<div class="top_seminar_right">
				<h2 class="event_tit">スケジュール</h2>
				<?php
				$args = array(
					'post_type' => 'event', /* 投稿タイプ */
					'posts_per_page' => 2 /* 件数表示 */
				);
				?>
				<?php query_posts( $args ); ?>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post();	/* ループ開始 */ ?>
				<div class="txt">

					<a href="<?php the_permalink() ?>" class="opacity">
						<p class="date">
							<span class="col-sm-5 col-xs-12">
								<?php echo post_custom( 'event_date' ); ?>
							</span>
							<span class="col-sm-7">
								<?php echo post_custom( 'event_time' ); ?>
							</span>
						</p>
						<p class="event_place">
							<?php echo post_custom( 'event_place' ); ?> <img src="http://www.okapain.net/wp-content/themes/gaiheki/page_image/seminar/img/btn_syosai.jpg" width="122" height="26" alt="詳細・お申し込み" data-pin-nopin="true">
						</p>
					</a>

				</div>
				<?php endwhile; ?>
				<?php endif; ?>
<a href="/seminar"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/btn_event.jpg" class="img-responsive center-block mb20">

			</div>
		</div>

		<!-- =====================セミナーここまで======================= -->
	</section> <br clear="all"/>




	<!--<section id="t_news" class="wrap_inner">
		<h2 class="t_tit">新着情報</h2>
		<ul>
			<?php
     global $post;
     $my_posts= get_posts(array(
     'post_type' => array('seko','voice'),
     'numberposts' => 3
     ));
     foreach($my_posts as $post):setup_postdata($post);
     $cate = esc_html(get_post_type_object(get_post_type())->name);
     $post_type = esc_html( get_post_type_object( get_post_type() )->label );
?>
			<?php if($cate == ('seko')) {
	echo '<li><span class="stanp seko">施工事例</span>'. esc_html(get_the_time('Y.m.d'). post_custom('seko_city') . post_custom('seko_name')).'　<span class="tit">'.esc_html(get_the_title()).'</span></li>';}
	elseif($cate == ('voice')) {
	echo '<li><span class="stanp cust">お客様の声</span>'. esc_html(get_the_time('Y.m.d'). post_custom('voice_city') . post_custom('voice_name')).'　<span class="tit">'.esc_html(get_the_title()).'</span></li>';}?>
			<?php endforeach; ?>
		</ul>
	</section> -->

	<!-- =====================施工事例======================= -->
	<section id="t_seko" class="wrap_inner container-fluid">
		<h2 class="t_tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/icon_seko.svg">岡本ペンキ店の外壁・屋根塗装　施工事例</h2>
		<?php if(is_mobile()) { ?>
		<?php
		$args = array(
			'post_type' => 'seko', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 2 /* 件数表示 */
		);
		?>
		<?php } else { ?>
		<?php
		$args = array(
			'post_type' => 'seko', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 4 /* 件数表示 */
		);
		?>
		<?php } ?>
		<?php query_posts( $args ); ?>
		<div class="row">
			<section class="box col-sm-12">
				<?php if (have_posts()) : ?>
				<ul class="row">
					<?php while (have_posts()) : the_post();
/* ループ開始 */ ?>
					<?php if(is_mobile()) { ?>
					<li class="box col-xs-6">
						<?php } else { ?>
						<li class="box col-xs-3">
							<?php } ?>

							<p class="pic">
								<a href="<?php echo esc_html(get_the_permalink());?>">
									<?php
									$before_pic = get_field( 'before_pic' );
									$after_pic = get_field( 'after_pic' );
									if ( post_custom( 'seko_after_image' ) ) {
										printf(
											'%s',
											gr_get_image(
												'seko_after_image',
												array( 'width' => 260, 'alt' => esc_attr( post_custom( 'seko_comment' ) ), 'class' => 'img-responsive center-block' )
											) );
									} elseif ( $after_pic ) {
										printf(
											'%s',
											gr_get_image(
												'after_pic',
												array( 'width' => 260, 'alt' => esc_attr( post_custom( 'seko_comment' ) ), 'class' => 'img-responsive center-block' )
											) );
									}elseif($before_pic){
										printf(
											'%s',
											gr_get_image(
												'before_pic',
												array( 'width' => 260, 'alt' => esc_attr( post_custom( 'seko_comment' ) ), 'class' => 'img-responsive center-block' )
											) );
									}
									?>
							<?php
								$stamp = get_field_object( 'stamp' ); //フィールドの設定情報を取得
								$value = $stamp['value']; //選択された値を取得
								$label = $stamp['choices'][ $value ];//選択された表示名（ラベル）を取得
							if($stamp){
								if($value != 'stamp-no'){
									echo '<img src="'.get_template_directory_uri().'/page_image/seko/' . $value . '.png" alt="'.$dir_array[ $value ].'" class="stamp">';
							}}
							?>

							<?php
								$stamp = get_field_object( 'stamp' ); //フィールドの設定情報を取得
								$value = $stamp['value']; //選択された値を取得
								$label = $stamp['choices'][ $value ];//選択された表示名（ラベル）を取得
							if($stamp){
								if($value != 'stamp-no'){
									echo '<img src="'.get_template_directory_uri().'/page_image/seko/' . $value . '.png" alt="'.$dir_array[ $value ].'" class="stamp">';
							}}
							?>
								</a>
							</p>
							<p class="name">

								<?php
								$seko_city = post_custom( 'seko_city' );
								$seko_name = post_custom( 'seko_name' );
								$city = get_field( 'city' );
								$cust_name = get_field( 'cust_name' );
								if ( $seko_name || $seko_city ) {
									echo esc_html( post_custom( 'seko_city' ) ) . esc_html( post_custom( 'seko_name' ) );
								} elseif ( $city || $cust_name ) {
									echo $city . $cust_name;
								}
								?>
							</p>
							<p class="tit">
								<a href="<?php echo esc_html(get_the_permalink());?>">
									<?php echo esc_html(get_the_title()); ?>
								</a>
							</p>
							<?
							if(post_custom( 'seko_icon' )){
					$text = post_custom('seko_icon');
					if(strstr($text,"OBさんからご紹介")){ ?>
							<span class="icon ob">OBさんからご紹介</span>
							<? }
					if(strstr($text,"HPからのお問い合わせ")){ ?>
							<span class="icon hp">HPからのお問い合わせ</span>
							<? }}?>
							<?php
							$fields = get_field_objects( $post_id );
							$dir_array = $fields[ "icon" ][ "choices" ];
							$check = get_field( 'icon' );
							if ( $check ) {
								foreach ( $check as $value ):
									echo '<span class="icon ' . $value . '">' . $dir_array[ $value ] . '</span>';
								endforeach;
							}
							?>


						</li>
						<?php endwhile; ?>
				</ul>
				<?php else: ?>
				<p class="no_data">現在準備中です</p>
				<?php endif; ?>
			</section>

			<?php wp_reset_query(); ?>
		</div>
		<p class="more"><a href="/seko" class="btn">施工事例一覧を見る</a>
		</p>
	</section>


	<section id="t_genba">
		<div class="container-fluid wrap_inner">
			<h2 class="t_tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/icon_genba.svg" alt="アイコン">現場日記</h2>
			<?php

			function get_the_post_image_id( $post_id ) {
				$attachments = get_children( array( 'post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'posts_per_page' => 1 ) );
				if ( is_array( $attachments ) ) {
					foreach ( $attachments as $attachments ) {
						$imgL = wp_get_attachment_image_src( $attachments->ID, 'large', array( 'class' => 'alignleft' ) );
						echo '<p class="pic"><span class="sp_pic">' . wp_get_attachment_image( $attachments->ID, 'large', false, array( 'class' => 'img-responsive center-block' ) ) . '</span></p>';
					}
				}
			}
			$args = array(
				'post_type' => 'genbanikki', /* 投稿タイプ */
				'posts_per_page' => 3 /* 件数表示 */
			);
			query_posts( $args );
			if ( have_posts() ):
				?>
			<ul class="row">
				<?php while (have_posts()) : the_post();
/* ループ開始 */ ?>
				<li class="col-xs-4">
					<p class="name">
						<span class="date">
							<?php the_time('Y年n月j日'); ?>
						</span>
					</p>
					<a href="<?php echo esc_html(get_the_permalink());?>">
						<p class="s_tit">
							<?php echo esc_html(get_the_title()); ?>
						</p>

						<div class="trim">
							<?php get_the_post_image_id(get_the_ID()); ?>
						</div>
					</a>
					<p class="detail">
						<?php echo mb_substr(get_the_excerpt(), 0, 30); ?>...</p>
					<p class="more"><a href="<?php echo esc_html(get_the_permalink());?>">続きを読む>></a>
					</p>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php else: ?>
			<p class="no_data">現在準備中です</p>
			<?php endif; ?>
		</div>
		<p class="mores"><a href="/genbanikki" class="btn">現場日記一覧を見る</a>
		</p>
	</section>


	<aside class="t_bnr1">
		<div class="wrap_inner container-fluid">
			<ul class="row">
				<li class="col-sm-12 col-xs-12 mb20"> <a href="/color"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sp/bnr_color.png" width="580" height="180" alt="カラーシミュレーション" class="pc_none img-responsive center-block"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_color.png" width="1060" height="125" alt="カラーシミュレーション" class="sp_none img-responsive center-block"></a> </li>
				<li class="col-sm-6 col-xs-12 mb20"> <a href="/iroerabi"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sp/bnr_iroerabi.png" width="580" height="180" alt="外壁塗装の色選び" class="pc_none img-responsive center-block"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_iroerabi.png" width="530" height="125" alt="外壁塗装の色選び" class="sp_none img-responsive center-block mb20"></a> </li>
				<li class="col-sm-6 col-xs-12 mb20"> <a href="/iromihon"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sp/bnr_colorvari.png" width="580" height="180" alt="アステックペイントの豊富なカラーバリエーション" class="pc_none img-responsive center-block"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_colorvari.png" width="530" height="125" alt="アステックペイントの豊富なカラーバリエーション" class="sp_none img-responsive center-block mb20"></a> </li>
				<li class="col-sm-6 col-xs-12 mb20"> <a href="/point"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sp/bnr_point.png" width="580" height="180" alt="外壁塗装会社えらびに困っていませんか？業者選びの7つのポイント" class="pc_none img-responsive center-block"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_point.png" width="530" height="125" alt="外壁塗装会社えらびに困っていませんか？業者選びの7つのポイント" class="sp_none img-responsive center-block"></a> </li>
				<li class="col-sm-6 col-xs-12 mb20"> <a href="/nurikae"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sp/bnr_nurikae_s.png" width="580" height="180" alt="塗り替え時期の診断" class="pc_none img-responsive center-block"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_nurikae_s.png" width="530" height="125" alt="塗り替え時期の診断" class="sp_none img-responsive center-block"></a> </li>
			</ul>
		</div>
	</aside>

	<!--<aside class="t_bnr2">
		<div class="wrap_inner container-fluid">
			<h1 class="bnr_tit"><span class="icon">大人気</span>岡本ペンキ店　WEB限定キャンペーン</h1>
			<ul class="row">
				<li class="col-sm-3 col-xs-6"><a data-toggle="tooltip" title="準備中です"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/campaign/pc/bnr1.png" width="257" height="117" alt="シリコン" class="img-responsive sp_none"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/campaign/sp/bnr1.png" width="287" height="117" alt="シリコン" class="img-responsive pc_none"> </a></li>
				<li class="col-sm-3 col-xs-6"><a data-toggle="tooltip" title="準備中です"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/campaign/pc/bnr2.png" width="257" height="117" alt="フッ素" class="img-responsive sp_none"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/campaign/sp/bnr2.png" width="287" height="117" alt="フッ素" class="img-responsive pc_none"> </a></li>
				<li class="col-sm-3 col-xs-6"><a data-toggle="tooltip" title="準備中です"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/campaign/pc/bnr3.png" width="257" height="117" alt="ファイン4F" class="img-responsive sp_none"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/campaign/sp/bnr3.png" width="287" height="117" alt="ファイン4F" class="img-responsive pc_none"> </a></li>
				<li class="col-sm-3 col-xs-6"><a data-toggle="tooltip" title="準備中です"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/campaign/pc/bnr4.png" width="257" height="117" alt="塗料の値段" class="img-responsive sp_none"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/campaign/sp/bnr4.png" width="287" height="117" alt="塗料の値段" class="img-responsive pc_none"> </a></li>
			</ul>
		</div>
	</aside>-->


<div id="t_vu" class="wrap_inner container-fluid">
<div class="col-sm-6 col-xs-12 mb20">

<?php $args = array(
			'post_type' => 'voice', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 2 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<section id="t_voice" class="container-fluid wrap_inner">
		<h2 class="t_tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/icon_voice.svg" >お客様の声</h2>
		<?php if (have_posts()) : ?>
		<ul class="row">
			<?php while (have_posts()) : the_post();/* ループ開始 */ ?>
			<li class="box col-xs-12 col-sm-6">
				<p class="pic col-xs-6 col-lg-12">
					<a href="<?php the_permalink() ?>">
						<?php
						printf(
							'%s',
							gr_get_image(
								'voice_image01',
								array( 'width' => 332, 'alt' => esc_attr( post_custom( 'voice_alt01' ) ), 'class' => 'img-responsive center-block' )
							) );
						?>
					</a>
				</p>
				<p class="detail col-xs-6 col-lg-12">
					<span class="name">
						<?php if($text=post_custom('voice_city')){echo esc_html($text);}?>
						<?php if($text=post_custom('voice_name')){echo (esc_html($text ).'様');}?>
					</span>
					<span class="tit">
						<?php echo esc_html(get_the_title()); ?>
					</span>
				</p>
			</li>
			<?php endwhile; ?>
		</ul>
		<p class="more">他にももっとお客様の声があります！！<a href="/voice" class="btn">お客様の声一覧を見る</a>
		</p>
		<?php else: ?>
		<p class="no_data">現在準備中です</p>
		<?php endif;
			wp_reset_query(); ?>
</section>
</div>


<div class="col-sm-6 col-xs-12 mb20">

<?php $args = array(
			'post_type' => 'useful', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 2 /* 件数表示 */
			); ?>
<?php query_posts( $args ); ?>

<section id="t_voice" class="container-fluid wrap_inner">
<h2 class="t_tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/icon_useful.svg" >お役立ち情報</h2>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();/* ループ開始 */ ?>

<div id="t_useful" class="clearfix">
<div class="col-sm-5 col-xs-12 pict">
<img src="<?php echo catch_that_image(); ?>" class="center-block" />
</div>
<div class="col-sm-7">
<p>
<?php echo esc_html(get_the_title()); ?>
</p>
<a href="<?php the_permalink() ?>" class="useful_more">詳しく見る　></a>
</div>
</div>

<?php endwhile; ?>

<p class="more">他にももっとあります！！<a href="/useful" class="btn">お役立ち情報一覧を見る</a>
</p>
<?php else: ?>
<p class="no_data">現在準備中です</p>
<?php endif;
wp_reset_query(); ?>

</section>
</div>


</div><!-- //t_vu -->





	<aside class="t_bnr3">
		<div class="wrap_inner container-fluid">
			<h2 class="t_tit">プロタイムズ敦賀店サービス案内</h2>
			<ul class="row">
				<li class="col-sm-4 col-xs-12"><a href="<?php bloginfo('url'); ?>/plan"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sp/bnr_plan.png" width="580" height="180" alt="塗料プラン" class="pc_none img-responsive center-block"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_plan.png" width="350" alt="塗料プラン" class="sp_none img-responsive center-block" /></a>
				</li>
				<li class="col-sm-4 col-xs-12"><a href="<?php bloginfo('url'); ?>/asecplan"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sp/bnr_original.jpg" width="580" height="180" alt="プロタイムズオリジナル高耐久性塗料" class="pc_none img-responsive center-block"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_original.jpg" width="350" alt="プロタイムズオリジナル高耐久性塗料" class="sp_none img-responsive center-block" /></a>
				</li>
				<li class="col-sm-4 col-xs-12"><a href="<?php bloginfo('url'); ?>/loan"><img src="<?php echo get_template_directory_uri(); ?>/images/common/sp/bnr_loan.png" width="580" height="180" alt="5200円/月からの外壁塗装" class="pc_none img-responsive center-block"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_loan.png" width="350" alt="5200円/月からの外壁塗装" class="sp_none img-responsive center-block" /></a>
				</li>

			</ul>
		</div>
	</aside>

	<p class="t_pro_bnr"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/t_protimes_bnr_pc.png" alt="PROTIMESは全国120店舗" width="1070" height="746" class="img-responsive center-block sp_none">
	</p>



	<section id="t_about_protims" cite="container-fluid wrap_inner">
		<h2 class="t_tit">プロタイムズ　敦賀店</h2>
		<ul class="row">
			<li class="btn col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/company">会社概要</a>
			</li>
			<li class="btn col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/staff">スタッフ紹介</a>
			</li>
			<li class="btn col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/video">おすまいビデオ診断</a>
			</li>
			<li class="btn col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/flow">お問合わせの流れ</a>
			</li>
		</ul>
	</section>

	<div id="t_rj_bnr"><a href="https://reform-journal.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/bnr_reform-journal.png" alt="リフォームジャーナル" width="700" height="214" class="img-responsive center-block"></a>
	</div>

</div>
<?php get_footer(); ?>