<template>
    	<div>
			<!-- Header -->
			<div class="header">
				<!-- banner -->
				<div class="banner bus-banner">
					<!-- container -->
					<div class="container">
						
						<div class="col-ms-12 banner-center ">
							<div class="sap_tabs">
								<div v-if="tipoBusqueda=='Empresa'">
									<div class="facts about-facts">
										<div class="booking-form">
										<div class="online_reservation">
											<div class="b_room">
												<div class="booking_room">
													<div class="reservation">
														<ul>
															<li class="span1_of_1 desti">
																<div class="book_date">
																	<form>
																		<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																		<input  type="text" placeholder="Empresa" class="typeahead1 input-md form-control tt-input" required="">
																	</form>
																</div>
															</li>
															<div class="clearfix"></div>
														</ul>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										</div>
									</div>
								</div>
								<div v-else id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<div class="facts about-facts">
									<div class="booking-form">
										<div class="online_reservation">
											<div class="b_room">
												<div class="booking_room">
													<div class="reservation">
														<ul>
															<li class="span1_of_1 desti">
																<h5>De:</h5>
																<div class="book_date">
																	<form>
																		<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																		<input v-model="origen" type="text" placeholder="Ciudad Origen" class="typeahead1 input-md form-control tt-input" required="">
																	</form>
																</div>
															</li>
															<li class="span1_of_1 left desti">
																<h5>A:</h5>
																<div class="book_date">
																<form>
																	<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																	<input v-model="destino" type="text" placeholder="Ciudad Destino" class="typeahead1 input-md form-control tt-input" required="">
																</form>
																</div>
															</li>
															<div class="clearfix"></div>
														</ul>
													</div>
													<div class="reservation">
														<ul>
															<li  class="span1_of_1 desti">
																<h5>Fecha</h5>
																<div class="book_date">
																	<form>
																		<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																		<input v-model="fecha" type="date" value="Seleccione Fecha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																	</form>
																</div> 
															</li>
															<li class="span1_of_1 left desti">
																<h5>Hora (00-23)</h5>
																<div class="section_room">
																	<select v-model="hora" id="country" onchange="change_country(this.value)" class="frm-field required">
																		<option value="00">00 AM</option>
																		<option value="00">01 AM</option>
																		<option value="00">02 AM</option>
																		<option value="00">03 AM</option>
																		<option value="00">04 AM</option>
																		<option value="00">05 AM</option>
																	</select>   
																</div>	 
															</li>
															<div class="clearfix"></div>
														</ul>     
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div> 
									</div>
                  					</div>
								</div>
								<div class="reservation" >
									<ul >
										<li class="span1_of_3" >
											<div class="date_btn" >
												<form >
													<a @click="buscarRecorrido()" href="#resp">
														<input  type="submit" value="Buscar">
													</a> 
												</form>
											</div>
										</li>
										<div class="clearfix"></div>
									</ul>
                				</div>
								<div v-show="errorRecorrido" class="div-error">
									<div class="text-center text-error">
										<div v-for=" error in errorMonstrarMsjRecorrido" :key="error" v-text="error">
										</div>
									</div>
								</div>
								<!-- Busqueda -->
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!-- //container -->
				</div>
				<!-- //banner -->
			</div>
			<!-- //Header -->

			<div class="row">
				<div class="col-md-8 col-md-offset-2" id="resp">
					<div class="panel panel-default">
						<!-- /.panel-heading -->
						<div class="panel-body ">
							<!-- Nav tabs -->
							<ul class="nav nav-pills">
								<li class="active" >
									<a href="#" data-toggle="tab">
										<img src="img/demo/1.png" alt="BUSETA"/>
									</a>	
								</li>
								<li >
									<a href="#" data-toggle="tab">
										<img src="img/demo/2.png" alt="BUSETA"/>
									</a>
								</li>
								<li >
									<a href="#" data-toggle="tab">
										<img src="img/demo/3.png" alt="CAMIONETA"/>
									</a>
								</li>
								<li >
									<a href="#" data-toggle="tab">
										<img src="img/demo/4.png" alt="TURISMO"/>
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="col-lg-12">
									<div class="panel panel-default">
										<!-- /.panel-heading -->
										<div class="panel-body">
											<div class="row">
												<div class="col-md-4">
													<div class="input-group">
														<input type="text" v-model="buscar" @keyup.enter="listaRecorridos(1,buscar)" class="form-control" placeholder="Empresa a buscar">
														<p>
															<a class="btn btn-primary btn-xl" role="button"   @click="listaRecorridos(1,buscar)">
																<i class="fa fa-search"></i> Buscar
															</a>	
														</p>
													</div>
												</div>
											</div>
											<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
														<th><img class="center-block fa-2x" src="img/demo/bus.png" aria-hidden="true" alt="Biglieto"/></th>
														<th><img class="center-block fa-2x" src="img/demo/8.png" aria-hidden="true" alt="Biglieto"/></th>
														<th><img class="center-block fa-2x" src="img/demo/7.png" aria-hidden="true" alt="Biglieto"/></th>
														<th><img class="center-block fa-2x" src="img/demo/6.png" aria-hidden="true" alt="Biglieto"/></th>
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
				errorMonstrarMsjRecorrido: []
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
			listaRecorridos(page,buscar){
			
				let me =this;
				var url='/recorrido?page='+page + '&buscar='+buscar;
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
			abrirPaginaEm(nombre){
				let me =this;
				axios.post('/page',{'nombreEmpresa':nombre})
				.then(function (response) {
					
				})
				.catch(function (error) {
					// handle error
					console.log(error);
				});
			}
		},
		mounted() {
			this.listaRecorridos(1,this.buscar);
		}
	}
</script>
<style>	
	.modal-content{
        width: 80% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: fixed !important;
        background-color: #3c29297a !important;

    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color:red !important;
        font-weight: bold;
    }
	.centrar-text{
		text-align: center;
	}
	.centra-block {
		display: flex;
 	    justify-content: center;
	}

</style>
