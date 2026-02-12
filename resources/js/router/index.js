import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path:'',
        component: ()=>import('../components/userPages/layouts/contentWrapper.vue'),
        children:[
          {
            path:'',
            component:()=>import('../components/userPages/pages/home.vue')
          },
          {
            path:'about',
            component:()=>import('../components/userPages/pages/about.vue')
          },
          {
            path:'domaine',
            component:()=>import('../components/userPages/pages/domaine.vue')
          },
          {
            path:'domaine/:slug',
            component:()=>import('../components/userPages/pages/singleDomaine.vue')
          },
          {
            path:'donate',
            component:()=>import('../components/userPages/pages/donate.vue')
          },
          {
            path:'event',
            component:()=>import('../components/userPages/pages/event.vue')
          },
          {
            path:'blog',
            component:()=>import('../components/userPages/pages/blog.vue')
          },
          {
            path:'contact',
            component:()=>import('../components/userPages/pages/contact.vue')
          },
        ]
    },
    {
      path:'/admins',
      component: ()=>import('../components/adminPages/layouts/contentWrapper.vue'),
      children:[
        {
          path:'',
          component: ()=>import('../components/adminPages/pages/home.vue')
        },
      ]
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
      if (to.hash) {
        return { el: to.hash, behavior: 'smooth', top: 0 };
      } else {
        return { top: 0 };
      }
    }
});

export default router;