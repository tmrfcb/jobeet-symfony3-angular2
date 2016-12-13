// ====== ./app/app.routes.ts ======
"use strict";
var router_1 = require('@angular/router');
var jobs_list_component_1 = require('../app/jobs-list.component');
// Route Configuration
exports.routes = [
    {
        path: '',
        component: jobs_list_component_1.JobsListComponent // Remember to import the Home Component
    },
    { path: 'jobs', component: jobs_list_component_1.JobsListComponent },
];
// Deprecated provide
// export const APP_ROUTER_PROVIDERS = [
//   provideRouter(routes)
// ];
exports.routing = router_1.RouterModule.forRoot(exports.routes);
//# sourceMappingURL=app.routes.js.map