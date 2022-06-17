<template>
  <div>
      <!-- loading -->
      <div class="flex top-0 w-screen text-center"><div class="m-auto"><p v-show="loading"   class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium          text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...</p> </div></div>
  <!-- <loading2 ref="loading" /> -->
<button class="button-33" @click="cant1=!cant1">cant1</button>
<!-- <p>hijridate: {{hijridate}}</p> -->
<button class="button-33" @click="alert">alert </button>
<button class="button-33" @click="saveparticipations">saveparticipations </button>
<!-- <p>students_data: {{students_data}}</p> -->
<!-- <p>marks_arrayob school_id: {{marks_arrayob[0].school_id}}</p> -->
<p>absence_array school_id : {{absence_array[0].school_id }}</p>
<p>absence_array class_name: {{absence_array[0].class_name}}</p>
<p>absence_array  date     : {{absence_array[0].date      }}</p>
<p>absence_array  period   : {{absence_array[0].period    }}</p>
<p>absence_array  day      : {{absence_array[0].day       }}</p>
<p>absence_array  week     : {{absence_array[0].week      }}</p>
<p>absence_array  subject  : {{absence_array[0].subject   }}</p>
<p>absence_array  teacher  : {{absence_array[0].teacher   }}</p>
<p>absence_array  absent   : {{absence_array[0].absent    }}</p>
<p>absence_array  notes    : {{absence_array[0].notes     }}</p>

<input type="text" v-model="linkapi">
 
saveparticipations_returneddata:{{saveparticipations_returneddata}}
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

 <!-- <p>students_array:::::::{{students_array[0][5]}}</p>
 <p>students_array:::::::{{students_array[0][6]}}</p>
 <p>students_array:::::::{{students_array[0][7]}}</p>

<input type="text" v-model="students_array[0][5]">
<input type="text" v-model="students_array[0][6]">
<input type="text" v-model="students_array[0][7]"> -->
=============================================================
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
 =============================================================
<table>
  <thead>
    <tr>
      <!-- 
0 id,
1 namecut,
2 name,
3 notes,
4 attendance 1,
5 plus 0,
6 minus 0,
7 total 0 -->
      <th>0 id </th>
      <th>1 namecut </th>
      <th>2 name class_name</th>
      <th>3 notes   </th>
      <th>4 attendance </th>
      <th>5 plus</th>
      <th>6 minus </th>
      <th>7 total</th>
   
    </tr>
  </thead>
  <tbody>
    <tr :class="tr" v-for="(student,index) in students_array" :key="index">
      <td :class="td" scope="row">{{index+1        }}</td>
      <td :class="td">
        <!-- <input type="checkbox" 
       
        style="width:33px;height:55px;cursor:pointer;background-color:blue"
        @click="attend_fun(index,4,'true')"
        v-model="checkedNames"
        >  -->

         <!-- <input type="checkbox"  :value="student[0]" v-model="checkedNames" /> -->
        <button style="min-width:200px">  
           <span :title="student[2]"> {{student[1]      }}</span><small><small><small>{{student[2]  }}</small></small> </small> </button>    </td>
      <td :class="td">            {{student[3]}}</td>
      <td :class="td">        <button class="button-33" @click="plus_fun(index)">+</button>     </td>
      <td :class="td">
        

 

<!-- width="22"   height="22"-->
<!-- <div  v-for="one in student[5]" :key="one" style="height:22px;width:22px"> -->
 

 
      <!-- </div>   -->
        
        
               
               <button class="button-33" @click="reset_fun(index)">reset</button>
               
               
                    {{student[5]     }}
                    <!-- <input type="number" v-model.number="student[5]"> -->
                  <!-- {{  marks_arrayob[index].plus }} -->


                  <!-- <select  v-model.number="student[5]">
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

                  </select> -->
                   
                    </td>
      <td :class="td">        <button class="buttonred-33" @click="minus_fun(index)">-</button>     {{student[6]     }}</td>
      <td :class="td"  class="  flex">            {{student[7]     }}
        <!-- <input type="number"  :value="student[7]"   > -->
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
    
    </tr>
 
  </tbody>
</table>
=============================================================
<!-- test_array:{{test_array}} -->
=============================================================
  
<!-- <p>test_array{{test_array}}</p>
<p>test_array2{{test_array2}}</p>
 
   <p v-for="test in test_array2" :key="test">
{{test}}
   </p>
   <button @click="test">test</button> -->
