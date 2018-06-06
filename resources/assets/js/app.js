
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

/** start register components **/
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('intro', require('./components/Intro.vue'));
Vue.component('quote-section', require('./components/Quote.vue'));
Vue.component('my-works', require('./components/MyWorks.vue'));
Vue.component('skills', require('./components/Skills.vue'));
Vue.component('paint-panel', require('./components/PaintPanel.vue'));
/** end register components **/

/** start register partials **/
Vue.component('top-triangle', require('./components/partials/TopTriangle.vue'));
Vue.component('bottom-triangle', require('./components/partials/BottomTriangle.vue'));
Vue.component('card', require('./components/partials/Card.vue'));
Vue.component('skill', require('./components/partials/Skill.vue'));
/** end register partials **/

const app = new Vue({
    el: '#app',

    data: {
        infoData : {}
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

    created() {
        window.Information.reload().then( infos => {
            this.infoData = window.Information.all();
        });

    },

    mounted() {

    }
});
