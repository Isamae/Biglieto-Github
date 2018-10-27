<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-home fa-lg" ></i>Inicio</a>
                    </li>
                    <!-- /.col-lg-12 <li @click="menu=1" class="nav-item nav-dropdown">
                        <a class="nav-link" href="#"><i class="far fa-eye" ></i> Quienes Somos</a>
                    -->    
                    </li>
                    <li class="nav-title">
                        Información
                    </li>
                    
                    <li @click="menu=2" class="nav-item nav-dropdown">
                        <a class="nav-link" href="#"><i class="far fa-map" ></i> Rutas</a>
                    </li>
                    <li @click="menu=4" class="nav-item nav-dropdown">
                        <a class="nav-link" href="#"><i class="fas fa-phone" ></i> Contacto</a>
                    </li>
                    <li @click="menu=5" class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-suitcase"></i> Ayuda <span class="badge badge-danger">PDF</span></a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>