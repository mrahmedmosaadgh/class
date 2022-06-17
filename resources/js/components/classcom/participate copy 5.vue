<template>
  <div class="  h-auto">
      <!-- loading -->
      <div class="flex top-0  text-center "><div class="m-auto"><p v-show="loading"   class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium          text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...</p> </div></div>
  <!-- <loading2 ref="loading" /> -->
 <!-- <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div> -->
<p><input type="text" v-model="textapi"></p>
<p>checkedNames{{checkedNames}}</p>
<p>students_id_array{{students_id_array}}</p>
<p>absent_arry_com{{absent_arry_com}}</p>
<p>this.saveabsence();<button @click="saveabsence">this.saveabsence();</button></p>
========================
<p>marks_arrayob{{marks_arrayob}}</p>
 <svg class="animate-bounce w-6 h-6 ...">
  <!-- ... -->
</svg>
<!-- <p>hijridate: {{hijridate}}</p> -->
<button class="button-33" @click="alert">alert </button>
<p v-show="cansave">
<button class="button-33" @click="saveparticipations">saveparticipations </button>
</p>
 
<button class="buttonred-33" @click="loadparticipations">loadparticipations </button>
 <button class="buttonred-33" @click="Newparticipations">Newparticipations </button>
 <button :class="btn1" @click="canregattend=!canregattend">canregattend</button><br>
<p class="p-2 flex flex-row"> 
 <button class="button-33 p-6 m-4" @click="plus_fun_all()">All +</button>
 <button class="buttonred-33 p-6 m-4" @click="reset_fun_all()">All reset</button>
 <button class="buttonred-33 p-6 m-4" @click="minus_fun_all()">All -</button>
</p>


<!-- ================================================================= -->
                <svg class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
<!-- ================= -->
<section class="content ">
  <div class="cards p-3 m-3">
    <div class="card "  v-for="(student,index) in marks_arrayob" :key="index" >
      <div class="card__side card__side--front card__side--front-1">
        <div class="card__description "
        :class="(checkedNames.includes(student.student_id))?'bg-blue-900':'bg-gray-500'"
        > 

<div class="relative inline-block">
  <!-- <img
   
   class="inline-block object-cover w-24 h-24 rounded-full" 
  :src="'/grade/4/A/1.svg'" alt="Profile image"/> v-show="aa % 2 == 0" bg-gray-500  bg-blue-900  v-show="aa % 2 != 0"-->
  
    <span  class="bga2 absolute bottom-0 center inline-block w-10 h-8 border-2 border-white text-bold text-white  rounded-full"
    :class="(checkedNames.includes(student.student_id))?'bg-blue-900':'bg-gray-500'"
     >{{index+1}}</span>
  <!-- <span class="     absolute bottom-0 center inline-block w-10 h-8border-2 border-white text-bold text-white rounded-full">{{index+1}}</span> -->

 
 <!-- <span  class="    absolute bottom-0 left-0 inline-block w-8 h-8 bg-green-500 border-2 border-white rounded-full">{{aa}}


  </span>
  <span   class="    absolute bottom-0 right-auto inline-block w-8 h-8 bg-red-500 border-2 border-white rounded-full">{{aa}}</span> -->
 <!-- <div class="bg-yellow">
  </div> -->
 <!-- 
 -->
</div><div class="bga2 w-full text-white font-bold text-lg capitalize truncate px-1"
:class="(checkedNames.includes(student.student_id))?'bg-blue-900':'bg-gray-500'"
>
<!-- ({{student.id}}): -->
<!-- {{student.name.split(' ')[0]}} {{student.name.split(' ')[1]}} -->

         <span class="text-3xl">{{student.name.split(' ')[0]}}</span>   
      <span>        {{student.name.split(' ')[1]}}  </span>
      <p    class="text-3xs"> {{student.name.split(' ').slice(-1).join(' ')}}</p>
           


