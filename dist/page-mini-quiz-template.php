<?php


/**
 * template name: Quiz - mini
 */

get_header();
$data = get_queried_object();

?>
<div class="wrapper mini-hardened-page">
    <?php
    do_action('do_theme_before_header');
    do_action('do_theme_header');
    do_action('do_theme_after_header');
    ?>

    <div class="content">
        <div class="welcome_global__wrap" style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>')">
            <div class="overlay"></div>
            <div class="welcome_global welcome_global__info">
                <div class="container">
                    <div class="welcome_global__box">
                        <div class="spacer-h-20"></div>
                        <div class="spacer-h-20"></div>
                        <h1 class="welcome_global__title title_60">
                            <?php the_title() ?>
                        </h1>
                        <div class="spacer-h-20"></div>
                    </div>
                </div>
            </div>
        </div>

        <form class="question-block">
            <div class="question-block__body container">
                <div class="question-block__text">
                    <?php the_content() ?>
                </div>
                <ul class="question-block__list">
                    <li>
                        1. Do you have a next-generation firewall installed?
                        <div class="question-block__group-btn">
                            <label class="question-block__btn">
                                Yes
                                <input type="radio" name="scrore[0]" value="2.25"  >
                            </label>
                            <label class="question-block__btn">
                                No
                                <input type="radio" name="scrore[0]" value="0"  >
                            </label>
                        </div>
                    </li>
                    <li>
                        2. Is an endpoint detection and response solution in place?
                        <div class="question-block__group-btn">
                            <label class="question-block__btn">
                                Yes
                                <input type="radio" name="scrore[1]" value="2.25">
                            </label>
                            <label class="question-block__btn">
                                No
                                <input type="radio" name="scrore[1]" value="0">
                            </label>
                        </div>
                    </li>
                    <li>
                        3. Is multi-factor authentication enabled for critical enterprise applications?
                        <div class="question-block__group-btn">
                            <label class="question-block__btn">
                                Yes
                                <input type="radio" name="scrore[2]" value="2.25">
                            </label>
                            <label class="question-block__btn">
                                No
                                <input type="radio" name="scrore[2]" value="0">
                            </label>
                        </div>
                    </li>
                    <li>
                        4. Is the cybersecurity program formalized and documented?
                        <div class="question-block__group-btn">
                            <label class="question-block__btn">
                                Yes
                                <input type="radio" name="scrore[3]" value="2.25">
                            </label>
                            <label class="question-block__btn">
                                No
                                <input type="radio" name="scrore[3]" value="0">
                            </label>
                    </li>
                    <li>
                        5. Is there a program in place to annually train all end-users in security awareness principles?
                        <div class="question-block__group-btn">
                            <label class="question-block__btn">
                                Yes
                                <input type="radio" name="scrore[4]" value="1">
                            </label>
                            <label class="question-block__btn">
                                No
                                <input type="radio" name="scrore[4]" value="0">
                            </label>
                        </div>
                    </li>
                </ul>

                <button type="submit" class="question-block__submit btn_global">submit</button>
            </div>
        </form>

        <script>
            (function questionBlockCheckedBtnHandler() {
                let questionBlockCheckedBtns = document.querySelectorAll('.question-block .question-block__btn');
                if (questionBlockCheckedBtns.length) {
                    questionBlockCheckedBtns.forEach(btn => {
                        let input = btn.querySelector('input[type="radio"');

                        btn.addEventListener('click', () => {

                            if (input.checked) btn.classList.add('_is-checked')

                            questionBlockCheckedBtns.forEach(item => {
                                let input = item.querySelector('input[type="radio"');

                                if (input) {
                                    if (!input.checked) item.classList.remove('_is-checked')
                                }
                            })
                        })
                    })
                }
            })();
        </script>

        <?php if (get_field('video_block')['vimeo_id']) { ?>

            <div class="quiz-video-block">
                <div class="container">
                    <div class="quiz-video-block__text">
                        <?= get_field('video_block')['text'] ?>
                    </div>
                    <div class="quiz-video-block__poster-wrap">
                        <div class="quiz-video-block__poster">
                            <picture>
                                <img src="<?= get_field('video_block')['poster']['url'] ?>" alt="img">
                            </picture>
                            <i class="play-button" data-vimeo="<?= get_field('video_block')['vimeo_id'] ?>"></i>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        <?php if ( get_field('related_articles')) { ?>

            <div class="list_article__wrap">
            <div class="container-custom">
                <div class="list_article">
                    <div class="list_article__list grid-three">

                        <?php
                        $q = new WP_Query([
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post__in' => get_field('related_articles')
                        ]);


                        while ($q->have_posts()) {
                            $q->the_post();
                          ?>

                            <article class="article <?php foreach (get_the_category() as $cat): printf(' %s ', $cat->slug); endforeach ?>">
                                <a href="<?php the_permalink(); ?>" class="image-link">
                                    <picture class="article__image">
                                        <source class="article__img" srcset="<?= get_the_post_thumbnail_url($post->ID, 'large') ?>" type="image/webp">
                                        <img class="article__img" src="<?php echo $post->image ?>" alt="img">
                                    </picture>
                                </a>
                                <div class="article__info">
                                    <div class="article__main">
                                        <p class="article__sub">
                                            <?php
                                            $categories = array();
                                            foreach (get_the_category()as $cat) {
                                                array_push($categories, $cat->name);
                                            }
                                            echo implode(', ', $categories);
                                            ?>
                                        </p>
                                        <h2 class="article__title title_20">
                                            <a href="<?php the_permalink(); ?>"><?php echo $post->post_title; ?></a>
                                        </h2>
                                        <p class="article__text">
                                            <?php
                                            if(!empty(trim(strip_tags($post->post_excerpt ))))
                                            {
                                                echo strip_tags($post->post_excerpt );
                                            }
                                            else
                                            {
                                                $text = strip_tags($post->post_content);
                                                echo substr($text, 0, 240);
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="article__read">
                                        <time class="article__date">
                                            <?php
                                            echo $post->date_formatted;
                                            ?></time><a class="article__link text_14" href="<?php echo $post->permalink; ?>">read
                                            <svg class="icon icon-arrow-right article__svg">
                                                <use xlink:href="<?php echo THEME_URL;?>/static/img/svg-sprites/symbol/sprite.svg#arrow-right"></use>
                                            </svg></a>
                                    </div>
                                </div>
                            </article>


                        <?php
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>

    <?php
    do_action('do_theme_before_footer');
    do_action('do_theme_footer');
    do_action('do_theme_after_footer');
    ?>


    <div class="testi-popup">
        <div class="testi-popup-inner">
            <i class="icon-close-testi">×</i>

        </div>
    </div>

    <div class="quiz-popup " id="popupMessage">
        <div class="quiz-popup_body">
            <div class="quiz-popup_content">
                <div class="quiz-popup__close close-popup"><span></span></div>

                Your network hardening score is:

                <div class="quiz-popup__rating">
                    <div class="quiz-popup__rating-num"></div>
                    <div class="quiz-popup__rating-text"></div>
                </div>
                To learn more about your network <br>
                security posture, take the full <br>
                self-assessment for free:

                <a href="<?php the_permalink(1556) ?>" class="quiz-popup__btn">click here</a>
                <span class="quiz-popup__renouncement close-popup">No, thanks</span>

                <div class="quiz-social">
                    <div class="quiz-social__text">Share your score:</div>

                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">



                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -->


                    <ul class="quiz-social__list">
                        <li>
                            <a href="#" class="quiz-social__icon a2a_button_twitter">
                                <svg>
                                    <use xlink:href="<?= get_template_directory_uri() ?>/static/img/svg-sprites/symbol/sprite.svg#twitter">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="quiz-social__icon a2a_button_linkedin">
                                <svg>
                                    <use xlink:href="<?= get_template_directory_uri() ?>/static/img/svg-sprites/symbol/sprite.svg#linkedin">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="quiz-social__icon a2a_button_facebook">
                                <svg>
                                    <use xlink:href="<?= get_template_directory_uri() ?>/static/img/svg-sprites/symbol/sprite.svg#facebook">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="quiz-social__icon a2a_button_email">
                                <svg>
                                    <use xlink:href="<?= get_template_directory_uri() ?>/static/img/svg-sprites/symbol/sprite.svg#email">
                                    </use>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const popupLinks = document.querySelectorAll('.popup-link');
        const body = document.querySelector('body');
        const lockPadding = document.querySelectorAll('.lock-padding');

        let unlock = true;

        const timeout = 800;

        function openQuizPopup(id) {
            let $el = document.querySelector(`${id}`);
            if ($el) {
                popupOpen($el)
            } else {
                throw new Error('Element not found');
            }
        }
        // example
        //openQuizPopup('#popupMessage');

        if (popupLinks.length > 0) {
            for (let index = 0; index < popupLinks.length; index++) {
                const popupLink = popupLinks[index];
                if (popupLink) {
                    popupLink.addEventListener('click', function(e) {
                        const popupName = popupLink.getAttribute('href').replace('#', '');
                        const curentPopup = document.getElementById(popupName);
                        popupOpen(curentPopup);
                        e.preventDefault();
                    });
                }

            }
        }


        const popupCloseIcon = document.querySelectorAll('.close-popup');
        if (popupCloseIcon.length > 0) {
            for (let index = 0; index < popupCloseIcon.length; index++) {
                const el = popupCloseIcon[index];
                el.addEventListener('click', function(e) {
                    popupClose(el.closest('.quiz-popup'));
                    e.preventDefault();
                });
            }
        }

        function popupOpen(curentPopup) {
            if (curentPopup && unlock) {
                const popupActive = document.querySelector('.quiz-popup.open');
                if (popupActive) {
                    popupClose(popupActive, false);
                } else {
                    bodyLock();
                }
                curentPopup.classList.add('open');
                curentPopup.addEventListener('click', function(e) {
                    if (!e.target.closest('.quiz-popup_content')) {
                        popupClose(e.target.closest('.quiz-popup'));
                    }
                });

            }
        }

        function popupClose(popupActive, doUnlock = true) {
            if (unlock) {
                popupActive.classList.remove('open');
                if (doUnlock) {
                    bodyUnlock();
                }
            }
        }

        function bodyLock() {
            const lockPaddingValue = window.innerWidth - document.querySelector('body').offsetWidth + 'px';
            let targetPadding = document.querySelectorAll('._lp');
            if (targetPadding.length) {
                for (let index = 0; index < targetPadding.length; index++) {
                    const el = targetPadding[index];
                    el.style.paddingRight = lockPaddingValue;
                }
            }

            if (lockPadding.length > 0) {
                for (let index = 0; index < lockPadding.length; index++) {
                    const el = lockPadding[index];
                    el.style.paddingRight = lockPaddingValue;
                }
            }

            body.style.paddingRight = lockPaddingValue;
            body.classList.add('lock');

            unlock = false;
            setTimeout(function() {
                unlock = true;
            }, timeout);
        }

        function bodyUnlock() {
            let targetPadding = document.querySelectorAll('._lp');

            setTimeout(function() {
                if (targetPadding.length) {
                    for (let index = 0; index < targetPadding.length; index++) {
                        const el = targetPadding[index];
                        el.style.paddingRight = '0px';
                    }
                }

                for (let index = 0; index < lockPadding.length; index++) {
                    const el = lockPadding[index];
                    el.style.paddingRight = '0px';
                }

                body.style.paddingRight = '0px';
                body.classList.remove('lock');
            }, timeout);

            unlock = false;
            setTimeout(function() {
                unlock = true;
            }, timeout);
        }

        document.addEventListener('keydown', function(e) {
            if (e.which === 27) {
                const popupActive = document.querySelector('.quiz-popup.open');
                popupClose(popupActive);
            }
        });

        // === Polyfill ===
        (function() {
            if (!Element.prototype.closest) {
                Element.prototype.closest = function(css) {
                    var node = this;
                    while (node) {
                        if (node.matches(css)) return node;
                        else node == node.parentElement;
                    }
                    return null;
                };
            }
        })();

        (function() {
            if (!Element.prototype.matches) {
                Element.prototype.matches = Element.prototype.matchesSelector ||
                    Element.prototype.webkitMatchesSelector ||
                    Element.prototype.mozMatchesSelector ||
                    Element.prototype.mozMatchesSelector;
            }
        })();
        // === AND Polyfill ===

        jQuery(document).ready(function($   ){
            $('.question-block').submit(function(e){
                e.preventDefault();
                var data = $(this).serializeArray()

                if (data.length < 5) {
                    alert('You should answer each question!')
                    return
                }
                var score = 0;
                $.each(data, function(i, val){
                    score += parseFloat(val.value)
                })



                var result, point;

                switch (true) {
                    case (score > 9):
                        result = 'Optimal';
                        point = 5;
                        break;
                    case (score >= 8.25 && score < 9):
                        result = 'Managed';
                        point = 4;
                        break;
                    case (score >= 6.75 && score < 8):
                        result = 'Defined';
                        point = 3;
                        break;
                    case (score >= 4.5 && score < 6.5):
                        result = 'Repeatable';
                        point = 2;
                        break;
                    case (score >= 1 && score < 4.25):
                        result = 'Ad Hoc';
                        point = 1;
                        break;
                    case (score < 1):
                        result = 'Nonexistent';
                        point = 0;
                        break
                }


                console.log(result)

                $('.quiz-popup__rating-text').html(result)
                $('.quiz-popup__rating-num').html(point)


                openQuizPopup('#popupMessage')
            })
        })



    </script>

</div>

<?php
?>

<?php get_footer(); ?>