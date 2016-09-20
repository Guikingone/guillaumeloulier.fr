import "../../../node_modules/core-js";
import "../../../node_modules/reflect-metadata";
import "../../../node_modules/zone.js/dist/zone.js"

import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';

import { AppModule } from './app.module';

const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule);
