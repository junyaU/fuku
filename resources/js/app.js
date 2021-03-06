/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import router from "./router.js";
import TabComponent from "./components/tabComponent.vue";
import fileChoice from "./components/fileChoice.vue";
import photoList from "./components/photosList.vue";
import itemComponent from "./components/itemComponent.vue";
import registerButton from "./components/registerButton.vue";
import fileComponent from "./components/fileComponent.vue";
import photoPreview from "./components/photoPreview.vue";
import itemChoice from "./components/itemChoice.vue";
import textareaComponent from "./components/textareaComponent.vue";
import sideBar from "./components/sideBar.vue";
import index from "./components/Toppage.vue";


require("./bootstrap");

window.Vue = require("vue");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component("tab-component", TabComponent);
Vue.component("file-choice" , fileChoice);
Vue.component("photo-list" , photoList);
Vue.component("item-component" , itemComponent);
Vue.component("register-button" , registerButton);
Vue.component("file-component" , fileComponent);
Vue.component("photo-preview" , photoPreview);
Vue.component("item-choice" , itemChoice);
Vue.component("textarea-component" , textareaComponent);
Vue.component('side-bar' , sideBar);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router
});
