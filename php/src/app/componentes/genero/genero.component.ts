import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Genero } from 'src/app/models/genero';
import { PaisNombre } from 'src/app/models/pais';
import { GeneroService } from 'src/app/servicios/genero.service';
import { LoginService } from 'src/app/servicios/login.service';
import { PaisService } from 'src/app/servicios/pais.service';

@Component({
  selector: 'app-genero',
  templateUrl: './genero.component.html',
  styleUrls: ['./genero.component.css']
})
export class GeneroComponent implements OnInit {

  loginForm: FormGroup;
  public data!: Genero;
  public dataPais!: PaisNombre;
  name: string = "";
  constructor(public loginService: LoginService, public generoService: GeneroService, public paisService: PaisService) {
    this.name = loginService.usuarioLogeado;
    this.loginForm = new FormGroup({
      nombre: new FormControl('', [Validators.required]),
    });
  }

  ngOnInit(): void {
    this.generoService.getData(this.name).subscribe(
      data => { this.data = data },
      err => alert("no anda")
    )

    this.paisService.getDataPais(this.name).subscribe(
      data => { this.dataPais = data },
      err => alert("no funca pais")
    )
  }

  consultarOtroNombre() {
    if (this.loginForm.valid) {
      const nombre = this.loginForm.get('nombre')?.value;

      this.generoService.getData(nombre).subscribe(
        data => { this.data = data },
        err => alert("no anda nombre")
      )

      this.paisService.getDataPais(nombre).subscribe(
        data => { this.dataPais = data },
        err => alert("no funca pais")
      )
    }
  }
  get Controles() {
    return this.loginForm.controls;
  }
}




