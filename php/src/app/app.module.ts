import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './componentes/login/login.component';
import { GeneroComponent } from './componentes/genero/genero.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { PruebaComponent } from './componentes/prueba/prueba.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    GeneroComponent,
    PruebaComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
