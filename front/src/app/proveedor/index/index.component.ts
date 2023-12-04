import { Component } from '@angular/core';

import { ProveedorService } from '../proveedor.service';
import { Proveedor } from '../proveedor';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent {

  proveedor: Proveedor[] = [];
  modal: boolean = true;
  constructor(public proveedorService: ProveedorService) { }


  ngOnInit(): void {
    this.proveedorService.getAll().subscribe((data: Proveedor[])=>{
      this.proveedor = data;
      console.log(this.proveedor);
    })
  }

  deleteProveedor(id: any){
    this.proveedorService.delete(id).subscribe(res => {
         this.proveedor = this.proveedor.filter(item => item.id !== id);
         console.log('Person deleted successfully!');
    })
  }
}
