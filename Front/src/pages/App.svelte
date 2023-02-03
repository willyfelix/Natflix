<script>
  
  import { page } from "../assets/js/stores";
  
  import Navbar from "./Navbar.svelte";

  import ListarFilmes from "./filme/Listar.svelte";
  import CadastrarFilme from "./filme/Cadastrar.svelte";
  import AtualizarFilme from "./filme/Atualizar.svelte";
  import ListarUsuarios from "./usuario/Listar.svelte";
  import CadastrarUsuario from "./usuario/Cadastrar.svelte";
  import AtualizarUsuario from "./usuario/Atualizar.svelte";


</script>

<link rel="stylesheet" type="text/css" href="/stylesheets/app.css" />

<main id="principal">

  <Navbar />

  {#if $page === "listar-filmes"}
    <ListarFilmes />
  {:else if $page === "cadastrar-filme"}
    <CadastrarFilme />
  {:else if $page === "atualizar-filme"}
    <AtualizarFilme />
  {:else if $page === "listar-usuarios"}
    <ListarUsuarios />
  {:else if $page === "cadastrar-usuario"}
    <CadastrarUsuario />
  {:else if $page === "atualizar-usuario"}
    <AtualizarUsuario />
  {/if}
</main>
