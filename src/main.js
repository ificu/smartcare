import Vue from 'vue'
import App from './App.vue'
import store from './store'
import vuetify from './plugins/vuetify';
import './registerServiceWorker'
import router from './router'
import './utils/filters'
import VueAnalytics from 'vue-analytics'

Vue.config.productionTip = false

Vue.use(VueAnalytics, {
  //id: 'UA-153508803-1',
  id: 'UA-xxxxxxxxx-x',
  router
});

new Vue({
  store,
  vuetify,
  router,
  render: h => h(App)
}).$mount('#app')
