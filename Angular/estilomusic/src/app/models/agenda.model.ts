import { identifierName } from "@angular/compiler";

export interface Categoria {
  id: string;
  nome: string;
}

export interface Evento {
  id: string;
  titulo: string;
  data: string;
  local: string;
  categoriaId: string;
  descricao: string;
  imagem: string;
}

export interface Usuario{
id: string;
Nome: string;
email: string;
senha: string;
role: string;
}

export interface MeusIngressos {
  id: string;
  titulo: string;
  data: string;
  local: string;
  categoriaId: string;
  descricao: string;
  imagem: string;
}
