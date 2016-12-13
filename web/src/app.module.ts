import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
 

import { FormsModule } from '@angular/forms';

import { HttpModule, JsonpModule } from '@angular/http';

import { AppComponent }  from './app/app.component';
import { JobsListComponent } from './app/jobs-list.component';
import { routing } from './app/app.routes';

@NgModule({
  imports:      [
    BrowserModule,
    FormsModule,
    HttpModule,   
    JsonpModule,
    routing
  ], 
  declarations: [ AppComponent, JobsListComponent ],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
