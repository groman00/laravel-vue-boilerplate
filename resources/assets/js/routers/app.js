import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../pages/Home.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    linkActiveClass: 'active',
    routes: [
        { path: '/', name: 'home', component: Home }
    ]
});

router.afterEach((to, from) => {
    router.lastRoute = from;
});

export default router;
