function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [
  { path: '/', name: 'welcome', component: page('welcome.vue') },

  { path: '/login', name: 'login', component: page('auth/login.vue') },
  { path: '/register', name: 'register', component: page('auth/register.vue') },
  { path: '/terms', name: 'terms', component: page('legal/terms.vue') },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },

 
  { path: '/dashboard', name: 'dashboard.home', component: page('home.vue') },
  { path: '/MyClassMain', name: 'dashboard.MyClassMain', component: page('MyClassMain.vue') },
  { path: '/cs', name: 'dashboard.cs', component: page('cs.vue'), auth: true },
  { path: '/texteditor', name: 'dashboard.texteditor', component: page('texteditor.vue'), auth: true },
  { path: '/test', name: 'dashboard.test', component: page('test.vue'), auth: true },
  { path: '/modalanimate', name: 'dashboard.modalanimate', component: page('modalanimate.vue'), auth: true },
  { path: '/card1', name: 'card1', component: page('card1.vue') },
  
  { path: '/dashboard/components', name: 'dashboard.components', component: page('components.vue') },
  
  { path: '/mymarks/main/:id/:schoolname', name: 'mymarks.main', component: page('mymarks/main.vue') },


  // ---------------------------------------------------------------------------------------------------------------------------------------
  { path: '/test/1', name: 'test.1', component: page('test/1.vue') },
  { path: '/test/2', name: 'test.2', component: page('test/2.vue') },
  { path: '/test/3', name: 'test.3', component: page('test/3.vue') },
  { path: '/test/4', name: 'test.4', component: page('test/4.vue') },
  // ---------------------------------------------------------------------------------------------------------------------------------------


  { path: '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') }
    ] },

  { path: '*', component: page('errors/404.vue') }
]
