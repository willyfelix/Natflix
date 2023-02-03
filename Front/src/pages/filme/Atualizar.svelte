<link rel="stylesheet" type="text/css" href="/stylesheets/cadastrar-filme.css">

<script>
    import { page, changePage, filmeAtual } from "../../assets/js/stores";
    import { ENDPOINT_ATUALIZAR_FILME } from "../../assets/js/endpoints";

    let titulo = $filmeAtual.titulo;
    let diretor = $filmeAtual.diretor;
    let genero = $filmeAtual.genero ;
    let anoDeLancamento = $filmeAtual.anoDeLancamento;

    async function atualizar() {
        const data = new FormData();
        data.append("id", $filmeAtual.id);
        data.append("titulo", titulo );
        data.append("diretor", diretor);
        data.append("genero", genero);
        data.append("anoDeLancamento", anoDeLancamento);
        
        await fetch(ENDPOINT_ATUALIZAR_FILME, {
            method: "POST",
            body: data,
            credentials: "include",
        });
        alert("Filme atualizado com Sucesso!")
        $page = "listar-filmes";
    }
</script>

<div class="container">
  <div class="card">
      <div class="mb-5 text-center">
          <h2>Atualizar Filme</h2>
      </div>
      
      <form class="form-signin" on:submit|preventDefault={atualizar}>
          <div class="row mb-2">
              <div class="col-sm-12">
                  <input type="text" class="form-control" bind:value={titulo} placeholder="Titulo do Filme" required pattern="([a-zA-ZÀ-ú ]+)" >
              </div>
          </div>

          <div class="row mb-2">
            <div class="col-sm-12">
              <input type="text" class="form-control" bind:value={diretor} placeholder="Diretor" required>
            </div>
          </div>

          <div class="row mb-2">
            <div class="col-sm-12">
              <input type="text" class="form-control" bind:value={genero} placeholder="Genero" required>
            </div>
          </div>

          <div class="row mb-2">
            <div class="col-sm-12">
              <input type="text" class="form-control" bind:value={anoDeLancamento} placeholder="Ano de Lancamento" required>
            </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                <button class="btn btn-success btn-block mt-2" type="submit">Atualizar</button>
              </div>
              <div class="col-md-12">
                <button class="btn btn-secondary btn-block mt-2" on:click={() => changePage('listar-filmes')}>Voltar</button>
              </div>
          </div>
      </form>
  </div>
</div>