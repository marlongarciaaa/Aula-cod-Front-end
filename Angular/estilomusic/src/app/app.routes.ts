import { Routes } from '@angular/router';

export const routes: Routes = [
  { 
    path: '', 
    loadComponent: () => import('./pages/agenda-lista/agenda-lista.component').then(m => m.AgendaListaComponent) 
  },
  { 
    path: 'novo-evento', 
    loadComponent: () => import('./pages/agenda-form/agenda-form.component').then(m => m.AgendaFormComponent) 
  },
  { 
    path: 'meus-ingressos', 
    loadComponent: () => import('./pages/meus-ingressos/meus-ingressos.component').then(m => m.MeusIngressosComponent) 
  }
];



 