import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {

  isSidebarVisible = false;
  userName = 'Aquiles Brinco';

  toggleSidebar() {
    this.isSidebarVisible = !this.isSidebarVisible;

    // Actualiza la clase del aside y del contenido
    const sidebar = document.querySelector('.sidebar') as HTMLElement;
    const content = document.querySelector('.content') as HTMLElement;

    if (this.isSidebarVisible) {
      sidebar.classList.add('visible');
      content.classList.add('sidebar-visible');
    } else {
      sidebar.classList.remove('visible');
      content.classList.remove('sidebar-visible');
    }
  }

  logout() {
    // Lógica para cerrar sesión
    console.log('Salir');
  }
}
