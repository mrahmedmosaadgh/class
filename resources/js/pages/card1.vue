<template>
  <div>


 card1.vue
 <br>
 <br>
 <br>
 <br>
 <br>
 <div class="card mt-5" style=" overflow: visible;">
   <!-- <img src="medal1.gif" alt="Avatar" style="width:100%"> -->
  <div style=" height:90px;width: 100%;text-align: center;align-content: center;">
   <img src="grade/4/A/1.png" alt="Avatar" style=" background-color: green;position: absolute;top:-100px; border-radius: 50% ;height:100%;width: 100%;z-index: 9999;">

 
    <!-- <div style="border-radius: 50% ;  background-color: green;height:150px;width: 150px;">
class="container"
    </div> -->
     </div>
    
 <br><br>
  <div  style="background-color: green;">
    <!-- <h4><b>John Doe</b></h4>  -->
    <p>Architect & Engineer</p> 
  </div>
</div>

 <div class="card mt-5" style=" overflow: visible;">
   <!-- <img src="medal1.gif" alt="Avatar" style="width:100%"> -->
  <div style="   height:90px;width: 100%;text-align: center;align-content: center;">
   <img src="grade/4/A/1.png" alt="Avatar" style=" background-color: green;position: absolute;top:-100px; border-radius: 50% ;height:100%;width: 100%;z-index: 9999;">

 
    <!-- <div style="border-radius: 50% ;  background-color: green;height:150px;width: 150px;">
class="container"
    </div> -->
     </div>
     <!-- <p>Architect & Engineer</p> -->
 <br><br> 
  <div  style="background-color: green;">
    <h4><b>John Doe</b></h4> 
   
  </div>
</div>


  </div>
</template>

<script>
import 'animate.css';
export default {
data(){
    return{
        showmyModal:true,
      // myanimate:  '   animate__zoomInUp'
       // myanimate:  '   animate__zoomInDown'     
           myanimate:  '   animate__flipInX' 
    }
},
methods: {
    delayclose(){

// this.myanimate='animate__zoomOutUp'
// this.myanimate='animate__hinge'
// this.myanimate='animate__hinge'
// this.myanimate='animate__hinge'
this.myanimate='animate__bounceOut'

setTimeout(() => this.showmyModal=!this.showmyModal, 1100)



//  setTimeout(() => this.isHidden = false, 500);
    }
},
}
</script>

<style>
 
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 200px;
  background-color: bisque;
  /* background-image: url('grade/4/A/1.jpeg'); */
  flex: content;
  overflow: hidden;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 5px;
}
</style>