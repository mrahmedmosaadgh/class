<template>
  <div>
      <!-- loading -->
      <div class="flex top-0 w-screen text-center"><div class="m-auto"><p v-show="loading"   class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium          text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...</p> </div></div>
  <!-- <loading2 ref="loading" /> -->
<button class="button-33" @click="cant1=!cant1">cant1</button>
   <div v-if="cant1">
    
  
<br>
  <div class="cards">
    <div  
        class="  card-1   w-60  m-1"
        v-for="(student,index) in students_array" :key="index"
    >
    
    
    <div
        :class="(checkedNames.includes(student[0]))?'':'bg-gray-500'"
        class="w-full   h-full"
    > 
   
    
   
    <!-- <label class="w-full  p-5  h-full inline-flex items-center cursor-pointer" > -->
      
      <input type="checkbox"  
            hidden
            class="w-6 h-6 text-green-600 border-0 rounded-md focus:ring-0 cursor-pointer" 
            :value="student[0]"
            v-model="checkedNames" 
        />  <!-- @change="attend_fun(index,4,'true')" -->
           
            
      <!-- <div class="  w-full bg-yellow-900"> -->
              <span
              :class="(checkedNames.includes(student[0]))?
              'p-1 text-center leading-none text-white   bg-red-800 rounded-full'
              :
              '  text-gray-200  bg-gray-600 rounded-full'
              "
              
                >
{{index+1}}
      </span>
                <span  :class="(checkedNames.includes(student[0]))?'text-2xl text-white shadow-xl  bg-green-800 rounded-full p-2':''">{{student[1]}} </span>     
    <span>  {{ (checkedNames.includes(student[0]))?'':'(Absent)' }} </span>
        <br>
          <small><small><small>{{student[2]  }}</small></small> </small> 
      <!-- </div> -->
    <!-- </label> -->
  <!-- </div> v-if="showattend"-->






    </div>
     </div>
  </div>
    
      ====================----------=================

    <table>
<tr :class="trh">
<th  :class="th">h1</th>

</tr>
<tr 
:class="tr"
 v-for="(student,index) in students_array" :key="index"
    
>

    <td  :class="td"> 
      <input type="checkbox"  
          hidden
          class="w-6 h-6 text-green-600 border-0 rounded-md focus:ring-0 cursor-pointer" 
          :value="student[0]"
          v-model="checkedNames" 
        />
    </td>
    <td  :class="td"> 
              <span class="px-1 leading-none text-white   bg-red-600 rounded-full">
                {{index+1}}
                </span>
                <span class="scal-3">{{student[1]}} </span>  <br>   
                    <small><small><small>{{student[2]  }}</small></small> </small>
    </td>
           
    <td  :class="td"> 
 <button  class="button-33" >+</button>
 <button :class="btn1">-</button>
    </td>
    
</tr>

    </table>
 </div>
====================----------=================

 
students_array:::::::{{students_array[0]}}

=============================================================
<table>
  <thead>
    <tr  :class="trh">
      <!-- 
0 id,
1 namecut,
2 name,
3 notes,
4 attendance 1,
5 plus 0,
6 minus 0,
7 total 0 -->
      <th>0 id                           id        </th>
      <th>1 namecut =-=-= name      </th>
      <th>2 name                       class_name</th>
      <th>3 notes                     notes     </th>
      <th>4 attendance 1       attend     </th>
      <th>5 plus 0                   star     </th>
      <th>6 minus 0                 star     </th>
      <th>7 total 0                star     </th>
   
    </tr>
  </thead>
  <tbody>
    <tr :class="tr" v-for="(student,index) in students_array5" :key="index">
 <!-- <tr :class="tr" v-for="(student,index) in students_array5" :key="index"> -->
students_array2


      <td :class="td" scope="row">{{index+1        }}</td>
      <td :class="td">
        <!-- <input type="checkbox" 
       
        style="width:33px;height:55px;cursor:pointer;background-color:blue"
        @click="attend_fun(index,4,'true')"
        v-model="checkedNames"
        >  -->

         <input type="checkbox"  :value="student[0]" v-model="checkedNames" />
        <span style="min-width:200px">  
           <span :title="student[2]"> {{student[1]      }}</span><small><small><small>{{student[2]  }}</small></small> </small> </span>    </td>
      <td :class="td">            {{student[3]}}</td>
      <td :class="td">            {{student[4]     }}</td>
      <td :class="td">
        

 

<!-- width="22"   height="22"-->
<!-- <div  v-for="one in student[5]" :key="one" style="height:22px;width:22px"> -->



 
      <!-- </div>   -->
        
        
               <button class="button-33" @click="plus_fun(index)">+</button>
                    {{student[5]     }}
                    
                    </td>
      <td :class="td">
                <button class="buttonred-33" @click="minus_fun(index)">-</button>
                     {{student[6]     }}
                      
                     </td>
      <td  :class="td" class="  flex">
                    {{student[7]     }}
                     

                     <!-- <div v-if="students_array2">{{students_array2[0][index].plus}}
{{students_array2[0][index].minus}}
{{students_array2[0][index].total}}
                     </div> -->
 <!-- class="star rating" -->
 <!-- <div  class="shadowanimated flex">
   jjjj
 </div> -->

