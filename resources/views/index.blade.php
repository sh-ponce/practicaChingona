<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">

</head>
<body>
    <div class="container" id="usersModule" v-loading="loading">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        ${nombre}
                    <el-button type="success float-right" @click="registrarUsuario">Nuevo usuario</el-button>
                    </div>
                    <div class="card-body">
                        @if(session('info'))
                            <div class="alert alert-success">
                                 {{session('info')}}
                            </div>

                        @endif
                        <table class="table table-hover table-sm">
                            <thead>
                                <th>Name</th>
                                <th>User</th>
                                <th>E-mail</th>
                                <th>Password</th>
                                <th>Confirm</th>
                                <th>Acción</th>
                            </thead>
                            <tbody>
                                <tr v-for="user in users">
                                        <td>
                                            ${user.name}
                                        </td>
                                        <td>
                                            ${user.user}
                                        </td>
                                        <td>
                                           ${user.email}
                                        </td>
                                        <td>
                                            ${user.pass}
                                        </td>
                                        <td>
                                            ${user.confirm}
                                        </td>
                                        <td>
                                            <el-button type="danger" @click="eliminarUsuario(user.id)">Eliminar</el-button>

                                        </td>
                                </tr>
                            </tbody>
                        </table>
                      
                           <!-- <el-table
                            :data="users"
                            style="width: 100%">
                            <el-table-column
                                prop="name"
                                label="Nombre">
                            </el-table-column>
                            <el-table-column
                                prop="user"
                                label="Usuario">
                            </el-table-column>
                             <el-button
                            size="mini"
                            @click="handleEdit(scope.$index, scope.row)">Edit</el-button>
                            <el-button
                            size="mini"
                            type="danger"
                            @click="handleDelete(scope.$index, scope.row)">Delete</el-button>
                            </el-table>-->
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script>
        var usersModule = new Vue({
            el: '#usersModule', //scope en el que se usa vue, elemento de html, por ejemplo un DIV
            data: { //todo el data es mi objeto donde van las propiedades o datos, arrays, etc de mi instancia vue
                nombre: 'Lista de usuarios',
                loading: false,
                users:[]
            },
            mounted() {
                this.mostrarUsuarios();             
            },
            methods: {
                mostrarUsuarios()
                {
                    this.loading = true;
                    $.get("getUsers").done(response =>{
                        this.users = response;
                        this.loading = false;
                        
                        this.$message({
                            showClose: true,
                            message: 'Usuarios cargados.',
                            type: 'success'
                        });
                    });
                },
                registrarUsuario()
                {
                    location.href="welcome";
                },
                eliminarUsuario(id)
                {

                }
            },
            delimiters: ['${','}'] //mis delimitadores para mostrar variables vue
        });
    </script>
</body>
</html>