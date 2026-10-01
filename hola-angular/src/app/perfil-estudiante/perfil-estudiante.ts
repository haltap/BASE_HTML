import { Component } from '@angular/core';

@Component({
  selector: 'app-perfil-estudiante',
  imports: [],
  templateUrl: './perfil-estudiante.html',
  styleUrl: './perfil-estudiante.css'
})
export class PerfilEstudiante {
  nombre = 'Fernando';
  numeroCuenta = '20242300084';
  carrera = 'Ingeniería en Sistemas Computacionales';
}