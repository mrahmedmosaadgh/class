<template>
  <div class="w-full flex text-center">
    <div class="absolute top-0 right-0 p-6">
      <template v-if="authenticated">
        <router-link :to="{ name: 'dashboard.home' }" class="mx-4 transition-all duration-100 ease-in-out hover:text-teal-500">
          {{ $t('home') }}
        </router-link>
      </template>
      <template v-else>
        <router-link :to="{ name: 'login' }" class="mx-4 transition-all duration-100 ease-in-out hover:text-teal-500">
          {{ $t('login') }}
        </router-link>
        <router-link :to="{ name: 'register' }" class="mx-4 transition-all duration-100 ease-in-out hover:text-teal-500">
          {{ $t('register') }}
        </router-link>
      </template>
    </div>

    <div class="m-auto">
              <img class=" animate__animated animate__bounceIn object-cover w-16 h-16  "
     src="logo.png"
     alt="Avatar" />
      <div class="text-6xl mb-4 animate__animated animate__fadeInDown">
        {{ title }}
      </div>
            <div class="text-6xl mb-4">
        <img class=" animate__animated animate__bounceIn object-cover w-16 h-16 border-2 border-green-600 rounded-full"
     src="aimanlogo.png"
     alt="Avatar" />

      </div>

      <div class="links transition-all duration-100 ease-in-out hover:text-teal-500">
        <span  class="text-2xl mb-4 center animate__animated animate__bounceInUp">Coming soon</span>
        <!-- <a href="https://github.com/skrypt-nl/laravel-vue-tailwind-spa" target="_blank">github.com/skrypt-nl/laravel-vue-tailwind-spa</a> -->
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'basic',

  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script>
