import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Usuario } from 'src/app/models/usuario';
import { LoginService } from 'src/app/servicios/login.service';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  loginForm: FormGroup;

  data: Usuario[] = [];

  constructor(private loginService: LoginService) {
    this.loginForm = new FormGroup({
      usuario: new FormControl('', [Validators.email, Validators.required]),
      clave: new FormControl('', [Validators.required])
    });
  }

  ngOnInit(): void {
    this.llenarData();
  }

  llenarData() {
    this.loginService.obtenerUsuarios().subscribe(data => {
      this.data = data;
      console.dir(this.data);
    })
  }

  EnviarFormulario() {
    const usuario = this.loginForm.get('usuario')?.value;
    const clave = this.loginForm.get('clave')?.value;

    if (this.loginForm.valid) {
      for (let datos of this.data) {
        const mail = datos.email;
        const name = datos.name.split(" ", 1);
        const password = datos.address.geo.lat;

        if (usuario == mail && clave == password) {
          this.loginService.registrarUsuario(name[0]);
          this.loginService.irAformulario();
        }
      }
    }
  }
  get Controles() {
    return this.loginForm.controls;
  }

}