=============================================================
 <table>
   <tr>
     <th>1</th>
     <th>1</th>
     <th>1</th>
     <th>1</th>
     <th>1</th>
   </tr>
   <tr v-for="(mark,index) in students_array" :key="index">
     <td :class="td">{{mark[0]}}</td>
     <td :class="td">{{mark[5]}}

<button class="button-33" @click="plus_fun(index)">add</button>

     </td>
     <td :class="td">{{mark[6]}}</td>
     <td :class="td">{{mark[7]}}</td>
   </tr>
 </table>
<!-- <p>test:{{test}}</p> -->
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
         students_id_array:[],
          checkedNames     : [],
          saveparticipations_returneddata:[],
           errorsmsg:'',
           absence_db:'',
           abs_db:'',
         loading:false,
    cant1:false,
    cant2:false,
    cant3:false,
     starsnum:1,
      counter:0,

         }
  },
    watch: {
    absence_array: function () {

      this.loadstudents();
       
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
// mounted() {
//     window.addEventListener("keypress", function(e) {
//       this.CharCoded=String.fromCharCode(e.key);
//       console.log(String.fromCharCode(e.keyCode));
//     });
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
 
methods:{
//    test() {
//     this.test="55"; 
// this.test_array[0]="55";
// alert(this.test_array);
//    },
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
          console.log('saveparticipations');
     this.loading = true;
      try {
           console.log('saveparticipations2');
           //JSON.stringify(this.students_array)
           this.linkapi="/api/saveparticipations/"+ JSON.stringify(this.students_array)+"/"+ JSON.stringify(this.absence_array)
        await axios.get("/api/saveparticipations/"+ JSON.stringify(this.students_array)+"/"+ JSON.stringify(this.absence_array)).then((res) => {
         
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
    
async loadstudents() {

          console.log('loadstudents1');
     
    //  // alert('class_name:'+this.myclass_name);
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
  
   this.marks_arrayob.push( 
    {

  "school_id"         : this.students_data[index].school_id      ,
  "participate_id"    :''                                        ,
  "student_id"        : this.students_data[index].id             ,
  "name"              : this.students_data[index].name           ,
  "class_name"        : this.students_data[index].class_name     ,
  "subject"           : this.students_data[index].subject        ,
  "period"            : this.absence_array[0].period             ,
  "day"               : this.absence_array[0].day                ,
  "week"              : this.absence_array[0].week               ,
  "date"              : this.absence_array[0].date               ,
  "participate"       : 0                                        ,
  "plus"              : 0                                        ,
  "minus"             : 0                                        ,
  "score"             : 0                                        ,
  "total"             : 0                                        ,
  "participatedetails": ''                                       ,
  "notes"             : ''                                       ,
 }); 

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
  this.counter+=1;
// plus_fun(index,attribute,val){(index,5,1)
                            if(!confirm("Are you sure! Add"+ this.starsnum +" stars")){return} ;
                    this.playSound('p.mp3');
 
             this.students_array[index][5] += this.starsnum;
            this.students_array[index][7]         =this.students_array[index][5]-this.students_array[index][6];
            
            console.log([this.students_array[index][5],this.students_array[index][6],this.students_array[index][7]]);
     
 
            // this.students_array2[0][index].plus += 1;
            // this.students_array2[0][index].total         =this.students_array2[0][index].plus - this.students_array2[0][index].minus;

                },
         minus_fun(index){
           this.counter+=1;
                 if(!confirm("Are you sure! - "+ this.starsnum +" stars")){return} ;
this.playSound('m.mp3');

// let valp=this.students_array[index][5];
// let valm=this.students_array[index][6];
// let valt=this.students_array[index][7];

let total=this.students_array[index][5]-this.students_array[index][6] 
if ( total>0) {
               this.students_array[index][6] += this.starsnum;
            this.students_array[index][7]         =this.students_array[index][5]-this.students_array[index][6];
            
}

            console.log([this.students_array[index][5],this.students_array[index][6],this.students_array[index][7]]);
     
           
          //  console.log(this.marks_arrayob[index].plus);
            // console.log(this.students_array[index][6]);
            // console.log(this.students_array[index][7]);
            // console.log([this.students_array[index][5],this.students_array[index][6],this.students_array[index][7]]);

      }, 
      reset_fun(index){
           this.counter+=1;
                 if(!confirm("Are you sure! reset")){return} ;
this.playSound('m.mp3');
               this.students_array[index][5] = 0;
               this.students_array[index][6] = 0;
               this.students_array[index][7] = 0;
       console.log([this.students_array[index][5],this.students_array[index][6],this.students_array[index][7]]);
      }

 }
}
</script>

<style>

</style>