<template>
    <main class="main">
        <div class="container-fluid bg-light">
            <div class="col-lg-12">
                <section>
                    <div class="container">
                        <div class="row">
                            <img class=" my-auto img-fluid img-thumbnail rounded-circle mb-3 text-center icono_Em" style=" width: 100px; height: 100px; background-color: #fff;" src="img/icono_bus.png" alt="">
                            <h4 class="my-auto" style=" margin-left:20px;" v-text="NEM"></h4>
                            <div class="my-auto mx-auto" style=" margin-left:30px; ">
                                <ul class="list-inline social-buttons my-auto text-center">
                                    <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    </li>
                                    <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    </li>
                                    <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    </li>
                                </ul>
                            </div>   
                        </div>
                        
                    </div>
                    
                </section>
                
            </div>
            <!-- /.col-lg-12 -->
        </div>  


        <section id="team" class="mx-auto" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h6 class="section-heading text-uppercase">Nuestro Equipo</h6>
                    </div>
                    <div id="carouselExampleIndicators" class="col-lg-9 carousel slide my-4 mx-auto" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>  
                </div>
            </div>
           
            
            
        </section>



        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h6 class="section-heading text-uppercase">Nuestros Servicios</h6>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3"  style="padding:5px">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-bus fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="card-body">
                                <h4 class="service-heading">Viaje Directo y Normal</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"  style="padding:5px">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <span class="fa-stack fa-4x">
                                   <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-images fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="card-body">
                                <h4 class="service-heading">Todo Destino</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"  style="padding:5px">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-truck-loading fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="card-body">
                                <h4 class="service-heading">Servicio de Encomiendas</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"  style="padding:5px">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-phone-square fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="card-body">
                                <h4 class="service-heading">Atención 24 horas</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"  style="padding:5px">
                        <div class="card h-100" >
                            <div class="card-img-top">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-plane fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="card-body">
                                <h4 class="service-heading">Servicio Turistico</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding:5px">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-car fa-stack-1x fa-inverse"></i>
                                </span> 
                            </div>
                            <div class="card-body">
                                <h4 class="service-heading">Renta de Vehiculos</h4>
                                <p class="card-text">Lour! Lorem ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        
        </section>
    </main>
</template>
<script>
	export default{
        data() {
			return{
				NEM:''
			}
		},
		methods : {
            cargarNEM(){
                let me =this;
                axios.get('/nombreEm')
                .then(function (response) {
                    me.NEM = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
		},
		mounted() {
            this.cargarNEM();
		}
	}
</script>
