import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { IndexComponent } from './index/index.component';
import { CreateComponent } from './create/create.component';
import { EditComponent } from './edit/edit.component';

const routes: Routes = [
  { path: 'proveedor', redirectTo: 'proveedor/index', pathMatch: 'full'},
  { path: 'proveedor/index', component: IndexComponent },
  { path: 'proveedor/create', component: CreateComponent },
  { path: 'proveedor/edit/:id', component: EditComponent }
]

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ProveedorRoutingModule { }
