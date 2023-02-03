import { writable } from "svelte/store";

export const logado = writable(false);
export const usuario = writable();
export const page = writable("listar-usuarios");

export const usuarios = writable([]);
export const usuarioAtual = writable();
export const filmes = writable([]);
export const filmeAtual = writable();

export function changePage(v) {
  page.update(() => v);
}

logado.subscribe((value) => {
  if (value) {
    changePage("listar-filmes");
  } else {
    changePage("login");
  }
});
