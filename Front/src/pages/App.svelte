<script>
  
  import { onMount } from "svelte";
  import { page, logado, usuario } from "../assets/js/stores";
  
  import { ENDPOINT_LOGADO } from "../assets/js/endpoints";
  
  import Navbar from "./Navbar.svelte";

  import Login from "./Login.svelte";
  import CadastrarUsuario from "./usuario/Cadastrar.svelte";

  import ListarFilmes from "./filme/Listar.svelte";
  import CadastrarFilme from "./filme/Cadastrar.svelte";
  import AtualizarFilme from "./filme/Atualizar.svelte";
  
  onMount(async () => {
    const response = await fetch(ENDPOINT_LOGADO, {
      credentials: "include",
    });

    if (response.ok) {
      $logado = true;
      $usuario = await response.json();
    }
  });
</script>

<link rel="stylesheet" type="text/css" href="/stylesheets/app.css" />

<main id="principal">

  {#if $logado === true}
    <Navbar />
  {/if}

  {#if $page === "login"}
    <Login />
  {:else if $page === "cadastrar-usuario"}
    <CadastrarUsuario />
  {:else if $page === "listar-filmes"}
    <ListarFilmes />
  {:else if $page === "cadastrar-filme"}
    <CadastrarFilme />
  {:else if $page === "atualizar-filme"}
    <AtualizarFilme />
  {/if}
</main>
