import { createRouter, createWebHashHistory } from "vue-router";
import dashbord from "./index.vue"
import CreatePost from "./pages/create.vue"
import UpadatePost from "./pages/edit.vue"
import createcity from "./pages/city/create.vue"
import Editcity from "./pages/city/edit.vue"


const routes = [
    {
        path: "/",
        name: "dashbord",
        component: dashbord,
    },
    {path:'/update-post/:id',name:'updatePost',component:UpadatePost},
    {path:'/create-post',name:'CreatePost',component:CreatePost},

      {path:'/update-city/:id',name:'Editcity',component:Editcity},
    {path:'/create-city',name:'createcity',component:createcity},
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;
