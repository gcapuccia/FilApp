import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Genero } from '../models/genero';

@Injectable({
  providedIn: 'root'
})
export class GeneroService {
  
  private urlApi = 'https://api.genderize.io/?name=';

  constructor(public http: HttpClient) { }

  public getData(name:string):Observable<Genero>{
    return this.http.get<Genero>(this.urlApi + name);
  }
  
}
