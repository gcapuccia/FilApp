import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Usuario } from '../models/usuario';
import { Observable } from 'rxjs';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class PruebaService {

  private urlApi = 'http://localhost/FilApp/php/api/empleados.php';

  constructor(private http: HttpClient, private router: Router) { }

  public obtenerEmpleados(): Observable<any[]> {
    return this.http.get<any[]>(this.urlApi);
  }

  
}
