import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Usuario } from '../models/usuario';
import { Observable } from 'rxjs';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class LoginService {

  private urlApi = 'https://jsonplaceholder.typicode.com/users';

  constructor(private http: HttpClient, private router: Router) { }

  usuarioLogeado: string = '';

  registrarUsuario(user: string) {
    this.usuarioLogeado = user;
  }

  public obtenerUsuarios(): Observable<Usuario[]> {
    return this.http.get<Usuario[]>(this.urlApi);
  }

  public irAformulario(): void {
    this.router.navigate(['/genero'])
  }
}
