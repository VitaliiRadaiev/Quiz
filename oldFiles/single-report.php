<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * The main template file
 *
 * @package theme/templates
 *
 * @since v1.0
 */

get_header();
$data = get_queried_object();

?>
<div class="wrapper">
    <?php
    do_action('do_theme_before_header');
    do_action('do_theme_header');
    do_action('do_theme_after_header');
    ?>
    <div class="content">
        <div class="home_welcome__wrap home_welcome__wrap-final">
            <div class="home_welcome home_welcome__final">
                <div class="home_welcome__inner0">

<!--                    <div class="home_welcome__icon">-->
<!--                        <img src="--><?//= get_template_directory_uri() ?><!--/sc/img/icon2.png" alt=""/>-->
<!--                    </div>-->
                    <h1 class="title_36"><span>HARDENED ENTERPRISE NETWORK ASSESSMENT </span></h1>
                    <div class="text_18">
                        <div><strong>powered by</strong> SECURANCE CONSULTING, provided for:</div>
                        <div class="spacer-h-20"></div>
                        <div class="title_24"><?php the_field('Company') ?></div>
                        <div><strong><?php the_field('your-name') ?> ∙ <?php the_field('your-email') ?></strong></div>
                        Assesment date: <?php the_date('m/d/Y') ?>

                    </div>
                    <div class="spacer-h-20"></div>
                    <div class="text_16">Thank you for completing the online Network Hardening Assessment Questionnaire.  <span>Based on the responses entered,</span>
                        <div><strong><?php the_field('Company') ?>'s network security maturity  is at <?php the_field('level') ?>.</strong></div>
                          </div>
                    

                    
<!--                    <div class="btn-flex">-->
<!--                        <a class="btn_transparent text_30 btn_global" href="--><?php //the_field('pdf') ?><!--"><span>Download the full report (PDF)</span></a>-->
<!--                    </div>-->
                    <div class="spacer-h-20"></div>
                    <div class="spacer-h-20"></div>

                </div>
            </div>
        </div>
        <div class="results-area">
            <div class="container">

                <div class="res-fld__wrapper">
                    <div class="res-fld">
                        <div class="res-row">
                            <div class="res-item">
                                <p class="res-item__header">Capability is either not implemented or does not achieve its purpose.</p>
                                <p>Processes are nonexistent. Nothing
                                    has been done or planned.</p>
                            </div>
                            <div class="res-item">
                                <p class="res-item__header">Capability has been defined
                                    (planned, monitored, and adjusted)
                                    but is siloed and supported only
                                    by responsibilities, mandated
                                    procedures, and limited
                                    measurement. Some assurance
                                    activities exist.</p>
                                <p>Process are repeatable, possibly with consistent results. Process discipline is unlikely to be rigorous.</p>
                            </div>
                            <div class="res-item">
                                <p class="res-item__header">Capability now operates within
                                    defined thresholds, which are
                                    aligned to the needs of the
                                    business, and is continuously
                                    monitored and improved through
                                    quantitative techniques.</p>
                                <p>Using process metrics, management can effectively control the process.</p>
                            </div>
                        </div>
                        <div class="res-row graph-row">
                            <div class="res-item">

                                <?php
                                $level = get_field('level') ;
                                $level_num = explode(' - ', $level)[0] + 1

                                ?>
                                <div class="res-item__graph res-item__graph-1 <?= $level_num == 1 ? 'highlighted' : '' ?>">
                                    <div class="res-note">organization's current status</div>
                                    <div class="res-item__graph-box">
                                        <span>LEVEL 0</span>
                                    </div>
                                    <div class="res-item__graph-footer">Nonexistent</div>
                                </div>
                                <div class="res-item__graph res-item__graph-2  <?= $level_num == 2 ? 'highlighted' : '' ?>">
                                    <div class="res-item__graph-box">
                                        <span>LEVEL 1</span>
                                    </div>
                                    <div class="res-item__graph-footer">Ad hoc</div>
                                </div>
                            </div>
                            <div class="res-item">
                                <div class="res-item__graph res-item__graph-3  <?= $level_num == 3 ? 'highlighted' : '' ?>">
                                    <div class="res-item__graph-box">
                                        <span>LEVEL 2</span>
                                    </div>
                                    <div class="res-item__graph-footer">repeatable</div>
                                </div>
                                <div class="res-item__graph res-item__graph-4  <?= $level_num == 4 ? 'highlighted' : '' ?>">
                                    <div class="res-item__graph-box">
                                        <span>LEVEL 3</span>
                                    </div>
                                    <div class="res-item__graph-footer">defined</div>
                                </div>
                            </div>
                            <div class="res-item">
                                <div class="res-item__graph res-item__graph-5 <?= $level_num == 5 ? 'highlighted' : '' ?>">
                                    <div class="res-item__graph-box">
                                        <span>LEVEL 4</span>
                                    </div>
                                    <div class="res-item__graph-footer">managed</div>
                                </div>
                                <div class="res-item__graph res-item__graph-6 <?= $level_num == 6 ? 'highlighted' : '' ?>">
                                    <div class="res-item__graph-box">
                                        <span>LEVEL 5</span>
                                    </div>
                                    <div class="res-item__graph-footer">optimal</div>
                                </div>
                            </div>
                        </div>
                        <div class="res-row">
                            <div class="res-item">
                                <div class="res-arrow"></div>
                                <p class="res-item__header">Capability has been implemented in an undefined way, with little to no integration, automation, measurement, or assurance.</p>
                                <p>Processes at this level are usually undocumented, dynamic, and driven in an ad hoc, uncontrolled, and reactive manner.</p>
                            </div>
                            <div class="res-item">
                                <div class="res-arrow"></div>
                                <p class="res-item__header">Capability has been defined
                                    (planned, monitored and
                                    adjusted) across the
                                    organization (inclusive of third
                                    parties) and is supported by
                                    responsibilities and formal,
                                    mandated procedures.
                                    Compliance is monitored, and
                                    actions are taken to rectify
                                    noncompliance.</p>
                                <p>A full set of defined and
                                    documented processes exists
                                    and is subject to some degree
                                    of improvement over time.</p>
                            </div>
                            <div class="res-item">
                                <div class="res-arrow"></div>
                                <p class="res-item__header">Capability and supporting processes are
                                    aligned with best practices and subject to
                                    continuous improvement. Results are
                                    concerned with predictability and control
                                    variation.</p>
                                <p>The focus is on continually improving
                                    processes and performance through
                                    incremental, innovative technological
                                    changes and improvements.</p>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <div class="final-section">
            <div class="container">
                <div class="text-final__sect-wrap">
                    <h2 class="title_36">Results of your analysis:</h2>
                    <p>Based on the assessment, opportunities exist to improve <?php the_field('Company') ?>’s network security posture in the areas listed below. Please contact Securance at 877-578-0215 or contactus@securanceconsulting.com to learn how we can assist your organization in improving its cybersecurity posture.
                         </p>
