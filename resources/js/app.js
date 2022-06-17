import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'
import excel from 'vue-excel-export'
// import GAuth from 'vue3-google-oauth2'//google


import '~/plugins'
import '~/components'

import iosAlertView from 'vue-ios-alertview';
Vue.use(iosAlertView);
Vue.use(excel);
// const gAuthOptions = { clientId: 'YOUR_CLIENT_ID', scope: 'email', prompt: 'consent', fetch_basic_profile: false }//google
// Vue.use(GAuth, gAuthOptions)//google


Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App
})
