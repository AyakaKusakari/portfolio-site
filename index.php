<?php get_header(); ?>

	<header id="header">
		<div class="inner">

			<h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></h1>

			<nav class="header-nav">
                <ul class="header-list">
                    <li class="menu-item"><a href="#">Home</a></li>
                    <li class="menu-item"><a href="#about">About</a></li>
                    <li class="menu-item"><a href="#skills">Skills</a></li>
                    <li class="menu-item"><a href="#works">Works</a></li>
					<li class="menu-item"><a href="#blog">Blog</a></li>
                    <li class="menu-item"><a href="#contact">Contact</a></li>
                </ul>
			</nav><!-- header-nav -->
			
			<div class="drawer drawer--right">
                    
                <button type="button" class="drawer-toggle drawer-hamburger">
                    <span class="sr-only">toggle navigation</span>
                    <span class="drawer-hamburger-icon"></span>
                </button><!-- /drawer-hamburger -->
                
                <nav class="drawer-nav" role="navigation">
                    <ul class="drawer-menu">
                        <li><a class="drawer-menu-item" href="#">Home</a></li>
                        <li><a class="drawer-menu-item" href="#about">About</a></li>
                        <li><a class="drawer-menu-item" href="#skills">Skills</a></li>
                        <li><a class="drawer-menu-item" href="#works">Works</a></li>
						<li><a class="drawer-menu-item" href="#blog">Blog</a></li>
                        <li><a class="drawer-menu-item" href="#contact">Contact</a></li>
                    </ul>
                </nav><!-- /drawer-nav -->

            </div><!-- /drawer -->

		</div><!-- /inner -->
	</header><!-- /header -->
	
	<div id="main">

		<div class="main-txt wow fadeIn" data-wow-delay="0.5s">Welcome to <br class="brsp">My Portfolio</div>

	</div><!-- /main -->

	<div id="about">
		<div class="inner">

			<h2 class="contents-title">About<span class="title-back">About</span></h2>

			<div class="about-items wow fadeIn" data-wow-delay="0.5s">

			<div class="about-left">

				<div class="about-item-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/profile.JPG" alt="profile">
				</div>

				<div class="sns-wrapper">
					<a class="sns-icon" href="https://twitter.com/wayasblog" target="_blank"><i class="fab fa-twitter fa-fw"></i>Twitter</a>
					<a class="sns-icon" href="https://github.com/AyakaKusakari" target="_blank"><i class="fab fa-github fa-fw"></i>GitHub</a>
					<a class="sns-icon" href="https://wayasblog.com" target="_blank"><i class="fas fa-blog fa-fw"></i>BLOG</a>
				</div>

				</div>
	
				<div class="about-item-txt">

					<p class="space">はじめまして、草苅 彩香（くさかり あやか）です。</p>
					<p>【経歴】</p>
					<p class="bold">2011年3月：立教大学 社会学部 社会学科 卒業</p>
					<p class="bold">2011年4月〜2015年7月：飲料メーカー（営業職）</p>
					<p class="indent">ドリンクディスペンサーやショーケースの営業担当として、新規の顧客開拓・既存の取引先への提案等に従事しました。</p>
					<p class="indent">当時の営業部の課題は、なかなか新規顧客開拓ができないこと。</p>
					<p class="indent">既存取引のほとんどが飲食店だったのに対し、「清涼飲料水は飲食店で販売する」という発想を転換することで、異業種への営業に成功しました。</p>
					<p class="indent">この経験から「<span class="red-bold">固定概念を捨て、柔軟な発想を持つこと</span>」が身に付きました。</p>
					<p class="bold">2017年12月〜2019年11月：電気機器メーカー（事務職 / 契約社員）</p>
					<p class="indent">約50名いる部署のサポートスタッフとして、一般事務を担当。<br>予算・実績管理や工数管理・集計、社内勉強会の事務局など、幅広い業務に従事しました。</p>
					<p class="indent">課題は、工数集計に余計な時間がかかっていた上に、計算が多く、人的ミスが発生しやすいことでした。</p>
					<p class="indent">エクセルでの単純作業が多いことに着目し、VBAで効率化することで、作業全体の工数を約70％削減に成功しました。また、計算における人的ミスが減りました。</p>
					<p class="indent">前任者から引き継いだ業務をただこなすのではなく、「<span class="red-bold">常に考えて改善しながら仕事をする</span>」ことが身に付きました。<br>もともとVBAの知識はゼロでしたが、詳しい人に教えてもらいながら行うことで「<span class="red-bold">周りとコミュニケーションを取って問題を解決する力</span>」も備わりました。</p>
					<p class="bold">2020年1月〜3月：職業訓練（Java＆Python講座）</p>
					<p class="indent">ITパスポート試験対策、Java、SQL、Pythonを学習できる講座に３か月間通い、一通りの基礎を学習しました。</p>
					<p class="indent">サーバーサイドの技術を習得することで、フロントエンドの理解がより深まりました。</p>
					<p class="indent space">また、通学中にITパスポート試験に合格することができました。</p>
					<p>【コメント】</p>
					<p>2019年1月からプログラミング学習を開始しました。</p>
					<p>電気機器メーカー在職中、プログラミングを使って業務の効率化ができることを体験して以来、プログラミングに興味を持ちました。</p>
					<p class="space">現在はフロントエンドの技術やWebデザインを習得中で、開発工程を幅広く経験し、多くの人の役に立ちたいと考えております。</p>
					<p>【学習した書籍】</p>
					<p>・WordPressの教科書 Ver.4.x対応版<br>・Web制作者のためのSassの教科書<br>・Web制作者のためのGitHubの教科書<br>・ノンデザイナーズ・デザインブック<br>・なるほどデザイン</p>
					
				</div><!-- /about-item-txt -->

			</div><!-- /about-items -->

		</div><!-- /inner -->
	</div><!-- /about -->

	<div id="skills">
		<div class="inner">

			<h2 class="contents-title">Skills<span class="title-back">Skills</span></h2>
			<p class="contents-description">2019年1月以降に習得したスキルの一覧です。</p>

			<div class="skills-items">

				<div class="skills-item wow zoomIn">

					<i class="fab fa-html5 skills-logo"></i>
					<h3 class="skills-item-title">HTML5</h3>
					<div class="skills-item-txt">
						<p>０からのコーディングが可能です。デザインカンプからのコーディング経験もございます。</p>
					</div>

				</div><!-- /skills-item -->

				<div class="skills-item wow zoomIn">

					<i class="fab fa-css3 skills-logo"></i>
					<h3 class="skills-item-title">CSS3</h3>
					<div class="skills-item-txt">
						<p>レスポンシブデザインでのページ作成、フレームワークを使用したページの実装が可能です。</p>
					</div>

				</div><!-- /skills-item -->

				<div class="skills-item wow zoomIn">

					<i class="fab fa-js-square skills-logo"></i>
					<h3 class="skills-item-title">JavaScript</h3>
					<div class="skills-item-txt">
						<p>基本的な文法、基礎知識は学習サイトで学習済。jQueryで動きのあるWebサイト制作が可能です。</p>
					</div>

				</div><!-- /skills-item -->

				<div class="skills-item wow zoomIn">

					<i class="fab fa-wordpress skills-logo"></i>
					<h3 class="skills-item-title">WordPress</h3>
					<div class="skills-item-txt">
						<p>WordPressサイト運営、構築の経験があります。静的HTMLサイトのWordPress化が可能です。</p>
					</div>

				</div><!-- /skills-item -->
				
				<div class="skills-item wow zoomIn">

					<i class="fab fa-adobe skills-logo"></i>
					<h3 class="skills-item-title">Photoshop / XD</h3>
					<div class="skills-item-txt">
						<p>PhotoshopやXDの基本的な操作方法は習得済みです。デザインカンプからのコーディングが可能です。</p>
					</div>

				</div><!-- /skills-item -->
				
				<div class="skills-item wow zoomIn">

					<i class="fab fa-git skills-logo"></i>
					<h3 class="skills-item-title">Git</h3>
					<div class="skills-item-txt">
						<p>基本的なGitの操作ができます。制作したものは、GitHub上に公開しております。</p>
					</div>

				</div><!-- /skills-item -->
				
				<div class="skills-item wow zoomIn">

					<i class="fab fa-gulp skills-logo"></i>
					<h3 class="skills-item-title">gulp</h3>
					<div class="skills-item-txt">
						<p>コマンドラインの基礎、gulpの環境構築、Sassのコンパイルが可能です。</p>
					</div>

				</div><!-- /skills-item -->

				<div class="skills-item wow zoomIn">

					<i class="fas fa-chart-line skills-logo"></i>
					<h3 class="skills-item-title">SEO</h3>
					<div class="skills-item-txt">
						<p>個人ブログを運営しており、SEOの知識があります。SEOを意識したサイト制作、記事執筆が可能です。</p>
					</div>

				</div><!-- /skills-item -->

			</div><!-- /skills-items -->

		</div><!-- /inner -->
	</div><!-- /skills -->

	<div id="works">
		<div class="inner">

            <h2 class="contents-title">Works<span class="title-back">Works</span></h2>
			<p class="contents-description">2019年1月以降の制作物です。<br>クリックすると、詳細ページに移動します。</p>
            
            <?php
            //記事があればentriesブロック以下を表示
            if (have_posts() ) : ?>

			<div class="works-content">

                <?php
                //記事数ぶんループ
                while ( have_posts() ) :
                the_post(); ?>

				<a href="<?php the_permalink(); ?>" class="works-item wow fadeIn" data-wow-delay="0.5s">
	
					<div class="works-item-img">
                        <?php 
                        the_post_thumbnail('large');
                        ?>
					</div>
		
					<div class="works-item-body">
	
						<div class="works-item-tag">
                            <?php
                            // カテゴリー１つ目の名前を表示
                            $category = get_the_category();
                            if ($category[0] ) {
                            echo '<div class="entry-item-tag">' . $category[0]->cat_name . '</div><!-- /entry-item-tag -->';
                            }
                            ?>
                        </div>
	
						<h3 class="works-item-title"><?php the_title(); //タイトルを表示 ?></h3>
	
						<div class="works-item-excerpt">
                            <?php the_excerpt(); //抜粋を表示 ?>
						</div>
	
					</div><!-- /works-item-body -->
	
                </a><!-- /works-item -->
                
                <?php
                endwhile;
                ?>

            </div><!-- /works-content -->
            
            <?php endif; ?>
			
		</div><!-- /inner -->	
	</div><!-- /works -->

	<div id="blog">
		<div class="inner">

			<h2 class="contents-title">Blog<span class="title-back">Blog</span></h2>
			<p class="contents-description">2019年2月から個人ブログの運営を開始しました。<a href="https://wayasblog.com" target="_blank">» ブログへのリンク</a><br>ジャンルはプログラミング・おすすめの本などで、最高PVは20,000PV/月。<br>SEOやWebライティングの知識が得られました。<br>GoogleアナリティクスやGoogle Search Consoleを使用して、サイトの分析もしております。</p>
			<p class="contents-description">プログラミング学習で学んだことをまとめた記事の一覧です。</p>

			<div class="blog-items">
	
				<div class="blog-item wow fadeIn" data-wow-delay="0.5s">
	
					<div class="blog-link">
						<a href="https://wayasblog.com/bootstrap-template-canvas/" target="_blank">
							<div class="blog-link-box">
								<div class="blog-img-box">
									<div style="background-image: url('https://wayasblog.com/wp-content/uploads/2019/08/bootstrap-e1564713915720.jpg');">
									</div>
								</div>
								<div class="blog-text-box">
									<p class="blog-title">Bootstrapのテンプレート「Canvas」の使い方【爆速コーディング可能】</p>
								</div>
							</div>
						</a>
					</div><!-- blog-link -->
		
					<div class="blog-item-body">
	
						<p>Bootstrapのテンプレート「Canvas」の使い方を解説した記事です。<br>「bootstrap canvas テンプレート」、「canvas テンプレート 使い方」というキーワードで検索順位１位を獲得。<br>多くの方から参考になったというコメントをいただいております。</p>
	
					</div>
	
				</div><!-- blog-item -->

				<div class="blog-item wow fadeIn" data-wow-delay="0.5s">
	
					<div class="blog-link">
						<a href="https://wayasblog.com/cocoon-source-code/" target="_blank">
							<div class="blog-link-box">
								<div class="blog-img-box">
									<div style="background-image: url('https://wayasblog.com/wp-content/uploads/2019/11/clement-h-95YRwf6CNw8-unsplash-e1573102793176.jpg');">
									</div>
								</div>
								<div class="blog-text-box">
									<p class="blog-title">【Cocoon】記事内にソースコードを埋め込む方法【テンプレあり】</p>
								</div>
							</div>
						</a>
					</div><!-- blog-link -->
		
					<div class="blog-item-body">
	
						<p>プログラミング学習をアウトプットするため、ブログテーマ「Cocoon」にソースコードを埋め込む方法の解説記事です。<br>ただ埋め込むだけでなく、左上に何のコードなのかをわかりやすいようにカスタマイズしました。<br>「cocoon ソースコード」というキーワードで検索順位４位を獲得。</p>
	
					</div>
	
				</div><!-- blog-item -->


				<div class="blog-item wow fadeIn" data-wow-delay="0.5s">
	
					<div class="blog-link">
						<a href="https://wayasblog.com/sass-textbook/" target="_blank">
							<div class="blog-link-box">
								<div class="blog-img-box">
									<div style="background-image: url('https://wayasblog.com/wp-content/uploads/2019/11/sass-textbook.jpg');">
									</div>
								</div>
								<div class="blog-text-box">
									<p class="blog-title">【覚えるべき技５選】Web制作者のためのSassの教科書【備忘録】</p>
								</div>
							</div>
						</a>
					</div><!-- blog-link -->
		
					<div class="blog-item-body">
	
						<p>「Web制作者のためのSassの教科書」で学んだことをアウトプットしました。<br>他人に教えるように記事にすることで、知識が定着しました。<br>また、この本でSassの便利さを知り、Sassを使うようになりました。</p>
	
					</div>
	
				</div><!-- blog-item -->

				<div class="blog-item wow fadeIn" data-wow-delay="0.5s">
	
					<div class="blog-link">
						<a href="https://wayasblog.com/gulp-sass-compile/" target="_blank">
							<div class="blog-link-box">
								<div class="blog-img-box">
									<div style="background-image: url('https://wayasblog.com/wp-content/uploads/2020/03/gulp-sass-compile.jpg');">
									</div>
								</div>
								<div class="blog-text-box">
									<p class="blog-title">【初心者向け】SassをGulpで自動コンパイルする方法【作業効率爆上がり】</p>
								</div>
							</div>
						</a>
					</div><!-- blog-link -->
		
					<div class="blog-item-body">
	
						<p>Sassを学んだあとに、Gulpで自動コンパイルする方法を学びました。<br>非常に便利だったので、環境構築からの手順をまとめました。<br>さらに、Gulpでブラウザ自動更新をしてコーディングを効率化する方法についても学び、アウトプットしました。</p>
	
					</div>
	
				</div><!-- blog-item -->

				<div class="blog-item wow fadeIn" data-wow-delay="0.5s">
	
					<div class="blog-link">
						<a href="https://wayasblog.com/wow-animation/" target="_blank">
							<div class="blog-link-box">
								<div class="blog-img-box">
									<div style="background-image: url('https://wayasblog.com/wp-content/uploads/2020/01/wow-eyecatch-e1580467782216.jpg');">
									</div>
								</div>
								<div class="blog-text-box">
									<p class="blog-title">【WOW】サイトにアニメーションをつける簡単な方法【コピペOK / jQuery不要】</p>
								</div>
							</div>
						</a>
					</div><!-- blog-link -->
		
					<div class="blog-item-body">
	
						<p>「wow.js」と「Animate.css」を使用してサイトに動きを出す方法を学んだので、アウトプットするために記事を書きました。<br>「CodePen」を使用してデモを埋め込み、視覚的にわかりやすいように工夫しました。</p>
	
					</div>
	
				</div><!-- blog-item -->

				<div class="blog-item wow fadeIn" data-wow-delay="0.5s">
	
					<div class="blog-link">
						<a href="https://wayasblog.com/github-upload/" target="_blank">
							<div class="blog-link-box">
								<div class="blog-img-box">
									<div style="background-image: url('https://wayasblog.com/wp-content/uploads/2020/03/github-eyecatch-1.jpg');">
									</div>
								</div>
								<div class="blog-text-box">
									<p class="blog-title">【完全初心者向け】GitHubにソースコードをアップロードする手順</p>
								</div>
							</div>
						</a>
					</div><!-- blog-link -->
		
					<div class="blog-item-body">
	
						<p>「Web制作者のためのGitHubの教科書」で学んだことをアウトプットしました。「GitHub」で自分自身がつまづいた経験を踏まえ、わかりやすくまとめました。<br>①Gitのインストール、②GitHubへのpush、③cloneからpushを解説しています。</p>
	
					</div>
	
				</div><!-- blog-item -->

			</div><!-- /blog-items -->
			
		</div><!-- /inner -->
	</div><!-- /blog -->

	<div id="contact">
		<div class="inner">

			<h2 class="contents-title">Contact<span class="title-back">Contact</span></h2>
			
			<?php echo apply_filters('the_content', '[contact-form-7 id="69" title="コンタクトフォーム"]'); ?>			

		</div><!-- /inner -->
	</div><!-- /contact -->

<?php get_footer(); ?>