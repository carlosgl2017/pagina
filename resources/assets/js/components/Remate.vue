<template>
  <main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb"></ol>
    <div class="container-fluid">
      <!-- Ejemplo de tabla Listado -->
      <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Gestíon Remates
          <button
            type="button"
            @click="abrirModal('remate','registrar')"
            class="btn btn-secondary"
          >
            <i class="icon-plus"></i>&nbsp;Nuevo
          </button>
          <button type="button" @click="cargarPdf()" class="btn btn-info">
            <i class="icon-doc"></i>&nbsp;Reporte
          </button>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-6">
              <div class="input-group">
                <select class="form-control col-md-3" v-model="criterio">
                  <option value="lugar">Lugar</option>
                  <option value="juzgado">Juzgado</option>
                </select>
                <input
                  type="text"
                  v-model="buscar"
                  @keyup.enter="listarRemate(1,buscar,criterio)"
                  class="form-control"
                  placeholder="Texto a buscar"
                />
                <button
                  type="submit"
                  @click="listarRemate(1,buscar,criterio)"
                  class="btn btn-primary"
                >
                  <i class="fa fa-search"></i> Buscar
                </button>
              </div>
            </div>
          </div>
          <table class="table table-bordered table-striped table-sm">
            <thead>
              <tr>
                <th>Opciones</th>
                <th>Lugar</th>
                <th>Juzgado</th>
                <th>Fecha Subasta</th>
                <th>Hora</th>
                <th>Descripción Bien</th>
                <th>Monto</th>
                <th>Nombre Martillero</th>
                <th>Condición</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="remate in arrayRemate" :key="remate.id_remate">
                <td>
                  <button
                    type="button"
                    @click="abrirModal('remate','actualizar',remate)"
                    class="btn btn-warning btn-sm"
                  >
                    <i class="icon-pencil"></i>
                  </button> &nbsp;
                  <template v-if="remate.condicion">
                    <button
                      type="button"
                      class="btn btn-danger btn-sm"
                      @click="desactivarRemate(remate.id_remate)"
                    >
                      <i class="icon-trash"></i>
                    </button>
                  </template>
                  <template v-else>
                    <button
                      type="button"
                      class="btn btn-info btn-sm"
                      @click="activarRemate(remate.id_remate)"
                    >
                      <i class="icon-check"></i>
                    </button>
                  </template>
                </td>
                <td v-text="remate.lugar"></td>
                <td v-text="remate.juzgado"></td>
                <td v-text="remate.fecha_subasta"></td>
                <td v-text="remate.hora"></td>
                <td v-text="remate.descripcion_bien"></td>
                <td v-text="remate.monto"></td>
                <td v-text="remate.nombre_martillero"></td>
                <td>
                  <div v-if="remate.condicion">
                    <span class="badge badge-success">Activo</span>
                  </div>
                  <div v-else>
                    <span class="badge badge-danger">Desactivado</span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <nav>
            <ul class="pagination">
              <li class="page-item" v-if="pagination.current_page > 1">
                <a
                  class="page-link"
                  href="#"
                  @click.prevent="cambiarPagina(pagination.current_page - 1,buscar,criterio)"
                >Ant</a>
              </li>
              <li
                class="page-item"
                v-for="page in pagesNumber"
                :key="page"
                :class="[page == isActived ? 'active' : '']"
              >
                <a
                  class="page-link"
                  href="#"
                  @click.prevent="cambiarPagina(page,buscar,criterio)"
                  v-text="page"
                ></a>
              </li>
              <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                <a
                  class="page-link"
                  href="#"
                  @click.prevent="cambiarPagina(pagination.current_page + 1,buscar,criterio)"
                >Sig</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Fin ejemplo de tabla Listado -->
    </div>
    <!--Inicio del modal agregar/actualizar-->
    <div
      class="modal fade"
      tabindex="-1"
      :class="{'mostrar' : modal}"
      role="dialog"
      aria-labelledby="myModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" v-text="tituloModal"></h4>
            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form action method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Lugar(*)</label>
                <div class="col-md-9">
                  <input
                    type="text"
                    v-model="lugar"
                    class="form-control"
                    placeholder="Lugar de remate"
                  />
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">Departamento(*)</label>
                <div class="col-md-9">
                  <select class="form-control" v-model="id_departamento">
                    <option value="0" disabled>Seleccione</option>
                    <option
                      v-for="departamento in arrayDepartamento"
                      :key="departamento.id_departamento"
                      :value="departamento.id_departamento"
                      v-text="departamento.nombre_departamento"
                    ></option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Juzgado</label>
                <div class="col-md-9">
                  <input
                    type="text"
                    v-model="juzgado"
                    class="form-control"
                    placeholder="Ingrese juzgado"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Fecha subasta</label>
                <div class="col-md-9">
                  <input
                    type="date"
                    v-model="fecha_subasta"
                    class="form-control"
                    placeholder="Fecha Subasta"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Hora</label>
                <div class="col-md-9">
                  <input type="time" v-model="hora" class="form-control" />
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Descripción Bien</label>
                <div class="col-md-9">
                  <input
                    type="text"
                    v-model="descripcion_bien"
                    class="form-control"
                    placeholder="Ingrese descripción"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Monto</label>
                <div class="col-md-9">
                  <input type="numeric" v-model="monto" class="form-control" />
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email-input">Nombre Martillero</label>
                <div class="col-md-9">
                  <input
                    type="text"
                    v-model="nombre_martillero"
                    class="form-control"
                    placeholder="Ingrese nombre del martillero"
                  />
                </div>
              </div>

              <div v-show="errorRemate" class="form-group row div-error">
                <div class="text-center text-error">
                  <div v-for="error in errorMostrarMsjRemate" :key="error" v-text="error"></div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
            <button
              type="button"
              v-if="tipoAccion==1"
              class="btn btn-primary"
              @click="registrarRemate()"
            >Guardar</button>
            <button
              type="button"
              v-if="tipoAccion==2"
              class="btn btn-primary"
              @click="actualizarRemate()"
            >Actualizar</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!--Fin del modal-->
  </main>