<img
 src="star.gif"
  style="width:44px"
   alt=""
 v-for="one in student[7]" :key="one" 
   
   >


        <!-- <svg  class="shadowanimated" 
 v-for="one in student[7]" :key="one" 
 height="25" width="23" data-rating="5">
    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="yellow" />
  </svg> -->
      </td>
    <td>


        
    </td>
    </tr>
 
  </tbody>
</table>

=============================================================
 <!-- <button>students_array</button>
 -->
 
 <!-- <p> period:{{period}}students_array:{{students_array2[0]}} </p>
 <p> period:{{period}}students_array:{{students_array2[0][0].name}} </p>
 <p> period:{{period}}students_array:{{students_array2}} </p> -->
 
<!-- <button class="button-33" @click="test">test</button>
   <p> test_array:{{test_array}}</p>  
<div v-if="test_array">
<p v-for=" t in test_array" :key="t">
{{t}}
<input type="text" :value="t" v-model="test_array">
</p>
</div> -->

   
=============================================================

  </div>
</template>

<script>
import axios from "axios";
// import Loading2 from '../Loading.vue'

export default {
//       components: {
//     Loading2
//   },
 
 props: ['absence_array','period'],
   data() {
    return {
          btn1:"text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800",
          tr:"scal-2 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",
// tr:"dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",

td:"p-3 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",
trh:"dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",
th:"dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700",
         myclass_name:'',
         students_data:'',
         students_array:[],
         students_array2:[],
         students_array5:[],
          
         abs_db_array:[],
         test_array:[1,2,3,4],
         students_id_array:[],
          checkedNames     : [],
           errorsmsg:'',
           absence_db:'',
           abs_db:'',
         loading:false,
    cant1:false,
    cant2:false,
    cant3:false,
// period:'',
        //  class_name:'',
        //  class_name:'',
        //  class_name:'',
         
         }
  },
    watch: {
    absence_array: function () {
          // if (this.students_array) {
          //   this.students_array
          //  }  
         
      this.loadstudents();
       
    } ,
     
       
    
  },

  
//   mounted(){
// // this.loadstudents();
//   },

      //  computed: {

    // :period="period"
    // :day="day"
    // :week="week"
    // :class_name="class_name"
    // :date="date"

      //  students_array2: function () {
      //     if (this.students_array) {
      //       this.students_array
      //      }  
      //       // this.loadstudents();
      //   }  
       
//  students_array7: function () {
//   // let arr1=[1,2,3,4,5];
//   // let arr2=[1,2];
//  this.students_array5 =this.students_array;
// return this.students_array;
// },
//   },
 

 methods:{
   test() {
this.test_array[0]="55";
alert(this.test_array);
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
         this.students_array2=[];
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
   
  this.students_array2.push([
    {
    'id'           : this.students_data[index].id     ,
    'namecut'      : this.students_data[index].namecut,
    'name'         : this.students_data[index].name   ,
    'notes'        : this.students_data[index].notes  ,
    'partisipation': 0                                ,
    'plus'         : 0                                ,
    'minus'        : 0                                ,
    'total'        : 0                                ,


    }

    
  ]);
  
   
}
// this.period=this.students_data[0].period;
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
 

       playSound (sound) {
      if(sound) {
        var audio = new Audio(sound);
        audio.play();
      }
       },
plus_fun(index){
// plus_fun(index,attribute,val){(index,5,1)
                            if(!confirm("Are you sure!")){return} ;
                    this.playSound('p.mp3');
 
             this.students_array[index][6] += 1;
            this.students_array[index][7]         =this.students_array[index][5]-this.students_array[index][6];
            
            
            this.students_array2[0][index].plus += 1;
            this.students_array2[0][index].total         =this.students_array2[0][index].plus-this.students_array2[0][index].minus;
console.log(this.students_array[index]);
console.log(this.students_array2[0][index]);

                //  alert("this.students_array[index][5]"+this.students_array[index][5]);
                //  alert("this.students_array[index][7]"+this.students_array[index][7]);
    //               'id'           : this.students_data[index].id     ,
    // 'namecut'      : this.students_data[index].namecut,
    // 'name'         : this.students_data[index].name   ,
    // 'notes'        : this.students_data[index].notes  ,
    // 'partisipation': 0                                ,
    // 'plus'         : 0                                ,
    // 'minus'        : 0                                ,
    // 'total'        : 0                                ,



                },
         minus_fun(index){
//                  if(!confirm("Are you sure!")){return} ;
// this.playSound('m.mp3');


//              this.students_array[index][5] += 1;
//             this.students_array[index][7]         =this.students_array[index][5]-this.students_array[index][6];


//             this.students_array2[0][index].minus += 1;
//             this.students_array2[0][index].total         =this.students_array2[0][index].plus-this.students_array2[0][index].minus;
// console.log(this.students_array2[0][index]);
      }, 

 }
}
</script>

<style>

</style>