<link rel="stylesheet" type="text/css" href="/stylesheets/usuarios.css">

<script>

  import { onMount } from "svelte";

  import { usuarios, changePage, usuarioAtual } from "../../assets/js/stores";
  import { ENDPOINT_LISTAR_USUARIOS, ENDPOINT_DELETE_USUARIO} from "../../assets/js/endpoints";

  onMount(async () => {
    carregarUsuarios()
  });

  async function carregarUsuarios() {
    const response = await fetch( ENDPOINT_LISTAR_USUARIOS , {
      credentials: "include",
    });

    if (response.ok) {
     $usuarios = await response.json();
    }
  }

  function mudarPagina (usuario) {
    $usuarioAtual = usuario; 
    changePage("atualizar-usuario");
  }

  async function deleteUsuario(id) {
    const form = new FormData();
    form.append("id", id);
    const response = await fetch(ENDPOINT_DELETE_USUARIO, {
      method: "POST",
      body: form,
      credentials: "include",
    });
    if (!response.ok) {
      alert("xii, algo deu errado!");
      return;
    }
    carregarUsuarios()
  }


</script>

<div class="container mt-2">
  <div class="card mb-2">
    
    <div class="row">
      <div class="col-sm-12">
        <button class="btn btn-success width" on:click={() => changePage('cadastrar-usuario')}>
          Cadastrar novo usuario
        </button>
      </div>
    </div>
    
    <div class="row text-center mt-5">
      <div class="col-sm-12">
        <table class="table table-hover table-striped table-light">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome </th>
              <th>Email</th>
              <th>Senha</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            {#each $usuarios as usuario, i }
              <tr>
                <td>{i+1}</td>
                <td>{usuario.nome}</td>
                <td>{usuario.email}</td>
                <td>{usuario.senha}</td>
                <td>
                  <button class="btn btn-small btn-sucess" on:click={() => mudarPagina(usuario)}> &#9998;</button>
                  <button class="btn btn-small btn-danger" on:click={() => deleteUsuario(usuario.id)}>&times;</button>
                </td>
              </tr>
            {/each}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>