import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { DefineComponent } from 'vue';
import { ZiggyVue } from 'ziggy-js';
import AppLayout from '@/Layouts/AppLayout.vue';

createInertiaApp({
  resolve: (name: string): DefineComponent => {
    const pages = import.meta.glob<DefineComponent>('./Pages/**/*.vue', { eager: true });
    const page = pages[`./Pages/${name}.vue`];
    if (!page) {
      throw new Error(`Page not found: ${name}`);
    }

    // デフォルトレイアウトを設定
    if (!page.default.layout) {
      page.default.layout = AppLayout; // AppLayout を全てのページに適用
    }

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .mount(el);
  },
});
