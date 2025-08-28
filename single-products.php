<?php get_header();?>
<?php get_template_part('parts/header__block'); ?>

<?php get_breadcrumb(); ?>
<?php
$pageData = Get_queried_object();
$pageId = $pageData->ID;
the_post();?>
<main class="main_x">
	<div class="main_x__inner main_x--decore top_page_side_line">
		<?php get_template_part( 'parts/components/side_line' ); ?>
		<!-- Обложка + текст -->
		<?php $text_wrap = get_field('text_wrap'); ?>
		<div class="top_page">
			<div class="container">
				<div class="new_page__wrapper">
					<div class="new_page__content">
						<h1 class="title__"><?php the_title();?></h1>
						<div class="new_page__info">
							<!--<div class="new_page__info__date"></div>
							<div class="new_page__info__hash"></div>-->
							<?php if( $text_wrap['text'] ) :?>
							<div class="new_page__info__text _text">
								<?php echo $text_wrap['text']; ?>
							</div>
							<?php endif; ?>
							<div class="new_page__button">
								<a href="#callback-block" class="btn_style_1 btn_projects btn_default">Заказать бота</a>
							</div>
						</div>
					</div>
					<?php if( $text_wrap['image']['url'] ) :?>
					<div class="new_page__content_image">
						<p class="new_page__image_wrapper _image-wrapper">
							<img src="<?php echo esc_url( $text_wrap['image']['url'] ); ?>" alt="<?php the_title(); ?>" class="new_page__image" width="569" height="385">
						</p>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

