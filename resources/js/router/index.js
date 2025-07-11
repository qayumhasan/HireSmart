import { createRouter, createWebHistory } from 'vue-router';
import HomeComponent from '../components/Admin.vue';
import LoginComponent from '../components/auth/Login.vue';
import JobListComponent from '../components/jobs/JobList.vue';
import JobCreateComponent from '../components/jobs/JobCreate.vue';
import JobEditComponent from '../components/jobs/JobEdit.vue';
import SkillComponent from '../components/skill/index.vue';
import SkillCreateComponent from '../components/skill/create.vue';
import SkillEditComponent from '../components/skill/edit.vue';

import LocationComponent from '../components/location/index.vue';
import LocationCreateComponent from '../components/location/create.vue';
import LocationEditComponent from '../components/location/edit.vue';

import CareerListComponent from '../components/career/list.vue';

const routes = [
    {
        path: '/', component: HomeComponent,
        children: [
            {
                path: '/job-list',
                component: JobListComponent,
                name: 'Joblist',
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/job-create',
                component: JobCreateComponent,
                name: 'Jobcreate',
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/jobs/:id/edit',
                name: 'JobEdit',
                component: JobEditComponent,
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/skills',
                component: SkillComponent,
                name: 'skillList',
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/skill-create',
                component: SkillCreateComponent,
                name: 'skillCreate',
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/skill/:id/edit',
                name: 'skillEdit',
                component: SkillEditComponent,
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/locations',
                component: LocationComponent,
                name: 'locationList',
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/location-create',
                component: LocationCreateComponent,
                name: 'locationCreate',
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/location/:id/edit',
                name: 'locationEdit',
                component: LocationEditComponent,
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },
            {
                path: '/locations',
                component: LocationComponent,
                name: 'locationList',
                 meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
            },

        ],

    },
    {
        path: '/career',
        component: CareerListComponent,
        name: 'careerList',
         meta: { requiresAuth: true, allowedRoles: ['admin', 'employer'] },
    },
    {
        path: '/login',
        name: 'Login',
        component: LoginComponent,
        meta: { guestOnly: true }
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


router.beforeEach((to, from, next) => {
    const token = localStorage.getItem('token')
    const role = localStorage.getItem('role')
    const isAuthenticated = !!token
    if (to.meta.requiresAuth && !isAuthenticated) {
      next({ name: 'Login' })
    } else if (to.meta.guestOnly && isAuthenticated) {
      next({ name: 'Dashboard' })
    } else if (to.meta.allowedRoles && !to.meta.allowedRoles.includes(role)) {
      next({ name: 'NotAuthorized' })
    } else {
      next()
    }
  })

export default router;


