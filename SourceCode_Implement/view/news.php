<?php
    $category_new =  isset($_GET['new']) ? $_GET['new'] : 'Tin tức';

    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_post";
    $result_posts = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="vi">
<?php
    require_once("./view/header.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <title><?php echo $category_new; ?></title>
    <meta name="description"
        content="Kiến Thức Trồng Trọt - Các bài viết chia sẻ kiến thức, kinh nghiệm cách trồng và chăm sóc các loại cây trồng, cây cảnh,hoa cảnh. Cách khắc phục sâu bệnh và bón phân sao cho hiệu quả" />
    <link rel="canonical" href="https://nongsansach.com/trong-trot/" />
    <link rel="next" href="https://nongsansach.com/trong-trot/page/2/" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Kiến Thức Trồng trọt - Nông Sản Sạch" />
    <meta property="og:description"
        content="Kiến Thức Trồng Trọt - Các bài viết chia sẻ kiến thức, kinh nghiệm cách trồng và chăm sóc các loại cây trồng, cây cảnh,hoa cảnh. Cách khắc phục sâu bệnh và bón phân sao cho hiệu quả" />
    <meta property="og:url" content="https://nongsansach.com/trong-trot/" />
    <meta property="og:site_name" content="Nông Sản Sạch" />
    <meta name="twitter:card" content="summary_large_image" />

    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />

    <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>

    <style id='wp-block-library-theme-inline-css' type='text/css'>
    .wp-block-audio figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-audio figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-audio {
        margin: 0 0 1em
    }

    .wp-block-code {
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: Menlo, Consolas, monaco, monospace;
        padding: .8em 1em
    }

    .wp-block-embed figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-embed figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-embed {
        margin: 0 0 1em
    }

    .blocks-gallery-caption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .blocks-gallery-caption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-image figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image {
        margin: 0 0 1em
    }

    .wp-block-pullquote {
        border-bottom: 4px solid;
        border-top: 4px solid;
        color: currentColor;
        margin-bottom: 1.75em
    }

    .wp-block-pullquote cite,
    .wp-block-pullquote footer,
    .wp-block-pullquote__citation {
        color: currentColor;
        font-size: .8125em;
        font-style: normal;
        text-transform: uppercase
    }

    .wp-block-quote {
        border-left: .25em solid;
        margin: 0 0 1.75em;
        padding-left: 1em
    }

    .wp-block-quote cite,
    .wp-block-quote footer {
        color: currentColor;
        font-size: .8125em;
        font-style: normal;
        position: relative
    }

    .wp-block-quote.has-text-align-right {
        border-left: none;
        border-right: .25em solid;
        padding-left: 0;
        padding-right: 1em
    }

    .wp-block-quote.has-text-align-center {
        border: none;
        padding-left: 0
    }

    .wp-block-quote.is-large,
    .wp-block-quote.is-style-large,
    .wp-block-quote.is-style-plain {
        border: none
    }

    .wp-block-search .wp-block-search__label {
        font-weight: 700
    }

    .wp-block-search__button {
        border: 1px solid #ccc;
        padding: .375em .625em
    }

    :where(.wp-block-group.has-background) {
        padding: 1.25em 2.375em
    }

    .wp-block-separator.has-css-opacity {
        opacity: .4
    }

    .wp-block-separator {
        border: none;
        border-bottom: 2px solid;
        margin-left: auto;
        margin-right: auto
    }

    .wp-block-separator.has-alpha-channel-opacity {
        opacity: 1
    }

    .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
        width: 100px
    }

    .wp-block-separator.has-background:not(.is-style-dots) {
        border-bottom: none;
        height: 1px
    }

    .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
        height: 2px
    }

    .wp-block-table {
        margin: 0 0 1em
    }

    .wp-block-table td,
    .wp-block-table th {
        word-break: normal
    }

    .wp-block-table figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-table figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-video figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video {
        margin: 0 0 1em
    }

    .wp-block-template-part.has-background {
        margin-bottom: 0;
        margin-top: 0;
        padding: 1.25em 2.375em
    }
    </style>
    <link rel='stylesheet' id='wc-blocks-vendors-style-css'
        href='https://nongsansach.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=9.4.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='https://nongsansach.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=9.4.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css'
        href='https://nongsansach.com/wp-includes/css/classic-themes.min.css?ver=6.2' type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://nongsansach.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://nongsansach.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.3.3' type='text/css'
        media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
    /* #rs-demo-id {} */
    </style>
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='https://nongsansach.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=7.4.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='https://nongsansach.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=7.4.0'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='https://nongsansach.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=7.4.0'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
    </style>
    <link rel='stylesheet' id='slick-css'
        href='https://nongsansach.com/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css'
        href='https://nongsansach.com/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-wpc-css'
        href='https://nongsansach.com/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/custom-theme.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='https://nongsansach.com/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosq-feather-css'
        href='https://nongsansach.com/wp-content/plugins/woo-smart-quick-view/assets/libs/feather/feather.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosq-frontend-css'
        href='https://nongsansach.com/wp-content/plugins/woo-smart-quick-view/assets/css/frontend.css?ver=3.3.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosb-frontend-css'
        href='https://nongsansach.com/wp-content/plugins/woo-product-bundle/assets/css/frontend.css?ver=7.0.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='child-style-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik-child/style.css?ver=6.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='cerebrisans-font-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/assets/fonts/cerebrisans/cerebrisans.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='main-style-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/style.css?ver=6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='ionicons-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/assets/libs/ionicons/css/ionicons.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-organik-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/assets/libs/font-organik/organik.css?ver=6.2'
        type='text/css' media='all' />
    <!-- <link rel='stylesheet' id='font-awesome-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/assets/libs/awesome/css/fontawesome-all.min.css'
        type='text/css' media='all' /> -->
    <link rel='stylesheet' id='odometer-theme-minimal-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/assets/libs/odometer/odometer-theme-minimal.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='growl-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/assets/libs/growl/jquery.growl.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lightgallery-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/assets/libs/lightgallery/css/lightgallery.min.css?ver=6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='featherlight-css'
        href='https://nongsansach.com/wp-content/themes/tm-organik/assets/libs/featherlight/featherlight.min.css?ver=6.2'
        type='text/css' media='all' />
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>

    <script type='text/javascript' src='https://nongsansach.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.3'
        id='jquery-core-js'></script>
    <script type='text/javascript' src='https://nongsansach.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0'
        id='jquery-migrate-js'></script>
    <script type='text/javascript'
        src='https://nongsansach.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.3.3'
        id='tp-tools-js'></script>
    <script type='text/javascript'
        src='https://nongsansach.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.3.3' id='revmin-js'>
    </script>
    <script type='text/javascript'
        src='https://nongsansach.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.7.4.0'
        id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
        "cart_url": "https:\/\/nongsansach.com\/gio-hang\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://nongsansach.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=7.4.0'
        id='wc-add-to-cart-js'></script>
    <script type='text/javascript'
        src='https://nongsansach.com/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.5.0'
        id='vc_woocommerce-add-to-cart-js-js'></script>
    <link rel="https://api.w.org/" href="https://nongsansach.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://nongsansach.com/wp-json/wp/v2/categories/69" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://nongsansach.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://nongsansach.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.2" />
    <meta name="generator" content="WooCommerce 7.4.0" />
    <noscript>
        <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
        </style>
    </noscript>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator"
        content="Powered by Slider Revolution 6.3.3 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />



    <style id="kirki-inline-styles">
    .page-title .title,
    .page-title-style {
        font-family: Great Vibes;
        font-size: 56px;
        font-weight: 400;
        letter-spacing: 0em;
        line-height: 1.5;
        color: #ffffff;
    }

    .page-title {
        padding-top: 110px;
        padding-bottom: 170px;
        background-color: #7fca90;
        background-image: url(./asset/img/big_title_bg_1.png);
    }

    .btn {
        color: #fff;
        background-color: #7fca8f;
        border-color: #7fca8f;
    }

    .copyright {
        padding-top: 10px;
        padding-bottom: 10px;
        margin-top: 0px;
        margin-bottom: 0px;
        background-color: #22754e;
        color: rgba(255, 255, 255, 0.5);
    }

    .copyright__text {
        font-size: 14px;
    }

    .copyright .backtotop svg g {
        fill: #22754e;
    }

    .copyright a {
        color: rgba(255, 255, 255, 0.5);
    }

    .header .menu {
        font-family: Open Sans;
        font-weight: 600;
        letter-spacing: 0em;
        line-height: 1.5;
        font-size: 14px;
    }

    .header .menu .sub-menu {
        font-size: 14px;
    }

    #menu .menu__container>li>a {
        padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .menu a {
        color: #5e5a54;
    }

    .menu a:hover {
        color: #5fbd74;
    }

    .overlay-header .header .menu a,
    .overlay-header header.header .header-left .header-call *,
    .overlay-header header.header .header-left .header-call span,
    .overlay-header .header-right .mini-cart .mini-cart-icon,
    .overlay-header header.header .mini-cart .mini-cart-text,
    .overlay-header .header-right .mini-cart .mini-cart-text .mini-cart-total {
        color: #fff;
    }

    .overlay-header .header .menu a:hover {
        color: #5fbd74;
    }

    .footer {
        padding-top: 50px;
        padding-bottom: 70px;
        margin-top: 0px;
        margin-bottom: 0px;
        font-size: 14px;
        background-color: #337744;
        color: #ffffff;
    }

    .footer a {
        color: #ffffff;
    }

    .footer .widget .widget-title {
        color: #ffffff;
        border-color: #ffffff;
    }

    .header .top-search-btn,
    .header .wishlist-wrap a,
    .header .mini-cart .mini-cart-icon,
    .header .account a {
        color: #392a25;
    }

    .header>.wrapper {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .header {
        margin-top: 0px;
        margin-bottom: 0px;
        background-color: rgba(255, 255, 255, .3);
    }

    .overlay-header .header {
        background-color: rgba(33, 33, 33, 0.2);
    }

    #mobile,
    .mm-listview {
        font-family: Lato;
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 0em;
        line-height: 1.5;
    }

    .mm-panels>.mm-panel {
        background-color: #eee;
    }

    .mm-listview>li,
    .mm-listview>li .mm-next,
    .mm-listview>li .mm-next:before,
    .mm-listview>li:after {
        border-color: #ddd;
    }

    .mm-listview>li>a {
        color: #5fbd74;
    }

    .mm-listview>li>a:hover {
        color: #5fbd74;
    }

    .toggle i {
        font-size: 25px;
        color: #5fbd74;
    }

    .toggle {
        padding-top: 10px;
        padding-bottom: 0px;
    }

    body a:hover,
    .insight-product-grid a:hover,
    a:focus,
    a:active,
    .breadcrumbs ul li:last-child,
    .insight-title .page-title-style,
    .separator--icon i,
    .icon-boxes--icon,
    .insight-product-column .product-item .product-info .product-price,
    .mini-cart-wrap .widget_shopping_cart_content .total .amount,
    .mini-cart-wrap .widget_shopping_cart_content .buttons a.checkout,
    .mini-cart-wrap .widget_shopping_cart_content .cart_list li .quantity,
    .insight-about2 .link,
    #menu .menu__container>li.current-menu-item>a,
    #menu .menu__container>li.current-menu-parent>a,
    body.landing .demo-coming a:after,
    #menu a:hover,
    #menu .menu__container .sub-menu li a:hover,
    #menu .menu__container .sub-menu li.menu-item-has-children:hover:after,
    .insight-process--step--icon,
    .insight-product-carousel .insight-title,
    .insight-filter ul li a.active,
    .insight-grid-filter ul li a.active,
    .insight-gallery-filter ul li a.active,
    .insight-featured-product .title-2,
    body.woocommerce .products .product .product-info .price .amount,
    .insight-woo .products .product .product-info .price .amount,
    body.woocommerce-page .products .product .product-info .price .amount,
    .blog-list-style .entry-more a:hover,
    .widget_products a:hover,
    .widget_product_categories a:hover,
    body.woocommerce .sidebar .widget.widget_product_categories .product-categories li:hover>span,
    .insight-woo .sidebar .widget.widget_product_categories .product-categories li:hover>span,
    .copyright .backtotop:before,
    .copyright .backtotop:after,
    .insight-icon,
    .insight-filter a:hover,
    .insight-btn.brown:hover,
    .insight-featured-product.style-07 .insight-btn.btn:hover,
    .blog-grid .blog-grid-style .entry-more a:hover,
    .insight-blog.grid .blog-grid-style .entry-more a:hover,
    .insight-blog.grid_has_padding .blog-grid-style .entry-more a:hover,
    .insight-accordion .item .title .icon i,
    .insight-product-column .product-item .product-price,
    .insight-featured-product.style-02 .title-1,
    .insight-featured-product.style-03 .title-1,
    blog.grid .blog-grid-style .entry-more a:hover,
    .insight-about--carousel a span,
    .insight-blog.grid_has_padding .blog-grid-style .entry-more a:hover,
    .insight-about3 .row-bottom .about3-quote span,
    .insight-about3 .row-bottom .about3-quote span,
    .insight-about3 .about3-title h1,
    .insight-about3 .about3-title .sub-title,
    .insight-our-services .icon,
    .insight-countdown-product .item .product-price,
    .insight-our-services .more,
    .insight-gallery .insight-gallery-image .desc-wrap .icon,
    .insight-gallery-filter a:hover,
    .widget-area .widget.widget_tag_cloud a:hover,
    .blog-classic-style .entry-share i,
    .blog-grid .blog-grid-style .entry-more a:hover,
    .single .content .content-area .entry-footer .share i,
    .page .content .content-area .entry-footer .share i,
    .single .content .entry-nav .left:hover i,
    .single .content .entry-nav .right:hover i,
    .page .content .entry-nav .left:hover i,
    .page .content .entry-nav .right:hover i,
    .widget-area .widget.widget_categories_widget .item:hover span,
    .single .content .content-area .entry-content blockquote,
    .page .content .content-area .entry-content blockquote,
    .single .content .content-area .entry-footer .tags a:hover,
    .page .content .content-area .entry-footer .tags a:hover,
    body.woocommerce.single-product .product .summary a.compare:hover,
    .woocommerce div.product p.price,
    .woocommerce div.product span.price,
    body.woocommerce.single-product .product .summary .price ins .amount,
    body.woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover,
    body.woocommerce a.remove:hover,
    body.woocommerce-page a.remove:hover,
    body.woocommerce-page.woocommerce-cart table.shop_table td.product-subtotal,
    body.woocommerce-page.woocommerce-cart table.shop_table input[type="submit"],
    .wishlist_table tr td.product-stock-status span.wishlist-in-stock,
    body.woocommerce a.remove:hover,
    body.woocommerce-page a.remove:hover,
    body.woocommerce .woocommerce-message:before,
    body.woocommerce-page .woocommerce-message:before,
    body.woocommerce .products.list .product .product-info .product-action-list .quick-view-btn a,
    .insight-woo .products.list .product .product-info .product-action-list .quick-view-btn a,
    body.woocommerce-page .products.list .product .product-info .product-action-list .quick-view-btn a,
    body.woocommerce .sidebar .widget.widget_product_categories .product-categories li.current-cat a,
    .insight-woo .sidebar .widget.widget_product_categories .product-categories li.current-cat a,
    body.woocommerce.single-product .up-sells h2 span,
    body.woocommerce.single-product .viewed h2 span,
    body.woocommerce.single-product .related h2 span,
    body.woocommerce .sidebar .widget.widget_product_tag_cloud a:hover,
    .insight-woo .sidebar .widget.widget_product_tag_cloud a:hover,
    body.woocommerce.single-product .product .summary .price>.amount,
    body.woocommerce .sidebar .widget.widget_products li .amount,
    body.woocommerce .sidebar .widget.widget_recent_reviews li .amount,
    body.woocommerce .sidebar .widget.widget_top_rated_products li .amount,
    body.woocommerce .sidebar .widget.widget_recently_viewed_products li .amount,
    .insight-woo .sidebar .widget.widget_products li .amount,
    .insight-woo .sidebar .widget.widget_recent_reviews li .amount,
    .insight-woo .sidebar .widget.widget_top_rated_products li .amount,
    .insight-woo .sidebar .widget.widget_recently_viewed_products li .amount,
    .insight-testimonials.style7 .item .text,
    .insight-separator .separator .separator--icon i,
    .insight-title--title,
    .woocommerce.single-product .product .summary a.compare:hover,
    .woocommerce.single-product .product .summary .wooscp-btn:hover,
    .single .content .comments-area .comment-list li article .comment-metadata:before,
    .page .content .comments-area .comment-list li article .comment-metadata:before,
    .single .content .comments-area .comment-list li article .reply a:hover,
    .page .content .comments-area .comment-list li article .reply a:hover,
    .insight-icon-boxes--icon {
        color: #337744;
    }

    .insight-icon-boxes.icon_on_left:hover .insight-icon-boxes--icon i,
    .insight-icon-boxes.icon_on_right:hover .insight-icon-boxes--icon i,
    header.header-01 .header-right .mini-cart .mini-cart-icon:after,
    .mini-cart-wrap .mini-cart .mini-cart-icon:after,
    .insight-team-member .name:after,
    .mini-cart-wrap .widget_shopping_cart_content .buttons a,
    .insight-process--step--icon:hover,
    .insight-process--step--icon:hover .order,
    .top-search,
    body.landing .demo-hover a:after,
    .insight-process--small-icon,
    body.woocommerce .products .product .product-thumb .product-action,
    .insight-woo .products .product .product-thumb .product-action,
    body.woocommerce-page .products .product .product-thumb .product-action,
    .blog-list-style .entry-title:before,
    .footer .mc4wp-form input[type="submit"],
    .hint--success:after,
    .icon-boxes.icon_on_left:hover .icon-boxes--icon i,
    .icon-boxes.icon_on_right:hover .icon-boxes--icon i,
    .insight-countdown-product .item .product-countdown .product-countdown-timer>div,
    header.header-03 .header-container .header-right .btn-wrap .top-call-btn,
    .insight-product-column .product-item .product-info .product-categories a:hover,
    #menu .mega-menu .wpb_text_column ul li.sale a:after,
    .insight-accordion .item.active .title,
    .insight-accordion .item:hover .title,
    .insight-product-column .product-item .product-categories a:hover,
    .insight-testimonials .slick-dots li.slick-active button,
    .insight-pagination a.current,
    .insight-pagination a:hover,
    .insight-pagination span.current,
    .insight-pagination span:hover,
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"],
    body.woocommerce-page.woocommerce-cart table.shop_table input[type="submit"]:hover,
    body.woocommerce-page.woocommerce-cart a.wc-backward,
    body.woocommerce-page.woocommerce-cart a.checkout-button,
    body.woocommerce-page.woocommerce-checkout form.checkout_coupon .button,
    body.woocommerce-page.woocommerce-checkout #payment input[type="submit"],
    body.woocommerce-wishlist table.shop_table .add_to_cart,
    body.woocommerce-wishlist table.wishlist_table .add_to_cart,
    #menu .mega-menu .wpb_text_column ul li.new a:after,
    body.woocommerce.single-product .product .summary form.cart button,
    .single .content .comments-area .comment-form input[type="submit"],
    .page .content .comments-area .comment-form input[type="submit"],
    .mini-cart-wrap .widget_shopping_cart_content .buttons a:hover,
    body.woocommerce.single-product .woocommerce-tabs .woocommerce-Tabs-panel input[type="submit"],
    body.woocommerce .sidebar .widget.widget_price_filter .price_slider_amount button:hover,
    .insight-woo .sidebar .widget.widget_price_filter .price_slider_amount button:hover,
    body.woocommerce .sidebar .widget.widget_price_filter .ui-slider .ui-slider-range,
    .insight-woo .sidebar .widget.widget_price_filter .ui-slider .ui-slider-range,
    body.woocommerce .sidebar .widget.widget_price_filter .ui-slider .ui-slider-handle,
    .insight-woo .sidebar .widget.widget_price_filter .ui-slider .ui-slider-handle,
    body.woocommerce .products.list .product .product-info .product-action-list .product_type_simple,
    .insight-woo .products.list .product .product-info .product-action-list .product_type_simple,
    body.woocommerce-page .products.list .product .product-info .product-action-list .product_type_simple,
    body.woocommerce .shop-filter .switch-view .switcher:hover,
    body.woocommerce .shop-filter .switch-view .switcher.active,
    .insight-woo .shop-filter .switch-view .switcher:hover,
    .insight-woo .shop-filter .switch-view .switcher.active,
    body.woocommerce .woocommerce-pagination .page-numbers li span.current,
    body.woocommerce .woocommerce-pagination .page-numbers li span:hover,
    body.woocommerce .woocommerce-pagination .page-numbers li a.current,
    body.woocommerce .woocommerce-pagination .page-numbers li a:hover,
    .insight-woo .woocommerce-pagination .page-numbers li span.current,
    .insight-woo .woocommerce-pagination .page-numbers li span:hover,
    .insight-woo .woocommerce-pagination .page-numbers li a.current,
    .insight-woo .woocommerce-pagination .page-numbers li a:hover {
        background-color: #337744;
    }

    a.cookie_notice_ok,
    .mini-cart-wrap .widget_shopping_cart_content .buttons a,
    .woocommerce.single-product .product .woocommerce-product-gallery ol .slick-slide img:hover,
    .mini-cart-wrap .widget_shopping_cart_content .buttons a.checkout,
    body.woocommerce .products .product:hover .product-thumb,
    .insight-woo .products .product:hover .product-thumb,
    body.woocommerce-page .products .product:hover .product-thumb,
    .insight-about--carousel a:before,
    .insight-pagination a.current,
    .insight-pagination a:hover,
    .insight-pagination span.current,
    .insight-pagination span:hover,
    .insight-gallery .insight-gallery-image .desc-wrap,
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"],
    .widget-area .widget.widget_search .search-form input[type="search"]:focus,
    .widget-area .widget.widget_tag_cloud a:hover,
    .insight-product-column .product-item .product-thumb:before,
    .insight-product-column .product-item .product-thumb:after,
    .blog-list-style .post-thumbnail:before,
    .blog-list-style .post-thumbnail:after,
    body.woocommerce-page.woocommerce-cart table.shop_table input[type="submit"],
    .woocommerce form .form-row.woocommerce-validated .select2-container,
    .woocommerce form .form-row.woocommerce-validated input.input-text,
    .woocommerce form .form-row.woocommerce-validated select,
    body.woocommerce .sidebar .widget.widget_product_search .woocommerce-product-search input[type="search"]:focus,
    .insight-woo .sidebar .widget.widget_product_search .woocommerce-product-search input[type="search"]:focus,
    body.woocommerce.single-product .woocommerce-tabs ul.tabs li.active,
    body.woocommerce.single-product .product .summary form.cart button,
    body.woocommerce .sidebar .widget.widget_product_tag_cloud a:hover,
    .insight-woo .sidebar .widget.widget_product_tag_cloud a:hover,
    body.woocommerce .sidebar .widget.widget_products li:hover img,
    body.woocommerce .sidebar .widget.widget_recent_reviews li:hover img,
    body.woocommerce .sidebar .widget.widget_top_rated_products li:hover img,
    body.woocommerce .sidebar .widget.widget_recently_viewed_products li:hover img,
    .insight-woo .sidebar .widget.widget_products li:hover img,
    .insight-woo .sidebar .widget.widget_recent_reviews li:hover img,
    .insight-woo .sidebar .widget.widget_top_rated_products li:hover img,
    .insight-woo .sidebar .widget.widget_recently_viewed_products li:hover img,
    body.woocommerce.single-product .product .images .thumbnails img:hover,
    .single .content .comments-area .comment-form input[type="submit"],
    .page .content .comments-area .comment-form input[type="submit"],
    .single .content .content-area .entry-footer .tags a:hover,
    .page .content .content-area .entry-footer .tags a:hover,
    body.woocommerce.single-product .product .images .woocommerce-main-image img:hover,
    body.woocommerce .products.list .product .product-info .product-action-list .quick-view-btn a:hover,
    .insight-woo .products.list .product .product-info .product-action-list .quick-view-btn a:hover,
    body.woocommerce-page .products.list .product .product-info .product-action-list .quick-view-btn a:hover,
    body.woocommerce .shop-filter .switch-view .switcher:hover,
    body.woocommerce .shop-filter .switch-view .switcher.active,
    .insight-woo .shop-filter .switch-view .switcher:hover,
    .insight-woo .shop-filter .switch-view .switcher.active,
    body.woocommerce .woocommerce-pagination .page-numbers li span.current,
    body.woocommerce .woocommerce-pagination .page-numbers li span:hover,
    body.woocommerce .woocommerce-pagination .page-numbers li a.current,
    body.woocommerce .woocommerce-pagination .page-numbers li a:hover,
    .insight-woo .woocommerce-pagination .page-numbers li span.current,
    .insight-woo .woocommerce-pagination .page-numbers li span:hover,
    .insight-woo .woocommerce-pagination .page-numbers li a.current,
    .insight-woo .woocommerce-pagination .page-numbers li a:hover {
        border-color: #337744;
    }

    .hint--success.hint--top:before,
    body.woocommerce .woocommerce-message,
    body.woocommerce-page .woocommerce-message {
        border-top-color: #337744;
    }

    .hint--success.hint--right:before {
        border-right-color: #337744;
    }

    .hint--success.hint--bottom:before {
        border-bottom-color: #337744;
    }

    .hint--success.hint--left:before,
    .woocommerce.single-product .product .woocommerce-tabs ul.tabs li.active {
        border-left-color: #337744;
    }

    a.cookie_notice_ok {
        color: #337744 !important;
    }

    body.woocommerce.single-product .woocommerce-tabs .woocommerce-Tabs-panel input[type="submit"],
    body.woocommerce .woocommerce-message .button,
    .insight-woo .woocommerce-message .button,
    body.woocommerce-page.woocommerce-cart a.wc-backward,
    body.woocommerce-page.woocommerce-cart a.checkout-button,
    a.cookie_notice_ok:hover {
        background-color: #337744 !important;
    }

    .ndColor,
    .insight-btn:hover {
        color: #7fca8f;
    }

    .insight-featured-product.style-07 .price,
    .insight-featured-product.style-07,
    .insight-btn {
        background-color: #7fca8f;
    }

    .insight-btn {
        border-color: #7fca8f;
    }

    a {
        color: #5e5a54;
    }

    a:hover {
        color: #337744;
    }

    body {
        font-family: Open Sans;
        font-weight: 400;
        letter-spacing: 0em;
        line-height: 1.5;
        color: #5e5a54;
        font-size: 16px;
    }

    .special-heading,
    .insight-testimonials.style7 .text,
    .insight-title--title {
        font-family: Great Vibes;
        font-weight: 400;
        letter-spacing: 0px;
        line-height: 1.5;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    .insight-countdown.color-dark .countdown-inner .countdown-timer {
        font-family: Open Sans;
        font-weight: 700;
        letter-spacing: 0px;
        line-height: 1.5;
        color: #392a25;
    }

    h1,
    .h1 {
        font-size: 56px;
    }

    h2,
    .h2 {
        font-size: 40px;
    }

    h3,
    .h3 {
        font-size: 34px;
    }

    h4,
    .h4 {
        font-size: 24px;
    }

    h5,
    .h5 {
        font-size: 20px;
    }

    h6,
    .h6 {
        font-size: 16px;
    }

    .topbar.topbar-01>.topbar-container {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .topbar.topbar-01,
    body #lang_sel a.lang_sel_sel {
        font-family: Open Sans;
        font-weight: 400;
        letter-spacing: 0em;
        line-height: 1.5;
    }

    .topbar.topbar-01,
    body #lang_sel a.lang_sel_sel,
    body #lang_sel li ul a:link {
        font-size: 14px;
    }

    .topbar.topbar-01,
    .topbar.topbar-01>.topbar-container,
    body #lang_sel li ul a:link,
    body #lang_sel li ul a:visited {
        background-color: #337744;
    }

    .topbar.topbar-01,
    body #lang_sel a.lang_sel_sel,
    body #lang_sel a.lang_sel_sel:hover,
    body #lang_sel li ul a:link,
    body #lang_sel li ul a:visited {
        color: #ffffff;
    }

    .topbar.topbar-01 a {
        color: #ffffff;
    }

    .topbar.topbar-02,
    .topbar.topbar-02>.topbar-container {
        background-color: #fff;
    }

    .topbar.topbar-02 {
        border-bottom-color: #eee;
        color: #5E5A54;
    }

    .topbar.topbar-02>.topbar-container {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .topbar.topbar-02,
    body #lang_sel a.lang_sel_sel {
        font-family: CerebriSans;
        font-weight: 400;
        letter-spacing: 0em;
        line-height: 1.5;
    }

    .topbar.topbar-02,
    body #lang_sel a.lang_sel_sel,
    body #lang_sel li ul a:link {
        font-size: 14px;
    }

    .topbar.topbar-02 a {
        color: #5E5A54;
    }

    .topbar.topbar-02 a:hover,
    .topbar.topbar-02 .topbar__menu ul li .sub-menu a:hover {
        color: #337744;
    }

    .topbar.topbar-02 .topbar__menu ul li .sub-menu a {
        color: #5E5A54;
    }

    .topbar.topbar-02 .topbar__menu ul li .sub-menu {
        background-color: #fff;
    }

    .topbar_02__phone {
        color: #392A25;
        font-family: CerebriSans;
        font-weight: bold;
        letter-spacing: 0em;
        line-height: 1.5;
        font-size: 16px;
    }

    .topbar.topbar-03,
    .topbar.topbar-03>.topbar-container {
        background-color: #FAF8F6;
    }

    .topbar.topbar-03 {
        border-bottom-color: transparent;
        color: #5E5A54;
    }

    .topbar.topbar-03>.topbar-container {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .topbar.topbar-03,
    body #lang_sel a.lang_sel_sel {
        font-family: CerebriSans;
        font-weight: 400;
        letter-spacing: 0em;
        line-height: 1.5;
    }

    .topbar.topbar-03,
    body #lang_sel a.lang_sel_sel,
    body #lang_sel li ul a:link {
        font-size: 14px;
    }

    .topbar.topbar-03 a {
        color: #5E5A54;
    }

    .topbar.topbar-03 a:hover,
    .topbar.topbar-03 .topbar__menu ul li .sub-menu a:hover {
        color: #337744;
    }

    .topbar.topbar-03 .topbar__menu ul li .sub-menu a {
        color: #5E5A54;
    }

    .topbar.topbar-03 .topbar__menu ul li .sub-menu {
        background-color: #fff;
    }

    .topbar_03__phone {
        color: #392A25;
        font-family: CerebriSans;
        font-weight: bold;
        letter-spacing: 0em;
        line-height: 1.5;
        font-size: 16px;
    }
    </style><noscript>
        <style>
        .wpb_animate_when_almost_visible {
            opacity: 1;
        }
        </style>
    </noscript>
