<template>
  <div>


 

<h1 class="animate__animated animate__bounce">An animated element</h1>
  <button 
  type="button" 
  class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" 
   @click="showmyModal=!showmyModal;myanimate='animate__flipInX'" 
  >
  Small modal
  </button>
<button id="myBtn" @click="showmyModal=!showmyModal;myanimate='animate__flipInX'">Open Modal</button>

<!-- The Modal -->
<div  v-if="showmyModal" class="modal"

 @click.self="delayclose()"
>

  <!-- Modal content animate__animated animate__rubberBand -->
  <div :class="'modal-content animate__animated  '+ myanimate ">
    <div 
   class="   animate__animated     animate__jello "
    > 
    <!-- class=" animate__animated animate__jello" -->
         <!-- <span class="close"  @click="showmyModal=!showmyModal">&times;</span> -->
         <span class="close"  @click="delayclose()">&times;</span>
    <p>Some text in the Modal..</p> 
    <input type="text">
    </div>

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
.modal {
  /* display: none;  */
  /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */


}

/* Modal Content */
.modal-content {
    position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  /* -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s */

}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0.4} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0.4}
  to {top:0; opacity:1}
}

/* @keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
} */



/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>