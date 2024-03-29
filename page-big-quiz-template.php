<?php



/**
 * template name: Big Quiz
 */

get_header();
$data = get_queried_object();

?>
<form action="#" class="content main-form">
    <div class="main-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide main-slide-1">
                <div class="sub-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sub-slide sub-slide-1">
                            <div class="sub-slide__label"><span>01</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">IT Governance</h2>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q1">
                                                <label for="q1" class="check-fld"></label>
                                                <label for="q1" class="q-lbl">Are IT
                                                    policies/procedures/standards/guidelines in place and
                                                    followed?</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Do employees receive security awareness testing and training?" id="q2">
                                                <label for="q2" class="check-fld"></label>
                                                <label for="q2" class="q-lbl">Do employees receive security
                                                    awareness testing and training?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies based on a security controls framework?" id="q3">
                                                <label for="q3" class="check-fld"></label>
                                                <label for="q3" class="q-lbl">Are IT policies based on a
                                                    security
                                                    controls framework?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CISO report to the CIO?" id="q4">
                                                <label for="q4" class="check-fld"></label>
                                                <label for="q4" class="q-lbl">Does the CISO report to the
                                                    CIO?</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does an IT steering committee or equivalent exist?" id="q5">
                                                <label for="q5" class="check-fld"></label>
                                                <label for="q5" class="q-lbl">Does an IT steering committee
                                                    or
                                                    equivalent exist?</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual compliance tests (e.g., SOX, PCI, HIPAA) performed?" id="q6">
                                                <label for="q6" class="check-fld"></label>
                                                <label for="q6" class="q-lbl">Are annual compliance tests
                                                    (e.g.,
                                                    SOX, PCI, HIPAA) performed?</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main-slide-2">
                <div class="sub-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sub-slide sub-slide-1">
                            <div class="sub-slide__label"><span>02</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question" data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide2@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">

                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">WAN/MAN</h2>
                                        <div class="sub-slide__subtitle">Remote Organization Location</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>Wide area networks are primarily associated with
                                                organizations that have multiple remote physical locations
                                                requiring direct connections to the enterprise’s core
                                                network. This section focuses on security measure and
                                                controls surrounding WAN and MAN.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="B" value="Do remote locations adhere to enterprise IT policies/procedures/standards/guidelines?" id="q7">
                                                <label for="q7" class="check-fld"></label>
                                                <label for="q7" class="q-lbl">Do remote locations adhere to
                                                    enterprise IT policies, procedures, standards, and
                                                    guidelines?
                                                </label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="B" value="Do remote locations have limited technology (e.g., firewall, distribution switch, workstations, multi-function printing)?" id="q8">
                                                <label for="q8" class="check-fld"></label>
                                                <label for="q8" class="q-lbl">Do remote locations have
                                                    limited technology (e.g., firewalls, distribution
                                                    switches, workstations, and multi-function
                                                    printing)?</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main-slide-3">
                <div class="sub-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sub-slide sub-slide-1">
                            <div class="sub-slide__label"><span>03</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question" data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide3-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Internet</h2>
                                        <div class="sub-slide__subtitle">Internet Presence</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>All organizations have an Internet presence, Internet access,
                                                and third-party connections, such as connections to cloud
                                                providers and strategic partners. This section focuses on
                                                the security and controls surrounding an organization’s
                                                Internet presence.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are annual external network penetration tests performed?" id="q9">
                                                <label for="q9" class="check-fld"></label>
                                                <label for="q9" class="q-lbl">Are annual external network
                                                    penetration tests performed?</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-2">
                            <div class="sub-slide__label"><span>03</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question" data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide3-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Remote User Access</h2>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are periodic audits performed of all user accounts?" id="q10">
                                                <label for="q10" class="check-fld"></label>
                                                <label for="q10" class="q-lbl">Are periodic audits performed
                                                    of all user accounts?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Is push technology implemented to confirm device configuration?" id="q11">
                                                <label for="q11" class="check-fld"></label>
                                                <label for="q11" class="q-lbl">Is push technology
                                                    implemented to confirm device configuration?</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Is user authentication with multi-factor authentication in place?" id="q12">
                                                <label for="q12" class="check-fld"></label>
                                                <label for="q12" class="q-lbl">Is user authentication with
                                                    multi-factor authentication in place?</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Is device authentication in place?" id="q13">
                                                <label for="q13" class="check-fld"></label>
                                                <label for="q13" class="q-lbl">Is device authentication in
                                                    place?</label>
                                            </li>
                                        </ul>
                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-3">
                            <div class="sub-slide__label"><span>03</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question" data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide3-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Site-to-Site VPN</h2>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are explicit source IP addresses defined?" id="q14">
                                                <label for="q14" class="check-fld"></label>
                                                <label for="q14" class="q-lbl">Are explicit source IP
                                                    addresses defined?</label>
                                            </li>
                                        </ul>
                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-4">
                            <div class="sub-slide__label"><span>03</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question" data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide3-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Cloud Providers (e.g., Office365, Box,
                                            Google, and Salesforce)</h2>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are annual SSAE 18 Type II reviewsperformed?" id="q15">
                                                <label for="q15" class="check-fld"></label>
                                                <label for="q15" class="q-lbl">Are annual SSAE 18 Type II
                                                    reviewsperformed?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are cloud service provider (CSP) security options implemented?" id="q16">
                                                <label for="q16" class="check-fld"></label>
                                                <label for="q16" class="q-lbl">Are cloud service provider
                                                    (CSP) security options implemented?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CSP offer data loss prevention, and, if so, is it enabled?" id="q17">
                                                <label for="q17" class="check-fld"></label>
                                                <label for="q17" class="q-lbl">Does the CSP offer data loss
                                                    prevention, and, if so, is it enabled?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CSP offer anti-phishing/anti-spoofing, and, if so, is it enabled?" id="q18">
                                                <label for="q18" class="check-fld"></label>
                                                <label for="q18" class="q-lbl">Does the CSP offer
                                                    anti-phishing/anti-spoofing, and, if so, is it
                                                    enabled?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CSP offer comprehensive auditing, and, if so, is it enabled?" id="q19">
                                                <label for="q19" class="check-fld"></label>
                                                <label for="q19" class="q-lbl">Does the CSP offer
                                                    comprehensive auditing, and, if so, is it
                                                    enabled?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CSP offer encryption of data in transit and at rest, and, if so, is it enabled?" id="q20">
                                                <label for="q20" class="check-fld"></label>
                                                <label for="q20" class="q-lbl">Does the CSP offer
                                                    encryption of data in transit and at rest, and, if so,
                                                    is it enabled?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CSP offer multi-factor authentication and, if so, is it enabled? (Based on data classification standards.)" id="q21">
                                                <label for="q21" class="check-fld"></label>
                                                <label for="q21" class="q-lbl">Does the CSP offer
                                                    multi-factor authentication and, if so, is it enabled?
                                                    (Based on data classification standards.)</label>
                                            </li>

                                        </ul>
                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-5">
                            <div class="sub-slide__label"><span>03</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question" data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide3-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Remote Vendor Access</h2>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Is vendor user account authentication in place?" id="q22">
                                                <label for="q22" class="check-fld"></label>
                                                <label for="q22" class="q-lbl">Is vendor user account
                                                    authentication in place?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are all accounts named user accounts?" id="q23">
                                                <label for="q23" class="check-fld"></label>
                                                <label for="q23" class="q-lbl">Are all accounts named user
                                                    accounts?</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are periodic vendor account audits performed?" id="q24">
                                                <label for="q24" class="check-fld"></label>
                                                <label for="q24" class="q-lbl">Are periodic vendor account
                                                    audits performed?</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are vendor accounts active for 30 or fewer days?" id="q25">
                                                <label for="q25" class="check-fld"></label>
                                                <label for="q25" class="q-lbl">Are vendor accounts active
                                                    for 30 or fewer days?</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Is vendor activity monitoring in real time?" id="q26">
                                                <label for="q26" class="check-fld"></label>
                                                <label for="q26" class="q-lbl">Is vendor activity
                                                    monitoring in real time?</label>
                                            </li>

                                        </ul>
                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main-slide-4">
                <div class="sub-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sub-slide sub-slide-1">
                            <div class="sub-slide__label"><span>04</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide4-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">ISP and Next-Generation FIREWALL</h2>
                                        <div class="sub-slide__subtitle">Internet Router – ISP-Managed</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Is the ISPs responsibility to secure the router documented?" id="q27">
                                                <label for="q27" class="check-fld"></label>
                                                <label for="q27" class="q-lbl">Is the ISPs responsibility to
                                                    secure the router documented?</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Do you confirm the patch/security report from the ISP annually?" id="q28">
                                                <label for="q28" class="check-fld"></label>
                                                <label for="q28" class="q-lbl">Do you confirm the
                                                    patch/security report from the ISP annually?</label>
                                            </li>

                                        </ul>
                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-2">
                            <div class="sub-slide__label"><span>04</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide4-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">NEXT-GENERATION FIREWALL</h2>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Is multi-zone protection enabled and configured?" id="q29">
                                                <label for="q29" class="check-fld"></label>
                                                <label for="q29" class="q-lbl">“Any, any, any” rules are
                                                    disabled.</label>
                                            </li>
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Is multi-zone protection enabled and configured?" id="q30">
                                                <label for="q30" class="check-fld"></label>
                                                <label for="q30" class="q-lbl">The firewall configuration is
                                                    reviewed annually.</label>
                                            </li>
                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are unnecessary services disabled?" id="q31">
                                                <label for="q31" class="check-fld"></label>
                                                <label for="q31" class="q-lbl">Unnecessary services are
                                                    disabled.</label>
                                            </li>
                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are unnecessary services disabled?" id="q32">
                                                <label for="q32" class="check-fld"></label>
                                                <label for="q32" class="q-lbl">All rules have an explicit
                                                    source, destination, and service/application.</label>
                                            </li>
                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Is the ISPs responsibility to secure the router documented?" id="q33">
                                                <label for="q33" class="check-fld"></label>
                                                <label for="q33" class="q-lbl">All traffic is
                                                    logged.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Do you confirm the patch/security report from the ISP annually?" id="q34">
                                                <label for="q34" class="check-fld"></label>
                                                <label for="q34" class="q-lbl">Changes to the firewall
                                                    adhere to our change management policy.</label>
                                            </li>
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Is multi-zone protection enabled and configured?" id="q35">
                                                <label for="q35" class="check-fld"></label>
                                                <label for="q35" class="q-lbl">Risky services are
                                                    disabled.</label>
                                            </li>
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Is multi-zone protection enabled and configured?" id="q36">
                                                <label for="q36" class="check-fld"></label>
                                                <label for="q36" class="q-lbl">All rules have
                                                    comments.</label>
                                            </li>
                                        </ul>
                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main-slide-5">
                <div class="sub-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sub-slide sub-slide-1">
                            <div class="sub-slide__label"><span>05</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide5-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Web Application</h2>
                                        <div class="sub-slide__subtitle">Web Application Firewall</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q37">
                                                <label for="q37" class="check-fld"></label>
                                                <label for="q37" class="q-lbl">Web-application vulnerability
                                                    assessments are performed periodically.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q38">
                                                <label for="q38" class="check-fld"></label>
                                                <label for="q38" class="q-lbl">DURL filtering and enabled
                                                    and configured.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-2">
                            <div class="sub-slide__label"><span>05</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide5-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Web Application</h2>
                                        <div class="sub-slide__subtitle">User Provisioning</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q39">
                                                <label for="q39" class="check-fld"></label>
                                                <label for="q39" class="q-lbl">Administrator accounts are
                                                    managed.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q40">
                                                <label for="q40" class="check-fld"></label>
                                                <label for="q40" class="q-lbl">User accounts are
                                                    managed.</label>
                                            </li>
                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q41">
                                                <label for="q41" class="check-fld"></label>
                                                <label for="q41" class="q-lbl">User accounts are configured
                                                    according to the principles of role-based security and
                                                    least access.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q42">
                                                <label for="q42" class="check-fld"></label>
                                                <label for="q42" class="q-lbl">Our organization practices
                                                    security-conscious application development.</label>
                                            </li>
                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q43">
                                                <label for="q43" class="check-fld"></label>
                                                <label for="q43" class="q-lbl">Inactive accounts are
                                                    disabled.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main-slide-6">
                <div class="sub-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sub-slide sub-slide-1">
                            <div class="sub-slide__label"><span>06</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide6-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Core Router and WiFi</h2>
                                        <div class="sub-slide__subtitle">Core Router</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are there adequate access control lists?" id="q44">
                                                <label for="q44" class="check-fld"></label>
                                                <label for="q44" class="q-lbl">Access control lists are in place.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Is the firmware updated frequently?" id="q45">
                                                <label for="q45" class="check-fld"></label>
                                                <label for="q45" class="q-lbl">The firmware is updated frequently.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual configuration reviews performed?" id="q46">
                                                <label for="q46" class="check-fld"></label>
                                                <label for="q46" class="q-lbl">The configuration of the core router is reviewed annually.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are all unnecessary services disabled?" id="q47">
                                                <label for="q47" class="check-fld"></label>
                                                <label for="q47" class="q-lbl">Unnecessary services are disabled.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are all risky services disabled?" id="q48">
                                                <label for="q48" class="check-fld"></label>
                                                <label for="q48" class="q-lbl">Risky services are disabled.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-2">
                            <div class="sub-slide__label"><span>06</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide6-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Core Router and WiFi</h2>
                                        <div class="sub-slide__subtitle">Enterprise WiFi Network</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are there adequate access control lists?" id="q49">
                                                <label for="q49" class="check-fld"></label>
                                                <label for="q49" class="q-lbl">The guest WiFi network is for Internet access only.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Is the firmware updated frequently?" id="q50">
                                                <label for="q50" class="check-fld"></label>
                                                <label for="q50" class="q-lbl">Our WiFi networks are encrypted, with WPA2 as the minimum standard.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual configuration reviews performed?" id="q51">
                                                <label for="q51" class="check-fld"></label>
                                                <label for="q51" class="q-lbl">User authentication is required.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are all unnecessary services disabled?" id="q52">
                                                <label for="q52" class="check-fld"></label>
                                                <label for="q52" class="q-lbl">The guest SSID captures user identification..</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are all risky services disabled?" id="q53">
                                                <label for="q53" class="check-fld"></label>
                                                <label for="q53" class="q-lbl">There is a disclaimer message for guest WiFi access.</label>
                                            </li>
                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are all risky services disabled?" id="q54">
                                                <label for="q54" class="check-fld"></label>
                                                <label for="q54" class="q-lbl">The internal WiFi network can access the enterprise internal network and the Internet.</label>
                                            </li>
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are there adequate access control lists?" id="q55">
                                                <label for="q55" class="check-fld"></label>
                                                <label for="q55" class="q-lbl">Device authentication is required.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Is the firmware updated frequently?" id="q56">
                                                <label for="q56" class="check-fld"></label>
                                                <label for="q56" class="q-lbl">Rogue device detection and management are enabled.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual configuration reviews performed?" id="q57">
                                                <label for="q57" class="check-fld"></label>
                                                <label for="q57" class="q-lbl">WiFi traffic is logged and monitored.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main-slide-7">
                <div class="sub-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sub-slide sub-slide-1">
                            <div class="sub-slide__label"><span>07</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide7-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Active Directory</h2>
                                        <div class="sub-slide__subtitle">Active Directory</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q58">
                                                <label for="q58" class="check-fld"></label>
                                                <label for="q58" class="q-lbl"> The Active Directory password policy meets NIST standards.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q59">
                                                <label for="q59" class="check-fld"></label>
                                                <label for="q59" class="q-lbl">An industry-standard audit policy is enabled and configured.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies based on a security controls framework?" id="q60">
                                                <label for="q60" class="check-fld"></label>
                                                <label for="q60" class="q-lbl">Domain and enterprise accounts are managed.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CISO report to the CIO?" id="q61">
                                                <label for="q61" class="check-fld"></label>
                                                <label for="q61" class="q-lbl">Service accounts are managed.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does an IT steering committee or equivalent exist?" id="q62">
                                                <label for="q62" class="check-fld"></label>
                                                <label for="q62" class="q-lbl">User accounts are periodically audited.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual compliance tests (e.g., SOX, PCI, HIPAA) performed?" id="q63">
                                                <label for="q63" class="check-fld"></label>
                                                <label for="q63" class="q-lbl">Password vault software is implemented and configured.</label>
                                            </li>
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q64">
                                                <label for="q64" class="check-fld"></label>
                                                <label for="q64" class="q-lbl">A real-time change monitoring solution is implemented and configured.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q65">
                                                <label for="q65" class="check-fld"></label>
                                                <label for="q65" class="q-lbl">An automated password reset solution is in place.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-2">
                            <div class="sub-slide__label"><span>07</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide7-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Active Directory</h2>
                                        <div class="sub-slide__subtitle">NAC</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q66">
                                                <label for="q66" class="check-fld"></label>
                                                <label for="q66" class="q-lbl">Access to network resources is based on the principle of least privilege.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-3">
                            <div class="sub-slide__label"><span>07</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide7-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Active Directory</h2>
                                        <div class="sub-slide__subtitle">Distribution-Layer Switches</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q67">
                                                <label for="q67" class="check-fld"></label>
                                                <label for="q67" class="q-lbl">Configuration reviews are performed annually.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q68">
                                                <label for="q68" class="check-fld"></label>
                                                <label for="q68" class="q-lbl">Unnecessary services are disabled.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies based on a security controls framework?" id="q69">
                                                <label for="q69" class="check-fld"></label>
                                                <label for="q69" class="q-lbl">The firmware is updated frequently.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CISO report to the CIO?" id="q70">
                                                <label for="q70" class="check-fld"></label>
                                                <label for="q70" class="q-lbl">Risky services are disabled.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-4">
                            <div class="sub-slide__label"><span>07</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide7-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Active Directory</h2>
                                        <div class="sub-slide__subtitle">User VLAN</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="71">
                                                <label for="71" class="check-fld"></label>
                                                <label for="71" class="q-lbl"> End-of-life/end-of-support operating systems are decommissioned.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="72">
                                                <label for="72" class="check-fld"></label>
                                                <label for="72" class="q-lbl">Users do not have local admin access.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies based on a security controls framework?" id="73">
                                                <label for="73" class="check-fld"></label>
                                                <label for="73" class="q-lbl"> An EDR solution is installed.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CISO report to the CIO?" id="74">
                                                <label for="74" class="check-fld"></label>
                                                <label for="74" class="q-lbl">An anti-virus/anti-malware solution is installed.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does an IT steering committee or equivalent exist?" id="75">
                                                <label for="75" class="check-fld"></label>
                                                <label for="75" class="q-lbl">Local workstation firewalls are enabled.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual compliance tests (e.g., SOX, PCI, HIPAA) performed?" id="q76">
                                                <label for="q76" class="check-fld"></label>
                                                <label for="q76" class="q-lbl">Workstations are configured to meet CIS standards.</label>
                                            </li>
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q77">
                                                <label for="q77" class="check-fld"></label>
                                                <label for="q77" class="q-lbl">USB drives are in read-only mode.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main-slide-8">
                <div class="sub-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide sub-slide sub-slide-1">
                            <div class="sub-slide__label"><span>08</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide8-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Server Farm VLAN</h2>
                                        <div class="sub-slide__subtitle">Server Farm VLAN</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q78">
                                                <label for="q78" class="check-fld"></label>
                                                <label for="q78" class="q-lbl">Server access is limited to administrators.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q79">
                                                <label for="q79" class="check-fld"></label>
                                                <label for="q79" class="q-lbl">End-of-life/end-of-support operating systems are decommissioned.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies based on a security controls framework?" id="q80">
                                                <label for="q80" class="check-fld"></label>
                                                <label for="q80" class="q-lbl">An EDR solution is installed on all servers.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CISO report to the CIO?" id="q81">
                                                <label for="q81" class="check-fld"></label>
                                                <label for="q81" class="q-lbl">Vulnerability testing is performed periodically.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does an IT steering committee or equivalent exist?" id="q82">
                                                <label for="q82" class="check-fld"></label>
                                                <label for="q82" class="q-lbl">
                                                    Findings from periodic vulnerability assessments are timely remediated.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual compliance tests (e.g., SOX, PCI, HIPAA) performed?" id="q83">
                                                <label for="q83" class="check-fld"></label>
                                                <label for="q83" class="q-lbl">Unnecessary services and processes are disabled.</label>
                                            </li>
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q84">
                                                <label for="q84" class="check-fld"></label>
                                                <label for="q84" class="q-lbl">Virtual host security features are enabled.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q85">
                                                <label for="q85" class="check-fld"></label>
                                                <label for="q85" class="q-lbl">An anti-virus/anti-malware solution is installed on all servers.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies based on a security controls framework?" id="q86">
                                                <label for="q86" class="check-fld"></label>
                                                <label for="q86" class="q-lbl">Servers are configured to meet CIS standards.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CISO report to the CIO?" id="q87">
                                                <label for="q87" class="check-fld"></label>
                                                <label for="q87" class="q-lbl">Direct user access is managed.</label>
                                            </li>
                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual compliance tests (e.g., SOX, PCI, HIPAA) performed?" id="q88">
                                                <label for="q88" class="check-fld"></label>
                                                <label for="q88" class="q-lbl">USB drives are disabled.</label>
                                            </li>
                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does an IT steering committee or equivalent exist?" id="q89">
                                                <label for="q89" class="check-fld"></label>
                                                <label for="q89" class="q-lbl">All event logs are ported to a syslog server.</label>
                                            </li>


                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-2">
                            <div class="sub-slide__label"><span>08</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide8-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Server Farm VLAN</h2>
                                        <div class="sub-slide__subtitle">Enterprise Applications</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q90">
                                                <label for="q90" class="check-fld"></label>
                                                <label for="q90" class="q-lbl"> User accounts are managed.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q91">
                                                <label for="q91" class="check-fld"></label>
                                                <label for="q91" class="q-lbl">User access is configured according to the principles of role-based security and least privilege.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies based on a security controls framework?" id="q92">
                                                <label for="q92" class="check-fld"></label>
                                                <label for="q92" class="q-lbl">Administrator accounts are managed.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CISO report to the CIO?" id="q93">
                                                <label for="q93" class="check-fld"></label>
                                                <label for="q93" class="q-lbl">User access is periodically reviewed.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does an IT steering committee or equivalent exist?" id="q94">
                                                <label for="q94" class="check-fld"></label>
                                                <label for="q94" class="q-lbl">
                                                    Application-specific security assessments are performed periodically.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are annual compliance tests (e.g., SOX, PCI, HIPAA) performed?" id="q95">
                                                <label for="q95" class="check-fld"></label>
                                                <label for="q95" class="q-lbl">Follow-up assessments are performed after security vulnerabilities have been remediated.</label>
                                            </li>
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q96">
                                                <label for="q96" class="check-fld"></label>
                                                <label for="q96" class="q-lbl">Inactive user accounts are disabled.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q97">
                                                <label for="q97" class="check-fld"></label>
                                                <label for="q97" class="q-lbl">User behavior tracking and analytics software is implemented and configured.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <div class="sub-slide__btn sub-slide__btn-next">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide sub-slide sub-slide-3">
                            <div class="sub-slide__label"><span>08</span></div>
                            <div class="sub-slide__content">
                                <div class="sub-slide__logo">
                                    <a href="#">
                                        <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/logo@2x.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-slide__body">
                                    <div class="sub-slide__column-1">
                                        <div class="sub-slide__img">
                                            <div class="sub-slide__question " data-tooltip="this is text tooltip">
                                                <img src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/question.png" alt="">
                                            </div>
                                            <img class="swiper-lazy" data-src="https://staging.securanceconsulting.com/wp-content/themes/velesh_theme/static/img/slide8-1@1.5x.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub-slide__column-2">
                                        <div class="sub-slide__progress"><span class="sub-slide__progress-bar">0%</span>
                                        </div>
                                        <h2 class="sub-slide__title">Server Farm VLAN</h2>
                                        <div class="sub-slide__subtitle">Enterprise Storage</div>
                                        <div class="sub-slide__mobile-text">
                                            <p>IT governance sets the foundation for an enterprise’s IT
                                                security posture. It requires an IT steering committee; IT
                                                policies, procedures, standards, and guidelines; and
                                                performance measures and metrics.</p>
                                        </div>
                                        <div class="sub-slide__text">
                                            <p>Select all that apply to your organization</p>
                                        </div>
                                        <ul class="sub-slide__quest-list quest-list">
                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Are IT policies/procedures/standards/guidelines in place and followed?" id="q98">
                                                <label for="q98" class="check-fld"></label>
                                                <label for="q98" class="q-lbl">Direct user access to enterprise storage is prohibited.</label>
                                            </li>

                                            <li class="star-li">
                                                <input type="checkbox" name="questions[]" data-level="a" value="Do employees receive security awareness testing and training?" id="q99">
                                                <label for="q99" class="check-fld"></label>
                                                <label for="q99" class="q-lbl">Access to enterprise storage is limited to applications.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Are IT policies based on a security controls framework?" id="q100">
                                                <label for="q100" class="check-fld"></label>
                                                <label for="q100" class="q-lbl">Fabric security features are enabled.</label>
                                            </li>

                                            <li class="ellipse-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does the CISO report to the CIO?" id="q101">
                                                <label for="q101" class="check-fld"></label>
                                                <label for="q101" class="q-lbl">SAN security features are enabled.</label>
                                            </li>

                                            <li class="square-li">
                                                <input type="checkbox" name="questions[]" data-level="A" value="Does an IT steering committee or equivalent exist?" id="q102">
                                                <label for="q102" class="check-fld"></label>
                                                <label for="q102" class="q-lbl">
                                                    Unnecessary services are disabled.</label>
                                            </li>
                                        </ul>

                                        <div class="sub-slide__group-btn">
                                            <div class="sub-slide__btn sub-slide__btn-back">Back</div>
                                            <a href="#" class="sub-slide__btn sub-slide__btn-na">N/A</a>
                                            <button type="submit" class="sub-slide__btn">Next</button>
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
</form>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>

