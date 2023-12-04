import { Component, OnInit } from '@angular/core';
import { ProveedorService } from '../proveedor.service';
import { Router } from '@angular/router';
import { FormGroup, FormControl, Validators} from '@angular/forms';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent implements OnInit {

  form!: FormGroup;
  precios : string = "";
  numero : number=0;
  numero1 : number=0;

  constructor(
    public proveedorService: ProveedorService,
    private router: Router,

  ) { }

  ngOnInit(): void {

    this.form = new FormGroup({
      nombre_proveedor:  new FormControl('', [ Validators.required, Validators.pattern('^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ \-\']+') ])
    });


  }

  multiplicar(){
    this.numero1= this.numero * 2;
  }
  get f(){
    return this.form.controls;
  }


  submit(){
    console.log(this.form.value);
    this.proveedorService.create(this.form.value).subscribe(res => {
         console.log('Proveedor creado successfully!');

         this.router.navigateByUrl('producto/index');
         let currentUrl = this.router.url;
      this.router.routeReuseStrategy.shouldReuseRoute = () => false;
      this.router.onSameUrlNavigation = 'reload';
      this.router.navigate([currentUrl]);
    })
  }

  limpiar(){
    const nombre_proveedor = document.getElementById("nombre_proveedor");
//this.currentProject.reset();
    //this.precios = "";
    this.form.reset();
  }
}
