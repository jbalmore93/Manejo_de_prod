import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import {  Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';

import { Proveedor } from './proveedor';

@Injectable({
  providedIn: 'root'
})
export class ProveedorService {

  private apiURL = "http://127.0.0.1:8000/api/proveedor/";

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
 }

 constructor(private httpClient: HttpClient) { }


  getAll(): Observable<Proveedor[]> {
    return this.httpClient.get<Proveedor[]>(this.apiURL,this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  create(proveedor: any): Observable<Proveedor> {
    return this.httpClient.post<Proveedor>(this.apiURL, JSON.stringify(proveedor), this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  find(id: any): Observable<Proveedor> {
    return this.httpClient.get<Proveedor>(this.apiURL + id, this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  update(id: any, proveedor: any): Observable<Proveedor> {
    return this.httpClient.put<Proveedor>(this.apiURL + id, JSON.stringify(proveedor), this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  delete(id: any){
    return this.httpClient.delete<Proveedor>(this.apiURL + id, this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  errorHandler(error: any) {
    let errorMessage = '';
    if(error.error instanceof ErrorEvent) {
      errorMessage = error.error.message;
    } else {
      errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
    }
    return throwError(errorMessage);
  }
}

