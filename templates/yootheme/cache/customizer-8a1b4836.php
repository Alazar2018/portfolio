<?php // $file = C:/xampp/htdocs/Alazar/templates/yootheme/vendor/yootheme/styler/config/customizer.json

return [
  'sections' => [
    'styler' => [
      'title' => 'Style', 
      'width' => 350, 
      'priority' => 11, 
      'ignore' => ['@deprecated', '@breakpoint-*-max', '@internal*', '@heading-primary-*', '@heading-hero-*', '@woocommerce-*'], 
      'components' => [
        'global' => [
          'name' => 'Global', 
          'general' => true, 
          'groups' => [
            'typography' => ['@global(-*)?-font-*', '@global-line-height'], 
            'primary' => '@global-primary-*', 
            'secondary' => '@global-secondary-*', 
            'tertiary' => '@global-tertiary-*', 
            'colors' => '@global(-*)?-color', 
            'backgrounds' => '@global(-*)?-background', 
            'borders' => '@global-border*', 
            'box shadows' => '@global-*-box-shadow', 
            'spacings' => ['@global(-*)?-margin', '@global(-*)?-gutter'], 
            'controls' => '@global-control-*', 
            'z index' => '@global-z-index', 
            'breakpoints' => '@breakpoint-*'
          ]
        ], 
        'theme' => [
          'name' => 'Theme', 
          'general' => true, 
          'groups' => [
            'page' => '@theme-page-*', 
            'page container' => '@theme-page-container-*', 
            'toolbar' => '@theme-toolbar-*', 
            'headerbar' => '@theme-headerbar-*', 
            'headerbar top' => '@theme-headerbar-top-*', 
            'headerbar bottom' => '@theme-headerbar-bottom-*', 
            'headerbar stacked' => '@theme-headerbar-stacked-*', 
            'sidebar' => '@theme-sidebar-*', 
            'section title' => '@section-title-*', 
            'mask default' => '@theme-mask-default-*', 
            'box decoration' => '@theme-box-decoration-*', 
            'box decoration default' => '@theme-box-decoration-default-*', 
            'box decoration primary' => '@theme-box-decoration-primary-*', 
            'box decoration secondary' => '@theme-box-decoration-secondary-*', 
            'transition border' => '@theme-transition-border-*'
          ], 
          'hover' => '.tm-page, .tm-toolbar, .tm-sidebar, .tm-headerbar-top, .tm-headerbar-bottom, .tm-headerbar-stacked, .tm-section-title, .tm-box-decoration-default, .tm-box-decoration-primary, .tm-box-decoration-secondary, .tm-transition-border', 
          'inspect' => '.tm-page-container, .tm-page, tm-page > *, .tm-toolbar, .tm-toolbar > *, .tm-sidebar, .tm-sidebar > *, .tm-headerbar-top, .tm-headerbar-top > *, .tm-headerbar-bottom, .tm-headerbar-bottom > *, .tm-headerbar-stacked, .tm-headerbar-stacked > *, .tm-section-title, .tm-section-title > *, .tm-box-decoration-default, .tm-box-decoration-default > *, .tm-box-decoration-primary, .tm-box-decoration-primary > *, .tm-box-decoration-secondary, .tm-box-decoration-secondary > *, .tm-transition-border, .tm-transition-border > *'
        ], 
        'inverse' => [
          'name' => 'Inverse', 
          'general' => true, 
          'groups' => [
            'global' => ['@inverse-global-color-mode', '@inverse-global-*'], 
            'theme' => ['@inverse-section-title-*', '@inverse-theme-box-decoration-default-*', '@inverse-theme-box-decoration-primary-*', '@inverse-theme-box-decoration-secondary-*'], 
            'accordion' => '@inverse-accordion-*', 
            'article' => '@inverse-article-*', 
            'badge' => '@inverse-badge-*', 
            'base' => '@inverse-base-*', 
            'breadcrumb' => '@inverse-breadcrumb-*', 
            'button default' => '@inverse-button-default-*', 
            'button primary' => '@inverse-button-primary-*', 
            'button secondary' => '@inverse-button-secondary-*', 
            'button danger' => '@inverse-button-danger-*', 
            'button disabled' => '@inverse-button-disabled-*', 
            'button text' => '@inverse-button-text-(?!transform)*', 
            'button link' => '@inverse-button-link-*', 
            'card' => '@inverse-card-*', 
            'close' => '@inverse-close-*', 
            'column' => '@inverse-column-*', 
            'countdown' => '@inverse-countdown-*', 
            'divider' => '@inverse-divider-*', 
            'dotnav' => '@inverse-dotnav-*', 
            'form' => '@inverse-form-*', 
            'form danger' => '@inverse-form-danger-*', 
            'form success' => '@inverse-form-success-*', 
            'form blank' => '@inverse-form-blank-*', 
            'form select' => '@inverse-form-select-*', 
            'form radio' => '@inverse-form-radio-*', 
            'form legend' => '@inverse-form-legend-*', 
            'form label' => '@inverse-form-label-*', 
            'form icon' => '@inverse-form-icon-*', 
            'grid divider' => '@inverse-grid-divider-*', 
            'heading' => '@inverse-heading-*', 
            'icon link' => '@inverse-icon-link-*', 
            'icon button' => '@inverse-icon-button-*', 
            'iconnav' => '@inverse-iconnav-*', 
            'label' => '@inverse-label-*', 
            'leader' => '@inverse-leader-*', 
            'link' => '@inverse-link-*', 
            'list' => '@inverse-list-*', 
            'marker' => '@inverse-marker-*', 
            'nav' => '@inverse-nav-*', 
            'nav default' => '@inverse-nav-default-*', 
            'nav primary' => '@inverse-nav-primary-*', 
            'nav secondary' => '@inverse-nav-secondary-*', 
            'navbar' => '@inverse-navbar-*', 
            'navbar nav item' => '@inverse-navbar-nav-item-*', 
            'navbar nav item line' => '@inverse-navbar-nav-item-line-*', 
            'pagination' => '@inverse-pagination-*', 
            'search' => '@inverse-search-*', 
            'search default' => '@inverse-search-default-*', 
            'search navbar' => '@inverse-search-navbar-*', 
            'search large' => '@inverse-search-large-*', 
            'search toggle' => '@inverse-search-toggle-*', 
            'slidenav' => '@inverse-slidenav-*', 
            'subnav' => '@inverse-subnav-*', 
            'subnav divider' => '@inverse-subnav-divider-*', 
            'subnav pill' => '@inverse-subnav-pill-*', 
            'tab' => '@inverse-tab-*', 
            'table' => '@inverse-table-*', 
            'text' => '@inverse-text-*', 
            'thumbnav' => '@inverse-thumbnav-*', 
            'totop' => '@inverse-totop-*', 
            'utility' => ['@inverse-dropcap-*', '@inverse-logo-*']
          ]
        ], 
        'accordion' => [
          'name' => 'Accordion', 
          'groups' => [
            'item' => '@accordion-item-*', 
            'title' => '@accordion-title-*', 
            'icon' => '@accordion-icon-*', 
            'content' => '@accordion-content-*'
          ], 
          'hover' => '.uk-accordion', 
          'inspect' => '.uk-accordion, .uk-accordion-title, .uk-accordion-title > *, .uk-accordion-content, .uk-accordion-content > *'
        ], 
        'alert' => [
          'name' => 'Alert', 
          'groups' => [
            'primary' => '@alert-primary-*', 
            'success' => '@alert-success-*', 
            'warning' => '@alert-warning-*', 
            'danger' => '@alert-danger-*', 
            'close' => '@alert-close-*'
          ], 
          'hover' => '.uk-alert', 
          'inspect' => '.uk-alert, .uk-alert > *, .uk-alert-close'
        ], 
        'align' => [
          'name' => 'Align', 
          'hover' => '[class*=\'uk-align\']', 
          'inspect' => '[class*=\'uk-align\'], [class*=\'uk-align\'] > *'
        ], 
        'animation' => [
          'name' => 'Animation', 
          'groups' => [
            'slide' => '@animation-slide-*'
          ], 
          'hover' => '[class*=\'uk-animation-\']', 
          'inspect' => '[class*=\'uk-animation-\'], [class*=\'uk-animation-\'] > *'
        ], 
        'article' => [
          'name' => 'Article', 
          'groups' => [
            'title' => '@article-title-*', 
            'meta' => '@article-meta-*', 
            'meta link' => '@article-meta-link-*'
          ], 
          'hover' => '.uk-article', 
          'inspect' => '.uk-article, .uk-article > *, .uk-article-title, .uk-article-title > *, .uk-article-meta, .uk-article-meta > *'
        ], 
        'background' => [
          'name' => 'Background', 
          'groups' => [
            'default' => '@background-default-*', 
            'muted' => '@background-muted-*', 
            'primary' => '@background-primary-*', 
            'secondary' => '@background-secondary-*'
          ], 
          'hover' => '.uk-background-default, .uk-background-muted, .uk-background-primary, .uk-background-secondary', 
          'inspect' => '.uk-background-default, .uk-background-muted, .uk-background-primary, .uk-background-secondary'
        ], 
        'badge' => [
          'name' => 'Badge', 
          'groups' => [
            'badge' => '@badge-*'
          ], 
          'hover' => '.uk-badge', 
          'inspect' => '.uk-badge, .uk-badge > *'
        ], 
        'base' => [
          'name' => 'Base', 
          'groups' => [
            'body' => '@base-body-*', 
            'link' => '@base-link-*', 
            'strong' => '@base-strong-*', 
            'code' => '@base-code-*', 
            'em' => '@base-em-*', 
            'ins' => '@base-ins-*', 
            'mark' => '@base-mark-*', 
            'quote' => '@base-quote-*', 
            'small' => '@base-small-*', 
            'margin' => '@base-margin-*', 
            'heading' => '@base-heading-*', 
            'h1' => '@base-h1-*', 
            'h2' => '@base-h2-*', 
            'h3' => '@base-h3-*', 
            'h4' => '@base-h4-*', 
            'h5' => '@base-h5-*', 
            'h6' => '@base-h6-*', 
            'list' => '@base-list-*', 
            'hr' => '@base-hr-*', 
            'blockquote' => '@base-blockquote-*', 
            'blockquote footer' => '@base-blockquote-footer-*', 
            'pre' => '@base-pre-*', 
            'focus' => '@base-focus-*', 
            'selection' => '@base-selection-*'
          ], 
          'hover' => 'a, strong, code, kbd, samp, em, ins, mark, q, small, p, ul, ol, dl, pre, address, fieldset, figure, h1, h2, h3, h4, h5, h6, hr, blockquote, .uk-h1, .uk-h2, .uk-h3, .uk-h4, .uk-h5, .uk-h6, .uk-link', 
          'inspect' => ':not(.uk-nav):not(.uk-nav-sub):not(.uk-navbar-nav):not(.uk-subnav):not(.uk-breadcrumb):not(.uk-pagination):not(.uk-tab) > * > a:not([class]), * > a:not([class]), * > * > a:not([class]), strong, :not(pre) > code, :not(pre) > kbd, :not(pre) > samp, em, ins, mark, q, small, h1, h2, h3, h4, h5, h6, h1 > *, h2 > *, h3 > *, h4 > *, h5 > *, h6 > *, hr:not(.uk-divider-icon), blockquote, blockquote > *, pre, pre > *, .uk-h1, .uk-h2, .uk-h3, .uk-h4, .uk-h5, .uk-h6, .uk-h1 > *, .uk-h2 > *, .uk-h3 > *, .uk-h4 > *, .uk-h5 > *, .uk-h6 > *, .uk-link'
        ], 
        'breadcrumb' => [
          'name' => 'Breadcrumb', 
          'groups' => [
            'item' => '@breadcrumb-item-*', 
            'divider' => '@breadcrumb-divider*'
          ], 
          'hover' => '.uk-breadcrumb', 
          'inspect' => '.uk-breadcrumb, .uk-breadcrumb > *, .uk-breadcrumb > * > *'
        ], 
        'button' => [
          'name' => 'Button', 
          'groups' => [
            'default' => '@button-default-*', 
            'primary' => '@button-primary-*', 
            'secondary' => '@button-secondary-*', 
            'danger' => '@button-danger-*', 
            'disabled' => '@button-disabled-*', 
            'text' => ['@button-text-mode', '@button-text-(?!transform)*'], 
            'link' => '@button-link-*', 
            'small' => '@button-small-*', 
            'large' => '@button-large-*'
          ], 
          'hover' => '.uk-button', 
          'inspect' => '.uk-button, .uk-button-group'
        ], 
        'card' => [
          'name' => 'Card', 
          'groups' => [
            'body' => '@card-body-*', 
            'header' => '@card-header-*', 
            'footer' => '@card-footer-*', 
            'title' => '@card-title-*', 
            'badge' => '@card-badge-*', 
            'hover' => '@card-hover*', 
            'default' => '@card-default-*', 
            'default title' => '@card-default-title-*', 
            'default header' => '@card-default-header-*', 
            'default footer' => '@card-default-footer-*', 
            'primary' => '@card-primary-*', 
            'primary title' => '@card-primary-title-*', 
            'secondary' => '@card-secondary-*', 
            'secondary title' => '@card-secondary-title-*', 
            'small' => '@card-small-*', 
            'large' => '@card-large-*'
          ], 
          'hover' => '.uk-card', 
          'inspect' => '.uk-card, .uk-card-body, .uk-card-body > *, .uk-card-header, .uk-card-header > *, .uk-card-footer, .uk-card-footer > *, [class*=\'uk-card-media\'], .uk-card-title, .uk-card-title > *, .uk-card-badge'
        ], 
        'close' => [
          'name' => 'Close', 
          'hover' => '.uk-close', 
          'inspect' => '.uk-close, .uk-close svg'
        ], 
        'column' => [
          'name' => 'Column', 
          'groups' => [
            'divider' => '@column-divider-*'
          ], 
          'hover' => '[class*=\'uk-column-\']', 
          'inspect' => '[class*=\'uk-column-\'], [class*=\'uk-column-\'] > *'
        ], 
        'comment' => [
          'name' => 'Comment', 
          'groups' => [
            'header' => '@comment-header-*', 
            'title' => '@comment-title-*', 
            'meta' => '@comment-meta-*', 
            'list' => '@comment-list-*', 
            'primary' => '@comment-primary-*'
          ], 
          'hover' => '.uk-comment', 
          'inspect' => '.uk-comment, .uk-comment-body, .uk-comment-body > *, .uk-comment-header, .uk-comment-header > *, .uk-comment-title, .uk-comment-title > *, .uk-comment-meta, .uk-comment-meta > *, .uk-comment-avatar, .uk-comment-avatar > *, .uk-comment-list, .uk-comment-list ul, .uk-comment-list li, .uk-comment-primary, uk-comment-primary > *'
        ], 
        'container' => [
          'name' => 'Container', 
          'groups' => [
            'xsmall' => '@container-xsmall-*', 
            'small' => '@container-small-*', 
            'large' => '@container-large-*', 
            'xlarge' => '@container-xlarge-*'
          ], 
          'hover' => '.uk-container', 
          'inspect' => '.uk-container, .uk-container > *'
        ], 
        'countdown' => [
          'name' => 'Countdown', 
          'groups' => [
            'item' => '@countdown-item-*', 
            'number' => '@countdown-number-*', 
            'separator' => '@countdown-separator-*', 
            'label' => '@countdown-label-*'
          ], 
          'hover' => '.uk-countdown', 
          'inspect' => '.uk-countdown, .uk-countdown > *'
        ], 
        'description-list' => [
          'name' => 'Description List', 
          'groups' => [
            'term' => '@description-list-term-*', 
            'description' => '@description-list-description-*', 
            'divider' => '@description-list-divider-*'
          ], 
          'hover' => '.uk-description-list', 
          'inspect' => '.uk-description-list, .uk-description-list > dt, .uk-description-list > dd'
        ], 
        'divider' => [
          'name' => 'Divider', 
          'groups' => [
            'divider icon' => '@divider-icon-*', 
            'divider small' => '@divider-small-*', 
            'divider vertical' => '@divider-vertical-*'
          ], 
          'hover' => '.uk-divider-icon, .uk-divider-small, .uk-divider-vertical', 
          'inspect' => '.uk-divider-icon, .uk-divider-small, .uk-divider-vertical'
        ], 
        'dotnav' => [
          'name' => 'Dotnav', 
          'groups' => [
            'item' => '@dotnav-item-*'
          ], 
          'hover' => '.uk-dotnav', 
          'inspect' => '.uk-dotnav, .uk-dotnav > *, .uk-dotnav > * > *'
        ], 
        'drop' => [
          'name' => 'Drop', 
          'hover' => '.uk-drop', 
          'inspect' => '.uk-drop, .uk-drop > *'
        ], 
        'dropdown' => [
          'name' => 'Dropdown', 
          'groups' => [
            'large' => '@dropdown-large-*', 
            'nav' => '@dropdown-nav-*', 
            'nav item' => '@dropdown-nav-item-*', 
            'nav subtitle' => '@dropdown-nav-subtitle-*', 
            'nav header' => '@dropdown-nav-header-*', 
            'nav divider' => '@dropdown-nav-divider-*', 
            'nav sublist' => '@dropdown-nav-sublist-*'
          ], 
          'hover' => '.uk-dropdown', 
          'inspect' => '.uk-dropdown, .uk-dropdown > *, .uk-dropdown-nav, .uk-dropdown-nav > *, .uk-dropdown-nav > * > *, .uk-dropdown-grid, .uk-dropdown-grid > *'
        ], 
        'dropbar' => [
          'name' => 'Dropbar', 
          'groups' => [
            'top' => '@dropbar-top-*', 
            'bottom' => '@dropbar-bottom-*', 
            'left' => '@dropbar-left-*', 
            'right' => '@dropbar-right-*'
          ], 
          'hover' => '.uk-dropbar', 
          'inspect' => '.uk-dropbar, .uk-dropbar > *'
        ], 
        'form' => [
          'name' => 'Form', 
          'groups' => [
            'multi line' => ['@form-multi-line-*', '@form-padding-vertical'], 
            'danger' => '@form-danger-*', 
            'success' => '@form-success-*', 
            'blank' => '@form-blank-*', 
            'select' => '@form-select-*', 
            'range' => '@form-range-*', 
            'small' => '@form-small-*', 
            'large' => '@form-large-*', 
            'width' => '@form-width-*', 
            'radio' => '@form-radio-*', 
            'legend' => '@form-legend-*', 
            'label' => '@form-label-*', 
            'stacked' => '@form-stacked-*', 
            'horizontal' => '@form-horizontal-*', 
            'icon' => '@form-icon-*'
          ], 
          'hover' => '.uk-input, .uk-select, .uk-textarea, .uk-range, .uk-radio, .uk-checkbox, .uk-legend, .uk-fieldset, [class*=\'uk-form\']', 
          'inspect' => '.uk-input, .uk-select, .uk-textarea, .uk-range, .uk-radio, .uk-checkbox, .uk-legend, .uk-fieldset, [class*=\'uk-form\'], [class*=\'uk-form\'] > *'
        ], 
        'grid' => [
          'name' => 'Grid', 
          'groups' => [
            'small' => '@grid-small-*', 
            'medium' => '@grid-medium-*', 
            'large' => '@grid-large-*', 
            'divider' => '@grid-divider-*'
          ], 
          'hover' => '.uk-grid', 
          'inspect' => '.uk-grid, .uk-grid > *, .uk-grid > * > *'
        ], 
        'heading' => [
          'name' => 'Heading', 
          'groups' => [
            'small' => '@heading-small-*', 
            'medium' => '@heading-medium-*', 
            'large' => '@heading-large-*', 
            'xlarge' => '@heading-xlarge-*', 
            '2xlarge' => '@heading-2xlarge-*', 
            'divider' => '@heading-divider-*', 
            'bullet' => '@heading-bullet-*', 
            'line' => '@heading-line-*'
          ], 
          'hover' => '.uk-heading-small, .uk-heading-medium, .uk-heading-large, .uk-heading-xlarge, .uk-heading-2xlarge, .uk-heading-divider, .uk-heading-bullet, .uk-heading-line', 
          'inspect' => '.uk-heading-small, .uk-heading-small > *, .uk-heading-medium, .uk-heading-medium > *, .uk-heading-large, .uk-heading-large > *, .uk-heading-xlarge, .uk-heading-xlarge > *, .uk-heading-2xlarge, .uk-heading-2xlarge > *, .uk-heading-divider, .uk-heading-divider > *, .uk-heading-bullet, .uk-heading-bullet > *, .uk-heading-line, .uk-heading-line > *'
        ], 
        'height' => [
          'name' => 'Height', 
          'hover' => '.uk-height-small, .uk-height-medium, .uk-height-large', 
          'inspect' => '.uk-height-small, .uk-height-small > *, .uk-height-medium, .uk-height-medium > *, .uk-height-large, .uk-height-large > *'
        ], 
        'icon' => [
          'name' => 'Icon', 
          'groups' => [
            'link' => '@icon-link-*', 
            'button' => '@icon-button-*', 
            'image' => '@icon-image-*'
          ], 
          'hover' => '.uk-icon', 
          'inspect' => '.uk-icon, .uk-icon svg'
        ], 
        'iconnav' => [
          'name' => 'Iconnav', 
          'groups' => [
            'item' => '@iconnav-item-*'
          ], 
          'hover' => '.uk-iconnav', 
          'inspect' => '.uk-iconnav, .uk-iconnav > *, .uk-iconnav > * > *, .uk-iconnav > * > * > *'
        ], 
        'label' => [
          'name' => 'Label', 
          'groups' => [
            'success' => '@label-success-*', 
            'warning' => '@label-warning-*', 
            'danger' => '@label-danger-*'
          ], 
          'hover' => '.uk-label', 
          'inspect' => '.uk-label, .uk-label > *'
        ], 
        'leader' => [
          'name' => 'Leader', 
          'hover' => '.uk-leader', 
          'inspect' => '.uk-leader, .uk-leader > *'
        ], 
        'lightbox' => [
          'name' => 'Lightbox', 
          'groups' => [
            'item' => '@lightbox-item-*', 
            'toolbar' => '@lightbox-toolbar-*', 
            'toolbar icon' => '@lightbox-toolbar-icon-*', 
            'button' => '@lightbox-button-*'
          ], 
          'hover' => '.uk-lightbox', 
          'inspect' => '.uk-lightbox, .uk-lightbox > *, .uk-lightbox-item, .uk-lightbox-item > *'
        ], 
        'link' => [
          'name' => 'Link', 
          'groups' => [
            'muted' => '@link-muted-*', 
            'text' => '@link-text-*', 
            'heading' => '@link-heading-*'
          ], 
          'hover' => '.uk-link-muted, .uk-link-text, .uk-link-heading, .uk-link-reset', 
          'inspect' => '.uk-link-muted, .uk-link-text, .uk-link-heading, .uk-link-reset'
        ], 
        'list' => [
          'name' => 'List', 
          'groups' => [
            'color' => ['@list-muted-color', '@list-emphasis-color', '@list-primary-color', '@list-secondary-color'], 
            'bullet' => '@list-bullet-*', 
            'divider' => '@list-divider-*', 
            'striped' => '@list-striped-*', 
            'large' => '@list-large-*', 
            'large divider' => '@list-large-divider-*', 
            'large striped' => '@list-large-striped-*'
          ], 
          'hover' => '.uk-list', 
          'inspect' => '.uk-list, .uk-list > *, .uk-list > * > *'
        ], 
        'margin' => [
          'name' => 'Margin', 
          'groups' => [
            'small' => '@margin-small-*', 
            'medium' => '@margin-medium-*', 
            'large' => '@margin-large-*', 
            'xlarge' => '@margin-xlarge-*'
          ], 
          'hover' => '[class*=\'uk-margin\']', 
          'inspect' => '[class*=\'uk-margin\'], [class*=\'uk-margin\'] > *'
        ], 
        'marker' => [
          'name' => 'Marker', 
          'hover' => '.uk-marker', 
          'inspect' => '.uk-marker, .uk-marker svg'
        ], 
        'modal' => [
          'name' => 'Modal', 
          'groups' => [
            'dialog' => '@modal-dialog-*', 
            'container' => '@modal-container-*', 
            'body' => '@modal-body-*', 
            'header' => '@modal-header-*', 
            'footer' => '@modal-footer-*', 
            'title' => '@modal-title-*', 
            'close' => '@modal-close-*', 
            'close outside' => '@modal-close-outside-*'
          ], 
          'hover' => '.uk-modal', 
          'inspect' => '.uk-modal, .uk-modal-dialog, .uk-modal-container, .uk-modal-body, .uk-modal-body > *, .uk-modal-header, .uk-modal-header > *, .uk-modal-footer, .uk-modal-footer > *, .uk-modal-title, .uk-modal-title > *, [class*=\'uk-modal-close-\']'
        ], 
        'nav' => [
          'name' => 'Nav', 
          'groups' => [
            'item' => '@nav-item-*', 
            'sublist' => '@nav-sublist-*', 
            'parent icon' => '@nav-parent-icon-*', 
            'header' => '@nav-header-*', 
            'divider' => '@nav-divider-*', 
            'default' => '@nav-default-*', 
            'default item' => '@nav-default-item-*', 
            'default subtitle' => '@nav-default-subtitle-*', 
            'default header' => '@nav-default-header-*', 
            'default divider' => '@nav-default-divider-*', 
            'default sublist' => '@nav-default-sublist-*', 
            'primary' => '@nav-primary-*', 
            'primary item' => '@nav-primary-item-*', 
            'primary subtitle' => '@nav-primary-subtitle-*', 
            'primary header' => '@nav-primary-header-*', 
            'primary divider' => '@nav-primary-divider-*', 
            'primary sublist' => '@nav-primary-sublist-*', 
            'secondary' => '@nav-secondary-*', 
            'secondary item' => '@nav-secondary-item-*', 
            'secondary subtitle' => '@nav-secondary-subtitle-*', 
            'secondary header' => '@nav-secondary-header-*', 
            'secondary divider' => '@nav-secondary-divider-*', 
            'secondary sublist' => '@nav-secondary-sublist-*', 
            'dividers' => '@nav-dividers-*'
          ], 
          'hover' => '.uk-nav', 
          'inspect' => '.uk-nav, .uk-nav > *, .uk-nav > * > *, .uk-nav-sub, .uk-nav-sub > *, .uk-nav-sub > * > *'
        ], 
        'navbar' => [
          'name' => 'Navbar', 
          'groups' => [
            'group' => '@navbar-group-*', 
            'nav' => '@navbar-nav-*', 
            'nav item' => '@navbar-nav-item-*', 
            'nav item line' => ['@navbar-nav-item-line-mode', '@navbar-nav-item-line-position-mode', '@navbar-nav-item-line-slide-mode', '@navbar-nav-item-line-*'], 
            'parent icon' => '@navbar-parent-icon-*', 
            'item' => '@navbar-item-*', 
            'toggle' => '@navbar-toggle-*', 
            'subtitle' => '@navbar-subtitle-*', 
            'primary' => '@navbar-primary-*', 
            'primary nav' => '@navbar-primary-nav-*', 
            'primary nav item' => '@navbar-primary-nav-item-*', 
            'primary item' => '@navbar-primary-item-*', 
            'primary toggle' => '@navbar-primary-toggle-*', 
            'sticky' => '@navbar-sticky-*', 
            'dropdown' => '@navbar-dropdown-*', 
            'dropdown large' => '@navbar-dropdown-large-*', 
            'dropdown dropbar' => '@navbar-dropdown-dropbar-*', 
            'dropdown dropbar large' => '@navbar-dropdown-dropbar-large-*', 
            'dropdown grid' => '@navbar-dropdown-grid-*', 
            'dropdown nav' => '@navbar-dropdown-nav-*', 
            'dropdown nav item' => '@navbar-dropdown-nav-item-*', 
            'dropdown nav subtitle' => '@navbar-dropdown-nav-subtitle-*', 
            'dropdown nav header' => '@navbar-dropdown-nav-header-*', 
            'dropdown nav divider' => '@navbar-dropdown-nav-divider-*', 
            'dropdown nav sublist' => '@navbar-dropdown-nav-sublist-*', 
            'dropbar' => '@navbar-dropbar-*'
          ], 
          'hover' => '.uk-navbar-container', 
          'inspect' => '.uk-navbar-container, .uk-navbar, .uk-navbar-left, .uk-navbar-right, .uk-navbar-center, .uk-navbar-nav, .uk-navbar-nav > *, .uk-navbar-nav > * > *, .uk-navbar-item, .uk-navbar-item > *, .uk-navbar-toggle, .uk-navbar-toggle > *, .uk-navbar-subtitle, .uk-navbar-dropbar, .uk-navbar-dropdown, .uk-navbar-dropdown-nav, .uk-navbar-dropdown-nav > *, .uk-navbar-dropdown-nav > * > *, .uk-navbar-dropdown-grid, .uk-navbar-dropdown-grid > *, .uk-navbar-toggle-icon'
        ], 
        'notification' => [
          'name' => 'Notification', 
          'groups' => [
            'message' => '@notification-message-*', 
            'close' => '@notification-close-*', 
            'message primary' => '@notification-message-primary-*', 
            'message success' => '@notification-message-success-*', 
            'message warning' => '@notification-message-warning-*', 
            'message danger' => '@notification-message-danger-*'
          ], 
          'hover' => '.uk-notification', 
          'inspect' => '.uk-notification, .uk-notification-message, .uk-notification-message > *, .uk-notification-close'
        ], 
        'offcanvas' => [
          'name' => 'Offcanvas', 
          'groups' => [
            'bar' => '@offcanvas-bar-*', 
            'close' => '@offcanvas-close-*', 
            'overlay' => '@offcanvas-overlay-*'
          ], 
          'hover' => '.uk-offcanvas', 
          'inspect' => '.uk-offcanvas, .uk-offcanvas-overlay, .uk-offcanvas-bar, .uk-offcanvas-bar > *'
        ], 
        'overlay' => [
          'name' => 'Overlay', 
          'groups' => [
            'default' => '@overlay-default-*', 
            'primary' => '@overlay-primary-*'
          ], 
          'hover' => '.uk-overlay', 
          'inspect' => '.uk-overlay, .uk-overlay > *, .uk-overlay-icon, .uk-overlay-icon svg'
        ], 
        'padding' => [
          'name' => 'Padding', 
          'groups' => [
            'small' => '@padding-small-*', 
            'large' => '@padding-large-*'
          ], 
          'hover' => '[class*=\'uk-padding\']', 
          'inspect' => '[class*=\'uk-padding\'], [class*=\'uk-padding\'] > *'
        ], 
        'pagination' => [
          'name' => 'Pagination', 
          'groups' => [
            'item' => '@pagination-item-*'
          ], 
          'hover' => '.uk-pagination', 
          'inspect' => '.uk-pagination, .uk-pagination > *, .uk-pagination > * > *, .uk-pagination-next, .uk-pagination-next svg, .uk-pagination-previous, .uk-pagination-previous svg'
        ], 
        'placeholder' => [
          'name' => 'Placeholder', 
          'hover' => '.uk-placeholder', 
          'inspect' => '.uk-placeholder, .uk-placeholder > *'
        ], 
        'position' => [
          'name' => 'Position', 
          'hover' => '[class*=\'uk-position\']', 
          'inspect' => '[class*=\'uk-position\'], [class*=\'uk-position\'] > *'
        ], 
        'progress' => [
          'name' => 'Progress', 
          'groups' => [
            'bar' => '@progress-bar-*'
          ], 
          'hover' => '.uk-progress', 
          'inspect' => '.uk-progress'
        ], 
        'search' => [
          'name' => 'Search', 
          'groups' => [
            'default' => '@search-default-*', 
            'navbar' => '@search-navbar-*', 
            'large' => '@search-large-*', 
            'toggle' => '@search-toggle-*'
          ], 
          'hover' => '.uk-search', 
          'inspect' => '.uk-search, .uk-search-input, .uk-search-toggle, .uk-search-icon, .uk-search-icon svg'
        ], 
        'section' => [
          'name' => 'Section', 
          'groups' => [
            'default' => '@section-default-*', 
            'muted' => '@section-muted-*', 
            'primary' => '@section-primary-*', 
            'secondary' => '@section-secondary-*', 
            'xsmall' => '@section-xsmall-*', 
            'small' => '@section-small-*', 
            'large' => '@section-large-*', 
            'xlarge' => '@section-xlarge-*'
          ], 
          'hover' => '.uk-section', 
          'inspect' => '.uk-section, .uk-section > *'
        ], 
        'slidenav' => [
          'name' => 'Slidenav', 
          'groups' => [
            'large' => '@slidenav-large-*'
          ], 
          'hover' => '.uk-slidenav', 
          'inspect' => '.uk-slidenav, .uk-slidenav svg'
        ], 
        'sortable' => [
          'name' => 'Sortable', 
          'hover' => '.uk-sortable', 
          'inspect' => '.uk-sortable, .uk-sortable > *, .uk-sortable > * > *, .uk-sortable-drag, .uk-sortable-drag > *, .uk-sortable-placeholder, .uk-sortable-placeholder > *, .uk-sortable-empty, .uk-sortable-empty > *'
        ], 
        'spinner' => [
          'name' => 'Spinner', 
          'hover' => '.uk-spinner', 
          'inspect' => '.uk-spinner, .uk-spinner svg'
        ], 
        'sticky' => [
          'name' => 'Sticky', 
          'hover' => '[uk-sticky]', 
          'inspect' => '[uk-sticky], [uk-sticky] > *'
        ], 
        'subnav' => [
          'name' => 'Subnav', 
          'groups' => [
            'item' => '@subnav-item-*', 
            'divider' => '@subnav-divider-*', 
            'pill' => '@subnav-pill-*', 
            'pill item' => '@subnav-pill-item-*'
          ], 
          'hover' => '.uk-subnav', 
          'inspect' => '.uk-subnav, .uk-subnav > *, .uk-subnav > * > *'
        ], 
        'tab' => [
          'name' => 'Tab', 
          'groups' => [
            'item' => '@tab-item-*', 
            'vertical' => '@tab-vertical-*', 
            'vertical item' => '@tab-vertical-item-*'
          ], 
          'hover' => '.uk-tab', 
          'inspect' => '.uk-tab, .uk-tab > *, .uk-tab > * > *'
        ], 
        'table' => [
          'name' => 'Table', 
          'groups' => [
            'cell' => '@table-cell-*', 
            'header cell' => '@table-header-cell-*', 
            'footer' => '@table-footer-*', 
            'caption' => '@table-caption-*', 
            'row' => '@table-row-*', 
            'divider' => '@table-divider-*', 
            'striped' => '@table-striped-*', 
            'hover' => '@table-hover-*', 
            'small' => '@table-small-*', 
            'large' => '@table-large-*', 
            'expand' => '@table-expand-*'
          ], 
          'hover' => '.uk-table', 
          'inspect' => '.uk-table, .uk-table th, .uk-table th > *, .uk-table td, .uk-table td > *,  .uk-table tr, .uk-table tbody, .uk-table thead, .uk-table tfoot, .uk-table caption'
        ], 
        'text' => [
          'name' => 'Text', 
          'groups' => [
            'lead' => '@text-lead-*', 
            'meta' => '@text-meta-*', 
            'small' => '@text-small-*', 
            'large' => '@text-large-*'
          ], 
          'hover' => '[class*=\'uk-text-\']', 
          'inspect' => '[class*=\'uk-text-\'], [class*=\'uk-text-\'] > *'
        ], 
        'thumbnav' => [
          'name' => 'Thumbnav', 
          'groups' => [
            'item' => '@thumbnav-item-*'
          ], 
          'hover' => '.uk-thumbnav', 
          'inspect' => '.uk-thumbnav, .uk-thumbnav > *, .uk-thumbnav > * > *, .uk-thumbnav > * > * > *'
        ], 
        'tile' => [
          'name' => 'Tile', 
          'groups' => [
            'default' => '@tile-default-*', 
            'muted' => '@tile-muted-*', 
            'primary' => '@tile-primary-*', 
            'secondary' => '@tile-secondary-*', 
            'xsmall' => '@tile-xsmall-*', 
            'small' => '@tile-small-*', 
            'large' => '@tile-large-*', 
            'xlarge' => '@tile-xlarge-*'
          ], 
          'hover' => '.uk-tile', 
          'inspect' => '.uk-tile, .uk-tile > *'
        ], 
        'tooltip' => [
          'name' => 'Tooltip', 
          'hover' => '.uk-tooltip', 
          'inspect' => '.uk-tooltip'
        ], 
        'totop' => [
          'name' => 'Totop', 
          'hover' => '.uk-totop', 
          'inspect' => '.uk-totop, .uk-totop svg'
        ], 
        'transition' => [
          'name' => 'Transition', 
          'groups' => [
            'slide' => '@transition-slide-*'
          ], 
          'hover' => '[class*=\'uk-transition-\']', 
          'inspect' => '[class*=\'uk-transition-\'], [class*=\'uk-transition-\'] > *'
        ], 
        'utility' => [
          'name' => 'Utility', 
          'groups' => [
            'panel scrollable' => '@panel-scrollable-*', 
            'border rounded' => '@border-rounded-*', 
            'box shadow' => '@box-shadow-*', 
            'box shadow bottom' => '@box-shadow-bottom-*', 
            'dropcap' => '@dropcap-*', 
            'logo' => '@logo-*', 
            'dragover' => '@dragover-*'
          ], 
          'hover' => '.uk-panel-scrollable, .uk-box-shadow-bottom, .uk-dropcap, .uk-logo', 
          'inspect' => '.uk-panel-scrollable, .uk-panel-scrollable > *, .uk-box-shadow-bottom, .uk-dropcap, .uk-logo, .uk-logo > *'
        ], 
        'width' => [
          'name' => 'Width', 
          'hover' => '.uk-width-small, .uk-width-medium, .uk-width-large, .uk-width-xlarge, .uk-width-2xlarge', 
          'inspect' => '.uk-width-small, .uk-width-small > *, .uk-width-medium, .uk-width-medium > *, .uk-width-large, .uk-width-large > *, .uk-width-xlarge, .uk-width-xlarge > *, .uk-width-2xlarge, .uk-width-2xlarge > *'
        ]
      ], 
      'types' => [[
          'type' => 'color', 
          'vars' => ['*-color', '*-border', '*-border-top', '*-border-bottom', '*-border-left', '*-border-right', '*-background', '*-outline'], 
          'allowEmpty' => false
        ], [
          'type' => 'boxshadow', 
          'vars' => '*-box-shadow', 
          'allowEmpty' => false
        ], [
          'type' => 'textshadow', 
          'vars' => '*-text-shadow', 
          'allowEmpty' => false
        ], [
          'type' => 'select-custom', 
          'vars' => '*-border-style', 
          'options' => [
            'Solid' => 'solid', 
            'Dashed' => 'dashed', 
            'Dotted' => 'dotted', 
            'None' => 'none'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'font', 
          'vars' => '*-font-family', 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-font-weight', 
          'options' => [
            'Normal' => 'normal', 
            'Bold' => 'bold', 
            'Lighter' => 'lighter', 
            'Bolder' => 'bolder', 
            '100 (Thin)' => '100', 
            '200 (Extra Light)' => '200', 
            '300 (Light)' => '300', 
            '400 (Normal)' => '400', 
            '500 (Medium)' => '500', 
            '600 (Semi Bold)' => '600', 
            '700 (Bold)' => '700', 
            '800 (Extra Bold)' => '800', 
            '900 (Black)' => '900', 
            'Inherit' => 'inherit'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-font-style', 
          'options' => [
            'Normal' => 'normal', 
            'Italic' => 'italic', 
            'Inherit' => 'inherit'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-text-align', 
          'options' => [
            'Left' => 'left', 
            'Right' => 'right', 
            'Center' => 'center', 
            'Justify' => 'justify', 
            'Inherit' => 'inherit'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-vertical-align', 
          'options' => [
            'Baseline' => 'baseline', 
            'Sub' => 'sub', 
            'Super' => 'super', 
            'Text-top' => 'text-top', 
            'Text-bottom' => 'text-bottom', 
            'Middle' => 'middle', 
            'Top' => 'top', 
            'Bottom' => 'bottom', 
            'Inherit' => 'inherit'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-text-transform', 
          'options' => [
            'None' => 'none', 
            'Lowercase' => 'lowercase', 
            'Uppercase' => 'uppercase', 
            'Capitalize' => 'capitalize', 
            'Inherit' => 'inherit'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-text-decoration', 
          'options' => [
            'None' => 'none', 
            'Underline' => 'underline', 
            'Inherit' => 'inherit'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-color-mode', 
          'options' => [
            'Light' => 'light', 
            'Dark' => 'dark', 
            'None' => 'none'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-border-mode', 
          'options' => [
            'Full' => '', 
            'Top' => '-top', 
            'Bottom' => '-bottom', 
            'Left' => '-left', 
            'Right' => '-right'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-position-mode', 
          'options' => [
            'Top' => 'top', 
            'Bottom' => 'bottom'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => ['*-nav-item-line-mode', '*-nav-item-line-active-mode'], 
          'options' => [
            'Enable' => 'true', 
            'Disable' => 'false'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*button-text-mode', 
          'options' => [
            'None' => '', 
            'Line' => 'line', 
            'Arrow' => 'arrow', 
            'Em Dash' => 'em-dash', 
            'Border Bottom' => 'border-bottom'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*navbar-mode', 
          'options' => [
            'None' => '', 
            'Border' => 'border', 
            'Border (Including transparent navbar)' => 'border-always', 
            'Rail' => 'rail', 
            'Frame' => 'frame'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*navbar-mode-border-vertical', 
          'options' => [
            'None' => '', 
            'Partial (Navs only)' => 'partial', 
            'All (Navs and Items)' => 'all'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*navbar-nav-item-line-slide-mode', 
          'options' => [
            'None' => '', 
            'Left' => 'left', 
            'Center' => 'center'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'select-custom', 
          'vars' => '*-inverse-mode', 
          'options' => [
            'None' => '', 
            'Inverse' => 'inverse'
          ], 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ], [
          'type' => 'checkbox', 
          'vars' => ['*-em-dash'], 
          'attrs' => [
            'true-value' => 'true'
          ]
        ], [
          'type' => 'text', 
          'vars' => '*', 
          'attrs' => [
            'class' => 'yo-style-form'
          ]
        ]]
    ]
  ]
];
