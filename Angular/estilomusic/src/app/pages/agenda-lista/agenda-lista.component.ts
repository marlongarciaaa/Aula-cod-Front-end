import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AgendaService } from '../../services/agenda.service';
import { Evento } from '../../models/agenda.model';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-agenda-lista',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './agenda-lista.component.html'
})
export class AgendaListaComponent implements OnInit {

  private agendaService = inject(AgendaService);

  // LISTA ORIGINAL
  eventos = signal<Evento[]>([]);

  // 🔍 LISTA FILTRADA (NOVA)
  eventosFiltrados = signal<Evento[]>([]);

  // MODAL
  eventoSelecionado = signal<Evento | null>(null);

  ngOnInit() {
    this.carregarEventos();
  }

  carregarEventos() {
    this.agendaService.getEventos().subscribe(res => {
      this.eventos.set(res);
      this.eventosFiltrados.set(res); // 👈 IMPORTANTE
    });
  }

  // 🔍 FUNÇÃO DE BUSCA
  filtrarEventos(event: any) {
    const termo = event.target.value.toLowerCase();

    const filtrados = this.eventos().filter(e =>
      e.titulo.toLowerCase().includes(termo) ||
      e.local.toLowerCase().includes(termo)
    );

    this.eventosFiltrados.set(filtrados);
  }

  // MODAL
  selecionarEvento(item: Evento) {
    this.eventoSelecionado.set(item);
  }

  confirmarCompra() {
    const evento = this.eventoSelecionado();

    if (!evento) {
      alert('Erro ao selecionar evento');
      return;
    }

    this.agendaService.comprarIngresso(evento).subscribe(() => {
      alert(`Compra realizada com sucesso para o evento: ${evento.titulo} 🎉`);
    });
  }
}