</div> 
<span v-show="!checkedNames.includes(student.student_id)">Absent</span>
 <div 
 v-show="checkedNames.includes(student.student_id)"
 class="flex flex-row flex-wrap " 
 
 :class="(checkedNames.includes(student.student_id))?'bg-blue-600':'bg-gray-500'">
   {{student.score}}<div  v-for="ee in student.score " :key="ee"> <img  
                src="star.gif"
                  style="width:33px"
                  alt=""
             
                  ></div>
       

 </div>
   <!-- <div class="flex flex-row flex-wrap">class="rounded-full bg-yellow-500 p-1"
       <img  
                src="star.gif"
                  style="width:34px"
                  alt=""
               v-for="ee in 5 " :key="ee"
                  >
                  
 </div> -->
 

        </div>
      </div>
      <div class="card__side card__side--back card__side--back-1"
        :class="(checkedNames.includes(student.student_id))?'bg-blue-600':'bg-gray-500'"
      
      >
        <div class="dropdown"
        
        >
        <div class="card__description capitalize dropbtn bga2"
         :class="(checkedNames.includes(student.student_id))?'bg-blue-600':'bg-gray-500'"
        >

          <span class=" capitalize ">
         <span class="text-3xl">{{student.name.split(' ')[0]}}</span>   
      <span>        {{student.name.split(' ')[1]}}  </span>
      <p    class="text-3xs"> {{student.name.split(' ').slice(-1).join(' ')}}</p>
            
            
             <!-- {{student.name}}
<p>namef   {{student.namef   }}</p>          
<p>namesec {{student.namesec }}</p>
<p>namel   {{student.namel   }}</p>  -->

</span>
       <label class="w-full h-full   text-center cursor-pointer">
    <p class="text-black cursor-pointer hover:bg-green-400"    >
                <input type="checkbox" v-if="canregattend"
                    class="w-6 h-6    cursor-pointer" :value="student.student_id"
                    v-model="checkedNames" />
                
    </p>
            </label>

         
          <!-- <svg width="24" height="24" viewBox="0 0 24 24"> truncate px-1
            <path d="M10.5,18A0.5,0.5 0 0,1 11,18.5A0.5,0.5 0 0,1 10.5,19A0.5,0.5 0 0,1 10,18.5A0.5,0.5 0 0,1 10.5,18M13.5,18A0.5,0.5 0 0,1 14,18.5A0.5,0.5 0 0,1 13.5,19A0.5,0.5 0 0,1 13,18.5A0.5,0.5 0 0,1 13.5,18M10,11A1,1 0 0,1 11,12A1,1 0 0,1 10,13A1,1 0 0,1 9,12A1,1 0 0,1 10,11M14,11A1,1 0 0,1 15,12A1,1 0 0,1 14,13A1,1 0 0,1 13,12A1,1 0 0,1 14,11M18,18C18,20.21 15.31,22 12,22C8.69,22 6,20.21 6,18C6,17.1 6.45,16.27 7.2,15.6C6.45,14.6 6,13.35 6,12L6.12,10.78C5.58,10.93 4.93,10.93 4.4,10.78C3.38,10.5 1.84,9.35 2.07,8.55C2.3,7.75 4.21,7.6 5.23,7.9C5.82,8.07 6.45,8.5 6.82,8.96L7.39,8.15C6.79,7.05 7,4 10,3L9.91,3.14V3.14C9.63,3.58 8.91,4.97 9.67,6.47C10.39,6.17 11.17,6 12,6C12.83,6 13.61,6.17 14.33,6.47C15.09,4.97 14.37,3.58 14.09,3.14L14,3C17,4 17.21,7.05 16.61,8.15L17.18,8.96C17.55,8.5 18.18,8.07 18.77,7.9C19.79,7.6 21.7,7.75 21.93,8.55C22.16,9.35 20.62,10.5 19.6,10.78C19.07,10.93 18.42,10.93 17.88,10.78L18,12C18,13.35 17.55,14.6 16.8,15.6C17.55,16.27 18,17.1 18,18M12,16C9.79,16 8,16.9 8,18C8,19.1 9.79,20 12,20C14.21,20 16,19.1 16,18C16,16.9 14.21,16 12,16M12,14C13.12,14 14.17,14.21 15.07,14.56C15.65,13.87 16,13 16,12A4,4 0 0,0 12,8A4,4 0 0,0 8,12C8,13 8.35,13.87 8.93,14.56C9.83,14.21 10.88,14 12,14M14.09,3.14V3.14Z"></path>
          </svg> -->
            <div >

           
  <!-- <button class="dropbtn">Dropdown</button> -->
  <div class="dropdown-content">
    <p class="text-black cursor-pointer hover:bg-green-400" @click="plus_fun(index)"     v-show="checkedNames.includes(student.student_id)">+          </p>
    <p class="text-black cursor-pointer hover:bg-green-400" @click="minus_fun(index)"    v-show="checkedNames.includes(student.student_id)">-         </p>
    <p class="text-black cursor-pointer hover:bg-green-400"  @click="reset_fun(index)"   v-show="checkedNames.includes(student.student_id)">reset    </p>
  
        <!-- <label class="w-full h-full   text-center cursor-pointer">
    <p class="text-black cursor-pointer hover:bg-green-400"    >
                <input type="checkbox" v-if="canregattend"
                    class="w-6 h-6    cursor-pointer" :value="student.student_id"
                    v-model="checkedNames" />
                
    </p>
            </label> -->

  </div>