<style>
._image-wrapper{color:inherit;display:block;overflow:hidden;position:relative;max-width:100%}._image-wrapper img{position:absolute;top:50%;left:50%;width:100%;height:auto;min-width:100%;min-height:100%;-o-object-fit:cover;object-fit:cover;transform:translate(-50%, -50%) scale(1.005)}._image-wrapper--contain img{max-width:100%;max-height:100%;-o-object-fit:contain;object-fit:contain}._wrapper{display:flex;flex-wrap:wrap;margin-top:-40px;margin-left:-40px}._wrapper>*{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px);margin-top:40px;margin-left:40px}._text{font-size:1.14285rem;line-height:1.375}@media screen and (max-width: 1050px){._text{font-size:1.07142rem}}._text>*+*{margin-top:1.35em}._text ul{padding-left:1.65rem;list-style-type:none;list-style-position:outside}._text ul li{position:relative}._text ul li:nth-child(n+2){margin-top:.5em}._text ul li::before{top:.05rem;left:-1.05rem;content:"•";position:absolute}._text ._check-list{padding-left:30px}._text ._check-list li:nth-child(n+2){margin-top:1em}._text ._check-list li::before{top:.2em;left:-30px;width:15px;height:15px;content:"";display:block;position:absolute;background:url("/wp-content/themes/iart_new/images/li-check.svg") center/contain no-repeat rgba(0,0,0,0);justify-content:center}._text a{color:#865dcf}._text a:hover{color:#fff}._text picture{width:100%;display:inline-block;text-align:center;line-height:0;border-radius:15px;vertical-align:middle}._text picture img{border-radius:15px}._text table{overflow:hidden;border-radius:15px;border-collapse:collapse}._text table td,._text table th{padding:5px 10px;background-color:#865dcf}._text table td:first-child,._text table th:first-child{padding-left:20px}@media screen and (max-width: 560px){._text table td:first-child,._text table th:first-child{padding-left:10px}}._text table td:last-child,._text table th:last-child{padding-right:20px}@media screen and (max-width: 560px){._text table td:last-child,._text table th:last-child{padding-right:10px}}._text table>:first-child>:first-child td,._text table>:first-child>:first-child th{padding-top:20px}._text table>:last-child>:last-child td,._text table>:last-child>:last-child th{padding-bottom:20px}@media screen and (max-width: 560px){._text table td{font-size:1rem}}._text ._columns{-moz-column-count:2;column-count:2;-moz-column-gap:20px;column-gap:20px}@media screen and (max-width: 560px){._text ._columns{-moz-column-count:1;column-count:1}}._text ._columns>*{color:#000;display:block;padding:1em 1.5em;border-radius:10px;background-color:#fff}._text ._columns>*+*,._text ._columns>*>*+*{margin-top:1.35em}._text ._columns>*>:first-child{color:#58bfcf;font-weight:600}._gradient{padding:1.8rem 6.8rem 2.6rem;border-radius:0px 20px 20px 20px;background-image:linear-gradient(0deg, #58bfcf 0%, #865dcf 100%);background-image:linear-gradient(0deg, #58bfcf 0%, #865dcf 33.3333%, #58bfcf 66.6666%, #865dcf 100%);background-size:100% 300%;background-position:center top;animation:grad-anim 8s linear 0s infinite}@media screen and (max-width: 1050px){._gradient{padding:1.8rem 4rem 2.6rem}}@media screen and (max-width: 720px){._gradient{padding:1.3rem 2.6rem 2.6rem}}._inner-heading{font-size:2rem;font-weight:600;line-height:1.15;margin-bottom:1.4286rem;letter-spacing:-0.02em}.new_page__wrapper{display:flex;flex-wrap:wrap;margin-top:-40px;margin-left:-40px;align-items:center}.new_page__wrapper>*{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px);margin-top:40px;margin-left:40px}@media screen and (max-width: 720px){.new_page__wrapper>*{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px);margin-top:40px;margin-left:40px}}.new_page__content .title__{font-size:3.3rem;line-height:1.3}@media screen and (max-width: 1050px){.new_page__content .title__{font-size:2.4rem}}@media screen and (max-width: 720px){.new_page__content .title__{font-size:2.1rem}}@media screen and (max-width: 560px){.new_page__content .title__{font-size:1.85714rem}}.new_page__info__text{flex-basis:100%;margin-right:20px;margin-bottom:20px}.new_page__info__buttons{display:flex;flex-wrap:wrap;flex-basis:100%;margin-right:20px;margin-bottom:10px}.new_page__info__buttons>*{margin-right:10px;margin-bottom:10px}.new_page__info__hash{flex-wrap:wrap}@media screen and (max-width: 1050px){.new_page__info__hash{font-size:12px}}.new_page__image_wrapper{height:386px;border-radius:5px}@media screen and (max-width: 1050px){.new_page__image_wrapper{height:300px}}@media screen and (max-width: 720px){.new_page__image_wrapper{height:400px}}@media screen and (max-width: 560px){.new_page__image_wrapper{height:259px}}.new-project{padding:3.3rem 0;counter-reset:new-project}@media screen and (max-width: 720px){.new-project{padding:2.4rem 0}}.new-project__items{display:flex;flex-wrap:wrap;margin-top:-7.9rem;margin-left:-40px}.new-project__items>*{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px);margin-top:7.9rem;margin-left:40px}@media screen and (max-width: 1050px){.new-project__items{margin-top:-5.5rem}}@media screen and (max-width: 720px){.new-project__items{margin-top:-3.5rem}}@media screen and (max-width: 1050px){.new-project__items>*{margin-top:5.5rem}}@media screen and (max-width: 720px){.new-project__items>*{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px);margin-top:3.5rem;margin-left:40px}}.new-project__counter:before{display:inline;content:counters(new-project, ".", decimal-leading-zero);font-size:1.42857rem;font-weight:400;padding-right:1.5rem;counter-increment:new-project}.new-project+*{margin-top:5rem}.new-project ._full{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px)}@media screen and (max-width: 560px){.featurettes__items{margin-top:-20px}}.featurettes__item{flex:1 1 calc(25% - 40px);max-width:calc(25% - 40px)}@media screen and (max-width: 1050px)and (min-width: 720.02px){.featurettes__item{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px)}}@media screen and (max-width: 720px)and (min-width: 560.02px){.featurettes__item{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px)}}@media screen and (max-width: 560px){.featurettes__item{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px);margin-top:20px;margin-left:40px}}.featurettes__image-wrapper,.featurettes__title{width:80px;height:80px;margin:0 auto 1.2rem;border-radius:8px;background-color:#fff}.featurettes__title{color:#865dcf;display:flex;font-size:20px;text-align:center;line-height:1.1;font-weight:500;align-items:center;justify-content:center}.featurettes__title span{font-size:.7em;margin-top:.2em;margin-right:.3em}.featurettes__text{font-size:1rem;text-align:center;line-height:1.35}._gradient .text-block__text{font-weight:600}.results._numbers-background{counter-reset:results}.results__item{flex:1 1 calc(33.3333% - 40px);max-width:calc(33.3333% - 40px);margin-top:40px;margin-left:40px}.results._center-lines .results__item:nth-child(3n+2){padding-left:3.5rem;padding-right:3.5rem;border-left:2px solid #865dcf;border-right:2px solid #865dcf}.results._numbers-background .results__item{position:relative;padding-top:7.15rem}.results._numbers-background .results__item::before{top:0;left:0;color:#865dcf;z-index:-1;opacity:.07;content:counters(results, ".", decimal-leading-zero);position:absolute;font-size:158px;line-height:1.1;font-weight:600;letter-spacing:-0.02em;counter-increment:results}.results._center-lines._numbers-background .results__item:nth-child(3n+2)::before{left:3.5rem}@media screen and (max-width: 1050px){.results__item{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px)}.results._center-lines .results__item:nth-child(3n+2){padding:30px 0;border-top:2px solid #865dcf;border-left:none;border-right:none;border-bottom:2px solid #865dcf}}.results__title{color:#865dcf;font-size:1.28571rem;font-weight:600;line-height:1.222;margin-bottom:1.4rem;letter-spacing:-0.02em}@media screen and (max-width: 1050px){.results__title{margin-bottom:1.1rem}}.cards_three .cards__wrapper>*{flex:1 1 calc(33.3333% - 40px);max-width:calc(33.3333% - 40px);margin-top:40px;margin-left:40px}@media screen and (max-width: 1050px)and (min-width: 720.02px){.cards_three .cards__wrapper>*{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px);margin-top:40px;margin-left:40px}}@media screen and (max-width: 720px)and (min-width: 560.02px){.cards_three .cards__wrapper>*{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px);margin-top:40px;margin-left:40px}}@media screen and (max-width: 560px){.cards_three .cards__wrapper>*{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px);margin-top:40px;margin-left:40px}}.cards__item{border:2px solid #222127;display:flex;padding:2.1rem 3.65rem 2.75rem;overflow:hidden;border-radius:12px;flex-direction:column;background-color:#18171d}@media screen and (max-width: 560px){.cards__item{padding:1.4rem 2rem 2rem}}.cards__item>*:nth-last-child(n+2){margin-bottom:2.1rem}@media screen and (max-width: 560px){.cards__item>*:nth-last-child(n+2){margin-bottom:1rem}}.cards_small-gap .cards__item>*:nth-last-child(n+2){margin-bottom:20px}.cards_small-gap .cards__item{padding:20px}.cards_white .cards__item{color:#18171d}.cards_white-glow .cards__item{border:0;box-shadow:0 0 20px rgba(244,244,244,.4)}.cards_no-glow .cards__item{border:0;position:relative;box-shadow:none}.cards_no-glow .cards__item::before{top:0;left:0;right:0;bottom:0;content:"";position:absolute;background:linear-gradient(-90deg, #58bfcf 0%, #865dcf 100%) center/cover no-repeat rgba(0,0,0,0)}.cards_no-glow .cards__item::after{top:2px;left:2px;right:2px;bottom:2px;content:"";position:absolute;border-radius:10px;background-color:#18171d}.cards_no-glow .cards__item>*{z-index:1;position:relative}.cards_white .cards__item{border:0;box-shadow:none;background-color:#fff}.cards_white-border .cards__item{border:1px solid #fff}.cards_white-glow .cards__item:hover{box-shadow:0 0 20px rgba(244,244,244,.4)}.cards_no-glow .cards__item:hover,.cards_white .cards__item:hover{box-shadow:none}@media screen and (min-width: 1050.02px){.cards__item{box-shadow:0 0 10px rgba(0,0,0,0),inset 0 0 10px rgba(0,0,0,0);transition:border-color .5s ease-out,box-shadow .5s ease-out}.cards__item:hover{border-color:#865dcf;box-shadow:0 0 30px #4c3e64,inset 0 0 10px #4c3e64}}@media screen and (max-width: 720px){.cards__item{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px)}}.cards__image-wrapper{height:274px;max-width:none;margin-left:-3.65rem;margin-right:-3.65rem;border-radius:0}.cards_white .cards__image-wrapper{height:217px}.cards__image-wrapper:first-child{margin-top:-2.1rem;border-radius:12px 12px 0 0}.cards_small-gap .cards__image-wrapper:first-child{margin-top:0}.cards__image-wrapper:last-child{margin-top:auto;margin-bottom:-2.75rem;border-radius:0 0 12px 12px}.cards_small-gap .cards__image-wrapper:last-child{margin-bottom:0}.cards_small-gap .cards__image-wrapper{margin-left:0;margin-right:0;border-radius:8px}@media screen and (min-width: 1050.02px){.cards__image-wrapper::after{top:0;left:0;right:0;bottom:-30px;content:"";position:absolute;transition:box-shadow .5s ease-out;box-shadow:inset 0 0 10px rgba(0,0,0,0)}.cards__item:hover .cards__image-wrapper::after{box-shadow:inset 0 0 10px #4c3e64}.cards_white-glow .cards__item:hover .cards__image-wrapper::after,.cards_small-gap .cards__item:hover .cards__image-wrapper::after{box-shadow:inset 0 0 10px rgba(0,0,0,0)}}@media screen and (max-width: 1050px){.cards__image-wrapper{height:188px}}@media screen and (max-width: 720px){.cards__image-wrapper{height:274px}}@media screen and (max-width: 560px){.cards__image-wrapper{height:188px}}.cards__image{color:#18171d}@media screen and (min-width: 1050.02px){.cards__image{transition:transform .5s ease-out}.cards__item:hover .cards__image{transform:translate(-50%, -50%) scale(1.1)}}.cards__title{color:#f4f4f4;font-size:16px;font-weight:700;line-height:1.375}.cards__title span{color:#865dcf}.cards__text{padding:0}.cards>*:not(._inner-heading){margin-bottom:1.4286rem}@media screen and (max-width: 1050px){.image-cards__item{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px)}}@media screen and (max-width: 720px){.image-cards__cards{display:flex;flex-wrap:wrap;margin-top:-22px;margin-left:-22px}.image-cards__cards>*{flex:1 1 calc(50% - 22px);max-width:calc(50% - 22px);margin-top:22px;margin-left:22px}}.image-cards__card{display:flex;padding:1.2rem 2.15rem 1.5rem;font-size:14px;font-weight:600;line-height:1.23;align-items:center;border-radius:10px;background-color:#865dcf}@media screen and (max-width: 1050px){.image-cards__card{padding:1.1rem 1.55rem 1.4rem}}@media screen and (max-width: 1050px)and (min-width: 720.02px){.image-cards__card{flex:1 1 calc(33.3333% - 40px);max-width:calc(33.3333% - 40px)}}.image-cards__image-wrapper{height:100%;min-height:335px}@media screen and (max-width: 560px){.image-cards__image-wrapper{min-height:221px}}.image-cards__image{color:#18171d}.just-image__image-wrapper{overflow:hidden;border-radius:2.084vw}@media screen and (max-width: 560px){.just-image__image-wrapper{border-radius:10px}}.just-image__image{width:100%;height:auto;vertical-align:middle}.logos__text{font-size:16px;font-weight:600;margin-bottom:1.5rem}.logos__items{display:flex;flex-wrap:wrap;margin-top:-23px;margin-left:-23px}.logos__items>*{flex:1 1 calc(14.28571% - 23px);max-width:calc(14.28571% - 23px);margin-top:23px;margin-left:23px}@media screen and (max-width: 560px){.logos__items{display:flex;flex-wrap:wrap;margin-top:-17px;margin-left:-17px}.logos__items>*{flex:1 1 calc(33.3333% - 17px);max-width:calc(33.3333% - 17px);margin-top:17px;margin-left:17px}}.logos__image-wrapper{height:103px;display:flex;padding:1.5rem 1.2rem;flex-wrap:wrap;align-items:center;border-radius:10px;justify-content:center;background-color:#fff}@media screen and (max-width: 1050px)and (min-width: 720.02px){.logos__image-wrapper{flex:1 1 calc(20% - 40px);max-width:calc(20% - 40px)}}@media screen and (max-width: 720px)and (min-width: 560.02px){.logos__image-wrapper{flex:1 1 calc(25% - 40px);max-width:calc(25% - 40px)}}@media screen and (max-width: 560px){.logos__image-wrapper{height:78px;padding:1rem}}.logos__image{width:auto;height:auto;max-width:100%;max-height:100%}.cases__inner{height:0;position:relative;padding-bottom:50%;background-color:#865dcf}@media screen and (max-width: 560px){.cases__inner{padding-bottom:72%}}.cases__heading{top:50%;left:50%;position:absolute;transform:translate(-50%, -50%);margin-bottom:0}.reviews__item{color:#18171d;padding:2.6rem 3.65rem 3.65rem;max-width:calc(100% - 30px);border-radius:10px;background-color:#fff}@media screen and (min-width: 1050.02px){.reviews__item{transform:scale(1);transition:transform .15s ease-out}.reviews__item:hover{transform:scale(1.01)}}@media screen and (max-width: 720px){.reviews__item{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px)}}@media screen and (max-width: 1050px){.reviews__item{padding:1.7rem 2.45rem 2.3rem}}.reviews__author{color:#18171d;font-size:1.5rem;font-weight:600;line-height:1.222;letter-spacing:-0.02em}.reviews__position{color:#58bfcf;font-size:1.28571rem;margin-top:.4rem;font-weight:600;line-height:1.222;letter-spacing:-0.02em}.reviews__item:nth-child(2n+1) .reviews__position{color:#865dcf}.reviews__value{color:#865dcf;font-size:32px;margin-top:2rem;line-height:1;font-weight:500}.reviews__text{margin-top:1.4rem}@media screen and (max-width: 1050px){.reviews__text{margin-top:.8rem}}.examples{margin-top:-131px;margin-bottom:112px}.examples .page-category__title{text-align:left;margin-bottom:57px}.examples__wrapper{display:flex;flex-wrap:wrap;margin-top:-30px;margin-left:-50px}.examples__wrapper>*{flex:1 1 calc(20% - 50px);max-width:calc(20% - 50px);margin-top:30px;margin-left:50px}@media screen and (max-width: 1050px)and (min-width: 720.02px){.examples__wrapper{display:flex;flex-wrap:wrap;margin-top:-40px;margin-left:-40px}.examples__wrapper>*{flex:1 1 calc(33.3333% - 40px);max-width:calc(33.3333% - 40px);margin-top:40px;margin-left:40px}}@media screen and (max-width: 720px)and (min-width: 560.02px){.examples__wrapper{display:flex;flex-wrap:wrap;margin-top:-40px;margin-left:-40px}.examples__wrapper>*{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px);margin-top:40px;margin-left:40px}}@media screen and (max-width: 560px){.examples__wrapper{display:flex;flex-wrap:wrap;margin-top:-20px;margin-left:-40px}.examples__wrapper>*{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px);margin-top:20px;margin-left:40px}}.examples__item{color:#fff;display:flex;position:relative;font-size:14px;font-weight:500;line-height:1.214;align-items:center;text-decoration:none}@media screen and (min-width: 1050.02px){.examples__item::before{top:-5px;left:-5px;right:-15px;bottom:-5px;opacity:0;content:"";z-index:-1;position:absolute;transition:opacity .3s;border-radius:15px;background-color:#fff}.examples__item:hover::before{opacity:1}}.examples__image-wrapper{width:60px;height:60px;flex-shrink:0;border-radius:10px}.examples__title{color:inherit;margin-left:15px;text-decoration:none}@media screen and (min-width: 1050.02px){.examples__title{transition:color .3s}.examples__title:hover{color:#18171d}}.examples__title::before{top:0;left:0;right:0;bottom:0;content:"";display:block;position:absolute}.development-steps__items{display:flex;flex-wrap:wrap;margin-top:-30px;margin-left:-30px;counter-reset:dev-steps}.development-steps__items>*{flex:1 1 calc(100% - 30px);max-width:calc(100% - 30px);margin-top:30px;margin-left:30px}.development-steps__tab{color:#fff;width:100%;border:none;display:flex;padding:.85em 3.2em .85em 2.8em;position:relative;font-size:24px;text-align:left;line-height:1.2;font-weight:500;align-items:center;border-radius:10px;background-image:linear-gradient(0deg, #58bfcf 0%, #865dcf 100%)}@media screen and (max-width: 1050px)and (min-width: 720.02px){.development-steps__tab{font-size:21px}}@media screen and (max-width: 560px){.development-steps__tab{padding:.85em 2.2em .85em 1.7em;font-size:18px}}.development-steps__item:nth-child(2n+1) .development-steps__tab{background-image:linear-gradient(-90deg, #58bfcf 0%, #865dcf 100%)}.development-steps__item:nth-child(2n) .development-steps__tab{background-image:linear-gradient(0deg, #865dcf 0%, #58bfcf 100%)}.development-steps_gradient1 .development-steps__item:nth-child(2n) .development-steps__tab{background-image:linear-gradient(-90deg, #58bfcf 0%, #865dcf 100%)}.development-steps__tab::before{content:counter(dev-steps) ".";margin-right:.3em;counter-increment:dev-steps}.development-steps_no-counter .development-steps__tab::before{content:""}.development-steps__tab[data-toggle]::after{top:0;right:2.8em;width:.4em;bottom:0;height:.4em;margin:auto;content:"";display:block;position:absolute;transform:translateY(-25%) rotate(135deg) scaleY(-1);transition:.25s;border-right:3px solid #fff;border-bottom:3px solid #fff}@media screen and (max-width: 560px){.development-steps__tab[data-toggle]::after{right:1.7em}}.development-steps__tab[aria-expanded=true]::after{transform:translateY(25%) rotate(135deg) scaleX(-1)}.development-steps__tabpanel{opacity:0;display:grid;overflow:hidden;visibility:hidden;transition:grid-template-rows .3s,opacity .3s,visibility .3s;grid-template-rows:0fr}.development-steps__tabpanel.active{opacity:1;visibility:visible;grid-template-rows:1fr}.development-steps__grid-container{overflow:hidden}.development-steps__inner{color:#fff;margin:20px 0 0 120px;border:2px solid rgba(0,0,0,0);display:flex;padding:20px 30px;position:relative;align-items:center;border-radius:10px;background-clip:padding-box;background-color:#18171d}@media screen and (max-width: 1050px)and (min-width: 720.02px){.development-steps__inner{margin-left:110px}}@media screen and (max-width: 560px){.development-steps__inner{padding:15px 20px;margin-left:63px}}.development-steps_gradient1 .development-steps__inner{color:#18171d;background-color:rgba(0,0,0,0)}.development-steps__inner::before{top:-50%;left:-50px;width:50px;bottom:-50%;content:"";z-index:-2;position:absolute;transform:translateY(-50%) scaleX(0);border-left:1px solid #865dcf;border-bottom:1px solid #865dcf;border-radius:0 0 0 10px;transform-origin:0% 50%;transition:transform .3s ease-out .25s}@media screen and (max-width: 560px){.development-steps__inner::before{left:-30px;width:30px}}.development-steps__tabpanel.active .development-steps__inner::before{transform:translateY(-50%) scaleX(1);transition-delay:0s}.development-steps__inner::after{top:0;left:0;right:0;bottom:0;margin:-2px;opacity:0;content:"";z-index:-1;position:absolute;transition:opacity .3s ease-out 0s;border-radius:inherit}.development-steps__item:nth-child(2n+1) .development-steps__inner::after{background-image:linear-gradient(-90deg, #58bfcf 0%, #865dcf 100%)}.development-steps__item:nth-child(2n) .development-steps__inner::after{background-image:linear-gradient(0deg, #865dcf 0%, #58bfcf 100%)}.development-steps_gradient1 .development-steps__item:nth-child(2n+1) .development-steps__inner::after,.development-steps_gradient1 .development-steps__item:nth-child(2n) .development-steps__inner::after{background-image:none;background-color:#fff}.development-steps__tabpanel.active .development-steps__inner::after{opacity:1;transition-delay:.3s}.development-steps__icon{flex:0 0 auto;width:45px;height:45px;opacity:0;transform:translateX(-12.5px);transition:transform .3s ease-out 0s,opacity .3s ease-out 0s;margin-right:30px}@media screen and (max-width: 560px){.development-steps__icon{width:35px;height:35px;margin-right:20px}}.development-steps__tabpanel.active .development-steps__icon{opacity:1;transform:translateX(0);transition-delay:.4s,.4s}.development-steps__content{flex:1 1 0%;opacity:0;transform:translateX(-25px);transition:transform .3s ease-out 0s,opacity .3s ease-out 0s;transform-origin:0% 50%}.development-steps__tabpanel.active .development-steps__content{opacity:1;transform:translateX(0);transition-delay:.4s,.4s}.development-steps__content>*:nth-child(n+2){margin-top:.75em}.development-steps__title{color:inherit;font-size:24px;font-weight:500;line-height:1.1875;letter-spacing:.005em}@media screen and (max-width: 1050px)and (min-width: 720.02px){.development-steps__title{font-size:21px}}@media screen and (max-width: 560px){.development-steps__title{font-size:18px}}.development-steps__text{color:inherit;font-size:16px;margin-top:0 !important;font-weight:400;line-height:1.208;letter-spacing:.01em}@media screen and (max-width: 560px){.development-steps__text{font-size:14px}}.prices__items{text-align:center;justify-content:space-evenly;display:flex;flex-wrap:wrap;margin-top:-40px;margin-left:-40px}.prices__items>*{flex:1 1 calc(33.3333% - 40px);max-width:calc(33.3333% - 40px);margin-top:40px;margin-left:40px}@media screen and (max-width: 1050px)and (min-width: 720.02px){.prices__item{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px)}}@media screen and (max-width: 720px)and (min-width: 560.02px){.prices__item{flex:1 1 calc(50% - 40px);max-width:calc(50% - 40px)}}@media screen and (max-width: 560px){.prices__item{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px);margin-top:20px;margin-left:40px}}.prices__title{color:inherit;padding:20px 30px;font-size:32px;font-weight:500;line-height:1.1875;letter-spacing:.005em;background-color:#865dcf;border-top-left-radius:30px;border-top-right-radius:30px}@media screen and (max-width: 1050px)and (min-width: 720.02px){.prices__title{font-size:26px}}@media screen and (max-width: 720px)and (min-width: 560.02px){.prices__title{font-size:24px}}@media screen and (max-width: 560px){.prices__title{padding:15px 20px;font-size:22px}}.prices__value{color:#fff;padding:10px 30px 30px;font-size:42px;margin-top:-1px;font-weight:700;line-height:1.1875;letter-spacing:.005em;background-color:#865dcf;border-bottom-left-radius:30px;border-bottom-right-radius:30px}@media screen and (max-width: 1050px)and (min-width: 720.02px){.prices__value{font-size:36px}}@media screen and (max-width: 720px)and (min-width: 560.02px){.prices__value{font-size:32px}}@media screen and (max-width: 560px){.prices__value{padding:10px 20px 20px;font-size:28px}}.vision__inner{border:1px dotted #707070;padding:40px;position:relative;border-radius:10px;background-color:#18171d}@media screen and (max-width: 560px){.vision__inner{padding:20px}}.vision_primary-background .vision__inner{color:#fff;border:0;padding:20px;background-color:#865dcf}@media screen and (max-width: 1050px){.vision__item{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px)}}.vision__item._full{flex:1 1 calc(100% - 40px);max-width:calc(100% - 40px)}.vision__image-wrapper{overflow:hidden;border-radius:5px}.vision__image-wrapper._image-wrapper{min-height:300px}.vision__image{width:100%;vertical-align:middle}.vision__corner{width:27px;height:27px;position:absolute;background-color:#18171d}.vision__corner::before,.vision__corner::after{top:var(--p-t, 0);left:var(--p-l, 0);content:"";opacity:.3;position:absolute}.vision__corner::before{width:100%;transform:translateX(-50%);border-top:1px solid #707070}.vision__corner::after{height:100%;transform:translateY(-50%);border-left:1px solid #707070}.vision__corner_lt{top:-1px;left:-1px;--p-t: 0;--p-l: 0}.vision__corner_lb{left:-1px;bottom:-1px;--p-t: calc(100% - 1px);--p-l: 0}.vision__corner_rt{top:-1px;right:-1px;--p-t: 0;--p-l: calc(100% - 1px)}.vision__corner_rb{right:-1px;bottom:-1px;--p-t: calc(100% - 1px);--p-l: calc(100% - 1px)}.new-project .section_x__news{margin-bottom:0}.new-project .section_x__news .another__news__list{margin-top:0}.new-project .section_x__news .projects__item_y{margin:0 20px;padding-bottom:0}.solutions__text{margin-bottom:20px}.solutions__table{width:100%;border:0;padding:40px;overflow:hidden;position:relative;font-size:16px;text-align:left;line-height:1.375;border-collapse:separate}@media screen and (max-width: 560px){.solutions__table{padding:20px}}.solutions__table::before{top:0;left:0;right:0;bottom:0;z-index:0;content:"";position:absolute;background:linear-gradient(-90deg, #58bfcf 0%, #865dcf 100%) center/cover no-repeat rgba(0,0,0,0);border-radius:15px}.solutions__table::after{top:2px;left:2px;right:2px;bottom:2px;z-index:1;content:"";position:absolute;border-radius:14px;background-color:#18171d}.solutions__table thead,.solutions__table tbody,.solutions__table tfoot{z-index:2;position:relative}.solutions__table thead th,.solutions__table thead td{font-weight:700}.solutions__table tbody tr{position:relative}.solutions__table tbody td:first-child::before,.solutions__table tfoot td:first-child::before{top:0;left:0;right:0;height:2px;content:"";position:absolute;background:linear-gradient(-90deg, #58bfcf 0%, #865dcf 100%) center/cover no-repeat rgba(0,0,0,0);border-radius:2px}.solutions__table td,.solutions__table th{padding-top:20px;padding-bottom:20px}@media screen and (max-width: 560px){.solutions__table td,.solutions__table th{padding-top:10px;padding-bottom:10px}}.solutions__table td:nth-child(n+2),.solutions__table th:nth-child(n+2){padding-left:40px}@media screen and (max-width: 560px){.solutions__table td:nth-child(n+2),.solutions__table th:nth-child(n+2){padding-left:20px}}.solutions__table *:first-child>tr:first-child *{padding-top:0}.solutions__table *:last-child>tr:last-child *{padding-bottom:0}@media screen and (max-width: 560px){.solutions__table tbody,.solutions__table tfoot{font-size:14px}}@keyframes grad-anim{0%{background-position:center top}100%{background-position:center bottom}}
</style>
		<section class="new-project">
            <div class="container">
                <div class="new-project__items">
					<!-- prob -->
					<?php if( have_rows('prob') ) :?>
                    <div class="featurettes _full">
                        <h2 class="_inner-heading new-project__counter">Проблемы рынка</h2>
                        <div class="featurettes__items _wrapper">
							<?php $c4 = 1;
							while ( have_rows('prob') ) : the_row(); ?>
                            <div class="featurettes__item">
                                <p class="featurettes__image-wrapper _image-wrapper">
                                    <img src="/wp-content/themes/iart_new/images/projects/prob/<?php echo $c4;?>.png" alt="Проблема рынка" class="featurettes__image" width="80" height="80">
                                </p>
                                <div class="featurettes__text _text">
                                    <p><?php echo the_sub_field('prob_text'); ?></p>
                                </div>
                            </div>
							<?php if($c4 == 4) $c4=0; $c4++; endwhile; ?>
                        </div>
                    </div>
					<?php endif;?>
					<!-- Текст + Изображение -->
					<?php $text_image = get_field('text_image');
					if( $text_image['enabled'] == 'true' ): ?>
					<div class="vision _full">
						<?php if( $text_image['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $text_image['title']; ?></h2>
						<?php endif; ?>
						<?php if( $text_image['with_border'] == 'true' ){ echo '<div class="vision__inner">'; } ?>
						<div class="vision__items _wrapper">
							<div class="vision__item">
								<div class="vision__text _text">
									<?php echo $text_image['text']; ?>
								</div>
							</div>
							<?php if( $text_image['image']['url'] ): ?>
							<div class="vision__item">
								<p class="vision__image-wrapper _image-wrapper">
									<img class="vision__image" src="<?php echo esc_url( $text_image['image']['url'] ); ?>" alt="<?php echo $text_image['title']; ?>" width="540" height="338" loading="lazy">
								</p>
							</div>
							<?php endif; ?>
						</div>
						<?php if( $text_image['with_border'] == 'true' ){ echo '<div class="vision__corner vision__corner_lt"></div><div class="vision__corner vision__corner_rt"></div><div class="vision__corner vision__corner_lb"></div><div class="vision__corner vision__corner_rb"></div></div>'; } ?>
					</div>
					<?php endif; ?>
					<!-- Карточки (квадратные, белые) -->
					<?php $featurettes_text = get_field('featurettes_text');
					if( $featurettes_text['enabled'] == 'true' ): ?>
					<div class="featurettes _full">
						<?php if( $featurettes_text['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $featurettes_text['title']; ?></h2>
						<?php endif;
						if( count($featurettes_text['card']) > 0 ): ?>
						<div class="featurettes__items _wrapper">
							<?php foreach($featurettes_text['card'] as $key=>$value) { ?>
							<div class="featurettes__item">
                                <p class="featurettes__title"><?php echo $value['title']; ?></p>
								<?php if( $value['text'] ): ?>
                                <div class="featurettes__text _text"><?php echo $value['text']; ?></div>
								<?php endif; ?>
                            </div>
							<?php } ?>
						</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<!-- Карточки с белым затуханием -->
					<?php $cards_white_glow = get_field('cards_white_glow');
					if( $cards_white_glow['enabled'] == 'true' ): ?>
					<div class="cards cards_white-glow cards_small-gap _full">
						<?php if( $cards_white_glow['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $cards_white_glow['title']; ?></h2>
						<?php endif;
						if( $cards_white_glow['text_above'] ): ?>
						<div class="cards__inner-text _text"><?php echo $cards_white_glow['text_above']; ?></div>
						<?php endif;
						if( count($cards_white_glow['card']) > 0 ): ?>
						<div class="cards__wrapper _wrapper">
							<?php foreach($cards_white_glow['card'] as $key=>$value) { ?>
							<div class="cards__item">
                                <p class="cards__title"><?php echo $value['title']; ?></p>
                                <div class="cards__text _text"><?php echo $value['text']; ?></div>
								<?php if( $value['image']['url'] ): ?>
                                <p class="cards__image-wrapper _image-wrapper">
                                    <img src="<?php echo esc_url( $value['image']['url'] ); ?>" alt="<?php echo $value['title']; ?>" class="cards__image" width="569" height="274" loading="lazy">
                                </p>
								<?php endif; ?>
                            </div>
							<?php } ?>
						</div>
						<?php endif; ?>
						<?php if( $cards_white_glow['text_below'] ): ?>
						<div class="cards__inner-text _text"><?php echo $cards_white_glow['text_below']; ?></div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<!-- Карточки с цветной обводкой -->
					<?php $cards_border = get_field('cards_border');
					if( $cards_border['enabled'] == 'true' ): ?>
					<div class="cards cards_no-glow cards_small-gap _full">
						<?php if( $cards_border['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $cards_border['title']; ?></h2>
						<?php endif;
						if( $cards_border['text_above'] ): ?>
						<div class="cards__inner-text _text"><?php echo $cards_border['text_above']; ?></div>
						<?php endif;
						if( count($cards_border['card']) > 0 ): ?>
						<div class="cards__wrapper _wrapper">
							<?php foreach($cards_border['card'] as $key=>$value) { ?>
							<div class="cards__item">
                                <p class="cards__title"><?php echo $value['title']; ?></p>
                                <div class="cards__text _text"><?php echo $value['text']; ?></div>
								<?php if( $value['image']['url'] ): ?>
                                <p class="cards__image-wrapper _image-wrapper">
                                    <img src="<?php echo esc_url( $value['image']['url'] ); ?>" alt="<?php echo $value['title']; ?>" class="cards__image" width="569" height="274" loading="lazy">
                                </p>
								<?php endif; ?>
                            </div>
							<?php } ?>
						</div>
						<?php endif; ?>
						<?php if( $cards_border['text_below'] ): ?>
						<div class="cards__inner-text _text"><?php echo $cards_border['text_below']; ?></div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<!-- Текст + Изображение (пунктирная рамка) -->
					<?php $text_image_border = get_field('text_image_border');
					if( $text_image_border['enabled'] == 'true' ): ?>
					<div class="vision _full">
						<?php if( $text_image_border['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $text_image_border['title']; ?></h2>
						<?php endif; ?>
						<div class="vision__inner">
							<div class="vision__items _wrapper">
								<div class="vision__item">
									<div class="vision__text _text">
										<?php echo $text_image_border['text']; ?>
									</div>
								</div>
								<?php if( $text_image_border['image']['url'] ): ?>
								<div class="vision__item">
									<p class="vision__image-wrapper _image-wrapper">
										<img class="vision__image" src="<?php echo esc_url( $text_image_border['image']['url'] ); ?>" alt="<?php echo $text_image_border['title']; ?>" width="540" height="338" loading="lazy">
									</p>
								</div>
								<?php endif; ?>
							</div>
                            <div class="vision__corner vision__corner_lt"></div>
                            <div class="vision__corner vision__corner_rt"></div>
                            <div class="vision__corner vision__corner_lb"></div>
                            <div class="vision__corner vision__corner_rb"></div>
						</div>
					</div>
					<?php endif; ?>
					<!-- about -->
					<?php if( get_field('about') ) :?>
                    <div class="text-block _gradient _full">
                        <h2 class="_inner-heading new-project__counter">О продукте</h2>
                        <div class="text-block__text _text">
                            <p><?php echo the_field('about'); ?></p>
                        </div>
                    </div>
					<?php endif;?>
					<!-- Изображение на всю ширину -->
					<?php $image_full = get_field('image_full');
					if( $image_full['image']['url'] ): ?>
					<div class="just-image _full">
						<?php if( $image_full['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $image_full['title']; ?></h2>
						<?php endif; ?>
						<p class="just-image__image-wrapper">
							<img src="<?php echo esc_url( $image_full['image']['url'] ); ?>" alt="<?php echo $image_full['title']; ?>" class="just-image__image" width="1200" height="600" loading="lazy">
						</p>
					</div>
					<?php endif; ?>
					<!-- text -->
					<?php if( get_field('text') ) :?>
                    <div class="text-block _full">
						<?php if( get_field('text_title') ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo get_field('text_title'); ?></h2>
						<?php endif; ?>
                        <div class="_text">
                            <?php echo the_field('text'); ?>
                        </div>
                    </div>
					<?php endif;?>
					<!-- Текст + Изображение (фиолетовый фон) -->
					<?php $text_image_purple = get_field('text_image_purple');
					if( $text_image_purple['enabled'] == 'true' ): ?>
					<div class="vision vision_primary-background _full">
						<?php if( $text_image_purple['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $text_image_purple['title']; ?></h2>
						<?php endif; ?>
						<div class="vision__inner">
							<div class="vision__items _wrapper">
								<div class="vision__item">
									<div class="vision__text _text">
										<?php echo $text_image_purple['text']; ?>
									</div>
								</div>
								<?php if( $text_image_purple['image']['url'] ): ?>
								<div class="vision__item">
									<p class="vision__image-wrapper">
										<img class="vision__image" src="<?php echo esc_url( $text_image_purple['image']['url'] ); ?>" alt="<?php echo $text_image_purple['image']['alt']; ?>" width="540" height="338" loading="lazy">
									</p>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<!-- Карточки с белым фоном -->
					<?php $cards_white = get_field('cards_white');
					if( $cards_white['enabled'] == 'true' ): ?>
					<div class="cards cards_three cards_white cards_small-gap _full">
						<?php if( $cards_white['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $cards_white['title']; ?></h2>
						<?php endif;
						if( count($cards_white['card']) > 0 ): ?>
						<div class="cards__wrapper _wrapper">
							<?php foreach($cards_white['card'] as $key=>$value) { ?>
							<div class="cards__item">
								<?php if( $value['image']['url'] ): ?>
                                <p class="cards__image-wrapper _image-wrapper">
                                    <img src="<?php echo esc_url( $value['image']['url'] ); ?>" alt="<?php echo $value['title']; ?>" class="cards__image" width="569" height="274" loading="lazy">
                                </p>
								<?php endif;
								if( $value['title'] ): ?>
                                <div class="cards__text _text"><p><?php echo $value['title']; ?></p></div>
								<?php endif; ?>
                            </div>
							<?php } ?>
						</div>
						<?php endif; ?>
						<?php if( $cards_white['text_below'] ): ?>
						<div class="cards__inner-text _text"><?php echo $cards_white['text_below']; ?></div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<!-- Таблица -->
					<?php $table = get_field('table');
					if( $table['enabled'] == 'true' ): ?>
					<div class="solutions _full">
						<?php if( $table['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $table['title']; ?></h2>
						<?php endif;
						if( $table['text'] ): ?>
						<div class="solutions__text _text"><?php echo $table['text']; ?></div>
						<?php endif;
						$table_rows_count = count($table['row']);
						if( $table_rows_count > 0 ):
						echo '<table class="solutions__table">';
						foreach($table['row'] as $key_row=>$value) {
							if($key_row == 0) { echo '<thead>'; }
							if($key_row == 1) { echo '<tbody>'; }
							echo '<tr>';
							foreach($value['col'] as $key_col=>$value) {
								if($key_row == 0) { echo '<th>'; } else { echo '<td>'; }
								echo $value['text'];
								if($key_row == 0) { echo '</th>'; } else { echo '</td>'; }
							}
							echo '</tr>';
							if($key_row == 0) { echo '</thead>'; }
							if($key_row == $table_rows_count - 1) { echo '</tbody>'; }
						}
						echo '</table>';
						endif; ?>
					</div>
					<?php endif; ?>
					<!-- Карточки с белой обводкой -->
					<?php $cards_border_white = get_field('cards_border_white');
					if( $cards_border_white['enabled'] == 'true' ): ?>
					<div class="cards cards_white-border _full">
						<?php if( $cards_border_white['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $cards_border_white['title']; ?></h2>
						<?php endif;
						if( $cards_border_white['text_above'] ): ?>
						<div class="cards__inner-text _text"><?php echo $cards_border_white['text_above']; ?></div>
						<?php endif;
						if( count($cards_border_white['card']) > 0 ): ?>
						<div class="cards__wrapper _wrapper">
							<?php foreach($cards_border_white['card'] as $key=>$value) { ?>
							<div class="cards__item">
                                <p class="cards__title"><?php echo $value['title']; ?></p>
                                <div class="cards__text _text"><?php echo $value['text']; ?></div>
                            </div>
							<?php } ?>
						</div>
						<?php endif; ?>
						<?php if( $cards_border_white['text_below'] ): ?>
						<div class="cards__inner-text _text"><?php echo $cards_border_white['text_below']; ?></div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<!-- staps -->
					<?php if( have_rows('staps') ) :?>
                    <div class="results _numbers-background _full">
                        <h2 class="_inner-heading new-project__counter">Этапы работы</h2>
                        <div class="results__wrapper _wrapper">
							<?php while ( have_rows('staps') ) : the_row(); ?>
                            <div class="results__item">
                                <p class="results__title"><?php echo the_sub_field('stap_title'); ?></p>
								
                                <div class="results__text _text">
                                    <?php echo the_sub_field('stap_text'); ?>
                                </div>
                            </div>
							<?php endwhile; ?>
                        </div>
                    </div>
					<?php endif;?>
					<!-- prices -->
					<?php if( have_rows('prices') ) :?>
                    <div class="reviews _center-lines _full">
                        <h2 class="_inner-heading new-project__counter">Цены</h2>
                        <div class="reviews__wrapper _wrapper">
							<?php while ( have_rows('prices') ) : the_row(); ?>
                            <div class="reviews__item">
                                <p class="reviews__author"><?php echo the_sub_field('prices_title'); ?></p>
                                <p class="reviews__value"><?php echo the_sub_field('prices_value'); ?></p>
                            </div>
							<?php endwhile; ?>
                        </div>
                    </div>
					<?php endif;?>
					<!-- tech -->
					<?php if( get_field('int') ) :?>
                    <div class="just-image _full">
                        <h2 class="_inner-heading new-project__counter">Технологии</h2>
                        <p class="just-image__image-wrapper">
                            <img src="<?php echo the_field('tech'); ?>" alt="Возможности" class="just-image__image" width="1200" height="600" loading="lazy">
                        </p>
                    </div>
					<?php endif;?>
					<!-- int -->
					<?php if( have_rows('int') ) :?>
                    <div class="logos _full">
                        <h2 class="_inner-heading new-project__counter">Интеграции</h2>
                        <div class="logos__text _text">
                            <p><?php echo the_field('int_text'); ?></p>
                        </div>
                        <div class="logos__items _wrapper">
							<?php while ( have_rows('int') ) : the_row(); ?>
                            <p class="logos__image-wrapper">
                                <img src="<?php echo the_sub_field('int_img'); ?>" alt="Возможности" class="logos__image" width="101" height="61" loading="lazy">
                            </p>
							<?php endwhile; ?>
                        </div>
                    </div>
					<?php endif;?>
					<!--
                    <div class="cases _full">
                        <div class="cases__inner">
                            <h2 class="cases__heading _inner-heading new-project__counter">Кейсы</h2>
                        </div>
                    </div>
					-->
					<!-- Вопросы и ответы -->
					<?php $faq = get_field('faq');
					if( $faq['enabled'] == 'true' ): ?>
					<section class="development-steps development-steps_gradient1 development-steps_no-counter _full">
						<?php if( $faq['title'] ): ?>
						<h2 class="_inner-heading new-project__counter"><?php echo $faq['title']; ?></h2>
						<?php endif;
						if( count($faq['question_answer']) > 0 ): ?>
						<div class="development-steps__items" data-toggle-container="toggle" role="tablist">
							<?php foreach($faq['question_answer'] as $key=>$value) { ?>
							<div class="development-steps__item">
								<button class="development-steps__tab" data-toggle="faq<?php echo $key; ?>" type="button" aria-expanded="false" aria-controls="faq<?php echo $key; ?>" role="tab"><?php echo $value['question']; ?></button>
								<div id="faq<?php echo $key; ?>" class="development-steps__tabpanel" data-target="faq<?php echo $key; ?>" role="tabpanel">
									<div class="development-steps__grid-container">
										<div class="development-steps__inner">
											<div class="development-steps__content">
												<div class="development-steps__text _text"><?php echo $value['answer']; ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
                        <script>
                            toggleElements();
                            function toggleElements(){let n=document.querySelectorAll("[data-toggle-container]");if(!n.length)return;n.forEach(l=>{let i=l.querySelectorAll("[data-toggle]"),e=l.querySelectorAll("[data-target]"),t=l.querySelectorAll("[data-toggle-container]");if(!i.length&&!e.length)return;let c=!!l.dataset.toggleContainer.includes("toggle"),d=!!l.dataset.toggleContainer.includes("self"),f=!!l.dataset.toggleContainer.includes("disable");t.length&&(i=u(i,t)),i.forEach(g=>{switch(g.tagName.toLowerCase()){case"select":r({current:g,targets:e,select:!0}),g.addEventListener("change",m=>{r({current:m.target,targets:e,select:!0})});break;case"input":r({current:g,targets:e,checked:g.checked,disable:f}),g.addEventListener("click",m=>{r({current:m.target,targets:e,disable:f})});break;default:g.addEventListener("click",m=>{r({current:m.currentTarget,targets:e,buttons:i,toggle:c,self:d})});break}})});function r(l){let i=l.current,e=l.targets,t=l.buttons||null,c=l.toggle||!1,d=l.self||!1,f=l.disable||!1,g=l.checked!==void 0?l.checked:null,m=l.select||!1,h=s(m,i);e.forEach(E=>o(E,h,c,d,f,g)),t!==null&&a(i,t,c,d)}function s(l,i){return l===!0?i.value:i.dataset.toggle}function o(l,i,e,t,c,d){let f=l.dataset.target;if(!(d===!1||t===!0&&f!==i))return t===!0&&f===i?l.classList.toggle("active"):e===!0&&l.classList.contains("active")?l.classList.remove("active"):(f===i&&c&&l.removeAttribute("disabled"),f===i?l.classList.add("active"):(c&&l.setAttribute("disabled",""),l.classList.remove("active")))}function a(l,i,e,t){let c=l.getAttribute("aria-expanded")==="true";if(t||(i.forEach(d=>d.setAttribute("aria-expanded",!1)),e))return l.setAttribute("aria-expanded",!c);l.setAttribute("aria-expanded",!0)}function u(l,i){let e=[];return l.forEach(t=>{let c=!0;i.forEach(d=>{d.contains(t)&&c&&(c=!1)}),c&&e.push(t)}),e}}
                        </script>
						<?php endif; ?>
					</section>
					<?php endif; ?>
					<?php if( get_field('proekty') ) :
					$args = array(
						'post_type'		=> 'projects',
						'post__in'  => explode(',', get_field('proekty'))
					);
					$the_query = new WP_Query( $args );
					?>
					<section class="section_x section_x__news js__scroll_wrap _full">
						<div class="top_news__line top_news__line--another_news">
							<div class="container">
								<div class="top_news__title__"><?= __('Проекты'); ?> </div>
							</div>
						</div>
						<div class="another__news__list">
							<div class="another__news__list__inner decore__scroll__wrap">
								<div class="new__item_y_wrap projects__item_y_wrap js__scrollbar js__scrollbar_padding">
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="projects__item_y">
										<?php get_template_part('parts/projects/feautured_item_slide'); ?>
									</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
						<div class="archive_link__block">
							<div class="container">
								<div class="archive_link__inner">
									<a href="<?= get_site_url(); ?>/projects/" class="archive_link__x">
										<span><?= __('Смотреть все проекты');?></span>
										<span class='archive_link__projects_count'><?= $projectsCount;?></span>
										<img src="<?= get_template_directory_uri(); ?>/images/icons/arrow_pagination/next.svg" loading="lazy">
									</a>
								</div>
								<div class="page_projects__line page_projects__line_slide">
									<img src="<?= get_template_directory_uri(); ?>/images/projects/decore/1.png" loading="lazy">
								</div>
							</div>
						</div>
					</section>
					<?php endif;?>
                </div>
            </div>
        </section>

<?php get_template_part('parts/callback'); ?>
<?php get_footer(); ?>