<header >
    <div class="fl-header" data-activity-map="main-nav">
        <a class="link-skip-nav" href="#main-content">Skip to main content</a>
        <div class="fl-header-bar">
            <button class="fl-header-bar__menu-button" type="button" aria-label="Menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <a class="fl-header-bar__logo-box" href="{{ url('/') }}" aria-label="FindLaw logo">
                {{-- Logo SVG --}}
                <svg class="fl-header-bar__logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="202px" height="64px" viewBox="0 0 200 63" style="enable-background:new 0 0 200 63;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill: #FA6400;}
                    </style>
                    <g>
                        <path class="st0" d="M1,10.6h23v4.1H5.8v12.5h17v4.2h-17v15.2H1V10.6z"/>
                        <path class="st0" d="M29.9,10.7c1.9,0,3.1,1.5,3.1,3.1c0,1.7-1.2,3.1-3.1,3.1c-1.9,0-3.1-1.5-3.1-3.1   C26.7,12.1,27.9,10.7,29.9,10.7z M27.6,46.6V20.8h4.6v25.8H27.6z"/>
                        <path class="st0" d="M53.8,46.6V29.7c0-3.5-1.7-5.5-5.2-5.5c-4.1,0-7.1,3.2-7.1,8.5v13.8h-4.6V20.8h4.5v5.3   c1.5-3.3,4.3-5.8,8.8-5.8c5.8,0,8.3,3.3,8.3,8.8v17.6H53.8z"/>
                        <path class="st0" d="M71.9,20.2c4.2,0,7,2.2,8.5,5.5V10.6h4.6v36h-4.5v-4.9c-1.6,3.3-4.5,5.5-8.8,5.5c-7.1,0-10.2-5.9-10.2-13.5   C61.6,26.2,64.7,20.2,71.9,20.2z M73.1,43.4c5,0,7.3-4.4,7.3-9.7c0-5.3-2.4-9.7-7.3-9.7c-4.9,0-6.8,4.1-6.8,9.7   C66.3,39.3,68.2,43.4,73.1,43.4z"/>
                        <path class="st0" d="M89.3,10.6H94v31.9h17.3v4.1h-22V10.6z"/>
                        <path class="st0" d="M130.5,46.6v-4.4c-1.8,3.1-4.9,4.9-9,4.9c-5.1,0-8-3-8-7.6c0-5.5,3.7-8,9.1-8h7.8v-2.4c0-3.5-2-5-6.2-5   c-2.9,0-5.6,0.6-8.1,1.8l-0.8-3.7c2.9-1.4,6.2-2.1,9.5-2.1c6.7,0,10.2,2.8,10.2,8.6v17.8H130.5z M130.3,34.9h-7.1   c-3.6,0-5.2,1.6-5.2,4.6c0,2.9,1.8,4.4,4.9,4.4c4.3,0,7.5-3.3,7.5-7.3V34.9z"/>
                        <path class="st0" d="M163.6,41.3l5.4-20.6h4.5l-7.6,25.8h-4.6l-6.2-21.5l-6.3,21.5h-4.6l-7.6-25.8h4.5l5.5,20.6l5.9-20.6h5   L163.6,41.3z"/>
                        <path class="st0" d="M173.8,39.7c2.2,0,3.6,1.6,3.6,3.5c0,1.9-1.4,3.5-3.6,3.5c-2.2,0-3.6-1.6-3.6-3.5   C170.2,41.3,171.6,39.7,173.8,39.7z M173.8,46.3c1.9,0,3.1-1.4,3.1-3.1c0-1.7-1.2-3.1-3.1-3.1c-1.8,0-3,1.4-3,3.1   C170.7,45,172,46.3,173.8,46.3z M174.5,43.5l1.1,1.4h-0.8l-1-1.4h-0.4v1.4h-0.7v-3.5h1.3c0.7,0,1.2,0.4,1.2,1   C175.2,42.9,174.9,43.3,174.5,43.5z M173.9,41.9h-0.6V43h0.6c0.4,0,0.6-0.2,0.6-0.6C174.5,42.1,174.3,41.9,173.9,41.9z"/>
                    </g>
                </svg>
            </a>
            <div class="fl-header-bar__menu fl-header-menu" aria-modal="true">
                <div class="fl-header-menu__body">
                    <div class="fl-header-menu__top">
                        <button class="fl-header-menu__close-button fl-header-close-button" type="button" aria-label="Close menu">
                            <svg class="fl-header-close-button__icon" width="14" height="14" viewBox="0 1 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5877 12.4877C14.1345 13.0345 14.1345 13.9204 13.5877 14.4672C13.3165 14.7406 12.9577 14.8762 12.599 14.8762C12.2403 14.8762 11.8824 14.7395 11.6095 14.4661L6.99945 9.85849L2.38988 14.465C2.11646 14.7406 1.75818 14.8762 1.39989 14.8762C1.04161 14.8762 0.683759 14.7406 0.410124 14.465C-0.136708 13.9182 -0.136708 13.0323 0.410124 12.4855L5.02101 7.87458L0.410124 3.26588C-0.136708 2.71905 -0.136708 1.83318 0.410124 1.28634C0.956957 0.739513 1.84282 0.739513 2.38966 1.28634L6.99945 5.89942L11.6103 1.28853C12.1572 0.7417 13.043 0.7417 13.5899 1.28853C14.1367 1.83536 14.1367 2.72123 13.5899 3.26806L8.97899 7.87895L13.5877 12.4877Z" fill="#666666"/>
                            </svg>
                        </button>
                        <a class="fl-header-bar__logo-box" href="{{ url('/') }}" aria-label="FindLaw logo">
                            <svg class="fl-header-menu__logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="202px" height="64px" viewBox="0 0 200 63" style="enable-background:new 0 0 200 63;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill: #FA6400;}
                                </style>
                                <g>
                                    <path class="st0" d="M1,10.6h23v4.1H5.8v12.5h17v4.2h-17v15.2H1V10.6z"/>
                                    <path class="st0" d="M29.9,10.7c1.9,0,3.1,1.5,3.1,3.1c0,1.7-1.2,3.1-3.1,3.1c-1.9,0-3.1-1.5-3.1-3.1   C26.7,12.1,27.9,10.7,29.9,10.7z M27.6,46.6V20.8h4.6v25.8H27.6z"/>
                                    <path class="st0" d="M53.8,46.6V29.7c0-3.5-1.7-5.5-5.2-5.5c-4.1,0-7.1,3.2-7.1,8.5v13.8h-4.6V20.8h4.5v5.3   c1.5-3.3,4.3-5.8,8.8-5.8c5.8,0,8.3,3.3,8.3,8.8v17.6H53.8z"/>
                                    <path class="st0" d="M71.9,20.2c4.2,0,7,2.2,8.5,5.5V10.6h4.6v36h-4.5v-4.9c-1.6,3.3-4.5,5.5-8.8,5.5c-7.1,0-10.2-5.9-10.2-13.5   C61.6,26.2,64.7,20.2,71.9,20.2z M73.1,43.4c5,0,7.3-4.4,7.3-9.7c0-5.3-2.4-9.7-7.3-9.7c-4.9,0-6.8,4.1-6.8,9.7   C66.3,39.3,68.2,43.4,73.1,43.4z"/>
                                    <path class="st0" d="M89.3,10.6H94v31.9h17.3v4.1h-22V10.6z"/>
                                    <path class="st0" d="M130.5,46.6v-4.4c-1.8,3.1-4.9,4.9-9,4.9c-5.1,0-8-3-8-7.6c0-5.5,3.7-8,9.1-8h7.8v-2.4c0-3.5-2-5-6.2-5   c-2.9,0-5.6,0.6-8.1,1.8l-0.8-3.7c2.9-1.4,6.2-2.1,9.5-2.1c6.7,0,10.2,2.8,10.2,8.6v17.8H130.5z M130.3,34.9h-7.1   c-3.6,0-5.2,1.6-5.2,4.6c0,2.9,1.8,4.4,4.9,4.4c4.3,0,7.5-3.3,7.5-7.3V34.9z"/>
                                    <path class="st0" d="M163.6,41.3l5.4-20.6h4.5l-7.6,25.8h-4.6l-6.2-21.5l-6.3,21.5h-4.6l-7.6-25.8h4.5l5.5,20.6l5.9-20.6h5   L163.6,41.3z"/>
                                    <path class="st0" d="M173.8,39.7c2.2,0,3.6,1.6,3.6,3.5c0,1.9-1.4,3.5-3.6,3.5c-2.2,0-3.6-1.6-3.6-3.5   C170.2,41.3,171.6,39.7,173.8,39.7z M173.8,46.3c1.9,0,3.1-1.4,3.1-3.1c0-1.7-1.2-3.1-3.1-3.1c-1.8,0-3,1.4-3,3.1   C170.7,45,172,46.3,173.8,46.3z M174.5,43.5l1.1,1.4h-0.8l-1-1.4h-0.4v1.4h-0.7v-3.5h1.3c0.7,0,1.2,0.4,1.2,1   C175.2,42.9,174.9,43.3,174.5,43.5z M173.9,41.9h-0.6V43h0.6c0.4,0,0.6-0.2,0.6-0.6C174.5,42.1,174.3,41.9,173.9,41.9z"/>
                                </g>
                                </svg>
                        </a>
                    </div>
                    <div class="fl-header-menu__main">
                        <a
                            href="#"
                            class="fl-header-menu__find-a-lawyer-link fl-button fl-link-button primary"
                            aria-disabled="false"
                        >
                            <span class="fl-button-content">Find an Expert</span>
                            <i
                                class="fa fa-angle-right medium"
                                aria-hidden="true"
                            ></i>
                        </a>
                        <nav class="fl-header-menu__nav">
                            <ul class="fl-header-menu__nav-list">
                                <li class="fl-header-menu__nav-list-item fl-header-menu__nav-list-item--desktop-only">
                                    <a class="fl-header-menu__nav-list-item-head fl-header-menu__find-a-lawyer-link fl-text-lg-medium" href="#">
                                        <p class="fl-header-menu__nav-list-text fl-text-lg-medium">Find an Expert</p>
                                    </a>
                                </li>
                                <li class="fl-header-menu__nav-list-item fl-header-menu__nav-list-item--submenu">
                                    <button class="fl-header-menu__nav-list-item-head fl-header-menu__nav-list-item-head--dropdown-control fl-text-lg-medium" type="button" aria-expanded="false">
                                        <p class="fl-header-menu__nav-list-text fl-text-lg-medium">CPA Services</p>
                                        <i class="fl-header-menu__icon fl-header-menu__icon--closed-dropdown fa fa-angle-down" aria-hidden="true"></i>
                                    </button>
                                    <ul class="fl-header-menu__nav-list-item-content">
                                        <li class="legal-forms-menu__list-item"><a class="legal-forms-menu__list-item-content" href="#"><p class="legal-forms-menu__list-item-text">Tax Planning</p></a></li>
                                        <li class="legal-forms-menu__list-item"><a class="legal-forms-menu__list-item-content" href="#"><p class="legal-forms-menu__list-item-text">Business Consulting</p></a></li>
                                    </ul>
                                </li>
                                <li class="fl-header-menu__nav-list-item"><a class="fl-header-menu__nav-list-item-head fl-text-lg-medium" href="#"><p class="fl-header-menu__nav-list-text fl-text-lg-medium">About Us</p></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- Search Toggle and Body truncated for brevity, same structure as original --}}
        </div>
    </div>
</header>