</div>





            <!-- <p><button class="buttonred-33 "   @click="reset_fun(index)"> reset</button>
   <button class="buttonred-33 " @click="minus_fun(index)">-{{starsnum }}</button>
   <button class=" button-33" @click="plus_fun(index)">+{{starsnum}}</button></p> -->
        <p> {{student.plus}}-{{student.minus }}-{{student.score }}</p>
<!-- <p>{{student.participatedetails}}</p> -->
           </div>
  <!-- <label class="w-full h-full   text-center cursor-pointer">
                <input type="checkbox" v-if="canregattend"
                    class="w-12 h-12    cursor-pointer" :value="student.student_id"
                    v-model="checkedNames" />
                
            </label> -->


          </div>
      </div>
    </div>
 
  
  </div>
</section>
 <!-- =============================================== -->
 
<!-- ================================================================= -->


<!-- absence_array:{{absence_array}}
students_array:{{students_array}} -->
<!-- <input type="text" v-model="linkapi"> -->
  <!-- students_array:{{students_array}} <br> -->
 <!-- marks_arrayob:{{marks_arrayob}}  -->
      <button :class="btn1" @click="saveabsence">saveabsence</button><br>
            <button :class="btn1" @click="canregattend=!canregattend">canregattend</button><br>
<button :class="btn1" @click="attendall">attendall</button><br>
 
<!-- ============================================================= -->
              stars num:    <select  v-model.number="starsnum">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                  </select> {{starsnum}}:{{counter}}:{{countercom}}
 <!-- ============================================================= -->
 <div>

<!-- <p
 :class="tr" v-for="(student,index) in marks_arrayob" :key="index">
 
{{student.name}}
</p> -->
 </div>
<p class="p-2 flex flex-row"> 
 <button class="button-33 p-6 m-4" @click="plus_fun_all()">All +</button>
 <button class="buttonred-33 p-6 m-4" @click="reset_fun_all()">All reset</button>
 <button class="buttonred-33 p-6 m-4" @click="minus_fun_all()">All -</button>
</p>

<!-- ============================================================= -->
<!-- test_array:{{test_array}} -->
<!-- ============================================================= -->
  
<!-- <p>test_array{{test_array}}</p>
<p>test_array2{{test_array2}}</p>
 
   <p v-for="test in test_array2" :key="test">
{{test}}
   </p>
   <button @click="test">test</button> -->
<!-- ============================================================= -->
 
<!-- <p>test:{{test}}</p> -->
  </div>
</template>

<script>
import axios from "axios";
// import Button from '../Button.vue';
// import Loading2 from '../Loading.vue'
   
