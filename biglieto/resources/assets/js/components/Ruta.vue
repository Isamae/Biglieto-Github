<template>
    <main class="main">
		<section>
			<div class="container">
				<div class="col-lg-12 text-left">
					<h6 class="section-heading text-uppercase">Rutas</h6>
				</div>
				<div class="col-lg-10 mx-auto" style="background-color: #ffffff;">
					<br>
					<div class="col-md-8 mx-auto">
						<div class="input-group input-group-sm mb-3">
							<input type="text" aria-label="First name" class="form-control" placeholder="Origen">
							<input type="text" aria-label="Last name" class="form-control" placeholder="Destino">
							<input type="text" class="form-control" placeholder="Hora" aria-label="Recipient's username" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-2 mx-auto" id="resp">
							<div class="panel panel-default">
								<!-- /.panel-heading -->
								<div class="panel-body " >
									
									<ul class="nav nav-pills mb-3 navbar-dark bg-dark" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
												<img src="img/demo/1.png" alt="BUS" width="35" height="35">
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
												<img src="img/demo/2.png" alt="BUSETA" width="35" height="35">
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
												<img src="img/demo/3.png" alt="CAMIONETA" width="35" height="35">
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
												<img src="img/demo/4.png" alt="TURISMO" width="35" height="35">
											</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="col-lg-12">
											<div class="panel panel-default">
												<!-- /.panel-heading -->
												<div class="panel-body">
													<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
														<thead>
															<tr>
																<th><img class="center-block fa-2x" src="img/demo/bus.png" aria-hidden="true" alt="Cooperativa"/></th>
																<th><img class="center-block fa-2x" src="img/demo/8.png" aria-hidden="true" alt="Origen"/></th>
																<th><img class="center-block fa-2x" src="img/demo/7.png" aria-hidden="true" alt="Destino"/></th>
																<th><img class="center-block fa-2x" src="img/demo/6.png" aria-hidden="true" alt="Hora"/></th>
															</tr>
														</thead>
														<tbody>
															<tr  v-for="recorridoEm in arrayRecorrido" :key="recorridoEm.idRe" @click="abrirModalRecorrido(recorridoEm)">
																<td v-text="recorridoEm.provincia_O"></td>
																<td v-text="recorridoEm.canton_O"></td>
																<td v-text="recorridoEm.canton_D"></td>
																<td v-text="recorridoEm.provincia_D"></td>
															</tr>
															
														</tbody>
													</table> 
													<nav>
														<ul class="pagination">
															<li class="page-item" v-if="pagination.current_page>1">
																<a class="page-link" href="#"  @click.prevent="cambiarPagina(pagination.current_page-1,buscar)">Ant</a>
															</li>
															<li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
																<a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar)" v-text="page"></a>
															</li>
															<li class="page-item"  v-if="pagination.current_page<pagination.last_page">
																<a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page+1,buscar)">Sig</a>
															</li>
														</ul>
													</nav>
												</div>
												<!-- /.panel-body -->
											</div>
											<!-- /.panel -->
										</div>
										<!-- /.col-lg-12 -->
									</div>
									<!-- /.row -->
								</div>
							</div>	
						</div>
						<!-- /#page-wrapper -->
					</div>
					<!-- /.panel-body -->

					<!--Modal de información de Viaje-->
					<!--Inicio del modal agregar/actualizar-->
					<div class="modal fade "  tabindex="-1" :class="{'mostrar':modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
						<div class="modal-dialog modal-primary modal-lg centra-block" role="document">
							<div class="modal-content ">
								<div>
								<table class="table">
									<thead class="thead-light">
									<tr>
										<th colspan="3">{{tituloModal}}</th>
										<th scope="col">
										<button type="button" class="close" @click="cerrarModal()" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</th>
									</tr>
									</thead>
								</table>
								</div>
								<form class="form-horizontal was-validated" method="get" action="page">
									<div class="form-group row">
										<label class="col-md-3 form-control-label" for="text-input">Nombre Empresa:</label>
										<label class="col-md-3 form-control-label" for="text-input">{{nombreEmpresa}}</label>
										<input id="NEM" type="hidden" name="idEmpresa" value="">
									</div>
									<div class="form-group row">
										<label class="col-md-3 form-control-label" for="text-input">Tipo de Viaje:</label>
										<label class="col-md-3 form-control-label" for="text-input">{{nombreEmpresa}}</label>
									</div>
									<div class="form-group row">
										<label class="col-md-3 form-control-label" for="text-input">De:</label>
										<label class="col-md-3 form-control-label" for="text-input">{{nombreEmpresa}}</label>
										<label class="col-md-3 form-control-label" for="text-input">A:</label>
										<label class="col-md-3 form-control-label" for="text-input">{{nombreEmpresa}}</label>
									</div>
									<div class="form-group row">
										<label class="col-md-3 form-control-label" for="text-input">Hora:</label>
										<label class="col-md-3 form-control-label" for="text-input">{{nombreEmpresa}}</label>
										<label class="col-md-3 form-control-label" for="text-input">Vehiculo:</label>
										<label class="col-md-3 form-control-label" for="text-input">{{nombreEmpresa}}</label>
									</div>
									<div class="form-group row">
										<label class="col-md-3 form-control-label" for="text-input">Dias Disponibles:</label>
										<label class="col-md-3 form-control-label" for="text-input">{{nombreEmpresa}}</label>
									</div>
									<div class="modal-footer">
										<a>
											<input type="submit" value="VER">
										</a>
										<button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
									</div>	
								</form>  
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!--Fin del modal-->
				</div>
			</div>
		</section>
    </main>
