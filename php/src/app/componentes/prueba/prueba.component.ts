import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import { Observable } from 'rxjs';
import { PruebaService } from 'src/app/servicios/prueba.service';

@Component({
  selector: 'app-prueba',
  templateUrl: './prueba.component.html',
  styleUrls: ['./prueba.component.css']
})
export class PruebaComponent {

  data: any[]=[];

  constructor(private pruebaService: PruebaService){    
  }

  ngOnInit(): void {
    this.llenarData();
  }

  llenarData(){
    this.pruebaService.obtenerEmpleados().subscribe(data => {
      this.data = data;
      console.dir(this.data);
    })
  }
}
