import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FormularioComponent } from './Aplicacion/formulario/formulario.component';
import { HomeComponent } from './Aplicacion/home/home.component';

const routes: Routes = [
  // {
  //   path: '', component: FormularioComponent
  // },
  // {path: 'home', component: HomeComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
