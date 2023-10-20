<?php
/*
Template Name: front-page
*/
?>

<?php get_header(); ?>

<!-- <main class="main"> -->
    <!-- ======= promo START ======= -->
    <section class="promo">

        <div class="container">

            <div class="promo__layout">
                <div class="promo__title-block">
                    <h1 class="promo__title">Система пневматической почты «под ключ»</h1>
                    <div class="promo__warranty">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/warranty-shield-icon.svg"
                            alt="Иконка в форме щита" class="promo__warranty-icon" width="33" height="35">
                        <p class="promo__warranty-text"><span class="promo__warranty-text--700">С гарантией<br></span> 1
                            год по договору</p>
                    </div>
                </div>
                <ul class="promo__promo-list">
                    <li class="promo__promo-list-item">концепция</li>
                    <li class="promo__promo-list-item">проектирование</li>
                    <li class="promo__promo-list-item">поставка</li>
                    <li class="promo__promo-list-item">монтаж</li>
                    <li class="promo__promo-list-item">обслуживание</li>
                </ul>
                <a data-modal="modal-order" href="#" class="promo__cta-button">Получить<br
                        class="d-none d-sm-inline d-md-none"> бесплатную консультацию</a>
                <ul class="promo__advantages-list">
                    <li class="promo__advantages-list-item">
                        <img class="promo__advantages-list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/advantages-icon--map.svg"
                            alt="Иконка отображающая преимущество" width="24" height="24">
                        <p class="promo__advantages-list-item-text"><span
                                class="promo__advantages-list-item-text--700">23 года на рынке<br
                                    class="d-none d-md-inline"></span> представительства<br class="d-none d-md-inline">
                            в 7 регионах РФ</p>
                    </li>
                    <li class="promo__advantages-list-item">
                        <img class="promo__advantages-list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/advantages-icon--list.svg"
                            alt="Иконка отображающая преимущество" width="24" height="24">
                        <p class="promo__advantages-list-item-text"><span
                                class="promo__advantages-list-item-text--700">Эксклюзивное<br
                                    class="d-none d-md-inline"></span> сотрудничество с ведущими<br
                                class="d-none d-md-inline"> производителями</p>
                    </li>
                    <li class="promo__advantages-list-item">
                        <img class="promo__advantages-list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/advantages-icon--group.svg"
                            alt="Иконка отображающая преимущество" width="24" height="24">
                        <p class="promo__advantages-list-item-text">Более <span
                                class="promo__advantages-list-item-text--700">400 проектов:<br
                                    class="d-none d-md-inline"></span> от «точка-точка»<br class="d-none d-md-inline">
                            до комплексных</p>
                    </li>
                </ul>
            </div>

        </div>

        <video class="promo__video-bg" src="video/video-bg.webm" autoplay loop muted
            poster="<?php bloginfo('template_url'); ?>/assets/img/@2x/video-poster@2x.jpg">
            <source src="video/video-bg.mp4" type="video/mp4">
            <source src="video/video-bg.ogv" type="video/ogv">
            <source src="video/video-bg.webm" type="video/webm">
        </video>

    </section>
    <!-- ======= promo END ======= -->

<div class="container">
    <!-- ======= Вывод постов START ======= -->
    <?php
            // проверяем есть ли посты в глобальном запросе - переменная $wp_query
            if( have_posts() ){
                // перебираем все имеющиеся посты и выводим их
                while( have_posts() ){
                    the_post();
    ?>
                    <!-- <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>  -->
    
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <time><?php the_date(); ?></time>
                    /
                    <span class="postmetadata"><?php the_tags('', ' / '); ?></span>
                    <!-- <p class="postmetadata">Расположено в <?php the_category($separator = '/', ''); ?></p> -->
    
                    <div class="post-thumb">
                        <?php the_post_thumbnail('post-image'); ?>
                    </div>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        
                        <div class="post-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <!-- <?php the_content(); ?> -->
                    </div>
    <?php       }



                    the_posts_pagination();

    
            }
            // постов нет
            else {
                echo "<h2>Записей нет.</h2>";
            }
    ?>
        <!-- ======= Вывод постов END ======= -->
