import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { PaisNombre } from '../models/pais';

@Injectable({
  providedIn: 'root'
})
export class PaisService {

  private urlApi = 'https://api.nationalize.io/?name=';

  constructor(public http: HttpClient) { }

  public getDataPais(name:string):Observable<PaisNombre>{
    return this.http.get<PaisNombre>(this.urlApi + name);
  }
}
