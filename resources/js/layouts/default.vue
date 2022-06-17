<template>
  <div class="    h-auto  ">
  <!-- <div class="flex flex-col h-screen overflow-hidden"> -->
   <!-- <button @click="showmenu=!showmenu">show menue</button> -->
   <navbar />
 
    <div class="flex flex-grow animate__animated   animate__flipInY">

<div v-if="showmenu" class=" animate__animated   animate__flipInY">
  <sidebar />
</div>

    
      <!-- <div class=" "> -->
      <div class="  flex-grow overflow-auto p-2">
        <child />
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import Sidebar from '../components/Sidebar'
import 'animate.css';
export default {
  name: 'MainLayout',
  data(){
    return{
      showmenu:false
    }
  },

  components: {
    Sidebar,
    Navbar
  }
}
</script>
