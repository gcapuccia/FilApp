import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './Cliente/login/login.component';
import { AbaotComponent } from './Cliente/about/abaot.component';
import { HomeComponent } from './Aplicacion/home/home.component';
import { FormularioComponent } from './Aplicacion/formulario/formulario.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    AbaotComponent,
    HomeComponent,
    FormularioComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
