import './bootstrap';

import { createApp } from 'vue';

import app from './layouts/app.vue';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

createApp(app).mount('#app');
