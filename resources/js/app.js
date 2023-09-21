import.meta.glob(["../images/**", "../fonts/**"]);
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import "../css/app.css";
import DefaultLayout from "./components/Layout.vue";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = DefaultLayout;
        return page;
    },

    setup({ el, App, props, plugin }) {
        // Create the Vue app instance
        const app = createApp({ render: () => h(App, props) });

        // Register a global Vue directive to render raw HTML
        app.directive("raw-html", {
            mounted(el, binding) {
                el.innerHTML = binding.value;
            },
        });

        // Mixin and mount the app
        app.mixin({ methods: { route } }).use(plugin).mount(el);
    },
});
