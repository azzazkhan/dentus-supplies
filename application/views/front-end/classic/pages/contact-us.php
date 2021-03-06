<section class="breadcrumb-title-bar colored-breadcrumb">
    <div class="main-content responsive-breadcrumb">
        <h1><?= !empty($this->lang->line('contact_us')) ? $this->lang->line('contact_us') : 'Contact Us' ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= !empty($this->lang->line('home')) ? $this->lang->line('home') : 'Home' ?></a></li>
                <li class="breadcrumb-item"><a href="#"><?= !empty($this->lang->line('contact_us')) ? $this->lang->line('contact_us') : 'Contact Us' ?></a></li>
            </ol>
        </nav>
    </div>
</section>
<section id="content" class="pt-5 pb-5 ">
    <div class="main-content">
        <div class="row">
            <div class="col-md-7">
                <!-- <div class="sign-up-image">
                    <?php /* if (isset($web_settings['map_iframe']) && !empty($web_settings['map_iframe'])) { 
                        echo html_entity_decode(stripcslashes($web_settings['map_iframe']));
                    } */ ?>
                </div> -->
                <br /><br />
                <p style="color: #3a3b3c; font-size: 20px; font-weight: 600;">
                    <?=
                    $this->lang->is_loaded["web_labels_lang.php"] == "spanish"
                        ? "Estamos ubicados dentro del “Grand Hotel Tijuana Medical Plaza."
                        : "We are located within the “Grand Hotel Tijuana Medical Plaza."
                    ?>

                </p>
                <br /><br />
                <p style="color: #3a3b3c; font-size: 20px; font-weight: 600;">
                    <?=
                    $this->lang->is_loaded["web_labels_lang.php"] == "spanish"
                        ? "Estacionamiento: En el “Grand Hotel Tijuana Medical Plaza” hay estacionamiento ubicado dentro del Hotel, para su comodidad."
                        : "Parking lot: At the “Grand Hotel Tijuana Medical Plaza” there is parking located inside the Hotel, for your convenience."
                    ?>
                </p>
            </div>
            <div class="col-md-5 login-form">
                <h2 class="form-text-style"><?= !empty($this->lang->line('contact_us')) ? $this->lang->line('contact_us') : 'Contact Us' ?></h2>
                <form id="contact-us-form" action="<?= base_url('home/send-contact-us-email') ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><?= !empty($this->lang->line('username')) ? $this->lang->line('username') : 'Username' ?></label>
                            <input type="text" class="form-control" id="inputEmail4" name="username" placeholder="<?=
                                                                                                                    $this->lang->is_loaded["web_labels_lang.php"] == "spanish"
                                                                                                                        ? "Tu nombre"
                                                                                                                        : "Your name"
                                                                                                                    ?>" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4"><?= !empty($this->lang->line('email')) ? $this->lang->line('email') : 'Email' ?></label>
                            <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="<?=
                                                                                                                    $this->lang->is_loaded["web_labels_lang.php"] == "spanish"
                                                                                                                        ? "Tu correo electrónico"
                                                                                                                        : "Your email"
                                                                                                                    ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress"><?= !empty($this->lang->line('subject')) ? $this->lang->line('subject') : 'Subject' ?></label>
                        <input type="text" class="form-control" id="inputAddress" name="subject" placeholder="<?=
                                                                                                                $this->lang->is_loaded["web_labels_lang.php"] == "spanish"
                                                                                                                    ? "Tu nombre"
                                                                                                                    : "Sujeta"
                                                                                                                ?>" />
                    </div>
                    <div class="form-group">
                        <label for="inputAddress"><?= !empty($this->lang->line('message')) ? $this->lang->line('message') : 'Message' ?></label>
                        <textarea class="form-control" name="message" rows="4" cols="58"></textarea>
                    </div>
                    <button id="contact-us-submit-btn" class="block btn-5" style="margin-bottom: 15px;">
                        <?=
                        $this->lang->is_loaded["web_labels_lang.php"] == "spanish"
                            ? "Enviar mensaje"
                            : "Send Message"
                        ?>
                    </button>
                </form>
            </div>
        </div>
        <div class="row col-mb-50 mt-5">
            <?php if (isset($web_settings['address']) && !empty($web_settings['address'])) { ?>
                <div class="col-sm-6 col-md-4">
                    <div class="info-wrapper">
                        <div class="info-icon">
                            <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                        <div class="info-content">
                            <h3><?= !empty($this->lang->line('find_us')) ? $this->lang->line('find_us') : 'Find us' ?></h3>
                            <span class="subtitle"><?= output_escaping(str_replace('\r\n', '</br>', $web_settings['address'])) ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($web_settings['support_number']) && !empty($web_settings['support_number'])) { ?>
                <div class="col-sm-6 col-md-4">
                    <div class="info-wrapper">
                        <div class="info-icon">
                            <a href="#"><i class="fas fa-phone-alt"></i></a>
                        </div>
                        <div class="info-content">
                            <h3><?= !empty($this->lang->line('contact_us')) ? $this->lang->line('contact_us') : 'Contact Us' ?>
                                <!-- <span class="subtitle"><?= $web_settings['support_number'] ?></span> -->
                                <a style="display: block; color: #757575; text-align: center;" href="tel:00526643176867" class="subtitle">+52 (664) 317 - 6867</a>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($web_settings['support_email']) && !empty($web_settings['support_email'])) { ?>
                <div class="col-sm-6 col-md-4">
                    <div class="info-wrapper">
                        <div class="info-icon">
                            <a href="#"><i class="far fa-envelope-open"></i></a>
                        </div>
                        <div class="info-content">
                            <h3><?= !empty($this->lang->line('mail_us')) ? $this->lang->line('mail_us') : 'Email Us' ?>
                                <span class="subtitle"><?= $web_settings['support_email'] ?></span>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>