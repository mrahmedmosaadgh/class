<template>
  <div dir="rtl" class="m-2 p-2  bg-green-200 ">   <!-- loadingw-screen  overflow-auto--><div class="flex top-0 text-center"><div class="m-auto"><p v-show="loading"   class=" fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium     bg-green-100     text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...{{errorsmsg}}</p> </div></div>
<div 

class=" bg-blue-200  animate__animated  animate__animated_hover   animate__flipInX_hover  animate__flipInX"


>
        <!--v-if="vtable" :class="daynn==setdaynum?'bg-blue-600 textshadow2 text-white   border-2 border-blue-700':'bg-gray-300 text-gray-500 hover:bg-blue-400'" -->

<!-- <div
class="bg-red-200"

>
{{$route.params.id}}
{{$route.params.schoolname}}
</div> -->
 

 <!-- ============================================================ -->
 <div class="grid place-items-center " dir="RTL">


<div class="w-full max-w-xs ">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">

     
     
     <!-- =================================================== -->

          <div
v-for="loadmarksschooldata1 in loadmarksschooldata" :key="loadmarksschooldata1.id"

>

<!-- {{loadmarksschooldata1.name}}
{{loadmarksschooldata1.devs}} -->

<!-- <p>{{loadmarksschooldata1.name}}</p> -->
<h2>{{loadmarksschooldata1.name1}}</h2>
<p>{{loadmarksschooldata1.name2}}</p>
<p>
  العام:
  
  {{loadmarksschooldata1.year}}</p>
<!-- <p>{{loadmarksschooldata1.name3}}</p> -->
      <label class="block text-gray-700 text-sm font-bold mb-2 h3" for="username">
     
      
      الصف
       
      :  
       {{devnamevar}} 
      </label>
<div

>
<!-- =================================================================================== -->
<div class="flex justify-center">
  <div class="mb-3 xl:w-112" ><br> 
   <!-- devname:
    {{devnamecomp}} 
    <br> -->
    <!-- index:{{index+1}} -->
    
    <select  dir="ltr"
    @change="loaddivmarks(devvar)"
    v-model="devvar"
    
     
    class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
        <option
        
        
        
        selected value="">اختر مرحلة</option>
        <option
        v-for="(devname,index) in loadmarksschooldata1.devs.split(',')" :key="index"
        
        
        :value="devname+','+(index+1)"> {{devname}} </option>
  
    </select>
  </div>
</div>
<!-- =================================================================================== -->

 

</div>
 


<!-- =================================================== -->

     </div>




<div
v-if="this.devnamevar!=''"
>



    <div 
    
      
    
    class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="text">
        رقم الجلوس
      </label>
      <input
      
       v-model="student_setnum"
      class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="  رقم الجلوس">
      <!-- <p class="text-red-500 text-xs italic">  رقم الجلوس</p> -->
    </div>
    <div class="flex items-center justify-between">
      <button
      @click="loadmarksstudent()"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
  بحث برقم الجلوس      </button>
     
    </div>
</div>
</div>


  </div>
 
</div>

 </div>

  <!-- ============================================================ -->
<!-- grid place-items-center grid grid-cols-2   content-start -->
<div
 v-if="this.loadmarksstudentdata!=''"
class="  w-100"
>
<!-- <div class="bg-green-400    grid place-items-center   w-1/2">


<input type="text"  v-model="student_setnum">
 
<button
@click="loadmarksstudent()"
>
  بحث برقم الجلوس
</button>
</div> -->
<div

class="  w-100"

>
  <!-- {{mark.id}}flex items-center h-screen-->
  <div 
 
  
  class="  w-100 grid place-items-center  ">

 <h2> {{devnamevar}} </h2>
   <table
   class=" w-1/2  " dir="rtl"
   >
    <tr>
      <th>الاسم</th>
      <th>رقم الجلوس</th>
    </tr>
    <tr
    v-for="mark in loadmarksstudentdata" :key="mark.id"
    >
  
<td>{{mark.name}}</td>
<td>{{mark.sitnum}}</td>

 </tr>
 

 
  </table>
<br><br> <br> 
 </div>
  <div class=" grid place-items-center ">
    
    
    
    <table>
    <tr>

<!-- <th>لغة عربية</th>
<th>اللغة الأولى</th>
<th>اللغة الثانية</th>
<th>الرياضيات</th>
<th>تاريخ</th>
<th>جغرافيا</th>
<th>فلسفة</th>
<th>فزياء</th>
<th>كيمياء</th>
<th>أحياء</th>
<th>المجموع الكلى</th> -->

 <th> {{ suball[0]}}</th>
 <th> {{ suball[1]}}</th>
 <th> {{ suball[2]}}</th>
 <th> {{ suball[3]}}</th>
 <th> {{ suball[4]}}</th>
 <th> {{ suball[5]}}</th>
 <th> {{ suball[6]}}</th>
 <th> {{ suball[7]}}</th>
 <th> {{ suball[8]}}</th>
 <th> {{ suball[9]}}</th>
 <th> {{ suball[10]}}</th>
 <th> {{ suball[11]}}</th>
 <th> {{ suball[12]}}</th>
 <th> {{ suball[13]}}</th>
 <th> {{ suball[14]}}</th>
 <th> {{ suball[15]}}</th>
 <th> {{ suball[16]}}</th>
 


    </tr>
    <tr
    v-for="mark in loadmarksstudentdata" :key="mark.id+1111"
    >
  
 
