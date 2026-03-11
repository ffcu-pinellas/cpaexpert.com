@extends('layouts.app')

@section('title', 'Your CPA Expert - Accounting & Tax Solutions')

@section('content')
<div class="root">
    <section class="fl-banner" style="--fl-homepage-banner-background-image-desktop: url(https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177840/ability-law/wp-prod/www-Group-162-1-2/www-Group-162-1-2.jpg?_i=AA);">
        <div class="fl-banner__content">
            <h1 class="fl-banner__text-main">Expert CPA Solutions Start Here</h1>
            <span class="fl-banner__text-secondary">
                <p>FindLaw is integrated with YourCPAExpert to provide the best tax and accounting resources on the web.</p>
            </span>
            <div class="fl-banner__search">
                <div class="fl-banner-search-box">
                    {{-- React Search Component will mount here if JS is loaded --}}
                </div>
            </div>
        </div>
    </section>

    <section class="fl-stats fl-flex fl-items-center fl-justify-center fl-stats-horizontal fl-stats-height-small">
        <ul class="fl-stats-cards-container fl-no-margin">
            <li class="fl-stats-cards-item">
                <div class="fl-stats-card fl-no-margin fl-flex fl-items-center fl-justify-center fl-stats-card-horizontal fl-stats-card-height-small">
                    <span class="fl-stats-card-value fl-callout-display">#1</span>
                    <span class="fl-stats-card-description fl-text">most visited tax & accounting site</span>
                </div>
            </li>
            <li class="fl-stats-cards-item">
                <div class="fl-stats-card fl-no-margin fl-flex fl-items-center fl-justify-center fl-stats-card-horizontal fl-stats-card-height-small">
                    <span class="fl-stats-card-value fl-callout-display">50k+</span>
                    <span class="fl-stats-card-description fl-text">articles reviewed by CPA professionals</span>
                </div>
            </li>
            <li class="fl-stats-cards-item">
                <div class="fl-stats-card fl-no-margin fl-flex fl-items-center fl-justify-center fl-stats-card-horizontal fl-stats-card-height-small">
                    <span class="fl-stats-card-value fl-callout-display">2.1m</span>
                    <span class="fl-stats-card-description fl-text">expert profiles in our directory</span>
                </div>
            </li>
            <li class="fl-stats-cards-item">
                <div class="fl-stats-card fl-no-margin fl-flex fl-items-center fl-justify-center fl-stats-card-horizontal fl-stats-card-height-small">
                    <span class="fl-stats-card-value fl-callout-display">100%</span>
                    <span class="fl-stats-card-description fl-text">free access to tax codes & laws</span>
                </div>
            </li>
        </ul>
    </section>

    <div data-testid="topic-box-section" data-activity-map="home-legal-resources">
        <div class="fl-container fl-section-title fl-text-center">
            <h2 class="fl-title-H2 fl-section-title-heading fl-no-margin">Explore CPA & Tax Issues</h2>
            <p class="fl-section-title-content fl-no-margin">Whether you are facing a tax audit or want to learn about business structures, our topics are the perfect starting point.</p>
        </div>
        <div class="fl-container">
            <div class="topic-box-section-content">
                <div class="topic-box-section-content__items">
                    <a class="fl-topic-box-item" href="#">
                        <img class="fl-topic-box-item-icon" src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177791/ability-law/wp-prod/www-topic-box-user-pilot/www-topic-box-user-pilot.png?_i=AA" />
                        <span class="fl-topic-box-item-text fl-text-lg-bold">Tax Law</span>
                    </a>
                    <a class="fl-topic-box-item" href="#">
                        <img class="fl-topic-box-item-icon" src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177811/ability-law/wp-prod/www-topic-box-family/www-topic-box-family.png?_i=AA" />
                        <span class="fl-topic-box-item-text fl-text-lg-bold">Estate Taxes</span>
                    </a>
                    <a class="fl-topic-box-item" href="#">
                        <img class="fl-topic-box-item-icon" src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177785/ability-law/wp-prod/www-topic-box-truck-medical/www-topic-box-truck-medical.png?_i=AA" />
                        <span class="fl-topic-box-item-text fl-text-lg-bold">Business Audit</span>
                    </a>
                    <a class="fl-topic-box-item" href="#">
                        <img class="fl-topic-box-item-icon" src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177820/ability-law/wp-prod/www-topic-box-house-building/www-topic-box-house-building.png?_i=AA" />
                        <span class="fl-topic-box-item-text fl-text-lg-bold">Real Estate Tax</span>
                    </a>
                    <a class="fl-topic-box-item" href="#">
                        <img class="fl-topic-box-item-icon" src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177800/ability-law/wp-prod/www-topic-box-briefcase/www-topic-box-briefcase.png?_i=AA" />
                        <span class="fl-topic-box-item-text fl-text-lg-bold">Corporate Tax</span>
                    </a>
                </div>
                <div class="topic-box-section-content__all-legal-isses-button">
                    <a href="#" class="fl-button fl-link-button secondary">
                        <span class="fl-button-content">All CPA Services</span>
                        <i class="fa fa-angle-right medium" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="fl-find-right-lawyer-section fl-background-grey">
        <div class="fl-container">
            <h2 class="fl-h2-landing fl-mb15 fl-text-center">Find the Right Expert</h2>
            <div class="fl-find-right-lawyer-content">
                <p style="text-align: center">Accounting issues can be complex. Our trusted expert directory is here to help you take the next step. Quickly find the CPA you need with our detailed profiles of experts throughout the United States.</p>
                <div class="fl-find-right-lawyer-cards">
                    <div class="fl-image-card fl-flex fl-flex-column fl-items-center fl-image-card-title-on-image">
                        <div class="fl-image-card-image-wrapper">
                            <img src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1755795063/ability-law/wp-prod/GettyImages-1394629051-1/GettyImages-1394629051-1.png?_i=AA"/>
                            <div class="fl-image-card-title">
                                <i class="fa fa-angle-right small fl-mr5" aria-hidden="true"></i>
                                <h3 class="fl-no-margin fl-h3-landing">
                                    <a href="#" class="fl-image-card-title-link">Tax Experts</a>
                                </h3>
                            </div>
                        </div>
                        <div class="fl-image-card-content fl-flex fl-flex-column">
                            <p class="fl-find-right-lawyer-cards-text fl-text-lg">Support for all tax matters such as:</p>
                            <ul class="fl-list fl-find-right-lawyer-cards-links fl-text-lg">
                                <li><i class="fa fa-angle-right medium" aria-hidden="true"></i><a href="#" class="fl-list-item-link">IRS Audits</a></li>
                                <li><i class="fa fa-angle-right medium" aria-hidden="true"></i><a href="#" class="fl-list-item-link">Tax Preparation</a></li>
                                <li><i class="fa fa-angle-right medium" aria-hidden="true"></i><a href="#" class="fl-list-item-link">Foreign Income</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Other sections (Resources, MAP, Articles) would go here, following the same pattern --}}
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    var reactComponentsData = reactComponentsData || {};
    reactComponentsData.bannerSearch = {
        findALawyerUrl: "#",
        nameSearchUrl: "#"
    };
    reactComponentsData.mapModule = {
        linksList: {"Alabama":"#","Florida":"#","New York":"#"} {{-- Truncated for demo --}}
    };
</script>
@endpush
