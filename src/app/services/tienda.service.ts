import { Injectable } from '@angular/core';
import { Videojuego } from '../model/videojuego';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { VideojuegoCarrito } from '../model/videojuegoCarrito';
import { Pedido } from '../model/pedido';

@Injectable({
  providedIn: 'root',
})
export class TiendaService {
  //ruta_webservices = '/angular_videojuegos/'; //esto es para el hosting
  ruta_webservices = "/server/" //esto es para local
  //Todas las operaciones con el servicor se realizaran desde este servicio
  constructor(private http: HttpClient) {}

  obtenerVideojuegos(): Observable<Videojuego[]> {
    console.log(
      'comunicar con el servicioWeb para obtener el json de videojuegos'
    );

    return this.http.get<Videojuego[]>(
      this.ruta_webservices + 'web_services/videojuegos.php'
    );
  }
  obtenerVideojuegoPorId(id: number): Observable<Videojuego> {
    return this.http.get<Videojuego>(
      this.ruta_webservices + `web_services/obtenerVideojuegoPorId.php?id=${id}`
    );
  }

  agregarAlaCarrito(idVideojuego: number, cantidad: number): Observable<any> {
    return this.http.post<any>(
      `${this.ruta_webservices}web_services/agragarProductoCarrito.php?id=`,
      {
        id: idVideojuego,
        cantidad: cantidad,
      }
    );
  }
  obtenerVideojuegosCarrito(): Observable<VideojuegoCarrito[]>{
    return this.http.get<VideojuegoCarrito[]>(`${this.ruta_webservices}web_services/obtenerVideojuegosCarrito.php`);
  }
  registrarPedido(p:Pedido):Observable<string>{
    return this.http.post<string>(this.ruta_webservices+"web_services/registrarPedido.php", p )
  }
}
