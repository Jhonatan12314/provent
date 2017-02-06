 <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="http://www.indexceed.com/" class="simple-text">
                    By Indexceed
                </a>
            </div>
            <div class="sidebar-wrapper">

                <div class="user">
                    <div class="photo">
                        <img src="{{url('public/backend/img/faces/marc.jpg')}}" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            Marc Andrew
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">Perfil</a>
                                </li>
                                <li>
                                    <a href="{{url('admin')}}">Salir</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a  href="{{url('admin/categorias')}}">
                            <i class="material-icons">list</i>
                            <p>Categorías </p>
                        </a>
                    </li>
                    <li>
                        <a href="#componentsExamples">
                        <i class="material-icons">store</i>
                            
                            <p>Productos</p>
                        </a>
                    </li>
                    <li>
                        <a href="#formsExamples">
                            <i class="material-icons">person</i>
                            <p>Clientes</p>
                        </a>
                    </li>
                    <li>
                        <a href="#formsExamples">
                            <i class="material-icons">image</i>
                            <p>Slider</p>
                        </a>
                    </li>
                    <li>
                        <a  href="#tablesExamples">
                        <i class="material-icons">settings_applications</i>
                            <p>Configuración</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>