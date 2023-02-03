<script>
  import { logado, changePage, usuario } from "../assets/js/stores";
  import { ENDPOINT_LOGOUT } from "../assets/js/endpoints";

  async function logout() {
    const response = await fetch(ENDPOINT_LOGOUT, {
      credentials: "include",
    });

    if (response.ok) {
      $logado = false;
    }
  }
</script>

<link rel="stylesheet" type="text/css" href="/stylesheets/navbar.css" />

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <span id="subtitulo">Olá, {$usuario?.nome || "Cinéfilo"}</span>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <button
              class="btn btn-info"
              on:click={() => changePage("listar-filmes")}>Filmes</button
            >
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" on:click={logout}>
                <button class="btn btn-outline-secondary">Logout</button>
            </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
