import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AgendaService } from '../../services/agenda.service';
import { Evento } from '../../models/agenda.model';

@Component({
  selector: 'app-meus-ingressos',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './meus-ingressos.component.html',
})
export class MeusIngressosComponent implements OnInit {
  private agendaService = inject(AgendaService);
  meusIngressos = signal<Evento[]>([]);

  ngOnInit() {
    this.carregarIngressos();
  }

  carregarIngressos() {
  this.agendaService.getMeusIngressos()
    .subscribe(res => this.meusIngressos.set(res));
}
}