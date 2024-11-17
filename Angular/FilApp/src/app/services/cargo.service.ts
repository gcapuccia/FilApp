import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Cargo } from '../models/Cargo';

@Injectable({
  providedIn: 'root'
})
export class CargosService {

  private urlApi= "http://localhost/FilApp/php/api/cargos.php";

  constructor(private http: HttpClient) { }

  getAllCargos(): Observable<Cargo[]>{
    return this.http.get<Cargo[]>(this.urlApi);
  }

  getCargoById(id: number): Observable<Cargo>{
    return this.http.get<Cargo>(`${this.urlApi}/${id}`);
  }

  addCargo(empleado: Cargo): Observable<Cargo>{
    return this.http.post<Cargo>(this.urlApi, empleado)
  }

  updateCargo(id: number, cargo: Cargo): Observable<Cargo>{
    return this.http.put<Cargo>(`${this.urlApi}/${id}`, cargo);
  }

  deleteCargo(id: number): Observable<Cargo>{
    return this.http.delete<Cargo>(`${this.urlApi}/${id}`);
  }
}
