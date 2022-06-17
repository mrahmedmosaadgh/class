<template>
  <div
  :class='visible'
   class="bg-white border-r p-2 -my-2">
    <button @click="hideme">hide</button>
    <sidebar-item route="dashboard.home">
      Home
    </sidebar-item>
    <sidebar-item route="dashboard.components">
      Components
    </sidebar-item>
    <sidebar-item route="dashboard.MyClassMain">
      MyClassMain
    </sidebar-item>


        <sidebar-item route="dashboard.cs">
      MyCs
    </sidebar-item>
            <sidebar-item route="dashboard.texteditor">texteditor</sidebar-item>
            <sidebar-item route="dashboard.test">test</sidebar-item>
            <sidebar-item route="dashboard.modalanimate">modal animate</sidebar-item>   
            <sidebar-item route="card1">card1</sidebar-item>   
               
        <sidebar-item route="mymarks.main">
      marks
    </sidebar-item>
  </div>
</template>

<script>
import SidebarItem from './SidebarItem'
export default {
  name: 'Sidebar',
  components: { SidebarItem },
  data(){
    return{
      visible:'visible  '
    }
  },
  methods:{
    hideme(){

this.visible='invisible  w-0 ';
    }
  }
}
</script>

<style scoped>

</style>
