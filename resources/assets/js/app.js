
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// register global event bus
import {EventBus} from './utils/EventBus';
window.EventBus = new EventBus();

/** start register utilities **/

// corresponding class for personal information
import {Information} from './utils/Information';
window.Information = new Information();

// global plugins
import {Utils} from './utils/Utils';
Vue.use(Utils);

/** end register utilities **/


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('intro', require('./components/Intro.vue'));
Vue.component('quote-section', require('./components/Quote.vue'));
Vue.component('my-works', require('./components/MyWorks.vue'));

Vue.component('top-triangle', require('./components/partials/TopTriangle.vue'));
Vue.component('bottom-triangle', require('./components/partials/BottomTriangle.vue'));


const app = new Vue({
    el: '#app',

    data: {
        d: [
            '111', '222', '333'
        ]
    },

    computed: {

    },

    filters: {

    },

    methods: {
        href(menuItem) {
            if(menuItem.href) {
                return menuItem.href;
            } else {
                return menuItem.name.toLowerCase();
            }
        }
    },

    mounted() {

    }
});