<script>
    let $mainSlider = document.querySelector('.main-slider');
    let dataMainSlider;

    class ProgressBar {
        constructor(items) {
            this.items = items;
            this.count = 1;

            this.checkItems()
        }

        checkItems() {
            if (this.items.length) return
            throw Error('items not defaund')
        }

        nexSlide() {
            this.count++;

            this.update()
        }

        prevSlide() {
            if (this.count > 1) {
                this.count--;
            }

            this.update()
        }

        update() {
            let count = this.count;
            if (this.count === 1) {
                count = 0;
            }
            let percent = Math.round(count / this.items.length * 100);
            this.items.forEach(item => {
                let bar = item.querySelector('.sub-slide__progress-bar');
                bar.style.width = percent + '%';
                bar.innerText = percent + '%';
            })
        }
    }
    let progressBarItems = document.querySelectorAll('.sub-slide__progress');
    let progressBar = new ProgressBar(progressBarItems);

    progressBar.update()

    if ($mainSlider) {

        dataMainSlider = new Swiper($mainSlider, {
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 600,
            direction: 'vertical',
            observer: true,
            observeParents: true,
            observeSlideCheldren: true,
            touchRatio: 0,

        });


        let $subSliders = document.querySelectorAll('.sub-slider');
        if ($subSliders.length) {
            $subSliders.forEach($slider => {
                let dataSlider;
                let $battonsBack = $slider.querySelectorAll('.sub-slide__btn-back');
                let $battonsNext = $slider.querySelectorAll('.sub-slide__btn-next');

                dataSlider = new Swiper($slider, {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    autoHeight: true,
                    speed: 600,
                    touchRatio: 0,
                    nested: true,
                    observer: true,
                    observeParents: true,
                    observeSlideCheldren: true,
                    lazy: true,
                    preloadImages: true,
                });

                if ($battonsBack.length) {
                    $battonsBack.forEach(btn => {
                        btn.addEventListener('click', () => {

                            let slide = btn.closest('.sub-slide');
                            let wrapper = slide.parentElement;
                            if (dataSlider.isBeginning && wrapper.children[0] === slide) {
                                dataMainSlider.slidePrev();
                                progressBar.prevSlide();
                                return;
                            }
                            let data = dataSlider.slidePrev();

                            progressBar.prevSlide();
                        })
                    })
                }

                if ($battonsNext.length) {
                    $battonsNext.forEach(btn => {
                        btn.addEventListener('click', () => {

                            if (dataSlider.isEnd) {
                                dataMainSlider.slideNext();
                                progressBar.nexSlide();
                                return;
                            }
                            let data = dataSlider.slideNext();
                            progressBar.nexSlide();
                        })
                    })
                }
            })
        }
    }

    (function tooltipStart() {
        let slideTooltips = document.querySelectorAll('[data-tooltip]');
        if (slideTooltips.length) {
            slideTooltips.forEach(el => {
                let text = el.dataset.tooltip;
                tippy(el, {
                    content: text,
                });

            })

        }
    })()
</script>

<?php
?>

<?php get_footer(); ?>