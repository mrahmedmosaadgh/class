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

















<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
<div class="flex justify-end px-4 pt-4">
<button id="dropdownButton" data-dropdown-toggle="dropdown" class="hidden sm:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
</button>

<div id="dropdown" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(614.286px, 3485.71px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
<ul class="py-1" aria-labelledby="dropdownButton">
<li>
<a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
</li>
<li>
<a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
</li>
<li>
<a href="#" class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
</li>
</ul>
</div>
</div>
<div class="flex flex-col items-center pb-10">
<img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
<h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
<span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
<div class="flex mt-4 space-x-3 lg:mt-6">
<a href="#" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
<a href="#" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
</div>
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

.button {
    display: block;
    margin: 0 auto;
    width: 275px;
    height: 76px;
    border: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background-color: #ffc000;
    background-image: -webkit-gradient(linear, left bottom, left top, from(#ffc000), to(#fddc40));
    background-image: -webkit-linear-gradient(bottom, #ffc000 0%, #fddc40 100%);
    background-image: -moz-linear-gradient(bottom, #ffc000 0%, #fddc40 100%);
    background-image: -o-linear-gradient(bottom, #ffc000 0%, #fddc40 100%);
    background-image: linear-gradient(to top, #ffc000 0%, #fddc40 100%);
    -webkit-box-shadow: 0 2px 0 #d7a200;
    -moz-box-shadow: 0 2px 0 #d7a200;
    box-shadow: 0 2px 0 #d7a200;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 20px;
    line-height: 76px;
    color: #222;
    text-shadow: 0 1px 0 rgb(255 255 255 / 50%);
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    position: relative;
}
</style>