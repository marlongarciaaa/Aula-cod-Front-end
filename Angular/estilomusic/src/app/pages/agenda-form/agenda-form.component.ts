import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormBuilder, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AgendaService } from '../../services/agenda.service';
import { Categoria } from '../../models/agenda.model';

@Component({
  selector: 'app-agenda-form',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './agenda-form.component.html',
  styles: [`
    .container { max-width: 600px; margin-top: 2rem; }
    .invalid-feedback { display: block; }
  `]
})
export class AgendaFormComponent implements OnInit {
  private fb = inject(FormBuilder);
  private agendaService = inject(AgendaService);
  private router = inject(Router);

  agendaForm!: FormGroup;
  categorias: Categoria[] = [];

  constructor() {
    this.agendaForm = this.fb.group({
      titulo: ['', [Validators.required, Validators.minLength(5)]],
      data: ['', Validators.required],
      local: ['', Validators.required],
      categoriaId: [null, Validators.required], // ✅ CORRIGIDO
      descricao: ['', [Validators.required, Validators.maxLength(200)]],
      imagem: [''] // ✅ ADICIONADO
    });
  }

  ngOnInit() {
    this.agendaService.getCategorias().subscribe(res => {
      this.categorias = res;
    });
  }

  salvar() {
    if (this.agendaForm.valid) {

      const evento = this.agendaForm.value;

      // 🚨 GARANTE QUE NÃO ENVIA ID
      delete evento.id;
      
      this.agendaService.salvarEvento(evento).subscribe({
        next: () => {
          alert('Evento salvo com sucesso!');
          this.router.navigate(['/']);
        },
        error: (err) => console.error('Erro ao salvar:', err)
      });

    } else {
      Object.values(this.agendaForm.controls).forEach(control => {
        control.markAsTouched();
      });
    }
  }
}