<td>{{mark.result}}</td>
<td>{{mark.classroom}}</td>
<td>{{mark.sub1}}</td>
<td>{{mark.sub2}}</td>
<td>{{mark.sub3}}</td>
<td>{{mark.sub4}}</td>
<td>{{mark.sub5}}</td>
<td>{{mark.sub6}}</td>
<td>{{mark.sub7}}</td>
<td>{{mark.sub8}}</td>
<td>{{mark.sub9}}</td>
<td>{{mark.sub10}}</td>
<td>{{mark.sub11}}</td>
<td>{{mark.sub12}}</td>
<td>{{mark.sub13}}</td>
<td>{{mark.sub14}}</td>
<td>{{mark.sub15}}</td>
 
    </tr>
  </table>
  <!-- {{this.loadmarksstudentdata}} -->
  
  </div>


<br>  <br>   <br>   <br>  
<div class=" grid place-items-center ">
  
  </div>







</div>
</div>




</div>

  

  </div>
</template>

<script>
import axios from "axios";
import 'animate.css';

export default {
  name: 'app',
  created(){
        document.title =  this.$route.params.schoolname +this.devnamevar
    },
  components: {
	// vueRecaptcha
  },
  data() {
	return { 
	active:[false,false,false]	,
		loading:false,
		loadmarksschooldata:'',
    loadmarksdata:'',
    loadmarksstudentdata:'',
		devsstr:'',
		devsarray:'',
		errorsmsg:'',
    school_id:'',  
    devnumvar:0,
    devnamevar:'',
    devvar:'',
    subt1: ['لغة عربية','اللغة الأولى','اللغة الثانية','الرياضيات','تاريخ','جغرافيا','فلسفة','فزياء','كيمياء','أحياء','المجموع الكلى','تربية دينية','تربية وطنية','تربية رياضية','نشاط تربوى','حاسب آلى','تربية مهنية','','','','','',''],
    subt2: ['لغة عربية','اللغة الأولى','اللغة الثانية','الرياضيات','فزياء','كيمياء','أحياء','تطبيقات رياضية','المجموع الكلى','تربية دينية','تربية وطنية','تربية رياضية','نشاط تربوى','حاسب آلى','تربية مهنية','','','','','','','','','',''],
    subt3:['لغة عربية','اللغة الأولى','اللغة الثانية','الرياضيات','تاريخ','علم النفس','جغرافيا','فلسفة','المجموع الكلى','تربية دينية','تربية وطنية','تربية رياضية','نشاط تربوى','حاسب آلى','تربية مهنية','','','','','',''],
    subt4:[],
    suball:[,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,],
//     subjtitlesarray:
//     [
 
//     ['لغة عربية','اللغة الأولى','اللغة الثانية','الرياضيات','تاريخ','جغرافيا','فلسفة','فزياء','كيمياء','أحياء','المجموع الكلى','تربية دينية','تربية وطنية','تربية رياضية','نشاط تربوى','حاسب آلى','تربية مهنية','','','','','',''],
//     ['لغة عربية','اللغة الأولى','اللغة الثانية','الرياضيات','تاريخ','جغرافيا','فلسفة','فزياء','كيمياء','أحياء','المجموع الكلى','تربية دينية','تربية وطنية','تربية رياضية','نشاط تربوى','حاسب آلى','تربية مهنية','','','','','',''],
// ,

//     ['لغة عربية','اللغة الأولى','اللغة الثانية','الرياضيات','فزياء','كيمياء','أحياء','تطبيقات رياضية','المجموع الكلى','تربية دينية','تربية وطنية','تربية رياضية','نشاط تربوى','حاسب آلى','تربية مهنية','','','','','','','','','',''],
// ,

//     ['لغة عربية','اللغة الأولى','اللغة الثانية','الرياضيات','تاريخ','علم النفس','جغرافيا','فلسفة','المجموع الكلى','تربية دينية','تربية وطنية','تربية رياضية','نشاط تربوى','حاسب آلى','تربية مهنية','','','','','',''],
//     ]
//  ,
    student_setnum:'',
    devnumcanchoose: true,
		showRecaptcha: false }
  },
 computed: {
//     devnamecomp: function () {
//     //   return  this.counter += 1 ;
//     if(this.devnamevar==''){
//       return 'اختر مرحلة';
//     }
//  return  this.devnamevar.split(',')[0] ;

//     // this.myString.split(" ")
//     //   // return this.products.filter(product => product.onSale)
// // 	let text = "How are you doing today?";
// // const myArray = text.split(",");
//      } ,

//        devnumcomp: function () {
//     //   return  this.counter += 1 ;
//     if(this.devnumvar==''){
//       return 'اختر مرحلة';
//     }
//  return  this.devnumvar.split(',')[1] ;

//     // this.myString.split(" ")
//     //   // return this.products.filter(product => product.onSale)
// // 	let text = "How are you doing today?";
// // const myArray = text.split(",");
//      } 


     },

mounted() {
  this.loaddata(this.$route.params.id)
  // this.school_idfun()
// mounted:function(){
        // this.method1() //method1 will execute at pageload
          //  this.loaddata(this.school_id)
  }
  ,
  // methods:{
  //       method1:function(){
  //             /* your logic */
  //       }
  //    },

 ready: function() {
            // checkAuth(); // Here
// this.school_idfun()
            //  this.loaddata(this.school_id)
            //  this.loaddata(this.$route.params.id)

        },






  methods: {

      async   loaddivmarks(devvar) {
        // this.devnumcomp
        // this.devnamevar.split(',')[0] ;
this.loadmarksstudentdata=''
 
       this.devnumvar=devvar.split(',')[1]
       console.log( 'this.devnumvar')
       console.log( this.devnumvar)
       console.log( devvar)
       this.devnamevar=devvar.split(',')[0]
       this.devnumcanchoose=false
       return
 this.loading = true;
      try {
        await axios
          .get(
            // "/api/loadmarksschooldata/"+id
'/api/loadmarksdata/'+ this.$route.params.id +'/'+devnum
          )
          .then((res) => {
            this.loadmarksdata = res.data;
            this.loading = false;
          });
      } catch (e) {
console.log(e.response.status);
        console.log('saveparticipations error');
        console.log(e);
        this.errorsmsg = "data error";
        alert("saveparticipations data error");
        alert(e.response.status);
      }
},
      async   loadmarksstudent() {
 this.loading = true;
 if(this.devnumvar==1){
this.suball= this.subt1
 }
  if(this.devnumvar==2){
this.suball= this.subt2
 }

 if(this.devnumvar==3){
this.suball= this.subt3
 }
 if(this.devnumvar==4){
this.suball= this.subt4
 }
      try {
        await axios
          .get(
            // "/api/loadmarksschooldata/"+iddevnumcomp
'/api/loadmarksdatastudent/'+ this.$route.params.id +'/'+this.devnumvar+'/'+this.student_setnum
          )
          .then((res) => {
            this.loadmarksstudentdata = res.data;
              // console.log( this.loadmarksstudentdata);
          
            //  alert('3')
            // console.log= this.loadmarksstudentdata
          });
      } catch (e) {
         alert(e)
// console.log(e.response.status);
//         console.log('saveparticipations error');
//         console.log(e);
//         this.errorsmsg = "data error";
//         alert("saveparticipations data error");
//         alert(e.response.status);
      }

  this.loading = false;

},




    async loaddata(id) {
      // alert('saveparticipations');
      // console.log("this.marks_arrayob");
      // console.log(this.marks_arrayob);
    //   this.history= this.history+'<br/>'+'saveparticipations()';
      // if (this.cansave != true) {
      //   return;
      // }


      //  return;
    //   if (!this.absence_array) {
    //     alert('!this.absence_array');
    //     return;
    //   }
 
      this.loading = true;
      try {

        // this.linkapi =
        //   "/api/saveparticipations/" +
        //   JSON.stringify(this.marks_arrayob) +
        //   "/" +
        //   JSON.stringify(this.absence_array);
        // console.log("/api/saveparticipations/" +
        //       JSON.stringify(this.marks_arrayob) +
        //       "/" +
        //       JSON.stringify(this.absence_array));

        await axios
          .get(
            "/api/loadmarksschooldata/"+id
			//  +
            //   JSON.stringify(this.marks_arrayob) +
            //   "/" +
            //   JSON.stringify(this.absence_array)
          )
          .then((res) => {

            this.loadmarksschooldata = res.data;
            this.loading = false;
        
			// for (const key in this.loadmarksschooldata) {
			// 	if (Object.hasOwnProperty.call(object, key)) {
			// 		// const element = object[key];
			// 		this.devsstr = object[key];
			// 	}
			// }

 

//  this.devsstr = this.loadmarksschooldata;
          });
      } catch (e) {
console.log(e.response.status);

        console.log('saveparticipations error');
        console.log(e);
        this.errorsmsg = "data error";
        alert("saveparticipations data error");
        alert(e.response.status);
      }


//    alert('ok') 
// let ttt='';
// for (const  ddd in this.loadmarksschooldata) {
// // for (const key in this.loadmarksschooldata) {
// ttt=ddd.notes3
//  alert(ddd) 
// }
  


    },
	// recaptchaVerified(response) {
	// },
	// recaptchaExpired() {
	//   this.$refs.vueRecaptcha.reset();
	// },
	// recaptchaFailed() {
	// }



  }
};
</script>