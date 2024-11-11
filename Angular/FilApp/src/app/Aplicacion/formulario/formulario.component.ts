import { Component } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';


@Component({
  selector: 'app-formulario',
  templateUrl: './formulario.component.html',
  styleUrls: ['./formulario.component.css']
})
export class FormularioComponent {

  loginForm: FormGroup;

  validMessage: string = " ";
  constructor() {

    this.loginForm = new FormGroup({
      usuario: new FormControl('', [Validators.email, Validators.required]),
      password: new FormControl('', [Validators.minLength(6), Validators.required])
    });

  }



  enviarFormulario() {
    if (this.loginForm.valid) {
      console.log("Formulario valido")
      this.validMessage = "Se disparo la funcion";
      this.loginForm.reset();
    }
    else{
      console.log("Formulario invalido")
    }
  }

  get controles(){
    return this.loginForm.controls;
  }

}


