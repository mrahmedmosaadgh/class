<template>
  <div class="m-2 p-2  bg-green-200 ">   <!-- loadingw-screen  overflow-auto--><div class="flex top-0 text-center"><div class="m-auto"><p v-show="loading"   class=" fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium     bg-green-100     text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...{{errorsmsg}}</p> </div></div>
<div 

class=" bg-blue-200  animate__animated  animate__animated_hover   animate__flipInX_hover  animate__flipInX"


>
        <!--v-if="vtable" :class="daynn==setdaynum?'bg-blue-600 textshadow2 text-white   border-2 border-blue-700':'bg-gray-300 text-gray-500 hover:bg-blue-400'" -->

<div
class="bg-red-200"

>
{{$route.params.id}}
{{$route.params.schoolname}}
</div>


<div
v-for="loadmarksschooldata1 in loadmarksschooldata" :key="loadmarksschooldata1.id"

>
{{loadmarksschooldata1.name}}
{{loadmarksschooldata1.devs}}

 <div
v-if="devnumcanchoose==false"
>
<button
@click="devnumcanchoose=!devnumcanchoose"

>اختر مرحلة</button>

</div>
devnumcanchoose:{{devnumcanchoose}}
<p>
devnamevar:{{devnamevar}}
</p>
<div v-if="devnumcanchoose==true"
>
<!--  -->



<div

v-for="(devname,index) in loadmarksschooldata1.devs.split(',')" :key="index"
>

 

<!-- <button 
@click="loaddivmarks($route.params.id,index+1)"

class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
<span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
<span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
<svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
</span>
<span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
<svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
</span>
<span class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">
  	{{index+1}} :{{devname}}

</span>
</button> -->
 
<button
@click="loaddivmarks(index+1,devname)"

:disabled='active[index]'
class="rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border-purple-600 active:shadow-none shadow-lg  border-purple-700 text-white   w-80"

:class="active[index]==false ? 'bg-gradient-to-tr from-purple-600 to-purple-500':''"
>


<span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
<span class="relative">
  
 {{devname}} 

</span>
</button>



</div>
</div>
</div>

 
  

<div
class="bg-green-400"
>
<input type="text"  v-model="student_setnum">
{{student_setnum}}
<button
@click="loadmarksstudent()"
>
  aaaaaaaaaaa
</button>
<div
class="bg-blue-500"

v-for="mark in loadmarksstudentdata" :key="mark.id"
>
  {{mark.id}}
  <p>{{mark.name}}</p>
</div>
</div>




</div>

<button 
 @click="loaddata(1)"

class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
  <span>Download</span>
</button>


                    <table class="alt rtl" dir="rtl">
                                                            <!-- <tbody><tr>
                                        <td style="width:50%;">code</td>
                                                                                <td style="width:50%;">451771828</td>
                                                                            </tr>
                                                                    <tr>
                                        <td style="width:50%;">نوع_القيد</td>
                                                                                <td style="width:50%;">مستجد</td>
                                                                            </tr>
                                                                    <tr>
                                        <td style="width:50%;">الترتيب</td>
                                                                                <td style="width:50%;">ـــــ</td>
                                                                            </tr>
                                                                    <tr>
                                        <td style="width:50%;">اللغة العربية/50</td>
                                                                                <td style="width:50%;">جيد جدا</td>
                                                                            </tr></tbody> -->
                        
                                                                            
                                                    </table>

  </div>
</template>

<script>
import axios from "axios";
import 'animate.css';

export default {
  name: 'app',
  components: {
	// vueRecaptcha
  },
  data() {
	return { 
	active:[false,true,true]	,
		loading:false,
		loadmarksschooldata:'',
    loadmarksdata:'',
    loadmarksstudentdata:'',
		devsstr:'',
		devsarray:'',
		errorsmsg:'',
    school_id:'',  
    devnumvar:'',
    devnamevar:'',
    student_setnum:'',
    devnumcanchoose: true,
		showRecaptcha: false }
  },
//  computed: {
//     devsarray: function () {
//     //   return  this.counter += 1 ;
//     //   // return this.products.filter(product => product.onSale)
// 	let text = "How are you doing today?";
// const myArray = text.split(",");
//      } 
//      },

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

      async   loaddivmarks(devnum,devname) {
       this.devnumvar=devnum
       this.devnamevar=devname
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
// if(this.student_setnum==''){
// return
// }


// school_id,devnum,student_setnum
// school_id=
// school_id=
// school_id=
// alert('loadmarksstudent')
// alert(this.$route.params.id )
// alert(this.devnumvar)
// alert(this.student_setnum)
console.log='/api/loadmarksdatastudent/'+ this.$route.params.id  +'/'+this.devnumvar+'/'+this.student_setnum
 this.loading = true;
      try {
        await axios
          .get(
            // "/api/loadmarksschooldata/"+id
'/api/loadmarksdatastudent/'+ this.$route.params.id +'/'+this.devnumvar+'/'+this.student_setnum
          )
          .then((res) => {
            this.loadmarksstudentdata = res.data;
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