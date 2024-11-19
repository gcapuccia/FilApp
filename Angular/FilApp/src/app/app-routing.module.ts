import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AgregarEmpleadoComponent } from './Aplicacion/agregar-empleado/agregar-empleado.component';
import { FormularioComponent } from './Aplicacion/formulario/formulario.component';
import { HomeComponent } from './Aplicacion/home/home.component';
import { InicioComponent } from './Aplicacion/inicio/inicio.component';
import { ListaEmpleadosComponent } from './Aplicacion/lista-empleados/lista-empleados.component';
import { ListaTurnosComponent } from './Aplicacion/lista-turnos/lista-turnos.component';

const routes: Routes = [
  {
    path: '', component: FormularioComponent
  },
  {
    path: 'home', component: HomeComponent,
      children:[
        { path: '', component: InicioComponent },
        { path: 'inicio', component: InicioComponent },
        { path: 'lista-turnos', component: ListaTurnosComponent },
        { path: 'lista-empleados', component: ListaEmpleadosComponent },
        { path: 'agregar-empleado', component: AgregarEmpleadoComponent },
      ]
  },
 
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
