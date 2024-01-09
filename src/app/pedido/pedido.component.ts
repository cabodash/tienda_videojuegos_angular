import { Component } from '@angular/core';
import { Pedido } from '../model/pedido';
import { FormsModule } from '@angular/forms';
import { TiendaService } from '../services/tienda.service';
import { Router } from '@angular/router';
import { Validador } from '../validations/validador';

@Component({
  selector: 'app-pedido',
  standalone: true,
  imports: [FormsModule],//FormsModule es encesario para poder usar ngModel en el html
  templateUrl: './pedido.component.html',
  styleUrl: './pedido.component.css'
})
export class PedidoComponent {

  pedido:Pedido = {} as Pedido


  constructor(private validador:Validador, private servicioTienda:TiendaService, private router:Router){}

  finalizarPedido(){
    console.log("mandar a servidor: ")
    console.log(this.pedido)

    //Validar la informacion
    if(
      this.validador.validarNombre(this.pedido.nombre) &&
      this.validador.validarDireccion(this.pedido.direccion) &&
      this.validador.validarTarjeta(this.pedido.tarjeta)
    ){
      this.servicioTienda.registrarPedido(this.pedido).subscribe( res => (res=="ok")?this.pedidoOk():alert("no se pudo registrar el pedido") )
    }
  }

  pedidoOk(){
    alert("pedido realizado correctamente")
    this.router.navigate(["listado"])
  }


}
