<section class="breadcrumb-title-bar colored-breadcrumb">
    <div class="main-content responsive-breadcrumb">
        <h1><?= !empty($this->lang->line('about_us')) ? $this->lang->line('about_us') : 'About Us' ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= !empty($this->lang->line('home')) ? $this->lang->line('home') : 'Home' ?></a></li>
                <li class="breadcrumb-item active"><?= !empty($this->lang->line('about_us')) ? $this->lang->line('about_us') : 'About Us' ?></li>
            </ol>
        </nav>
    </div>
</section>
<section class="main-content py-5 my-4">
    <div class="text-center">
        <h1 class="h2"><?= !empty($this->lang->line('about_us')) ? $this->lang->line('about_us') : 'About Us' ?></h1>
    </div>
    <div class="text-justify">
        <div class="hrDiv">
            <?php if ($this->lang->is_loaded["web_labels_lang.php"] == "spanish") : ?>
                <div class="about-us-content-wrapper spanish">
                    <!-- Who we are -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-size: 32px; font-weight: bold;">¿Quiénes somos?</h2>
                        <p>
                            Fundamos Depósito Dental "Dentus Supplies" en el año 2021 y se encuentra ubicado en la Ciudad de Tijuana, Baja California, México.
                        </p>
                        <p>
                            Somos una empresa dedica a la adquisición, almacenamiento, distribución y transporte de medicamentos, dispositivos
                            médicos y demás insumos para la salud.
                        </p>
                    </div>
                    <!-- Mission -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-size: 32px; font-weight: bold;">Misión</h2>
                        <p>
                            Somos un deposito dental orientado en la atención de dentistas para la venta y distribución de medicamentos y demás
                            insumos de uso odontológico, buscando mejorar nuestro servicio de manera continua, ofrecer los productos que necesiten
                            a tiempo y con los mejores precios del mercado.
                        </p>
                    </div>
                    <!-- Vision -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-size: 32px; font-weight: bold;">Visión</h2>
                        <p>
                            Queremos brindar un servicio de excelencia para llegar a ser número uno en distribución de materiales odontológicos y
                            ayudar a los especialistas en odontología a desarrollar todo su potencial proporcionando los productos necesarios para
                            brindar el mejor servicio, en la ciudad de Tijuana Baja California y, posteriormente, a nivel nacional.
                        </p>
                    </div>
                    <!-- Our Values -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-size: 32px; font-weight: bold;">Nuestros Valores</h2>
                        <p>
                            <strong style="font-weight: bold;">Orientación al cliente:</strong> Consideramos al dentista un consumidor activo que demanda una buena comunicación.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Respeto:</strong> Trataremos a nuestros empleados, clientes y proveedores de manera justa y respetuosa.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Confianza:</strong> Pilar fundamental para establecer relaciones duraderas, basadas en el trato personalizado con rigor y
                            profesionalidad.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Compromiso:</strong> HTener los materiales pedidos en el tiempo establecido.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Liderazgo:</strong> : Interés por el desarrollo personal y profesional de nuestros colaboradores, siendo condición necesaria para el mejoramiento y fortalecimiento de la organización.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Innovación:</strong> Buscaremos continuamente formas de mejorar las operaciones en general y ofreceremos la mejor tecnología.
                        </p>
                    </div>
                </div>
            <?php else : ?>
                <div class="about-us-content-wrapper english">
                    <!-- Who we are -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-size: 32px; font-weight: bold;">Who we are?</h2>
                        <p>
                            We founded Depósito Dental "Dentus Supplies" in 2021 and it is located in the City of Tijuana, Baja California, Mexico.
                        </p>
                        <p>
                            We are a company dedicated to the acquisition, storage, distribution and transportation of medicines, medical devices and other health supplies.
                        </p>
                    </div>
                    <!-- Mission -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-size: 32px; font-weight: bold;">Mission</h2>
                        <p>
                            We are a dental warehouse focused on the care of dentists for the sale and distribution of medicines and other supplies for dental use, seeking to continuously improve our service, offer the products they need on time and with the best prices in the market.
                        </p>
                    </div>
                    <!-- Vision -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-size: 32px; font-weight: bold;">Vision</h2>
                        <p>
                            We are a dental warehouse focused on the care of dentists for the sale and distribution of medicines and other supplies for dental use, seeking to continuously improve our service, offer the products they need on time and with the best prices in the market.
                        </p>
                    </div>
                    <!-- Our Values -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-size: 32px; font-weight: bold;">Our Values</h2>
                        <p>
                            <strong style="font-weight: bold;">Customer orientation:</strong> We consider the dentist an active consumer who demands good communication.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Respect for people:</strong> We will treat our employees, customers and suppliers fairly and respectfully.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Trust:</strong> Fundamental pillar to establish lasting relationships, based on personalized treatment with rigour and professionalism.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Commitment:</strong> Have the materials ordered in the established time.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Leadership:</strong> Interest in the personal and professional development of our collaborators, is a necessary condition for the improvement and strengthening of the organization.
                        </p>
                        <p>
                            <strong style="font-weight: bold;">Innovation:</strong> We will continually seek ways to improve overall operations and offer the best technology
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>