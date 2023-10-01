import { createRouter , createWebHistory } from "vue-router";

import HomePage from './page/HomePage.vue';
import AboutPage from './page/AboutPage.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/' ,
            name: 'home' ,
            component: HomePage
        },
        {
            path: '/chi-siamo' ,
            name: 'about' ,
            component: AboutPage
        },
    ]

});

export {router};