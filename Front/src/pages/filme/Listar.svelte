<link rel="stylesheet" type="text/css" href="/stylesheets/filmes.css">

<script>

  import { onMount } from "svelte";

  import { filmes, changePage, filmeAtual } from "../../assets/js/stores";
  import { ENDPOINT_LISTAR_FILMES, ENDPOINT_DELETE_FILME} from "../../assets/js/endpoints";

  onMount(async () => {
    carregarFilmes()
  });

  async function carregarFilmes() {
    const response = await fetch( ENDPOINT_LISTAR_FILMES , {
      credentials: "include",
    });

    if (response.ok) {
      $filmes = await response.json();
    }
  }

  function mudarPagina (filme) {
    $filmeAtual = filme; 
    changePage("atualizar-filme");
  }

  async function deleteFilme(id) {
    const form = new FormData();
    form.append("id", id);
    const response = await fetch(ENDPOINT_DELETE_FILME, {
      method: "POST",
      body: form,
      credentials: "include",
    });
    if (!response.ok) {
      alert("xii, algo deu errado!");
      return;
    }
    carregarFilmes()
  }


</script>

<div class="container mt-2">
  <div class="card mb-2">
    
    <div class="row">
      <div class="col-sm-12">
        <button class="btn btn-success width" on:click={() => changePage('cadastrar-filme')}>
          Cadastrar novo filme
        </button>
      </div>
    </div>
    
    <div class="row text-center mt-5">
      <div class="col-sm-12">
        <table class="table table-hover table-striped table-light">
          <thead>
            <tr>
              <th>#</th>
              <th>Titulo</th>
              <th>Diretor</th>
              <th>Genero</th>
              <th>Ano de Lancamento</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            {#each $filmes as filme, i }
              <tr>
                <td>{i+1}</td>
                <td>{filme.titulo}</td>
                <td>{filme.diretor}</td>
                <td>{filme.genero}</td>
                <td>{filme.anoDeLancamento}</td>
                <td>
                  <button class="btn btn-small btn-sucess" on:click={() => mudarPagina(filme)}> &#9998;</button>
                  <button class="btn btn-small btn-danger" on:click={() => deleteFilme(filme.id)}>&times;</button>
                </td>
              </tr>
            {/each}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>