</div>




    <!-- ======= sphere START ======= -->
    <section class="sphere">

        <div class="container">

            <div class="sphere__layout">
                <h2 class="sphere__title">Оказываем <span class="sphere__title--700">полный комплекс услуг</span> для
                    следующих сфер</h2>

                <ul class="sphere__list">
                    <li class="sphere__list-item">
                        <img class="sphere__list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/bank-icon.svg" alt="Иконка банка">
                        <a href="#" class="sphere__list-item-link">Пневмопочта<br> для банков</a>
                        <div class="sphere__list-item-square">
                            <svg class="sphere__list-item-square-arrow" width="14" height="14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_131_801)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_131_801">
                                        <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </li>
                    <li class="sphere__list-item">
                        <img class="sphere__list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/bank-icon.svg" alt="Иконка банка">
                        <a href="#" class="sphere__list-item-link">Пневмопочта<br> для магазинов</a>
                        <div class="sphere__list-item-square">
                            <svg class="sphere__list-item-square-arrow" width="14" height="14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_131_801)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_131_801">
                                        <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </li>
                    <li class="sphere__list-item">
                        <img class="sphere__list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/bank-icon.svg" alt="Иконка банка">
                        <a href="#" class="sphere__list-item-link">Пневмопочта для<br> медицинских учреждений</a>
                        <div class="sphere__list-item-square">
                            <svg class="sphere__list-item-square-arrow" width="14" height="14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_131_801)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_131_801">
                                        <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </li>
                    <li class="sphere__list-item">
                        <img class="sphere__list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/bank-icon.svg" alt="Иконка банка">
                        <a href="#" class="sphere__list-item-link">Пневмопочта<br> для производств</a>
                        <div class="sphere__list-item-square">
                            <svg class="sphere__list-item-square-arrow" width="14" height="14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_131_801)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_131_801">
                                        <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </li>
                    <li class="sphere__list-item">
                        <img class="sphere__list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/bank-icon.svg" alt="Иконка банка">
                        <a href="#" class="sphere__list-item-link">Пневмопочта для<br> учебных заведений</a>
                        <div class="sphere__list-item-square">
                            <svg class="sphere__list-item-square-arrow" width="14" height="14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_131_801)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_131_801">
                                        <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </li>
                    <li class="sphere__list-item">
                        <img class="sphere__list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/bank-icon.svg" alt="Иконка банка">
                        <a href="#" class="sphere__list-item-link">Для лабораторно-<br> диагностических центров</a>
                        <div class="sphere__list-item-square">
                            <svg class="sphere__list-item-square-arrow" width="14" height="14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_131_801)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_131_801">
                                        <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </li>
                    <li class="sphere__list-item">
                        <img class="sphere__list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/bank-icon.svg" alt="Иконка банка">
                        <a href="#" class="sphere__list-item-link">Пневмопочта<br> для аэропортов</a>
                        <div class="sphere__list-item-square">
                            <svg class="sphere__list-item-square-arrow" width="14" height="14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_131_801)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_131_801">
                                        <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </li>
                    <li class="sphere__list-item">
                        <img class="sphere__list-item-image"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/bank-icon.svg" alt="Иконка банка">
                        <a href="#" class="sphere__list-item-link">Пневмопочта для офисов<br> и торговых центров</a>
                        <div class="sphere__list-item-square">
                            <svg class="sphere__list-item-square-arrow" width="14" height="14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_131_801)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_131_801">
                                        <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </section>

    <!-- ======= sphere END ======= -->

    <!-- ======= solution START ======= -->
    <section class="solution">

        <div class="container">

            <div class="solution__layout">
                <h2 class="solution__title">Наш эксперт поможет подобрать решение <span
                        class="solution__title--700">индивидуально для вашего проекта</span></h2>
                <form class="solution__form" action="#" method="post">
                    <label class="solution__form-label" for="solution__form-input">Введите ваш номер телефона:</label>

                    <?php echo do_shortcode('[contact-form-7 id="b200192" title="Контактная форма"]') ?>

                    <p class="solution__form-agreement">Нажимая на кнопку, вы даете согласие на обработку своих
                        персональных данных и соглашаетесь с <a
                            class="solution__form-agreement-link agreement-link-default" href="#">Пользовательским
                            соглашением</a></p>
                </form>

                <picture>
                    <source media="(max-width: 320px)"
                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/solution-bg--320@2x.jpg">
                    <source media="(max-width: 480px)"
                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/solution-bg--480@2x.jpg">
                    <source media="(max-width: 640px)"
                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/solution-bg--640@2x.jpg">
                    <source media="(max-width: 960px)"
                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/solution-bg--960@2x.jpg">
                    <source media="(max-width: 1280px)"
                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/solution-bg--1280@2x.jpg">
                    <img class="solution__bg img-responsive img-responsive--width-100"
                        src="<?php bloginfo('template_url'); ?>/assets/img/@2x/solution-bg--1280@2x.jpg"
                        alt="Фоновая картинка – мастер пишет в ежедневнике">
                </picture>
            </div>

        </div>

    </section>
    <!-- ======= solution END ======= -->
    <!-- ======= optimization START ======= -->
    <section class="optimization">

        <div class="container">

            <div class="optimization__layout">
                <h2 class="optimization__title">Хотите <span class="optimization__title--700">оптимизировать
                        логистический процесс</span><br class="d-sm-inline d-md-none"> в учреждении или<br
                        class="d-sm-inline d-md-none"> на предприятии?</h2>

                <h3 class="optimization__list-title">Но при этом важно:</h3>

                <ul class="optimization__list">
                    <li class="optimization__list-item">
                        <img class="optimization__list-item-checkbox"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/optimization-checkbox.svg"
                            alt="Изображение чекбокса">
                        <p class="optimization__list-item-text"><span class="optimization__list-item-text--700">Быстро
                                составить смету</span><br class="d-sm-none d-inline d-xl-none"> и получить<br
                                class="d-none d-sm-inline d-lg-none d-xl-inline"> все необходимые комплектующие<br
                                class="d-none d-sm-inline d-lg-none d-xl-inline"> в ближайшие сроки</p>
                    </li>
                    <li class="optimization__list-item">
                        <img class="optimization__list-item-checkbox"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/optimization-checkbox.svg"
                            alt="Изображение чекбокса">
                        <p class="optimization__list-item-text"><span class="optimization__list-item-text--700">Иметь
                                гарантии и быть уверенными,<br class="d-none d-md-inline d-lg-none d-xl-inline"></span>
                            что проект будет выполнен на высоком уровне при использовании качественных материалов</p>
                    </li>
                    <li class="optimization__list-item">
                        <img class="optimization__list-item-checkbox"
                            src="<?php bloginfo('template_url'); ?>/assets/img/svg/optimization-checkbox.svg"
                            alt="Изображение чекбокса">
                        <p class="optimization__list-item-text"><span class="optimization__list-item-text--700">Не
                                переживать о составлении<br class="d-inline d-lg-none d-xxl-inline"> документации</span>
                            и организации процесса,<br class="d-none d-md-inline d-lg-none d-xxl-inline"> доверив это
                            специалистам</p>
                    </li>
                </ul>

                <p class="optimization__conclusion">Тогда поручить разработку<br class="d-none d-md-none"> и установку
                    пневмопочты<br class="d-inline d-lg-none"> компании <span
                        class="optimization__conclusion--blue-caps-700">птс инжиниринг –<br class="d-inline d-lg-none">
                        верное решение!</span></p>
            </div>

        </div>

    </section>
    <!-- ======= optimization END ======= -->
    <!-- ======= services START ======= -->
    <section class="services">

        <div class="container">

            <div class="services__layout">
                <h2 class="services__title">Наши услуги</h2>

                <ul class="services__list">
                    <li class="services__list-item">
                        <a href="" class="services__list-item-link">
                            <img class="services__list-item-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/services-computer-icon.svg"
                                alt="Иконка банка">
                            <div class="services__list-item-text-block">
                                <h3 class="services__list-item-text-title">Проектирование<br
                                        class="d-md-inline d-lg-none"> системы</h3>
                                <p class="services__list-item-text">Разработка предпроектной концепции и формирование
                                    КП<br class="d-none d-md-inline"> за 3–4 дня</p>
                                <p class="services__list-item-text">Подготовка проектной документации — от 2-х недель
                                </p>
                            </div>
                            <div class="services__list-item-square">
                                <svg class="services__list-item-square-arrow" width="14" height="14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_131_801)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_131_801">
                                            <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="services__list-item">
                        <a href="" class="services__list-item-link">
                            <img class="services__list-item-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/services-car-icon.svg"
                                alt="Иконка банка">
                            <div class="services__list-item-text-block">
                                <h3 class="services__list-item-text-title">Подбор и поставка<br
                                        class="col-sm-inline col-md-none"> оборудования</h3>
                                <p class="services__list-item-text">Подбор оборудование специально под ваш запрос</p>
                                <p class="services__list-item-text">Доставка с нашего склада на следующий день после
                                    оплаты
                                    (или оперативный импорт)</p>
                            </div>
                            <div class="services__list-item-square">
                                <svg class="services__list-item-square-arrow" width="14" height="14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_131_801)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_131_801">
                                            <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="services__list-item">
                        <a href="" class="services__list-item-link">
                            <img class="services__list-item-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/services-pipe-icon.svg"
                                alt="Иконка банка">
                            <div class="services__list-item-text-block">
                                <h3 class="services__list-item-text-title">Монтаж<br
                                        class="d-md-inline d-lg-none d-xxl-inline"> оборудования</h3>
                                <p class="services__list-item-text">Установка и подготовка к эксплуатации системы любой
                                    сложности</p>
                                <p class="services__list-item-text has-hyphens">Использование специализированного
                                    оборудования и необходимых инженерных ключей для программирования</p>
                            </div>
                            <div class="services__list-item-square">
                                <svg class="services__list-item-square-arrow" width="14" height="14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_131_801)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_131_801">
                                            <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </a>
                    </li>
                    <li class="services__list-item">
                        <a href="" class="services__list-item-link">
                            <img class="services__list-item-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/services-person-icon.svg"
                                alt="Иконка банка">
                            <div class="services__list-item-text-block">
                                <h3 class="services__list-item-text-title">Обслуживание<br> и модернизация</h3>
                                <p class="services__list-item-text">Возможность постепенного расширения (начать с<br
                                        class="d-none d-sm-inline d-md-none"> малого количества станций и расширять<br
                                        class="d-none d-sm-inline d-md-none"> при необходимости)</p>
                            </div>
                            <div class="services__list-item-square">
                                <svg class="services__list-item-square-arrow" width="14" height="14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_131_801)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M-.016 12.35c.067-.062.134-.123.198-.186L9.83 2.566l.222-.222h-7.63l.044-2.31.032-.033c.088.013.176.022.265.026h11.006c.074-.003.149-.012.222-.026v11.502h-2.23V3.996c-.104.084-.144.108-.179.142C7.2 8.497 6.101 9.592 1.717 13.954a.857.857 0 00-.06.068c-.558-.56-1.118-1.114-1.673-1.672z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_131_801">
                                            <path fill="#fff" transform="matrix(1 0 0 -1 0 14)" d="M0 0h14v14H0z" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </a>
                    </li>
                </ul>

                <a href="#" class="services__additional-link">
                    <p class="services__additional-link-text">Посмотреть дополнительные услуги</p>
                    <svg class="services__additional-link-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.18222 8.73208C1.27309 8.73477 1.36396 8.7391 1.45318 8.74014L15.0624 8.77503L15.3767 8.77583L9.98097 3.38006L11.6451 1.77834L11.6917 1.77764C11.7445 1.84887 11.801 1.91732 11.8609 1.98271L19.6431 9.76493C19.6981 9.81576 19.7567 9.86243 19.8186 9.90454L11.6859 18.0372L10.1086 16.4599L15.4156 11.153C15.2838 11.1387 15.2379 11.1272 15.1888 11.127C9.00871 11.1096 7.45755 11.1064 1.2734 11.0914C1.24303 11.0916 1.21271 11.0934 1.18256 11.0969C1.1838 10.3062 1.18015 9.5187 1.18222 8.73208Z" />
                    </svg>
                </a>
            </div>

        </div>

        <picture>
            <source media="(max-width: 640px)"
                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/services-bg--640@2x.jpg">
            <source media="(max-width: 960px)"
                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/services-bg--960@2x.jpg">
            <source media="(max-width: 1280px)"
                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/services-bg--1280@2x.jpg">
            <source media="(max-width: 1366px)"
                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/services-bg--1366@2x.jpg">
            <img class="services__bg img-responsive img-responsive--width-100 d-none d-md-inline"
                src="<?php bloginfo('template_url'); ?>/assets/img/@2x/services-bg--1366@2x.jpg"
                alt="Фоновая картинка – пневмопочта">
        </picture>

    </section>
    <!-- ======= services END ======= -->
    <!-- ======= convinced START ======= -->
    <section class="convinced">

        <div class="container">

            <div class="convinced__layout">
                <h2 class="convinced__title"><span class="convinced__title--700">Почему</span> вы можете быть уверены в
                    нас?</h2>

                <ul class="convinced-list">
                    <li class="convinced-list-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/convinced-item-magnifier.svg"
                            alt="Иконка – наши преимущества" class="convinced-list-item-image">
                        <p class="convinced-list-item-text">
                            <span class="convinced-list-item-text--700">Анализируем работу предприятий</span>, чтобы
                            увидеть пути улучшений, которые обеспечат внедрение пневмопочты
                        </p>
                    </li>
                    <li class="convinced-list-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/convinced-item-prize.svg"
                            alt="Иконка – наши преимущества" class="convinced-list-item-image">
                        <p class="convinced-list-item-text">
                            Предоставляем клиентам<br class="d-none d-md-inline d-lg-none"> <span
                                class="convinced-list-item-text--700">лучшие</span><br class="d-inline d-md-none"> по
                            мировым меркам <span class="convinced-list-item-text--700">технические решения</span> по
                            организации и эксплуатации систем пневмопочты
                        </p>
                    </li>
                    <li class="convinced-list-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/convinced-item-list.svg"
                            alt="Иконка – наши преимущества" class="convinced-list-item-image">
                        <p class="convinced-list-item-text">
                            Организуем <span class="convinced-list-item-text--700">долговременное сервисное
                                обслуживание</span>
                        </p>
                    </li>
                    <li class="convinced-list-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/convinced-item-person.svg"
                            alt="Иконка – наши преимущества" class="convinced-list-item-image">
                        <p class="convinced-list-item-text">
                            <span class="convinced-list-item-text--700">Обучаем персонал организаций,</span>
                            эксплуатирующих пневмопочту, чтобы сотрудники не допускали ошибок и знали, что делать во
                            внештатных ситуациях
                        </p>
                    </li>
                </ul>

            </div>

        </div>

    </section>
    <!-- ======= convinced END ======= -->
    <!-- ======= implementation START ======= -->
    <section class="implementation">

        <div class="container">

            <div class="implementation__layout">
                <h2 class="implementation__title"><span class="implementation__title--700">Внедрение системы
                        пневмопочты</span><br class="d-inline d-md-none"> c ПТС инженеринг</h2>

                <ul class="implementation__list">
                    <li class="implementation__list-item">Доступный способ оптимизации доставки грузов, изделий,
                        образцов на объекте</li>
                    <li class="implementation__list-item">Автоматизация системы доставки и хранения</li>
                    <li class="implementation__list-item">Европейское качество материалов и оборудования</li>
                    <li class="implementation__list-item">Индивидуальный комплекс оборудования для каждого проекта
                        пневматической почты <span class="implementation__list-item--grey">(создаётся индивидуально<br>
                            по техническому заданию компании-заказчика)</span></li>
                </ul>

                <form class="implementation__form" action="#" method="post">
                    <input id="implementation__form-input" class="implementation__form-input input-default"
                        name="implementation__form-input" type="tel" placeholder="+7 (999) 999-99-99">
                    <button data-modal="modal-order" class="implementation__form-button button-default">Получить<br
                            class="d-inline d-sm-none"> бесплатную консультацию</button>
                    <p class="implementation__form-agreement">Нажимая на кнопку, вы даете согласие на обработку своих
                        персональных данных и соглашаетесь с <a
                            class="implementation__form-agreement-link agreement-link-default" href="#">Пользовательским
                            соглашением</a></p>
                </form>

                <img class="implementation__worker-image"
                    src="<?php bloginfo('template_url'); ?>/assets/img/@2x/implementation-worker@2x.png"
                    alt="Изображение рабочего" width="720" height="755">
            </div>

        </div>

    </section>
    <!-- ======= implementation END ======= -->
    <!-- ======= for-whom START ======= -->
    <section class="for-whom">

        <div class="container">

            <div class="for-whom__layout">
                <h2 class="for-whom__title"><span class="for-whom__title--700">Кому подойдут</span> наши услуги?</h2>

                <ul class="for-whom__list">
                    <li class="for-whom__list-item">
                        <h3 class="for-whom__list-item-title">Банки</h3>
                        <p class="for-whom__list-item-text">Отправка наличных и документов из кассы в сейфовую
                            комнату<br class="d-inline"> или бухгалтерию</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/for-whom-list-icon-1.svg"
                            alt="Фоновая иконка" class="for-whom__list-item-image">
                    </li>
                    <li class="for-whom__list-item">
                        <h3 class="for-whom__list-item-title">Производства</h3>
                        <p class="for-whom__list-item-text">Перемещение готовой продукции с производства на склад</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/for-whom-list-icon-2.svg"
                            alt="Фоновая иконка" class="for-whom__list-item-image">
                    </li>
                    <li class="for-whom__list-item">
                        <h3 class="for-whom__list-item-title">Лаборатории</h3>
                        <p class="for-whom__list-item-text">Доставка образцов</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/for-whom-list-icon-3.svg"
                            alt="Фоновая иконка" class="for-whom__list-item-image">
                    </li>
                    <li class="for-whom__list-item">
                        <h3 class="for-whom__list-item-title">Промышленные<br> предприятия</h3>
                        <p class="for-whom__list-item-text">Отправка товаров, изделий<br
                                class="d-inline d-md-none d-xl-inline d-xxl-none"> из десятков различных отделов</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/for-whom-list-icon-4.svg"
                            alt="Фоновая иконка" class="for-whom__list-item-image">
                    </li>
                    <li class="for-whom__list-item">
                        <h3 class="for-whom__list-item-title">Торговые сети</h3>
                        <p class="for-whom__list-item-text">Простое и оперативное перемещение товаров</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/for-whom-list-icon-5.svg"
                            alt="Фоновая иконка" class="for-whom__list-item-image">
                    </li>
                    <li class="for-whom__list-item">
                        <h3 class="for-whom__list-item-title">Клиники</h3>
                        <p class="for-whom__list-item-text">Доставка образцов<br class="d-inline"> в различные отделения
                        </p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/for-whom-list-icon-6.svg"
                            alt="Фоновая иконка" class="for-whom__list-item-image">
                    </li>
                    <li class="for-whom__list-item">
                        <h3 class="for-whom__list-item-title">Склады<br class="d-none d-md-inline d-xxl-none"> и
                            логистические компании</h3>
                        <p class="for-whom__list-item-text">Быстрая автоматизированная доставка грузов</p>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/for-whom-list-icon-7.svg"
                            alt="Фоновая иконка" class="for-whom__list-item-image">
                    </li>
                    <li class="for-whom__list-item for-whom__list-item--link">
                        <a href="#" class="for-whom__list-item-link">
                            <h3 class="for-whom__list-item-title for-whom__list-item-title--white">Бесплатная
                                консультация</h3>
                            <p class="for-whom__list-item-text for-whom__list-item-text--white">Подобрать свой вариант
                            </p>

                            <svg class="for-whom__list-item-image for-whom__list-item-image--link" width="142"
                                height="142" viewBox="0 0 142 142" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.5">
                                    <path
                                        d="M90.6579 2.57935C89.3035 3.0231 86.9818 5.40825 86.5672 6.8227C86.0974 8.45903 86.0974 40.3536 86.5672 41.9899C87.0095 43.5153 89.3035 45.8172 90.8237 46.261C91.57 46.4829 94.0575 46.5938 97.9547 46.5938H103.925V52.5567C103.925 58.5473 103.925 58.5473 104.616 59.2129C105.942 60.5719 106.191 60.4055 115.699 53.25L124.516 46.5938H129.104C134.687 46.5938 135.71 46.3165 137.451 44.375C138.115 43.654 138.806 42.5446 138.972 41.9344C139.441 40.3813 139.441 8.4313 138.972 6.87817C138.806 6.26802 138.115 5.15864 137.451 4.43755C135.378 2.10786 136.595 2.2188 112.659 2.24654C98.1758 2.27427 91.3212 2.35747 90.6579 2.57935ZM134.19 7.34966L134.881 8.01528V24.4063V40.7973L134.19 41.4629C133.527 42.1563 133.471 42.1563 128.303 42.1563H123.079L115.727 47.7032L108.347 53.25V48.3965C108.347 43.5985 108.347 43.5153 107.656 42.8497L106.993 42.1563H99.5025H92.0122L91.3489 41.4629L90.6579 40.7973V24.4063V8.01528L91.3489 7.34966L92.0122 6.6563H112.769H133.527L134.19 7.34966Z" />
                                    <path
                                        d="M95.0781 17.75V19.9688H112.767H130.457V17.75V15.5312H112.767H95.0781V17.75Z" />
                                    <path
                                        d="M95.0781 26.625V28.8438H112.767H130.457V26.625V24.4062H112.767H95.0781V26.625Z" />
                                    <path
                                        d="M37.7276 20.2184C35.24 20.8285 32.9736 22.7145 31.7851 25.0996L31.0941 26.4863L31.0112 37.7742C30.9283 48.868 30.9283 49.0898 30.3755 49.0898C29.5739 49.0898 27.3351 50.3102 26.506 51.2254C25.4004 52.3902 24.5712 54.2484 24.4054 55.8848C23.9355 60.3223 27.5839 64.3438 32.1168 64.3438C33.1394 64.3438 33.1671 64.3715 33.1671 65.2867C33.1671 66.8953 33.9133 70.2789 34.7701 72.4422C35.8481 75.2434 37.6723 77.9336 40.0493 80.2355L42.0117 82.1492V85.4496V88.75H35.4611C28.2749 88.75 25.3175 89.0828 21.8902 90.2477C17.5508 91.7453 14.1235 93.8809 10.8068 97.1258C7.49006 100.454 5.22363 104.059 3.70346 108.497C2.40441 112.38 2.21094 114.571 2.21094 126.968V138.422L2.90192 139.088L3.56527 139.781H55.2786H106.992L107.655 139.088L108.346 138.422V126.968C108.346 114.626 108.153 112.38 106.881 108.58C105.278 103.893 102.957 100.26 99.3081 96.7652C96.7653 94.3523 95.3281 93.2984 92.5918 91.9117C87.5061 89.3602 84.1617 88.75 75.1237 88.75H68.5455V85.4496V82.1492L70.5079 80.2355C72.8849 77.9336 74.7091 75.2434 75.787 72.4422C76.6438 70.2789 77.3901 66.8953 77.3901 65.2867C77.3901 64.3715 77.4177 64.3438 78.4404 64.3438C81.7571 64.3438 84.9356 62.0141 85.8477 58.9355C86.6217 56.1898 85.9583 53.25 84.0512 51.2254C83.222 50.3102 80.9832 49.0898 80.1817 49.0898C79.6289 49.0898 79.6289 48.8402 79.546 37.7742L79.463 26.4863L78.5233 24.7391C77.5006 22.8254 76.3398 21.716 74.3498 20.7453L73.106 20.1074L55.8314 20.052C46.3234 20.0242 38.1974 20.1074 37.7276 20.2184ZM73.1336 25.1273C73.5482 25.4324 74.1563 26.0426 74.4603 26.4586C75.0131 27.1797 75.0407 27.5957 75.1237 38.0238L75.2066 48.8125H72.5532C70.1209 48.8125 69.8445 48.757 69.2365 48.1191C68.5731 47.4813 68.5455 47.3426 68.5455 43.2656C68.5455 39.1887 68.5178 39.05 67.8545 38.4121C66.97 37.4969 66.4173 37.5246 63.1282 38.6617L60.3642 39.577L59.3416 38.6617L58.3189 37.7188H50.8563H43.366L42.7027 38.4121C42.0393 39.05 42.0117 39.1887 42.0117 43.2656C42.0117 47.3426 41.984 47.4813 41.3207 48.1191C40.7126 48.757 40.4362 48.8125 38.004 48.8125H35.3782V38.4398C35.3782 27.6512 35.4335 27.0687 36.5667 25.8207C37.8658 24.4062 37.617 24.4062 55.6102 24.4895C72.0557 24.5449 72.3874 24.5449 73.1336 25.1273ZM57.6556 43.2656C59.0652 44.5691 59.4798 44.5969 62.1331 43.7094L64.1232 43.016V45.2625C64.1232 48.3688 64.5378 49.5059 66.1961 51.1699C67.7439 52.7508 69.0154 53.25 71.42 53.25H72.9678V59.6844C72.9678 67.2559 72.6914 68.9477 70.9778 72.3867C68.656 77.0184 63.9573 80.6516 58.8717 81.7055C51.2156 83.3141 42.979 79.348 39.5518 72.359C37.8658 68.9199 37.5894 67.2281 37.5894 59.6844V53.25H39.1372C41.5418 53.25 42.8132 52.7508 44.361 51.1699C46.0747 49.4781 46.434 48.3688 46.434 44.8187V42.1562H51.4367H56.4671L57.6556 43.2656ZM33.1671 56.6059V59.9895L31.8956 59.8231C29.9885 59.6289 28.883 58.4086 28.883 56.6059C28.883 54.5813 30.182 53.3055 32.2826 53.2777L33.1671 53.25V56.6059ZM80.8174 54.3316C81.536 55.0805 81.6742 55.4133 81.6742 56.5781C81.6742 58.4086 80.5686 59.6289 78.6615 59.8231L77.3901 59.9895V56.5781V53.1668L78.6615 53.3332C79.6012 53.4164 80.1817 53.6937 80.8174 54.3316ZM51.3538 86.143C55.0298 86.8363 59.2863 86.5035 62.6859 85.2L64.1232 84.6453V87.3355V90.0535L62.0779 92.0227C59.4521 94.5742 58.0425 95.2676 55.2786 95.2676C52.5146 95.2676 51.105 94.5742 48.4793 92.0227L46.434 90.0535V87.3355V84.6453L47.8989 85.2C48.6728 85.5051 50.2482 85.9211 51.3538 86.143ZM34.2726 100.593C28.496 108.303 28.192 108.857 29.2423 110.05C29.491 110.355 32.6972 111.88 36.3456 113.434C39.994 114.987 43.062 116.318 43.1725 116.401C43.2831 116.457 42.5645 118.121 41.5971 120.09C40.6021 122.059 39.8005 123.917 39.8005 124.195C39.8005 124.472 40.7403 126.857 41.8735 129.492C43.0067 132.127 44.0017 134.539 44.0846 134.817C44.2505 135.316 43.7529 135.344 25.4557 135.344H6.63324V125.526C6.63324 117.954 6.71616 115.181 7.04783 113.295C8.67856 104.032 15.7819 96.3215 24.8752 94.0195C27.7497 93.2984 27.8879 93.2707 34.2174 93.2152L39.8005 93.1875L34.2726 100.593ZM83.8853 93.6035C93.0893 95.2121 100.497 102.09 103.15 111.492C103.703 113.434 103.758 114.349 103.869 124.472L103.952 135.344H85.1291C66.8042 135.344 66.3067 135.316 66.4725 134.817C66.5555 134.539 67.5505 132.127 68.6837 129.492C69.8169 126.857 70.7566 124.472 70.7566 124.195C70.7566 123.917 69.9551 122.059 68.9601 120.062L67.1359 116.457L68.1862 116.041C75.483 112.99 80.9279 110.521 81.3425 110.05C82.3652 108.857 82.0611 108.33 76.2845 100.593L70.7566 93.1875H76.1187C79.6842 93.1875 82.2823 93.3262 83.8853 93.6035ZM46.2405 96.0996C51.6855 101.036 58.8993 101.036 64.3443 96.0719C65.8368 94.7406 66.1409 94.5465 66.4449 94.8793C67.8269 96.3492 76.0081 107.72 75.8146 107.859C75.7041 107.998 72.7467 109.301 69.2365 110.771C65.7539 112.269 62.6583 113.739 62.4095 114.044C62.1331 114.349 61.912 114.904 61.912 115.264C61.912 115.625 62.8518 117.816 64.0126 120.145L66.1132 124.389L63.7915 129.797L61.4698 135.205H55.2786H49.0873L46.7656 129.797L44.4439 124.389L46.5445 120.145C47.7054 117.816 48.6451 115.625 48.6451 115.264C48.6451 114.904 48.424 114.349 48.1753 114.016C47.8989 113.711 44.7756 112.213 41.2101 110.688C37.6723 109.163 34.6872 107.859 34.6319 107.776C34.4938 107.665 44.1952 94.5742 44.4163 94.5742C44.4992 94.5742 45.3008 95.2676 46.2405 96.0996Z" />
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </section>
    <!-- ======= for-whom END ======= -->
    <!-- ======= advantages START ======= -->
    <section class="advantages">

        <div class="container">

            <div class="advantages__layout">
                <h2 class="advantages__title">Наши <span class="advantages__title--700">преимущества</span></h2>

                <ul class="advantages__list">
                    <?php
                        global $post;

                        $myposts = get_posts([
                          'post_type' => 'post_type_name', 
                          'numberposts' => -1,
                          'orderby' => 'menu_order',
                          'order'   => 'ASC',
                        ]);

                        if( $myposts ){
                          foreach( $myposts as $post ){
                            setup_postdata( $post );
                    ?>
                            <li class="advantages__list-item">
                                    <div class="advantages__list-item-text">
                                    <p class="advantages__list-item-text--700"><?php the_title(); ?></p>
                                    <?php the_content(); ?>
                                    </div>

                                    <?php the_post_thumbnail(array(312, 450), array(
                                    'class' => "advantages__list-item-image img-responsive img-responsive--width-100",
                                    ) ); ?>
                                <!-- <picture>
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/advantages-item-bg-1--320@2x.jpg"
                                        media="(max-width: 320px)">
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/advantages-item-bg-1--480@2x.jpg"
                                        media="(max-width: 480px)">
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/advantages-item-bg-1--640@2x.jpg"
                                        media="(max-width: 640px)">
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/advantages-item-bg-1--960@2x.jpg"
                                        media="(max-width: 960px)">
                                    <source
                                        srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/advantages-item-bg-1--1280@2x.jpg"
                                        media="(max-width: 1280px)">
                                    <img class="advantages__list-item-image img-responsive img-responsive--width-100"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/@2x/advantages-item-bg-1--1366@2x.jpg"
                                        alt="Фоновое изображение" width="312" height="450">
                                </picture> -->
                            </li>
                    <?php 
                          }
                        }
                        wp_reset_postdata(); // Сбрасываем $post
                    ?>
                </ul>

            </div>

        </div>

    </section>
    <!-- ======= advantages END ======= -->
    <!-- ======= stages START ======= -->
    <section class="stages">

        <div class="container">

            <div class="stages__layout">
                <h2 class="stages__title"><span class="stages__title--700">Этапы</span> работ</h2>
                <ul class="stages__list">
                    <li class="stages__list-item">
                        <div class="stages__list-item-left-block">
                            <img class="stages__list-item-left-block-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/stages-item-icon-1.svg"
                                alt="Иконка этапа работ" width="100" height="100">
                            <div class="stages__list-item-left-block-circle">1</div>
                        </div>
                        <div class="stages__list-item-right-block">
                            <p class="stages__list-item-right-block-text">
                                Идея
                            </p>
                        </div>
                    </li>
                    <li class="stages__list-item">
                        <div class="stages__list-item-left-block">
                            <img class="stages__list-item-left-block-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/stages-item-icon-2.svg"
                                alt="Иконка этапа работ" width="100" height="100">
                            <div class="stages__list-item-left-block-circle">2</div>
                        </div>
                        <div class="stages__list-item-right-block">
                            <p class="stages__list-item-right-block-text">
                                Проектирование
                            </p>
                        </div>
                    </li>
                    <li class="stages__list-item">
                        <div class="stages__list-item-left-block">
                            <img class="stages__list-item-left-block-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/stages-item-icon-3.svg"
                                alt="Иконка этапа работ" width="100" height="100">
                            <div class="stages__list-item-left-block-circle">3</div>
                        </div>
                        <div class="stages__list-item-right-block">
                            <p class="stages__list-item-right-block-text stages__list-item-right-block-text--fs-14">
                                Тендерная процедура <span class="stages__list-item-right-block-text--400">(при
                                    необходимости)</span>
                            </p>
                        </div>
                    </li>
                    <li class="stages__list-item">
                        <div class="stages__list-item-left-block">
                            <img class="stages__list-item-left-block-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/stages-item-icon-4.svg"
                                alt="Иконка этапа работ" width="100" height="100">
                            <div class="stages__list-item-left-block-circle">4</div>
                        </div>
                        <div class="stages__list-item-right-block">
                            <p class="stages__list-item-right-block-text">
                                Поставка оборудования
                            </p>
                        </div>
                    </li>
                    <li class="stages__list-item">
                        <div class="stages__list-item-left-block">
                            <img class="stages__list-item-left-block-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/stages-item-icon-5.svg"
                                alt="Иконка этапа работ" width="100" height="100">
                            <div class="stages__list-item-left-block-circle">5</div>
                        </div>
                        <div class="stages__list-item-right-block">
                            <p class="stages__list-item-right-block-text">
                                Реализация<br class="d-inline d-sm-none"> и строительство
                            </p>
                        </div>
                    </li>
                    <li class="stages__list-item">
                        <div class="stages__list-item-left-block">
                            <img class="stages__list-item-left-block-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/stages-item-icon-6.svg"
                                alt="Иконка этапа работ" width="100" height="100">
                            <div class="stages__list-item-left-block-circle">6</div>
                        </div>
                        <div class="stages__list-item-right-block">
                            <p class="stages__list-item-right-block-text">
                                Техническое обслуживание
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </section>
    <!-- ======= stages END ======= -->
    <!-- ======= logistics START ======= -->
    <section class="logistics">

        <div class="container">

            <div class="logistics__layout">
                <div class="logistics__text-block">
                    <p class="logistics__text">Большие ресурсы затрачиваются<br class="d-none d-md-inline"> на
                        организацию доставки и приемку грузов</p>
                    <p class="logistics__text">Автоматизированная транспортировка единичных грузов с помощью пневмопочты
                        позволит сэкономить<br class="d-none d-xxl-inline"> ресурсы вашего производства</p>
                </div>
                <h2 class="logistics__title">Мы обеспечим безопасную<br class="d-inline d-md-none"> и надёжную логистику
                </h2>
                <p class="logistics__subtitle">со скоростью от 3 до 10 м/с</p>
                <form class="logistics__form" action="#" method="post">
                    <input id="logistics__form-input" class="logistics__form-input input-default"
                        name="logistics__form-input" type="tel" placeholder="+7 (999) 999-99-99">
                    <button data-modal="modal-order" class="logistics__form-button button-default">Получить<br
                            class="d-inline d-sm-none"> бесплатную консультацию</button>
                    <p class="logistics__form-agreement">Нажимая на кнопку, вы даете согласие на обработку своих
                        персональных данных и соглашаетесь с <a
                            class="logistics__form-agreement-link agreement-link-default" href="#">Пользовательским
                            соглашением</a></p>
                </form>
                <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--320@2x.jpg"
                        media="(max-width: 320px)">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--480@2x.jpg"
                        media="(max-width: 480px)">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--640@2x.jpg"
                        media="(max-width: 640px)">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--960@2x.jpg"
                        media="(max-width: 960px)">
                    <img class="logistics__bg-image img-responsive img-responsive--width-100 d-none d-xl-block"
                        src="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--1366@2x.jpg"
                        alt="Девушка с пневмоконтейнером" width="1183" height="789">
                </picture>
            </div>

        </div>

        <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--320@2x.jpg"
                media="(max-width: 320px)">
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--480@2x.jpg"
                media="(max-width: 480px)">
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--640@2x.jpg"
                media="(max-width: 640px)">
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--960@2x.jpg"
                media="(max-width: 960px)">
            <img class="logistics__bg-image img-responsive img-responsive--width-100 d-block d-xl-none"
                src="<?php bloginfo('template_url'); ?>/assets/img/@2x/logistics-image--1366@2x.jpg"
                alt="Девушка с пневмоконтейнером" width="1183" height="789">
        </picture>
    </section>
    <!-- ======= logistics END ======= -->
    <!-- ======= about START ======= -->
    <section class="about">

        <div class="container">

            <div class="about__layout">
                <div class="about__text-block">
                    <h2 class="about__title">О пневматической почте</h2>

                    <?php the_field('section-about-text'); ?>

                    <a href="#" class="about__link">Показать описание полностью</a>
                </div>
                <div class="about__image-block">
                    <picture>
                        <source srcset="<?php the_field('section-about-image--320'); ?>"
                            media="(max-width: 320px)">
                        <source srcset="<?php the_field('section-about-image--480'); ?>"
                            media="(max-width: 480px)">
                        <source srcset="<?php the_field('section-about-image--640'); ?>"
                            media="(max-width: 640px)">
                        <source srcset="<?php the_field('section-about-image--960'); ?>"
                            media="(max-width: 960px)">
                        <img class="about__image img-responsive img-responsive--width-100"
                            src="<?php the_field('section-about-image--1366'); ?>"
                            alt="Оборудование для пневмодоставки" width="425" height="560">
                    </picture>
                </div>
            </div>

        </div>

    </section>
    <!-- ======= about END ======= -->
    <!-- ======= partners START ======= -->
    <section class="partners">

        <div class="container">

            <div class="partners__layout">
                <h2 class="partners__title"><span class="partners__title--700">С нами работают</span> <br
                        class="d-inline d-xl-none">крупные компании и ведущие медицинские центры</h2>
                <ul class="partners__list">
                    <li class="partners__list-item">
                        <div class="partners__list-item-text-block">
                            <p class="partners__list-item-text">
                                ВЦЭРМ имени А.М. Никифорова МЧС России
                            </p>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-logo-1@2x.jpg"
                                alt="Логотип компании" class="partners__list-item-logo">
                        </div>
                        <picture>
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-1--640@2x.jpg"
                                media="(max-width: 640px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-1--960@2x.jpg"
                                media="(max-width: 960px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-1--1280@2x.jpg"
                                media="(max-width: 1280px)">
                            <img class="partners__list-item-bg img-responsive img-responsive--width-100"
                                src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-1--1366@2x.jpg"
                                alt="Здание компании партнера" width="424" height="217">
                        </picture>
                    </li>
                    <li class="partners__list-item">
                        <div class="partners__list-item-text-block">
                            <p class="partners__list-item-text">
                                CLINICS & HOSPITALS GMS
                            </p>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-logo-2@2x.jpg"
                                alt="Логотип компании" class="partners__list-item-logo">
                        </div>
                        <picture>
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-2--640@2x.jpg"
                                media="(max-width: 640px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-2--960@2x.jpg"
                                media="(max-width: 960px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-2--1280@2x.jpg"
                                media="(max-width: 1280px)">
                            <img class="partners__list-item-bg img-responsive img-responsive--width-100"
                                src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-2--1366@2x.jpg"
                                alt="Здание компании партнера" width="424" height="217">
                        </picture>
                    </li>
                    <li class="partners__list-item">
                        <div class="partners__list-item-text-block">
                            <p class="partners__list-item-text">
                                Клиника «Скандинавия»
                            </p>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-logo-3@2x.jpg"
                                alt="Логотип компании" class="partners__list-item-logo">
                        </div>
                        <picture>
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-3--640@2x.jpg"
                                media="(max-width: 640px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-3--960@2x.jpg"
                                media="(max-width: 960px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-3--1280@2x.jpg"
                                media="(max-width: 1280px)">
                            <img class="partners__list-item-bg img-responsive img-responsive--width-100"
                                src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-3--1366@2x.jpg"
                                alt="Здание компании партнера" width="424" height="217">
                        </picture>
                    </li>
                    <li class="partners__list-item">
                        <div class="partners__list-item-text-block">
                            <p class="partners__list-item-text">
                                ОАО Монди<br class="d-inline d-md-none"> Сыктывкарский ЛПК
                            </p>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-logo-4@2x.jpg"
                                alt="Логотип компании" class="partners__list-item-logo">
                        </div>
                        <picture>
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-4--640@2x.jpg"
                                media="(max-width: 640px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-4--960@2x.jpg"
                                media="(max-width: 960px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-4--1280@2x.jpg"
                                media="(max-width: 1280px)">
                            <img class="partners__list-item-bg img-responsive img-responsive--width-100"
                                src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-4--1366@2x.jpg"
                                alt="Здание компании партнера" width="424" height="217">
                        </picture>
                    </li>
                    <li class="partners__list-item">
                        <div class="partners__list-item-text-block">
                            <p class="partners__list-item-text">
                                Медицинский центр<br class="d-inline d-md-none"> им. В. А. Алмазова
                            </p>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-logo-5@2x.jpg"
                                alt="Логотип компании" class="partners__list-item-logo">
                        </div>
                        <picture>
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-5--640@2x.jpg"
                                media="(max-width: 640px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-5--960@2x.jpg"
                                media="(max-width: 960px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-5--1280@2x.jpg"
                                media="(max-width: 1280px)">
                            <img class="partners__list-item-bg img-responsive img-responsive--width-100"
                                src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-5--1366@2x.jpg"
                                alt="Здание компании партнера" width="424" height="217">
                        </picture>
                    </li>
                    <li class="partners__list-item">
                        <div class="partners__list-item-text-block">
                            <p class="partners__list-item-text">
                                Проект в аэропорту Шереметьево
                            </p>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-logo-6@2x.jpg"
                                alt="Логотип компании" class="partners__list-item-logo">
                        </div>
                        <picture>
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-6--640@2x.jpg"
                                media="(max-width: 640px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-6--960@2x.jpg"
                                media="(max-width: 960px)">
                            <source
                                srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-6--1280@2x.jpg"
                                media="(max-width: 1280px)">
                            <img class="partners__list-item-bg img-responsive img-responsive--width-100"
                                src="<?php bloginfo('template_url'); ?>/assets/img/@2x/partners-item-bg-6--1366@2x.jpg"
                                alt="Здание компании партнера" width="424" height="217">
                        </picture>
                    </li>
                </ul>
            </div>

        </div>

    </section>
    <!-- ======= partners END ======= -->
    <!-- ======= history START ======= -->
    <section class="history">

        <div class="container">

            <div class="history__layout">

                <h2 class="history__company-name d-block d-xl-none">ООО «ПТС ИНЖИНИРИНГ»</h2>
                <p class="history__company-city d-block d-xl-none">(г. Санкт-Петербург)</p>
                <div class="history__top-block">
                    <div class="history__company-block">
                        <h2 class="history__company-name d-none d-xl-block">ООО «ПТС ИНЖИНИРИНГ»</h2>
                        <p class="history__company-city d-none d-xl-block">(г. Санкт-Петербург)</p>
                        <a href="#" class="history__company-logo">
                            <img class="history__company-logo-image"
                                src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo.svg" alt="Логотип компании">
                        </a>
                        <p class="history__company-desc">
                            – специализированная организация<br class="d-none d-xl-inline"> по проектированию, поставке,
                            монтажу<br class="d-inline d-md-none d-lg-inline"> и эксплуатационному обслуживанию систем
                            пневматической почты на территории России
                        </p>
                        <a href="#" class="history__company-about-link">Подробнее о нас</a>
                    </div>

                    <div class="history__history-block">
                        <ul class="history__history-list">
                            <li class="history__history-list-item">
                                Первые технологические проекты ПТС ИНЖИНИРИНГ (ранее «Массар») начала реализовывать<br
                                    class="d-inline d-sm-none"> в <span
                                    class="history__history-list-item--700">1993</span> году.
                            </li>
                            <li class="history__history-list-item">
                                C <span class="history__history-list-item--700">2011</span> года комплексы
                                пневмооборудования становятся полностью автоматизированными<br
                                    class="d-inline d-md-none"> и управляются с помощью ПК.
                            </li>
                            <li class="history__history-list-item">
                                В <span class="history__history-list-item--700">2016</span> году системы пневмопочты
                                работают<br class="d-none d-sm-inline d-md-none d-lg-inline d-xl-none"> в <span
                                    class="history__history-list-item--700">30 медицинских учреждениях
                                    Санкт-Петербурга:</span><br class="d-none d-lg-inline d-xl-none"> в общем объёме —
                                на 200 станций,<br class="d-none d-xxl-inline"> 50 линий,<br
                                    class="d-none d-lg-inline d-xl-none"> 30 километров трубопровода.
                            </li>
                            <li class="history__history-list-item">
                                С <span class="history__history-list-item--700">2019</span> года в крупнейшем
                                логистическом комплексе а/п Шереметьево установлена крупнейшая по протяжённости
                                пневмопочта<br class="d-none d-sm-inline d-md-none"> с диаметром путевого трубопровода
                                200 мм.
                            </li>
                            <li class="history__history-list-item">
                                <span class="history__history-list-item--700">В 2023 году</span> — успешно введена<br
                                    class="d-inline d-sm-none"> в строй система пневмотранспорта для отделения
                                экстренной медицинской помощи СПБ НИИ СП им. И.И. Джанелидзе. В процессе работы, было
                                смонтировано<br class="d-inline d-sm-none"> <span
                                    class="history__history-list-item--700">11 станций и около 600 метров
                                    трубопровода.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="history__bottom-block">
                    <ul class="history__params-list">
                        <li class="history__params-list-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/history-params-list-item-icon-1.svg"
                                alt="Иконка параметра" class="history__params-list-item-icon">
                            <dl class="history__params-desc-list">
                                <dt class="history__params-desc-list-term">10 кг</dt>
                                <dd class="history__params-desc-list-details">Максимальный вес груза</dd>
                            </dl>
                        </li>
                        <li class="history__params-list-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/history-params-list-item-icon-2.svg"
                                alt="Иконка параметра" class="history__params-list-item-icon">
                            <dl class="history__params-desc-list">
                                <dt class="history__params-desc-list-term">от 3 до 10 м/с</dt>
                                <dd class="history__params-desc-list-details">Скорость транспортировки</dd>
                            </dl>
                        </li>
                        <li class="history__params-list-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/history-params-list-item-icon-3.svg"
                                alt="Иконка параметра" class="history__params-list-item-icon">
                            <dl class="history__params-desc-list">
                                <dt class="history__params-desc-list-term">до 15 км</dt>
                                <dd class="history__params-desc-list-details">Расстояние транспортировки</dd>
                            </dl>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section>
    <!-- ======= history END ======= -->
    <!-- ======= results START ======= -->
    <section class="results">

        <div class="container">

            <div class="results__layout">
                <div class="results__content-block">
                    <h2 class="results__title">
                        Посмотрите,<br class="d-inline d-sm-none"> как выглядят <span
                            class="results__title--700">результаты нашей работы</span>
                    </h2>
                    <p class="results__text">
                        Собрали для вас кейсы в один файл с описанием и решением проблем каждого проекта
                    </p>
                    <form class="results__form" action="#" method="post">
                        <label class="results__form-label" for="results__form-input">Введите ваш номер телефона:</label>
                        <input id="results__form-input" class="results__form-input input-default"
                            name="results__form-input" type="tel" placeholder="+7 (999) 999-99-99">
                        <button data-modal="modal-order" class="results__form-button button-default">скачать кейсы в 1
                            клик</button>
                        <p class="results__form-agreement">Нажимая на кнопку, вы даете согласие на обработку своих
                            персональных данных и соглашаетесь с <a
                                class="results__form-agreement-link agreement-link-default" href="#">Пользовательским
                                соглашением</a></p>
                    </form>
                </div>

                <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/results-bg--1366@2x.jpg"
                        media="(max-width: 320px)">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/results-bg--480@2x.jpg"
                        media="(max-width: 480px)">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/results-bg--640@2x.jpg"
                        media="(max-width: 640px)">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/results-bg--960@2x.jpg"
                        media="(max-width: 960px)">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/@2x/results-bg--1366@2x.jpg"
                        media="(max-width: 1280px)">
                    <img class="results__bg-image img-responsive img-responsive--width-100"
                        src="<?php bloginfo('template_url'); ?>/assets/img/@2x/results-bg--1366@2x.jpg"
                        alt="Оборудование для пневмопочты" width="1160" height="605">
                </picture>
                <img class="results__image img-responsive img-responsive--width-100"
                    src="<?php bloginfo('template_url'); ?>/assets/img/@2x/results-image--1366@2x.png" alt="Журнал"
                    width="760" height="632">
            </div>

        </div>

    </section>
    <!-- ======= results END ======= -->
    <!-- ======= optimize START ======= -->
    <section class="optimize">

        <div class="container">

            <div class="optimize__layout">

                <div class="optimize__content-block">
                    <h2 class="optimize__title"><span class="optimize__title--700">Оптимизируйте</span> ресурсы<br
                            class="d-none d-sm-inline"> вашего производства<br class="d-inline d-xl-none"> уже сейчас
                    </h2>
                    <ul class="optimize-list">
                        <li class="optimize__list-item">Оставьте ваш номер телефона<br class="d-inline"> и наш эксперт
                            перезвонит вам уже сегодня</li>
                        <li class="optimize__list-item">Подберет варианты исходя<br class="d-inline d-sm-none"> от
                            вашего бюджета</li>
                        <li class="optimize__list-item">Подскажет на чем можно сэкономить до 40%</li>
                    </ul>
                    <form class="optimize__form" action="#" method="post">
                        <label class="optimize__form-label" for="optimize__form-input">Введите ваш номер
                            телефона:</label>
                        <input id="optimize__form-input" class="optimize__form-input input-default"
                            name="optimize__form-input" type="tel" placeholder="+7 (999) 999-99-99">
                        <button data-modal="modal-order" class="optimize__form-button button-default">Получить
                            бесплатную консультацию специалиста</button>
                        <p class="optimize__form-agreement">Нажимая на кнопку, вы даете согласие на обработку своих
                            персональных данных и соглашаетесь с <a
                                class="optimize__form-agreement-link agreement-link-default" href="#">Пользовательским
                                соглашением</a></p>
                    </form>
                </div>

                <div class="optimize__image-block">
                    <div class="optimize__consultant">
                        <p class="optimize__consultant-text">Вас проконсультирует:</p>
                        <dl class="optimize__consultant-list">
                            <dt class="optimize__consultant-list-name">Денис Карелин</dt>
                            <dd class="optimize__consultant-list-position">Старший инженер</dd>
                        </dl>
                    </div>

                    <img class="optimize__image d-none d-sm-block"
                        src="<?php bloginfo('template_url'); ?>/assets/img/@2x/optimize-worker-image--1366@2x.png"
                        alt="Рабочий" width="1263" height="842">
                </div>

            </div>

        </div>


        <img class="optimize__image d-block d-sm-none"
            src="<?php bloginfo('template_url'); ?>/assets/img/@2x/optimize-worker-image--1366@2x.png" alt="Рабочий"
            width="1263" height="842">
    </section>
    <!-- ======= optimize END ======= -->
    <!-- ======= contacts START ======= -->
    <section class="contacts">

        <div class="container">

            <div class="contacts__layout">

                <h2 class="contacts__title">Наши контакты</h2>

                <div class="contacts__content">

                    <div class="contacts__contacts-block">

                        <div class="contacts__tel-block">
                            <p class="contacts__tel-text">Телефон:</p>
                            <a href="tel:+78124413056" class="contacts__tel-number">+7 (812) 441-30-56</a>
                        </div>
                        <div class="contacts__e-mail-block">
                            <p class="contacts__e-mail-text">Почта:</p>
                            <a href="mailto:<?php the_field('email'); ?>" class="contacts__e-mail-address"><?php the_field('email'); ?></a>
                        </div>
                        <div class="contacts__social-block">
                            <p class="contacts__social-text">Пишите<br class="d-inline"> в мессенджеры:</p>
                            <a href="<?php the_field('whatsapp-link'); ?>" class="contacts__social-whatsapp">
                                <img class="contacts__social-whatsapp-icon"
                                    src="<?php the_field('whatsapp-icon'); ?>"
                                    alt="Иконка whatsapp">
                            </a>
                            <a href="<?php the_field('telegram-link'); ?>" class="contacts__social-telegram">
                                <img class="contacts__social-telegram-icon"
                                    src="<?php the_field('telegram-icon'); ?>"
                                    alt="Иконка telegram">
                            </a>
                        </div>
                        <a data-modal="modal-order" href="#" class="callback-btn">Заказать обратный звонок</a>

                    </div>

                    <div class="contacts__address-block">
                        <div class="contacts__company-block">
                            <div class="contacts__company-name-block">
                                <p class="contacts__company-name">ООО «ПТС ИНЖИНИРИНГ»</p>
                                <p class="contacts__company-address">197198, Санкт-Петербург,ул. Введенская, д.21, пом.
                                    32Н, офис 3</p>
                            </div>

                            <div class="contacts__company-timetable-block">
                                <p class="contacts__company-timetable-text">График работы:</p>
                                <p class="contacts__company-timetable-timetable">Пн. – Пт. с 10.00 до 18.00</p>
                            </div>
                        </div>

                        <div class="contacts__destination-block">
                            <div class="contacts__photo-block">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/@2x/contacts-photo-1@2x.jpg"
                                    alt="Фотография офиса" class="contacts__photo-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/@2x/contacts-photo-2@2x.jpg"
                                    alt="Фотография офиса" class="contacts__photo-image">
                            </div>
                            <div class="contacts__map-block">
                                <div class="contacts__map">
                                    <script type="text/javascript" charset="utf-8" async
                                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A65d824d94ca8f46109f29b6006e5acceea5b0e2a0b9bd02f05030e71f6d3d9f4&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true">
                                    </script>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ======= contacts END ======= -->
<!-- </main> -->

<?php get_footer(); ?>