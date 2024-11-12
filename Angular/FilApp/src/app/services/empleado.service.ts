import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Empleado } from 'src/app/models/Empleado';

@Injectable({
  providedIn: 'root'
})
export class EmpleadoService {

private urlApi= "http://localhost/FilApp/php/api/empleados.php";

  constructor(private http: HttpClient) { }

  getAllEmpleados(): Observable<Empleado[]>{
    return this.http.get<Empleado[]>(this.urlApi);
  }

  getEmpleadoById(id: number): Observable<Empleado>{
    return this.http.get<Empleado>(`${this.urlApi}/${id}`);
  }

  addEmpleado(empleado: Empleado): Observable<Empleado>{
    return this.http.post<Empleado>(this.urlApi, empleado)
  }

  updateEmpleado(id: number, empleado: Empleado): Observable<Empleado>{
    return this.http.put<Empleado>(`${this.urlApi}/${id}`, empleado);
  }

  deleteEmpleado(id: number): Observable<Empleado>{
    return this.http.delete<Empleado>(`${this.urlApi}/${id}`);
  }
}
