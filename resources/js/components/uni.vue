<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Nuevo <span class="oi oi-plus"></span> 
                        </button>
                    </div>
                    <!-- Modal Nuevo -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo Alumno</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <tr>
                                        <td><label for="">Nombre del alumno</label></td>
                                        <td><input v-model="alumno.nombre" placeholder="ingresar nombre"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Curso del alumno</label></td>
                                        <td><input v-model="alumno.curso" placeholder="ingresar curso"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Edad del alumno</label></td>
                                        <td><input v-model="alumno.edad" placeholder="ingresar edad"></td>
                                    </tr>
                                </table>                              
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" v-on:click="postAlumno()" data-dismiss="modal">Añadir</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Editar -->
                    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Alumno</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <tr>
                                        <td><label for="">Nombre</label></td>
                                        <td><input v-model="selectAlumno.nombre"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Curso</label></td>
                                        <td><input v-model="selectAlumno.curso"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Edad</label></td>
                                        <td><input v-model="selectAlumno.edad"></td>
                                    </tr>
                                </table>                              
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" v-on:click="putAlumno()" data-dismiss="modal">Guardar cambios</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-sm table-hover" style="text-align: center" id="alum">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr v-for="items in table" v-bind:key="items.id">
                                <td>{{ items.id}}</td>
                                <td style="text-align: left">{{ items.nombre }}</td>
                                <td>{{ items.curso }}</td>
                                <td>{{ items.edad }}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ModalEdit" v-on:click="editar(items)">
                                        <span class="oi oi-pencil"></span> 
                                    </button>
                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" v-on:click="deleteAlumno(items)">
                                        <span class="oi oi-trash"></span> 
                                    </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<style src="../../../node_modules/bootstrap/dist/css/bootstrap.css">
</style>

 
<script type="text/javascript">
    import Vue from 'vue'
    import axios from 'axios'
    
    export default {
        data:()=>({
            bus: new Vue(),
            table:[],
            alumno:{},
            selectAlumno:{}
        }),
        mounted() {
            this.getTable();
            this.bus.$on("closeDialog", () => {
                this.getTable();
            });
            
            console.log('Component mounted.')
        },
        methods: {
            async getTable() {
                try {
                    let res = await axios.get("api/alumno")
                    console.log(res)
                    this.table = res.data
                } catch (e) {
                    console.log(e)
                }
            },
            async postAlumno() {
                    let res = await axios.post("api/alumnoST",this.alumno)
                    console.log(res)
                    this.alumno = res.data
                    this.table.slice(0);
            },
            editar(item){
                this.selectAlumno=item;
                console.log(this.selectAlumno)
            },
            async putAlumno() {
                    let res = await axios.put("api/alumno/"+this.selectAlumno.id, this.selectAlumno)
                    console.log(res)
                    this.selectAlumno = res.data
                    
            },
            async deleteAlumno(item) {
                    this.selectAlumno=item;
                    let res = await axios.delete("api/alumno/"+this.selectAlumno.id, this.selectAlumno)
                    console.log(res)
                    this.selectAlumno = res.data
                    this.table.splice(this.table.indexOf(item),1);
            }
        }
    }
</script>