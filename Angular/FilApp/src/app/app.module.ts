import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './Cliente/login/login.component';
import { AbaotComponent } from './Cliente/about/abaot.component';
import { HomeComponent } from './Aplicacion/home/home.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    AbaotComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
