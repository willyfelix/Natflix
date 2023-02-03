<link rel="stylesheet" type="text/css" href="/stylesheets/cadastrar-usuario.css">

<script>
    import { page, changePage, usuarioAtual } from "../../assets/js/stores";
    import { ENDPOINT_ATUALIZAR_USUARIO } from "../../assets/js/endpoints";

    let nome= $usuarioAtual.nome;
    let email = $usuarioAtual.email;
    let senha = $usuarioAtual.senha;

    async function atualizar() {
        const data = new FormData();
        data.append("id", $usuarioAtual.id);
        data.append("nome", nome);
        data.append("email", email);
        data.append("senha", senha);
        
        await fetch(ENDPOINT_ATUALIZAR_USUARIO, {
            method: "POST",
            body: data,
            credentials: "include",
        });
        alert("Usuário Atualizado com Sucesso!")
        $page = "listar-usuarios";
    }
</script>

<div class="container">
  <div class="card">
      <div class="mb-5 text-center">
          <h2>Atualizar Usuario</h2>
      </div>
      
      <form class="form-signin" on:submit|preventDefault={atualizar}>
          <div class="row mb-2">
              <div class="col-sm-12">
                  <input type="text" class="form-control" bind:value={nome} placeholder="Nome" required pattern="([a-zA-ZÀ-ú ]+)" >
              </div>
          </div>

          <div class="row mb-2">
            <div class="col-sm-12">
              <input type="email" class="form-control" bind:value={email} placeholder="Email" required>
            </div>
          </div>

          <div class="row mb-2">
            <div class="col-sm-12">
              <input type="password" class="form-control" bind:value={senha} placeholder="Senha" required>
            </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                  <button class="btn btn-success btn-block mt-2" type="submit">Atualizar</button>
              </div>
              <div class="col-md-12">
                  <button class="btn btn-secondary btn-block mt-2" on:click={() => changePage('listar-usuarios')}>Voltar</button>
              </div>
          </div>
      </form>
  </div>
</div>