<div class="result-list__wrap">


                        <?php

                        $titles = [
                                'A' => 'Extremely Security Focused Items',
                                'B' => 'Moderate Items',
                                'C' => 'Must Have Items',
                        ];


                        while (have_rows('sections', 1556)) {
                            the_row();
                            while (have_rows('questions')) {
                                the_row();
                                 $questions_field = get_field('questions');
                                 foreach ($questions_field as $question) {
                                     $questions[] = $question['option'];
                                 }


                                while (have_rows('options')) {
                                    the_row();

                                    $color = '';
                                    $level = get_sub_field('level');
                                    $color = get_field("level_{$level}_color", 'option');
                                    $option = get_sub_field('option');


                                    $yes = in_array($option, $questions) ? true  : '';
                                    
                                    if ($yes)
                                        continue;

                                    $items[$level][] = $option;





                                }

                            }
                        }



                        krsort($items,  );
                        $score = 0;
                        $score2=0;
                        foreach ($items as $level => $item) {
                            $color = get_field("level_{$level}_color", 'option');
                            $level_score = get_field("level_{$level}_value", 'option');

                            echo '<div class="result-list">

                            <h3 class="title_column" style="color:' . $color . '">'.$titles[$level].'<br> (Not in place)</h3>
                            <ul>';

                            foreach ($item as $option) {

                                if (in_array($option, $question)) {

                                    $score += $level_score;

                                    continue;

                                }
                                $score2++;
                                echo   '<li class="level-'.$level.'" ><span class="result-num" style="color:' . $color . '">'.$score2.'</span><span >' . $option . '</span><span style="color:' . $color . '"> NO</span></li>';
                            }

                            echo '</ul></div>';
                        }


                        ?>

</div>

                </div>
                <div class="btn-flex">
                    <a download class="btn_transparent text_30 btn_global" href="<?php the_field('pdf') ?>"><span>Download the full report (PDF)</span></a>
                    <a class="text_30 btn_global" href="<?php the_permalink(170) ?>"><span>CONTACT US TODAY</span></a>
                </div>
            </div>

        </div>
<!--        <div class="final-section final-section__aligned ">-->
<!--            <div class="container">-->
<!--                <h2 class="title_36">--><?php //the_field('title', 'option') ?><!--</h2>-->
<!--                <p class="text_24">--><?php //the_field('subtitle', 'option') ?><!--</p>-->
<!--                <ul class="icons-list">-->
<!---->
<!--                    --><?php //while (have_rows('features','option' )) { the_row(); ?>
<!--                    <li><div class="icons-img"><img src="--><?//= get_sub_field('icon')['url'] ?><!--" alt=""/></div>-->
<!--                        <div class="icons-title">--><?php //the_sub_field('title') ?><!--</div>-->
<!--                        <div class="icons-txt">--><?php //the_sub_field('text') ?><!--</div>-->
<!--                    </li>-->
<!--                    --><?php //} ?>
<!--                </ul>-->
<!--                <div class="btn-flex">-->
<!--                    <a class="text_30 btn_global" href="--><?php //the_permalink(170) ?><!--"><span>CONTACT US TODAY</span></a>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->





    </div>
    <?php
    do_action('do_theme_before_footer');
    do_action('do_theme_footer');
    do_action('do_theme_after_footer');
    ?>
</div>

<script  >
    $ = jQuery
</script>
<?php
?>

<?php get_footer(); ?>
