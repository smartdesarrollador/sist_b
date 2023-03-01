import './bootstrap';

import { createApp } from 'vue'

import app from './layouts/app.vue'

import ExampleComponent from './components/ExampleComponent.vue'

createApp(app).mount("#app").component('example-component', ExampleComponent)



/* app.component('example-component', ExampleComponent) */


