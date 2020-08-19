import Vue from "vue";
import VueRouter from "vue-router";

import Index from "./components/Toppage.vue";
import List from "./components/list.vue";
import Add from "./components/add.vue";
import Make from "./components/make.vue";
import AddTops from "./components/addTops.vue";
import AddBottoms from "./components/addBottoms.vue";
import AddShoes from "./components/addShoes.vue";

Vue.use(VueRouter);

const routes = [
    { path: "/", name: "index", component: Index },
    { path: "/mylist", name: "list", component: List },
    { path: "/add", name: "add", component: Add },
    { path: "/make", name: "make", component: Make },
    { path: "/addTops", name: "addTops", component: AddTops },
    { path: "/addBottoms", name: "addBottoms", component: AddBottoms },
    { path: "/addShoes", name: "addShoes", component: AddShoes }
];

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
