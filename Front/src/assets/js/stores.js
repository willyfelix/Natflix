import { writable } from "svelte/store";

export const logado = writable(false);
export const page = writable("listar-usuarios");
export const usuarios = writable([]);
export const usuarioAtual = writable();
export const filmes = writable([]);
export const filmeAtual = writable();

export function changePage(v) {
  page.update(() => v);
};