import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Motivo } from '../models/Motivo';

@Injectable({
  providedIn: 'root'
})
export class MotivoService {

  private urlApi = "http://localhost/FilApp/php/api/motivos.php";
  constructor(private http: HttpClient) { }

  getAllMotivos(): Observable<Motivo[]>{
    return this.http.get<Motivo[]>(this.urlApi);
  }

  getMotivoById(id: number): Observable<Motivo>{
    return this.http.get<Motivo>(`${this.urlApi}/${id}`);
  }

  addMotivo(empleado: Motivo): Observable<Motivo>{
    return this.http.post<Motivo>(this.urlApi, empleado)
  }

  updateMotivo(id: number, motivo: Motivo): Observable<Motivo>{
    return this.http.put<Motivo>(`${this.urlApi}/${id}`, motivo);
  }

  deleteMotivo(id: number): Observable<Motivo>{
    return this.http.delete<Motivo>(`${this.urlApi}/${id}`);
  }
}
