import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './Cliente/login/login.component';
import { AbaotComponent } from './Cliente/about/abaot.component';
import { HomeComponent } from './Aplicacion/home/home.component';
import { FormularioComponent } from './Aplicacion/formulario/formulario.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { SideMenuComponent } from './Aplicacion/side-menu/side-menu.component';
import { NavBarComponent } from './Aplicacion/nav-bar/nav-bar.component';
import { AgregarEmpleadoComponent } from './Aplicacion/agregar-empleado/agregar-empleado.component';
import { ListaEmpleadosComponent } from './Aplicacion/lista-empleados/lista-empleados.component';
import { ListaTurnosComponent } from './Aplicacion/lista-turnos/lista-turnos.component';
import { InicioComponent } from './Aplicacion/inicio/inicio.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    AbaotComponent,
    HomeComponent,
    FormularioComponent,
    SideMenuComponent,
    NavBarComponent,
    AgregarEmpleadoComponent,
    ListaEmpleadosComponent,
    ListaTurnosComponent,
    InicioComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