</template>

<script>
export default {
  props: ["ruta"],
  data() {
    return {
      remate_id_remate: 0,
      lugar: "",
      juzgado: "",
      fecha_subasta: "",
      hora: "",
      descripcion_bien: "",
      monto: "",
      nombre_martillero: "",
      arrayRemate: [],
      modal: 0,
      tituloModal: "",
      tipoAccion: 0,
      errorRemate: 0,
      errorMostrarMsjRemate: [],
      pagination: {
        total: 0,
        current_page: 0,
        per_page: 0,
        last_page: 0,
        from: 0,
        to: 0
      },
      offset: 3,
      criterio: "lugar",
      buscar: ""
    };
  },
  computed: {
    isActived: function() {
      return this.pagination.current_page;
    },
    //Calcula los elementos de la paginación
    pagesNumber: function() {
      if (!this.pagination.to) {
        return [];
      }

      var from = this.pagination.current_page - this.offset;
      if (from < 1) {
        from = 1;
      }

      var to = from + this.offset * 2;
      if (to >= this.pagination.last_page) {
        to = this.pagination.last_page;
      }

      var pagesArray = [];
      while (from <= to) {
        pagesArray.push(from);
        from++;
      }
      return pagesArray;
    }
  },
  methods: {
    listarRemate(page, buscar, criterio) {
      let me = this;
      var url =
        this.ruta +
        "/remate?page=" +
        page +
        "&buscar=" +
        buscar +
        "&criterio=" +
        criterio;
      axios
        .get(url)
        .then(function(response) {
          var respuesta = response.data;
          me.arrayRemate = respuesta.remates.data;
          me.pagination = respuesta.pagination;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    cargarPdf() {
      window.open(this.ruta + "/remate/listarPdf", "_blank");
    },
    selectDepartamento() {
      let me = this;
      var url = this.ruta + "/remate/selectDepartamento";
      axios
        .get(url)
        .then(function(response) {
          //console.log(response);
          var respuesta = response.data;
          me.arrayDepartamento = respuesta.departamentos;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    cambiarPagina(page, buscar, criterio) {
      let me = this;
      //Actualiza la página actual
      me.pagination.current_page = page;
      //Envia la petición para visualizar la data de esa página
      me.listarRemate(page, buscar, criterio);
    },
    registrarRemate() {
      if (this.validarRemate()) {
        return;
      }

      let me = this;

      axios
        .post(this.ruta + "/remate/registrar", {
          lugar: this.lugar,
          juzgado: this.juzgado,
          fecha_subasta: this.fecha_subasta,
          hora: this.hora,
          descripcion_bien: this.descripcion_bien,
          monto: this.monto,
          nombre_martillero: this.nombre_martillero
        })
        .then(function(response) {
          me.cerrarModal();
          me.listarCategoria(1, "", "fecha");
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    actualizarRemate() {
      if (this.validarRemate()) {
        return;
      }

      let me = this;

      axios
        .put(this.ruta + "/remate/actualizar", {
          lugar: this.lugar,
          juzgado: this.juzgado,
          fecha_subasta: this.fecha_subasta,
          hora: this.hora,
          descripcion_bien: this.descripcion_bien,
          monto: this.monto,
          nombre_martillero: this.nombre_martillero,
          condicion: this.condicion,
          id_remate: this.id_remate
        })
        .then(function(response) {
          me.cerrarModal();
          me.listarCategoria(1, "", "lugar");
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    desactivarCategoria(id) {
      swal({
        title: "Esta seguro de desactivar esta categoría?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Aceptar!",
        cancelButtonText: "Cancelar",
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false,
        reverseButtons: true
      }).then(result => {
        if (result.value) {
          let me = this;

          axios
            .put(this.ruta + "/remate/desactivar", {
              id: id
            })
            .then(function(response) {
              me.listarRemate(1, "", "lugar");
              swal(
                "Desactivado!",
                "El registro ha sido desactivado con éxito.",
                "success"
              );
            })
            .catch(function(error) {
              console.log(error);
            });
        } else if (
          // Read more about handling dismissals
          result.dismiss === swal.DismissReason.cancel
        ) {
        }
      });
    },
    activarRemate(id) {
      swal({
        title: "Esta seguro de activar esta remate?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Aceptar!",
        cancelButtonText: "Cancelar",
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false,
        reverseButtons: true
      }).then(result => {
        if (result.value) {
          let me = this;

          axios
            .put(this.ruta + "/remate/activar", {
              id: id
            })
            .then(function(response) {
              me.listarRemate(1, "", "lugar");
              swal(
                "Activado!",
                "El registro ha sido activado con éxito.",
                "success"
              );
            })
            .catch(function(error) {
              console.log(error);
            });
        } else if (
          // Read more about handling dismissals
          result.dismiss === swal.DismissReason.cancel
        ) {
        }
      });
    },
    validarRemate() {
      this.errorRemate = 0;
      this.errorMostrarMsjRemate = [];

      if (!this.lugar)
        this.errorMostrarMsjRemate.push("El lugar no puede estar vacío.");

      if (this.errorMostrarMsjRemate.length) this.errorRemate = 1;

      return this.errorRemate;
    },
    cerrarModal() {
      this.modal = 0;
      this.tituloModal = "";
      this.lugar = "";
      this.juzgado = "";
      this.fecha_subasta = "";
      this.hora = "";
      this.descripcion_bien = "";
      this.monto = "";
      this.nombre_martillero = "";
    },
    abrirModal(modelo, accion, data = []) {
      switch (modelo) {
        case "remate": {
          switch (accion) {
            case "registrar": {
              this.modal = 1;
              this.tituloModal = "Registrar Remate";
              this.lugar = "";
              this.juzgado = "";
              this.fecha_subasta = "";
              this.hora = "";
              this.descripcion_bien = "";
              this.monto = "";
              this.nombre_martillero = "";
              this.tipoAccion = 1;
              break;
            }
            case "actualizar": {
              //console.log(data);
              this.modal = 1;
              this.tituloModal = "Actualizar remate";
              this.tipoAccion = 2;
              this.id_remate = data["id"];
              this.lugar = data["lugar"];
              this.juzgado = data["juzgado"];
              this.fecha_subasta = data["fecha_subasta"];
              this.hora = data["hora"];
              this.descripcion_bien = data["descripcion_bien"];
              this.monto = data["monto"];
              this.nombre_martillero = data["nombre_martillero"];
              this.condicion = data["condicion"];
              break;
            }
          }
        }
      }
       this.selectDepartamento();
    }
  },
  mounted() {
    this.listarRemate(1, this.buscar, this.criterio);
  }
};
</script>
<style>
.modal-content {
  width: 100% !important;
  position: absolute !important;
}
.mostrar {
  display: list-item !important;
  opacity: 1 !important;
  position: absolute !important;
  background-color: #3c29297a !important;
}
.div-error {
  display: flex;
  justify-content: center;
}
.text-error {
  color: red !important;
  font-weight: bold;
}
</style>
