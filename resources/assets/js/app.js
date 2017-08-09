require('./bootstrap');


import VueRouter  from 'vue-router'
import router     from './router'
import Vue        from 'vue'

Vue.use(VueRouter)

const Hello = (resolve) => require(['./components/hello.vue'], resolve)
const Numbers = (resolve) => require(['./components/number.vue'], resolve)
const Card = (resolve) => require(['./components/card.vue'], resolve)

new Vue({

  router,

  components : {
    Hello,
    Numbers,
    Card
  },

  data : {
  }

}).$mount('#app')
