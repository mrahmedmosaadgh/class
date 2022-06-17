<template>
  <div><!-- loading --><div class="flex top-0 w-screen text-center"><div class="m-auto"><p v-show="loading"   class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium          text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...</p> </div></div>
<button @click="playSound('p.mp3')">this.playSound('p.mp3')</button>
 <p>===========================</p>     
 <p>
   abs_db:{{abs_db.absent}}
 </p>
  <p>
   abs_db_array:{{abs_db_array}}
 </p>
<p>===========================</p>
      <button :class="btn1" @click="saveabsence">saveabsence</button><br>
 
      <!-- absence_db{{absence_db}} -->
      <!-- hi absence : {{class_namecom}} -->
      <p
      v-if="absence_array[0]"
      >
      hi absence_array[0].class_name=== : {{absence_array[0].class_name}}
 checkedNames     : {{checkedNames}}
      </p>
      <br>
 absent_arry_com     : {{absent_arry_com}}
      
   <!-- students_array   {{students_array}} -->
   <br>
   absence_array   {{absence_array}}
   <br>
      students_id_array   {{students_id_array}}
   <br>
   errorsmsg{{errorsmsg}}
     ====================----------================= 
     <p>absence_db:{{absence_db}}</p>
   ====================----------=================

  <div 

  class=" cards  "
  
  >
 
    <div  
    class="  card-1   w-60  m-1"
   
  v-for="(student,index) in students_array" :key="index"
    
    ><div
      :class="(checkedNames.includes(student[0]))?'':'bg-gray-500'"
   class="w-full   h-full"
    > 
    <span class="text-white">

    {{ (checkedNames.includes(student[0]))?'Present':'Absent' }}</span>
 
    <label class="w-full  p-5  h-full inline-flex items-center cursor-pointer" >
      <input type="checkbox"  
          hidden
          class="w-6 h-6 text-green-600 border-0 rounded-md focus:ring-0 cursor-pointer" 
          :value="student[0]"
          v-model="checkedNames" 
        />
           
            
        <!-- @change="attend_fun(index,4,'true')" -->
      <!-- <div class="  w-full bg-yellow-900"> -->
              <span class="px-1 leading-none text-white   bg-red-600 rounded-full">
{{index+1}}
      </span>
                <button>{{student[1]}} </button>     
        <br>
          <small><small><small>{{student[2]  }}</small></small> </small> 
      <!-- </div> -->
    </label>
  <!-- </div> v-if="showattend"-->






    </div>
     </div>
  </div>
    <button type="button" class="buttonred-33" @click='passEvent'> Update me</button>
      ====================----------=================

  </div>
</template>

<script>
import axios from "axios";
export default {
 
 props: ['absence_array'],
   data() {
    return {
          btn1:"text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800",

         myclass_name:'',
         students_data:'',
         students_array:[],
         abs_db_array:[],
         students_id_array:[],
          checkedNames     : [],
           errorsmsg:'',
           absence_db:'',
           abs_db:'',
         loading:false,
        //  class_name:'',
        //  class_name:'',
        //  class_name:'',
         
         }
  },
    watch: {
    absence_array: function () {
        // if (this.absence_array[0].class_name) {
        //    }  
            // this.myclass_name=this.absence_array[0].class_name;
      this.loadstudents();
       
    } 
 
  },
  mounted(){
// this.loadstudents();
  },

       computed: {



       
 absent_arry_com: function () {
  // let arr1=[1,2,3,4,5];
  // let arr2=[1,2];
  let arr1=this.students_id_array;
  let arr2=this.checkedNames;
let difference = arr1.filter(x => !arr2.includes(x));
return difference;
},
  },
//   computed:{
// // class_namecom: function () {
// //   if (this.students_array.class_name) {
// //      this.myclass_name=this.students_array.class_name;
      
// // // this.loadstudents();
// //   return this.students_array.class_name; 
// //   }
// //  return;
  
// // }
//   },

 methods:{
    passEvent()
    {
      this.$emit('changeTitle','Awesome ')
    },
async loadstudents() {
          console.log('loadstudents1');
     
    //  // alert('class_name:'+this.myclass_name);
    // // alert('class_name'+class_name);
    // -----------getPeriodtime------------------------------------------------------------
                    this.errorsmsg = "loadstudents";
    //  this.myclass_name=this.students_array.class_name;
     this.loading = true;
               console.log("/api/loadstudents/"+ this.absence_array[0].class_name);

      try {
           console.log('loadstudents2');
        await axios.get("/api/students/"+ this.absence_array[0].class_name).then((res) => {
          console.log('loadstudents3');
         this.students_data = res.data;
          this.loading = false;
          console.log("/api/loadstudents/"+ this.absence_array[0].class_name);
          console.log(res4.data);
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };
// =======================================================================
 this.errorsmsg = "";
//  this.errorsmsg = "mydata_array";
// =======================================================================

// =======================================================================
         this.students_array=[];
         this.students_id_array=[];
for (let index = 0; index < this.students_data.length; index++) {

this.students_id_array.push( this.students_data[index].id);
  
   
  this.students_array.push([
    this.students_data[index].id,
    this.students_data[index].namecut,
    this.students_data[index].name,
    this.students_data[index].notes,
    false,0,0,0
  ]);
  
   
}
this.getbsence();
// =======================================================================

 },
async getbsence() {
                    this.errorsmsg = "loadstudents";
     this.loading = true;
      try {
        // alert(JSON.stringify(this.absence_array));
           console.log("/api/getbsence/"+JSON.stringify(this.absence_array));
        await axios.get("/api/getbsence/"+JSON.stringify(this.absence_array)  ).then((res) => {
          console.log('getbsence3');
         this.abs_db = res.data;
          this.loading = false;
          console.log("/api/getbsence/"+JSON.stringify(this.absence_array)  );
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
console.log("this.absence_array.absent:"+ this.absence_array.absent);
console.log("this.absence_array:"+ this.absence_array);
      try {
           console.log('saveabsence2');
        await axios.get("/api/saveabsence/"+  JSON.stringify(this.absence_array)+'/'+absent).then((response) => {
        // await axios.get("/api/saveabsence/"+ this.absence_array).then((response) => {
          console.log('saveabsence3');
         this.absence_db = response.data;
          this.loading = false;
          console.log("/api/saveabsence/"+ this.absence_array[0].class_name);
          console.log(response.data);
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };
// =======================================================================
 this.errorsmsg = "";
// =======================================================================

 },
       playSound (sound) {
      if(sound) {
        var audio = new Audio(sound);
        audio.play();
      }
       },

 }
}
</script>

<style>

</style>