</head>

<body
    class="archive category category-trong-trot category-69 theme-tm-organik woocommerce-no-js hfeed tm-organik wpb-js-composer js-comp-ver-6.5.0 vc_responsive">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>

    <div id="page" class="site">
        <div id="content" class="content">
            <div class="page-title">
                <div class="container">
                    <h1 class="title">Danh mục: <span>
                            <?php
                           echo $category_new
                        ?>
                        </span></h1>
                </div>
            </div>
            <div class="breadcrumbs">
                <div class="container">
                    <ul class="insight_core_breadcrumb">
                        <li class="level-1 top"><a href="./home">Home</a></li>
                        <li class="level-2 sub tail current"><?php
                           echo $category_new
                        ?></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div id="primary" class="content-area row">
                    <div class="col-md-9">
                        <?php foreach ($result_posts as $post): ?>
                            <div id="post-4861"
                                class="row blog-list-style post-4861 post type-post status-publish format-standard has-post-thumbnail hentry category-trong-trot tag-cach-trong-bap-cai tag-cach-trong-bap-cai-tai-nha tag-cach-trong-cai-bap tag-cach-trong-rau-bap-cai tag-ky-thuat-trong-bap-cai tag-trong-bap-cai">
                                <div class="col-md-5">
                                    <div class="post-thumbnail">
                                            <img width="330" height="240" src="<?php echo $post['img'];?>"
                                                class="attachment-insight-post-list size-insight-post-list wp-post-image"
                                                alt="" decoding="async" />
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="entry-meta">
                                        <span class="posted-on"><i class="ion-calendar"></i> <time
                                                class="entry-date published" datetime="2022-01-09T01:00:44+08:00">9 Tháng
                                                Một, 2022</time><time class="updated"
                                                datetime="2022-02-27T20:21:30+08:00">27 Tháng Hai, 2022</time></span><span
                                            class="comment"><i class="ion-chatbubble-working"></i> 0</span>
                                    </div>
                                        <h1 class="entry-title"><?php echo $post['title'];?></h1>
                                    <div class="entry-content">
                                    <?php echo $post['detail'];?> </div>
                                    <a href="./post">Read more</a>
                                </div>
                            </div>
                       
                        <?php endforeach; ?>
                        <!-- <div id="post-4870"
                            class="row blog-list-style post-4870 post type-post status-publish format-standard has-post-thumbnail hentry category-trong-trot tag-cach-lat-la-mai tag-lat-la-mai tag-lat-la-mai-no-dung-tet tag-lat-la-mai-no-tet">
                            <div class="col-md-5">
                                <div class="post-thumbnail">
                                    <a href="./post">
                                        <img width="330" height="240" src="./asset/img/posts/post1.jpg"
                                            class="attachment-insight-post-list size-insight-post-list wp-post-image"
                                            alt="" decoding="async" loading="lazy" /> </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="entry-meta">
                                    <span class="posted-on"><i class="ion-calendar"></i> <time
                                            class="entry-date published" datetime="2021-12-09T01:00:56+08:00">9 Tháng
                                            Mười Hai, 2021</time><time class="updated"
                                            datetime="2022-02-27T20:21:35+08:00">27 Tháng Hai, 2022</time></span><span
                                        class="comment"><i class="ion-chatbubble-working"></i> 0</span>
                                </div>
                                <a href="./post">
                                    <h1 class="entry-title">Cách lặt lá mai nở đúng dịp Tết với hoa rực rỡ sắc vàng</h1>
                                </a>
                                <div class="entry-content">
                                    Lặt lá mai như thế nào để hoa nở rộ đúng thời gian Tết là công việc quan rất quan
                                    trọng, người trồng cần theo dõi tình trạng phát triển của mai, cũng như quan sát tốt
                                    điều kiện thời tiết để quyết định thời gian lặt lá và chăm sóc cây mai đúng cách....
                                </div>
                                <div class="entry-more">
                                    <a href="./post">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div id="post-4881"
                            class="row blog-list-style post-4881 post type-post status-publish format-standard has-post-thumbnail hentry category-trong-trot tag-cach-trong-cay-sen-da tag-cach-trong-hoa-sen-da tag-cach-trong-sen-da tag-cach-trong-sen-da-kim-cuong tag-cach-trong-sen-da-ra-hoa tag-cach-trong-sen-da-trong-chau tag-chau-trong-sen-da tag-dat-trong-sen-da tag-huong-dan-trong-sen-da tag-ky-thuat-trong-sen-da tag-trong-cay-sen-da tag-trong-sen-da tag-trong-sen-da-trong-nha">
                            <div class="col-md-5">
                                <div class="post-thumbnail">
                                    <a href="./post">
                                        <img width="330" height="240" src="./asset/img/posts/post1.jpg"
                                            class="attachment-insight-post-list size-insight-post-list wp-post-image"
                                            alt="" decoding="async" loading="lazy" /> </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="entry-meta">
                                    <span class="posted-on"><i class="ion-calendar"></i> <time
                                            class="entry-date published updated" datetime="2021-12-05T01:00:14+08:00">5
                                            Tháng Mười Hai, 2021</time></span><span class="comment"><i
                                            class="ion-chatbubble-working"></i> 0</span>
                                </div>
                                <a href="./post">
                                    <h1 class="entry-title">Cách trồng cây Sen đá trong chậu tại nhà đơn giản vài bước
                                    </h1>
                                </a>
                                <div class="entry-content">
                                    Nhiều bạn hỏi dùng đất tribat trồng sen đá được không, vì dễ mua và rẻ. Câu trả lời
                                    là không, lý do vì loại đất này giữ ẩm và giữ nước tốt, rất lâu thoát nước… mà đây
                                    là điều tối kỵ khi trồng sen đá. Trong bài viết này, mình sẽ hướng dẫn... </div>
                                <div class="entry-more">
                                    <a href="./post">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div id="post-4901"
                            class="row blog-list-style post-4901 post type-post status-publish format-standard has-post-thumbnail hentry category-trong-trot tag-cach-trong-bong-van-tho-tet tag-cach-trong-hoa-van-tho-tet tag-cach-trong-van-tho-tet tag-ky-thuat-trong-hoa-van-tho-ban-tet tag-trong-van-tho-tet">
                            <div class="col-md-5">
                                <div class="post-thumbnail">
                                    <a href="./post">
                                        <img width="330" height="240" src="./asset/img/posts/post1.jpg"
                                            class="attachment-insight-post-list size-insight-post-list wp-post-image"
                                            alt="" decoding="async" loading="lazy" /> </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="entry-meta">
                                    <span class="posted-on"><i class="ion-calendar"></i> <time
                                            class="entry-date published updated" datetime="2021-10-15T01:00:31+08:00">15
                                            Tháng Mười, 2021</time></span><span class="comment"><i
                                            class="ion-chatbubble-working"></i> 0</span>
                                </div>
                                <a href="./post">
                                    <h1 class="entry-title">Kỹ thuật trồng bông Vạn thọ bán Tết đúng thời gian mong muốn
                                    </h1>
                                </a>
                                <div class="entry-content">
                                    Vạn thọ là loại hoa không thể thiếu trong dịp Tết đến Xuân về của người dân Việt
                                    Nam. Tết ấy, có thể thiếu thịt, có thể không có bánh chưng, chứ Vạn thọ thì bắt buộc
                                    phải có. Bởi vì nó mang lại cảm xúc rất tuyệt vời, ngày xưa cứ Tết đến là... </div>
                                <div class="entry-more">
                                    <a href="./post">Read more</a>
                                </div>
                            </div>
                        </div> -->

                    </div>

                </div>
            </div>
        </div>
        <?php require_once("./view/footer.php"); ?>
    </div>
</body>

</html>