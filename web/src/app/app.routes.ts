// ====== ./app/app.routes.ts ======

// Imports
// Deprecated import
// import { provideRouter, RouterConfig } from '@angular/router';
import { ModuleWithProviders }  from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { JobsListComponent } from '../app/jobs-list.component'; 

// Route Configuration
export const routes: Routes = [
  {
    path: '',
    component: JobsListComponent 
  },
  { path: 'jobs', component: JobsListComponent }, 
];

// Deprecated provide
// export const APP_ROUTER_PROVIDERS = [
//   provideRouter(routes)
// ];


export const routing: ModuleWithProviders = RouterModule.forRoot(routes);