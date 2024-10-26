/* 


MODELO DE CONEXION A API----------------------------------------------


import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { User , Address, Geo } from 'src/app/model/User';
import { Nombre } from '../model/Nombre';
import { Nacion } from '../model/Nacion';

@Injectable({
  providedIn: 'root'
})
export class LoginService {

  private UrlUser = 'https://jsonplaceholder.typicode.com/users';

  private UrlTipo = 'https://api.genderize.io/?name=';

  private UrlNac = 'https://api.nationalize.io/?name=';
  
  constructor(private http: HttpClient) { }

  getListaUsuarios(){
    return this.http.get<User[]>(this.UrlUser);
  }

  getTipoNombre(nombre: string){
    return this.http.get<Nombre[]>(this.UrlTipo + nombre);
  }

  getTipoNacion(nombre: string){
    return this.http.get<Nacion[]>(this.UrlNac + nombre);
  }


} */
