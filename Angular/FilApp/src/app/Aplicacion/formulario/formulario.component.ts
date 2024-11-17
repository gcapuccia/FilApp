import { Component } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { Empleado } from 'src/app/models/Empleado';
import {EmpleadoService} from '../../services/empleado.service'; 

@Component({
  selector: 'app-formulario',
  templateUrl: './formulario.component.html',
  styleUrls: ['./formulario.component.css']
})
export class FormularioComponent  {
  
  loginForm: FormGroup;
   listaEmpleados: Empleado[]=[]

  constructor(public empleadoService: EmpleadoService){
    this.loginForm = new FormGroup({

      usuario: new FormControl('', [Validators.email, Validators.required]),
      password: new FormControl('', [Validators.minLength(6), Validators.required]),
    });
     this.empleadoService.getAllEmpleados().subscribe(empleados => {
       this.listaEmpleados = empleados;
   });

  }

  get controles(){
    return this.loginForm.controls;
  }
  
 EnviarFormulario() {
   const user = this.loginForm.get('usuario')?.value;
   const pass = this.loginForm.get('password')?.value;

   if (this.loginForm.valid) { 
     this.listaEmpleados.forEach(empleado => {
        if (empleado.Usuario === user && empleado.pass == pass) {
         
          console.log('Usuario encontrado:', empleado);
       } else {
         // User not found in this iteration
       }
     });
   } else {
     console.error('listaEmpleados is not yet available');
   }
 }

//  da error porque no levante el server
}