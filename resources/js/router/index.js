import { createRouter, createWebHistory } from "vue-router";
import axiosInstance from "../components/adminPages/plugins/axios";

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
      meta: { requiresAuth: true },
      component: ()=>import('../components/adminPages/layouts/contentWrapper.vue'),
      children:[
        {
          path:'',
          component: ()=>import('../components/adminPages/pages/home.vue')
        },
        {
          path:'category',
          component: ()=>import('../components/adminPages/pages/category.vue')
        },
      ]
    },
    {
      path:'/admins/login',
      component: ()=>import('../components/adminPages/pages/login.vue')
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

// 🔎 Vérification de l’authentification
export async function isAuthenticated() {
  try {
    const res = await axiosInstance.get('/user', {
      headers: {
        Authorization: `Bearer ${localStorage.getItem("token")}`,
      },
    });
    if (res.status === 200) {
      return res.data.user;
    }
  } catch (error) {
    console.error("Erreur lors de la vérification de l'authentification :", error);
    return null;
  }
}

// Durée max d'inactivité = 30 minutes (en ms)
const MAX_IDLE_TIME = 30 * 60 * 1000;
function updateLastActivity() {
    localStorage.setItem('lastActivity', Date.now())
}

// Suivre les événements de l’utilisateur
['click', 'mousemove', 'keydown', 'scroll'].forEach(event => {
    window.addEventListener(event, updateLastActivity);
});

// Vérifier l’inactivité toutes les minutes
setInterval(() => {
    const lastActivity = localStorage.getItem('lastActivity');
    const token = localStorage.getItem('token');

    if (token && lastActivity) {
        const now = Date.now();
        if (now - lastActivity > MAX_IDLE_TIME) {
            // Déconnexion
            localStorage.removeItem('token');
            localStorage.removeItem('lastActivity');
            window.location.href = '/admins/login';
        }
    }
}, 60 * 1000);

// Init au démarrage
updateLastActivity();


// 🧠 Middleware global
router.beforeEach(async (to, from, next) => {
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    try {
      const auth = await isAuthenticated();
      const token = localStorage.getItem("token");

      if (auth && token) {
        // if (auth.is_active === 0) {
        //   localStorage.removeItem("token");
        //   return next('/admins/login');
        // }

        // 🔐 Vérification des permissions UNIQUEMENT pour les routes admin
        // if (to.matched.some(record => record.meta.isAdmin)) {
        //   const routeName = to.meta.routeName;
        //   const permissions = auth.role.permissions;

        //   const permission = permissions.find(
        //     p => p.route_name === routeName
        //   );

        //   if (!permission || permission.access_page !== 1) {
        //     return next('/admins/unauthorized');
        //   }

        //   const permissionStore = usePermissionStore();
        //   permissionStore.setPermission(permission);
        // }

        next();
      } else {
        localStorage.setItem('redirectAfterLogin', to.fullPath);
        window.location.href = '/admins/login';
      }
    } catch (error) {
      console.error("Erreur lors de la vérification de l'authentification :", error);
      next("/admins/login");
    }
  } else {
    // Rediriger si déjà connecté et essaie d'aller sur /admins/login
    if (to.path === '/admins/login') {
      const auth = await isAuthenticated();
      const token = localStorage.getItem("token");
      if (auth && token) {
        next('/admins');
      } else {
        next();
      }
    } else {
      next();
    }
  }
});

export default router;