export default {
  // components: { Button },
//       components: {
//     Loading2
//   },
 
 props: ['absence_array','period'],
   data() {
    return {
      loadparticipationsdata:'',
      badgegreen:'ani1 anitxt1 inline-flex items-center justify-center px-4 py-2 mr-2   font-bold leading-none text-green-100 bg-green-300 rounded-full',
          btn1:"text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800",
          tr:"scal-2 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",
// tr:"dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",

td:"p-3 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",
trh:"dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",
th:"dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",
          
          class_name:'',
         students_data:'',
         linkapi:'',
          // hijri  :'',
         students_array:[],
          marks_arrayob:[],

        //  plus_array:[],
        //  minus_array:[],
        //  total_array:[],
          
        //  abs_db_array:[],
        //  test_array:[1,2,3,4],
        //  test_array2:[1,2,3,4],
        //  test:'',
        //  students_id_array:[],
         cansave:false,
          // checkedNames     : [],
          saveparticipations_returneddata:[],
          //  errorsmsg:'',
           absence_db:'',
          //  abs_db:'',
         loading:false,
    cant1:false,
    cant2:false,
    cant3:false,
    canregattend:true,
     starsnum:1,
      counter:0,
      // buttonisactive:[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
     buttonisactive:[ 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ],
          
         students_data:'',
         students_array:[],
         abs_db_array:[],
         students_id_array:[],
          checkedNames     : [],
           errorsmsg:'',
           absence_db:'',
           abs_db:'',
           textapi:'',
         }
  },
    watch: {
    absence_array: function () {

      this.loadstudents();
       this.loadparticipations();
       this.cansave=true;
    },

    counter: function () {

     
this.saveparticipations();
    },
    checkedNames: function () {

     
this.saveabsence();
    },
    
  //    absence_array: function () {

  //    this.students_array=this.students_array;
       
 },    
       
       
    
  // },
      computed: {
      countercom: function () {
        return this.counter+=1;
        // return this.products.filter(product => product.onSale)
} ,
 absent_arry_com: function () {
  // let arr1=[1,2,3,4,5];
  // let arr2=[1,2];
  let arr1=this.students_id_array;
  let arr2=this.checkedNames;
let difference = arr1.filter(x => !arr2.includes(x));
return difference;

},



//        computed: {
//       CharCodedcom: function () {
//         return this.CharCoded;
//         // return this.products.filter(product => product.onSale)
// } ,

      // addv: function (index) {
      //   console.log(this.markscom[index])
        // return this.markscom[index].plus +=1
        // return this.products.filter(product => product.onSale)



},
 mounted()  {
        // this.loadallfirst  ();
        // this.playSound('p.ogg');
        // this.loadteacher   ();
        //  setInterval(this.getNow, 1000);
        // setInterval(this.saveparticipations, 15000);
            },
// mounted() {
//     // window.addEventListener("keypress", function(e) {
//     //   this.CharCoded=String.fromCharCode(e.key);
//     //   console.log(String.fromCharCode(e.keyCode));
//     // });
//     this.loadparticipations();
//   },
  //    created() {
  //   window.addEventListener('keydown', (e) => {
  //     // this.CharCoded=String.fromCharCode(e.key);
  //      console.log(String.fromCharCode(e.key));
  //     if (e.key == 'Escape') {
  //       this.showModal = !this.showModal;
  //        console.log(String.fromCharCode(e.key));
  //     }
  //   });
  // }, 


    // },
  //  watch: {
 
  //   //   students_array : function () {
  //   //     this.students_array;
  //   // },    
  //     test_array : function () {
  //       this.test_array;
  //   },  
       
       
    
  // },
//   computed:{
// test_array: function () {
// this.test_array2=this.test_array;
// // this.loadst(this.period,this.class_name_value);
// }

  // },
// methods========================================================================================================
 
//        computed: {



       
//  absent_arry_com: function () {
//   // let arr1=[1,2,3,4,5];
//   // let arr2=[1,2];
//   let arr1=this.students_id_array;
//   let arr2=this.checkedNames;
// let difference = arr1.filter(x => !arr2.includes(x));
// return difference;
// },
//   },
methods:{
beactive(index)  {
this.buttonisactive=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
this.buttonisactive[index]=1
},
attendall() {
this.checkedNames =this.students_id_array;
},

  
  async getbsence() {
                    this.errorsmsg = "loadstudents";
     this.loading = true;
      try {
          //  console.log("/api/getbsence/"+JSON.stringify(this.absence_array));
        await axios.get("/api/getbsence/"+JSON.stringify(this.absence_array)  ).then((res) => {
          console.log('getbsence3');
         this.abs_db = res.data;
          this.loading = false;
          // console.log("/api/getbsence/"+JSON.stringify(this.absence_array)  );
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };
      if (this.abs_db.absent) {
this.abs_db_array=this.abs_db.absent.split`,`.map(x=>+x)
  let arr1=this.students_id_array;
  // let arr2=this.checkedNames;
  let arr2=this.abs_db_array;
this.checkedNames = arr1.filter(x => !arr2.includes(x));
 }
// =======================================================================
},
async saveabsence() {

                    this.errorsmsg = "saveabsence";
     this.loading = true;
               this.absence_array.absent= this.absent_arry_com.toString();
            let absent= this.absent_arry_com.toString();          
              //  alert(absent);
               if (absent=='') {
                  // alert('empty');
                  absent="-";
               }
// console.log("this.absence_array.absent:"+ this.absence_array.absent);
// console.log("this.absence_array:"+ this.absence_array);
      try {
          //  console.log('saveabsence2');
this.textapi = "/api/saveabsence/"+  JSON.stringify(this.absence_array)+'/'+absent
        await axios.get("/api/saveabsence/"+  JSON.stringify(this.absence_array)+'/'+absent).then((response) => {
        // await axios.get("/api/saveabsence/"+ this.absence_array).then((response) => {
          // console.log('saveabsence3');
         this.absence_db = response.data;
          this.loading = false;
          // console.log(absent);
          // console.log(this.absence_db);
          // console.log("/api/saveabsence/"+ this.absence_array[0].class_name);
          // console.log(response.data);
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };
// =======================================================================
 this.errorsmsg = "";
// =======================================================================

 },


    alert: function(){

 this.$iosAlert('alert').then(function(){
        console.log('alert');
      });
      this.$iosConfirm('confirm?').then(function(){
        alert('ok');
        // iosAlertView.confirm .$iosConfirm('confirm?');
        console.log('alert');
      });
// this.$iosAlertView({
//       title: 'insl',
//       text: 'text',
//       buttons: [
//         {
//           text: 'label1',
//           onClick: function(){
//             console.log('alert');
//  this.$iosAlert('alert').then(function(){
//         console.log('alert');
//       });
 

//             // this.$iosAlert('label1');
//           }
//         },
//         {
//           text: 'label2',
//           onClick: function(){
//             this.$iosConfirm('label2');
//           }
//         },
//         {
//           text: 'label3',
//           onClick: function(){
//             this.$iosRemind({
//               text: 'label3',
//               remindDuration: 1000
//             });
//           }
//         }
//       ]
//     });
       



    },
async saveparticipations() {
  if (this.cansave!=true) {
    return;
  }
   console.log('this.absence_array');
      console.log(this.absence_array);

  //  return;
  if ( !this.absence_array) {
    return
  }
          console.log('saveparticipations');
     this.loading = true;
      try {
           console.log('saveparticipations2');
           //JSON.stringify(this.students_array)
           this.linkapi="/api/saveparticipations/"+ JSON.stringify(this.marks_arrayob)+"/"+ JSON.stringify(this.absence_array)
        await axios.get("/api/saveparticipations/"+ JSON.stringify(this.marks_arrayob)+"/"+ JSON.stringify(this.absence_array)).then((res) => {
         
         console.log('saveparticipations3');
         this.saveparticipations_returneddata = res.data;
          this.loading = false;
          // console.log("/api/loadstudents/"+ this.absence_array[0].class_name);
          console.log(res.data);
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };



},

async Newparticipations() {
if(!confirm("Are you sure! Add"+ this.starsnum +" stars")){return} ;
          console.log('loadparticipations');
     this.loading = true;
      try {
           console.log('Newparticipations');
           //JSON.stringify(this.students_array)
          //  this.linkapi="/api/loadparticipations/"+ JSON.stringify(this.marks_arrayob)+"/"+ JSON.stringify(this.absence_array)
           this.linkapi="/api/Newparticipations/"+   JSON.stringify(this.absence_array)
        await axios.get("/api/Newparticipations/"+  JSON.stringify(this.absence_array)).then((res) => {
         
 
        //  this.loadparticipationsdata = res.data;
          this.loading = false;
          // if(this.loadparticipationsdata.length>1){

          //   this.marks_arrayob = this.loadparticipationsdata; 
          // }
          // console.log("/api/loadstudents/"+ this.absence_array[0].class_name);
          // console.log(res.data);
          this.loadparticipations()
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };



},


async loadparticipations() {
          console.log('loadparticipations');
     this.loading = true;
      try {
           console.log('loadparticipations');
           //JSON.stringify(this.students_array)
          //  this.linkapi="/api/loadparticipations/"+ JSON.stringify(this.marks_arrayob)+"/"+ JSON.stringify(this.absence_array)
           this.linkapi="/api/loadparticipations/"+   JSON.stringify(this.absence_array)
        await axios.get("/api/loadparticipations/"+  JSON.stringify(this.absence_array)).then((res) => {
         
         console.log('loadparticipations');
         console.log(this.loadparticipationsdata);
         this.loadparticipationsdata = res.data;
          this.loading = false;
          if(this.loadparticipationsdata.length>1){

            // this.marks_arrayob = this.loadparticipationsdata;
             this.marks_arrayob = this.loadparticipationsdata.sort((a, b) => (a.plus < b.plus) ? 1 : -1);

//              this.marks_arrayob.sort(function (x, y) {
//     return x.total - y.total;

// });
            // this.marks_arrayob = this.loadparticipationsdata.sort(); 
            // objs.sortBy('name');
          }
          // console.log("/api/loadstudents/"+ this.absence_array[0].class_name);
          // console.log(res.data);
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };



},



    
async loadstudents() {

          console.log('loadstudents1');
     
 
    // // alert('class_name'+class_name);
    // -----------getPeriodtime------------------------------------------------------------
                    this.errorsmsg = "loadstudents";
    //  this.myclass_name=this.students_array.class_name;
     this.loading = true;
              //  console.log("/api/loadstudents/"+ this.absence_array[0].class_name);
// students_array pppppppppppppppppp JSON.stringify(this.absence_array)
      try {
           console.log('loadstudents2');
        await axios.get("/api/students/"+ this.absence_array[0].class_name).then((res) => {
          console.log('loadstudents3');
         this.students_data = res.data;
          this.loading = false;
          // console.log("/api/loadstudents/"+ this.absence_array[0].class_name);
          // console.log(res4.data);
          this.errorsmsg = "";
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };
// =======================================================================
 
//  this.errorsmsg = "mydata_array";
// =======================================================================

// =======================================================================
         this.students_array=[];
         this.students_array2=[];
         this.students_id_array=[];
                  this.marks_arrayob=[];

for (let index = 0; index < this.students_data.length; index++) {
  let fnamarray=this.students_data[index].name.split(' ');

let namef   = fnamarray[0];
let namesec = fnamarray[1];
let namel   = fnamarray.slice(-1).join(' ');
  console.log(namef);
  console.log(namesec);
  console.log(namel);
  console.log(namef,namesec,namel);
// namef=this.students_data[index].name.split(' ').slice(0, -1).join(' ');
// namesec=this.students_data[index].name.split(' ').slice(0, -1).join(' ');
// namel=this.students_data[index].name.split(' ').slice(-1).join(' ');

this.students_id_array.push( this.students_data[index].id);
//     this.students_array.push([
//     this.students_data[index].id,
//     this.students_data[index].namecut,
//     this.students_data[index].name,
 
//     this.students_data[index].notes,
//     false,0,0,0
//   ]);
 
  
//    this.marks_arrayob.push( 
//     {

//   "school_id"         : this.students_data[index].school_id         ,
//   "participate_id"    : ''                                        ,
//   "student_id"        : this.students_data[index].id              ,
//   "present"           : true                                      ,
//   "name"              : this.students_data[index].name            ,
//   'namef'             : namef                                     ,
//   'namesec'           : namesec                                   ,
//   'namel'             : namel                                     ,
//   "class_name"        : this.students_data[index].class_name      ,
//   "subject"           : this.students_data[index].subject         ,
//   "period"            : this.absence_array[0].period              ,
//   "day"               : this.absence_array[0].day                 ,
//   "week"              : this.absence_array[0].week                ,
//   "date"              : this.absence_array[0].date                ,
//   "participate"       : 0                                         ,
//   "plus"              : 0                                         ,
//   "minus"             : 0                                         ,
//   "score"             : 0                                         ,
//   "total"             : 0                                         ,
//   "participatedetails": ''                                        ,
//   "notes"             : ''                                        ,
//  }); 

}

this.getbsence();
// =======================================================================

 },


 // getbsence=======================================================================

async getbsence() {
                    this.errorsmsg = "loadstudents";
     this.loading = true;
      try {
        // alert(JSON.stringify(this.absence_array));
          //  console.log("/api/getbsence/"+JSON.stringify(this.absence_array));
        await axios.get("/api/getbsence/"+JSON.stringify(this.absence_array)  ).then((res) => {
          console.log('getbsence3');
         this.abs_db = res.data;
          this.loading = false;
          // console.log("/api/getbsence/"+JSON.stringify(this.absence_array)  );
           
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };
      if (this.abs_db.absent) {
        
     
this.abs_db_array=this.abs_db.absent.split`,`.map(x=>+x)
  let arr1=this.students_id_array;
  // let arr2=this.checkedNames;
  let arr2=this.abs_db_array;

this.checkedNames = arr1.filter(x => !arr2.includes(x));
 }
// =======================================================================

},

async getparticipate() {
                    this.errorsmsg = "getpartic";
     this.loading = true;
    //  let data=[



    //  ],

      try {
        // alert(JSON.stringify(this.absence_array));
          //  console.log("/api/getbsence/"+JSON.stringify(this.absence_array));
        await axios.get("/api/getparticipate/"+JSON.stringify(this.absence_array)+"/"+JSON.stringify(this.students_array)  ).then((res) => {
          console.log('getbsence3');
         this.abs_db = res.data;
          this.loading = false;
          // console.log("/api/getbsence/"+JSON.stringify(this.absence_array)  );
           
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };
      if (this.abs_db.absent) {
        
     
this.abs_db_array=this.abs_db.absent.split`,`.map(x=>+x)
  let arr1=this.students_id_array;
  // let arr2=this.checkedNames;
  let arr2=this.abs_db_array;

this.checkedNames = arr1.filter(x => !arr2.includes(x));
 }
// =======================================================================

},



 

       playSound (sound) {
      if(sound) {
        var audio = new Audio(sound);
        audio.play();
      }
       },
  plus_fun(index){
          // this.$iosConfirm( "Are you sure! Add"+ this.starsnum +" stars");
          
      //     .then(function(){
      //   alert('ok');
      //   // iosAlertView.confirm .$iosConfirm('confirm?');
      //   console.log('alert');
      // });
        if(!confirm("Are you sure! Add"+ this.starsnum +" stars")){return} ;
        this.marks_arrayob[index].plus += this.starsnum;
        this.marks_arrayob[index].score        =this.marks_arrayob[index].plus - this.marks_arrayob[index].minus;
        this.playSound('p.ogg');
        this.counter+=1;
      this.marks_arrayob[index].participatedetails =this.marks_arrayob[index].participatedetails+'||+'+this.starsnum;

                },
//          minus_fun(index){
//         if(!confirm("Are you sure! Minus"+ this.starsnum +" stars")){return} ;
//         this.marks_arrayob[index].minus += this.starsnum;
//         this.marks_arrayob[index].score        =this.marks_arrayob[index].plus-this.marks_arrayob[index].minus;
//         this.playSound('m.ogg');
//         this.counter+=1;
// // let total=this.students_array[index][5]-this.students_array[index][6] m.ogg
// // if ( total>0) {
// //                this.students_array[index][6] += this.starsnum;
// //             this.students_array[index][7]         =this.students_array[index][5]-this.students_array[index][6];
// // }
// this.marks_arrayob[index].participatedetails=this.marks_arrayob[index].participatedetails+'||+'+this.starsnum;
//      this.$iosAlert('Excellent you have more stars');
     
//     //  .then(function(){
         
//     //   });
    
//     }, 

  plus_fun_all(){
        if(!confirm("Are you sure! Add"+ this.starsnum +" stars foe All the class")){return} ;
        for (let index = 0; index < this.marks_arrayob.length; index++) {
          // const element = array[index];
          if (this.checkedNames.includes(this.marks_arrayob[index].student_id)) {
        this.marks_arrayob[index].plus += this.starsnum;
        this.marks_arrayob[index].score        =this.marks_arrayob[index].plus - this.marks_arrayob[index].minus;
          this.marks_arrayob[index].participatedetails =this.marks_arrayob[index].participatedetails+'||+'+this.starsnum;
         }
          };
        

        this.playSound('p.ogg');
        this.counter+=1;
                },

         minus_fun(index){
        if(!confirm("Are you sure! Minus"+ this.starsnum +" stars")){return} ;
        this.marks_arrayob[index].minus += this.starsnum;
        this.marks_arrayob[index].score        =this.marks_arrayob[index].plus-this.marks_arrayob[index].minus;
        this.playSound('m.ogg');
        this.counter+=1;
// let total=this.students_array[index][5]-this.students_array[index][6] 
// if ( total>0) {
//                this.students_array[index][6] += this.starsnum;
//             this.students_array[index][7]         =this.students_array[index][5]-this.students_array[index][6];
// }
this.marks_arrayob[index].participatedetails=this.marks_arrayob[index].participatedetails+'||-'+this.starsnum;
         this.$iosAlert('sorry you have less stars');
    
    }, 
  minus_fun_all(){
        if(!confirm("Are you sure! minus"+ this.starsnum +" stars foe All the class")){return} ;
        for (let index = 0; index < this.marks_arrayob.length; index++) {
          // const element = array[index];
          if (this.checkedNames.includes(this.marks_arrayob[index].student_id)) {
        this.marks_arrayob[index].minus += this.starsnum;
        this.marks_arrayob[index].score        =this.marks_arrayob[index].plus - this.marks_arrayob[index].minus;
          this.marks_arrayob[index].participatedetails =this.marks_arrayob[index].participatedetails+'||-'+this.starsnum;
        }
        };
        

        this.playSound('m.ogg');
        this.counter+=1;
                },
  




      reset_fun(index){
           this.counter+=1;
                 if(!confirm("Are you sure! reset")){return} ;
                  this.marks_arrayob[index].score= 0;  
                  this.marks_arrayob[index].plus= 0;
                  this.marks_arrayob[index].minus = 0;
                  this.marks_arrayob[index].participatedetails ='';
this.playSound('m.ogg');

      },
      
      reset_fun_all(){
           this.counter+=1;
                //  if(!confirm("Are you sure! reset")){return} ;

                         if(!confirm("Are you sure! reset"+ this.starsnum +" stars foe All the class")){return} ;
        for (let index = 0; index < this.marks_arrayob.length; index++) {
          // const element = array[index];
if (this.checkedNames.includes(this.marks_arrayob[index].student_id)) {
                    this.marks_arrayob[index].score= 0;  
                  this.marks_arrayob[index].plus= 0;
                  this.marks_arrayob[index].minus = 0;
                  this.marks_arrayob[index].participatedetails ='';
}

          
        };

this.playSound('m.ogg');

      }

 }
}
</script>

<style>

</style>