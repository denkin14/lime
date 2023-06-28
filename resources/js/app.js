import { createApp, h } from 'vue';
import { createInertiaApp, InertiaLink, usePage } from '@inertiajs/inertia-vue3';
import Dashboard from './Pages/Dashboard.vue';

createInertiaApp({
    resolve: (name) => import(`./Pages/${name}`),
    setup({ el, App, props }) {
        createApp({ render: () => h(App, props) })
            .component('InertiaLink', InertiaLink)
            .component('Dashboard', Dashboard)
            .mount(el);
    },
});

app.config.devtools = true;
app.mount('#app');
