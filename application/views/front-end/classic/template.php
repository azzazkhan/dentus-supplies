<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="keywords" content='<?= $keywords ?>'>
    <meta name="description" content='<?= $description ?>'>
    <?php $cookie_lang = $this->input->cookie('language', TRUE);
    $path = $is_rtl = "";
    if (!empty($cookie_lang)) {
        $language = get_languages(0, $cookie_lang, 0, 1);
        if (!empty($language)) {
            $path = ($language[0]['is_rtl'] == 1) ? 'rtl/' : "";
            $is_rtl =  ($language[0]['is_rtl'] == 1) ? true : false;
        }
    } else {
        /* read the default language */
        $lang = $this->config->item('language');
        $language = get_languages(0, $lang, 0, 1);
        if (!empty($language)) {
            $path = ($language[0]['is_rtl'] == 1) ? 'rtl/' : "";
            $is_rtl =  ($language[0]['is_rtl'] == 1) ? true : false;
        }
    }
    $data['is_rtl'] = $is_rtl;
    ?>
    <?php $this->load->view('front-end/' . THEME . '/include-css', $data); ?>
    <!-- Custom styles -->
    <style>
        .steps-wrapper {
            background-color: #159bff;
            color: #fff;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 4px;
            padding: 0 5px
        }

        @media screen and (min-width: 640px) {
            .steps-wrapper {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 4px
            }
        }

        @media screen and (min-width: 768px) {
            .steps-wrapper {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 4px
            }
        }

        @media screen and (min-width: 1024px) {
            .steps-wrapper {
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 4px
            }
        }

        @media screen and (min-width: 1280px) {
            .steps-wrapper {
                grid-template-columns: repeat(5, minmax(0, 1fr));
                gap: 4px
            }
        }

        .steps-wrapper .step {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            padding: 0 15px;
            max-width: 300px
        }

        .steps-wrapper .step:not(:last-of-type) {
            border-right: 1px solid rgba(255, 255, 255, .4)
        }

        .steps-wrapper .step .icon-wrapper,
        .steps-wrapper .step .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 0
        }

        .steps-wrapper .step .icon-wrapper img {
            height: 55px;
            width: 55px
        }

        .steps-wrapper .step .content-wrapper {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.36em;
            flex: 1;
            justify-content: flex-start;
            margin-left: 10px
        }

        .steps-wrapper .step .content-wrapper .overlay {
            color: #000;
            padding: 10px 15px;
            background-color: #fff;
            position: absolute;
            visibility: hidden;
            opacity: 0;
            min-width: 200px;
            font-size: 14px;
            top: calc(100% - 10px);
            left: 50%;
            transform: translateX(-50%);
            border-radius: 6px;
            border: 1px solid #eaebef;
            box-shadow: 0 2px 15px -4px rgba(0, 0, 0, .4);
            transition: opacity .2s ease, top .2s ease
        }

        .steps-wrapper .step .content-wrapper .overlay::before {
            content: "";
            top: 0;
            left: 50%;
            height: 15px;
            width: 15px;
            background-color: #fff;
            display: block;
            position: absolute;
            left: 50%;
            top: -2.5px;
            transform: rotate(45deg) translateX(-50%);
            border-top: 1px solid #aeabec;
            border-left: 1px solid #aeabec
        }

        .steps-wrapper .step:hover .content-wrapper .overlay {
            visibility: visible;
            opacity: 1;
            top: calc(100% - 7px)
        }
    </style>
</head>

<body id="body" data-is-rtl='<?= $is_rtl ?>'>
    <?php $this->load->view('front-end/' . THEME . '/header'); ?>
    <?php $this->load->view('front-end/' . THEME . '/pages/' . $main_page); ?>
    <?php $this->load->view('front-end/' . THEME . '/footer'); ?>
    <?php $this->load->view('front-end/' . THEME . '/include-script'); ?>
</body>

</html>