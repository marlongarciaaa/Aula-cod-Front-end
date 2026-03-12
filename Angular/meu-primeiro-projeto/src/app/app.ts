import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet,FormsModule],
  templateUrl: './app.html',
  styleUrl: './app.css'
})

export class App {
  titulo:string = ('Bem vindo querido Marlon');

  contador: number = 0;
  incrementar(){
    this.contador++;
  }  
  
  textoDigitado: string = '';
}
