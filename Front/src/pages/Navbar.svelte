<link rel="stylesheet" type="text/css" href="/stylesheets/navbar.css">

<script>
    import { changePage} from '../assets/js/stores';

</script>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <span id="subtitulo">Olá, cinéfilo</span>
        </a>
    
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <button class="btn btn-info" on:click={() => changePage('listar-filmes')}>Filmes</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <button class="btn btn-info" on:click={() => changePage('listar-usuarios')}>Usuarios</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>