</template>
<script>
	export default{
		data() {
			
			return{
				idEmpresa: '',
				nombreEmpresa : '',
				provincia_O : '',
				provincia_D : '',
				canton_O :'',
				canton_D : '',
				hora_viaje : '',
				tipo_vehiculo :'',
				dias_habilitados: [],
				tipo_viaje: '',
				pagination:{
                    'total' :0,
                    'current_page':0,
                    'per_page':0,
                    'last_page':0,
                    'from':0,
                    'to':0,
                },
				offset:3,
				buscar:'',

				tipoBusqueda : 'Origen Destino',
				origen : '',
				destino : '',
				fecha : '',
				hora : '',
				arrayRecorrido: [],
				modal:0,
				tituloModal: '',
				errorRecorrido: 0,
				errorMonstrarMsjRecorrido: [],
				NEMP: ''
			}
		},
		computed :{///metodo de vue.js
            isActived:function(){
                return this.pagination.current_page;
            },
            //calcula los elementos de la paginacion
            pagesNumber:function(){
                if(!this.pagination.to){
                    return[];
                }
                var from = this.pagination.current_page-this.offset;
                if(from < 1){
                    from = 1;
                }
                var to = from + (this.offset*2);
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }
                var pagesArray = [];
                while(from <= to){
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }
        },
		methods : {
			listaRecorridos(page,buscar,nemp){
			
				let me =this;
				var url='/empresa/'+nemp+'/recorridos?page='+page + '&buscar='+buscar;
				axios.get(url)
				.then(function (response) {
					var respuesta = response.data;
					me.arrayRecorrido = respuesta.recorridos.data;
					me.pagination = respuesta.pagination;
					
				})
				.catch(function (error) {
					// handle error
					console.log(error);
				});
			},
			cambiarPagina(page,buscar){
                let me = this;
                //Actualiza la pagina actual
                me.pagination.current_page=page;
                //Envia la peticion para visualizar a data de esa pagina
                me.listaRecorridos(page,buscar);

            },
			buscarRecorrido(){
				
				if(this.validarBusqueda()){
					return;
				}
				switch(this.tipoBusqueda){
					case "Origen Destino":{
						let me =this;
						axios.post('/recorrido/buscarRecorrido',{tipoBusqueda,origen,destino,hora,fecha})
						.then(function (response) {
							me.arrayRecorrido = response.data;
							
							
						})
						.catch(function (error) {
							// handle error
							console.log(error);
						});
						break;
					}
					case "Empresa":{
						break;
					}

				}
				
			},
			validarBusqueda(){
				this.errorRecorrido =0;
                this.errorMonstrarMsjRecorrido=[];
                if(this.tipoBusqueda=='Origen Destino'){
					if(!this.origen)this.errorMonstrarMsjRecorrido.push("Ingrese un Origen");
					if(!this.destino)this.errorMonstrarMsjRecorrido.push("Ingrese un Destino");
					if(this.errorMonstrarMsjRecorrido.length)this.errorRecorrido=1;
						
				}
				else{

				}
				return this.errorRecorrido;
				
			},
			abrirModalRecorrido(data=[]){
				this.modal = 1;
				this.tituloModal='Información de Viaje';
				this.nombreEmpresa = data.provincia_O;
    			document.getElementById("NEM").value = data.provincia_O;	
			},
			cerrarModal(){
				this.modal = 0;
			},
			cargarNEM(){
				let me = this;
                axios.get('/nombreEm')
                .then(function (response) {
					me.NEMP = response.data;
					me.listaRecorridos(1,me.buscar,me.NEMP);
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


