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
            <div class="about-content">
                <?php if ($this->lang->is_loaded["web_labels_lang.php"] == 'spanish') : ?>
                    <div>
                        <h1>¿Quiénes somos?</h1>
                        <p>
                            undamos Depósito Dental "Dentus Supplies" en el año 2021 y se encuentra ubicado en la Ciudad de Tijuana, Baja California, México.
                        </p>
                        <p>
                            Somos una empresa dedica a la adquisición, almacenamiento, distribución y transporte de medicamentos, dispositivos médicos y demás insumos para la salud.
                        </p>
                    </div>
                    <div>
                        <h1>Misión</h1>
                        <p>
                            Somos un deposito dental orientado en la atención de dentistas para la venta y distribución de medicamentos y demás insumos de uso odontológico, buscando mejorar nuestro servicio de manera continua, ofrecer los productos que necesiten a tiempo y con los mejores precios del mercado.
                        </p>
                    </div>
                    <div>
                        <h1>Visión</h1>
                        <p>
                            Queremos brindar un servicio de excelencia para llegar a ser número uno en distribución de materiales odontológicos y ayudar a los especialistas en odontología a desarrollar todo su potencial proporcionando los productos necesarios para brindar el mejor servicio, en la ciudad de Tijuana Baja California y, posteriormente, a nivel nacional.
                        </p>
                    </div>
                    <div>
                        <h1>Nuestros Valores</h1>
                        <ul>
                            <li>
                                <strong>Orientación al cliente</strong>
                                <span>
                                    Consideramos al dentista un consumidor activo que demanda una buena comunicación.
                                </span>
                            </li>
                            <li>
                                <strong>Respeto</strong>
                                <span>
                                    Trataremos a nuestros empleados, clientes y proveedores de manera justa y respetuosa.
                                </span>
                            </li>
                            <li>
                                <strong>Confianza</strong>
                                <span>
                                    Pilar fundamental para establecer relaciones duraderas, basadas en el trato personalizado con rigor y profesionalidad.
                                </span>
                            </li>
                            <li>
                                <strong>Compromiso</strong>
                                <span>
                                    HTener los materiales pedidos en el tiempo establecido.
                                </span>
                            </li>
                            <li>
                                <strong>Liderazgo</strong>
                                <span>
                                    Interés por el desarrollo personal y profesional de nuestros colaboradores, siendo condición necesaria para el mejoramiento y fortalecimiento de la organización.
                                </span>
                            </li>
                            <li>
                                <strong>Innovación</strong>
                                <span>
                                    Buscaremos continuamente formas de mejorar las operaciones en general y ofreceremos la mejor tecnología.
                                </span>
                            </li>
                        </ul>
                    </div>
                <?php else : ?>
                    <div>
                        <h1>Who we are?</h1>
                        <p>
                            We founded Depósito Dental "Dentus Supplies" in 2021 and it is located in the City of
                            Tijuana, Baja California, Mexico.
                        </p>
                        <p>
                            We are a company dedicated to the acquisition, storage, distribution and transportation of
                            medicines, medical devices and other health supplies.
                        </p>
                    </div>
                    <div>
                        <h1>Mission</h1>
                        <p>
                            We are a dental warehouse focused on the care of dentists for the sale and distribution of
                            medicines and other supplies for dental use, seeking to continuously improve our service,
                            offer the products they need on time and with the best prices in the market.
                        </p>
                    </div>
                    <div>
                        <h1>Vision</h1>
                        <p>
                            We are a dental warehouse focused on the care of dentists for the sale and distribution of
                            medicines and other supplies for dental use, seeking to continuously improve our service,
                            offer the products they need on time and with the best prices in the market.
                        </p>
                    </div>
                    <div>
                        <h1>Our Values</h1>
                        <ul>
                            <li>
                                <strong>Customer orientation</strong>
                                <span>
                                    We consider the dentist an active consumer who demands good communication.
                                </span>
                            </li>
                            <li>
                                <strong>Respect for people</strong>
                                <span>
                                    We will treat our employees, customers and suppliers fairly and respectfully.
                                </span>
                            </li>
                            <li>
                                <strong>Trust</strong>
                                <span>
                                    Fundamental pillar to establish lasting relationships, based on personalized treatment
                                    with rigor and professionalism.
                                </span>
                            </li>
                            <li>
                                <strong>Commitment</strong>
                                <span>Have the materials ordered in the established time.</span>
                            </li>
                            <li>
                                <strong>Leadership</strong>
                                <span>
                                    Interest in the personal and professional development of our collaborators, being a
                                    necessary condition for the improvement and strengthening of the organization.
                                </span>
                            </li>
                            <li>
                                <strong>Innovation</strong>
                                <span>
                                    We will continually seek ways to improve overall operations and offer the best
                                    technology.
                                </span>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>