<template>
  <div
  class="  w-screen bg-green-100"
  
  >
  
  <!-- loadingw-screen  overflow-auto--><div class="flex top-0 text-center"><div class="m-auto"><p v-show="loading"   class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium          text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...</p> </div></div>


    <h5 class=" font-bold text-gray-400 m-auto leading-none select-none text-center">
     
     
      <!-- Coming soon! MyClassMain text-7xl flex -->
 <div v-show="showModal"><div>{{timestamp}}</div>        <button class="buttonred-33" @click="getNow">getNow</button></div>
    </h5>

<!-- 
        <button class="buttonred-33" @click="getNow">getNow</button>
        <button class="buttonred-33" @click="loadtirmdates(0)">loadtirmdates</button>
 
    <button class="buttonred-33" @click="loadteacher">loadteacher</button>
    <p>period:{{period}}</p>
      <p>teacher_id:{{teacher_id}}</p>
        <p>CharCoded:{{CharCoded}}</p>
        <input type="text" v-model="CharCoded"> -->
                <!-- <input type="text" v-model="CharCodedcom"> -->
        
        <!-- <p>todayNum:{{todayNum}}</p>
        <p>timestamp:{{timestamp}}</p>
        <p>todayDate:{{todayDate}}</p>
        <p>todayDatecom:{{todayDatecom}}</p>
        <p>week:{{todayweek}} </p>overflow-x-scroll
 <div > -->

<!-- =============================================== -->


<div
class=" text-center w-full
z-50 bg-yellow-800
       top-0
         
"

>
<div class=" bg-yellow-800 ">
<div class="flex flex-wrap items-center justify-center">
  <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
    <!-- active:bg-blue-800 -->
    
     
    <span
   v-for=" pern  in 8" :key="pern"
     
     :class="(buttonisactive[pern]==1)? 'bg-blue-800':''"
      class="

        px-6
        py-2.5
        bg-blue-400
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
         hover:bg-blue-700
        focus:bg-blue-700 focus:outline-none focus:ring-0
        w-10

      "
     >
     
              <span  >
          
           <!-- @click="loadabsence(class_name,period,day,week)" -->
          {{pern   }} 
           
           <p>7:00</p>
           <p>8:00</p>
         
          </span>
    </span> 
     
  </div>
</div>
 <div class="flex items-center justify-center">
  <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
    <!-- active:bg-blue-800 -->
 
    <button
     v-for=" pern  in 8" :key="pern"
     
     :class="(buttonisactive[pern]==1)? 'bg-blue-800':''"
      class="
         
        px-6
        py-2.5
        bg-blue-400
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        hover:bg-blue-700
        focus:bg-blue-700 focus:outline-none focus:ring-0
         w-10
 
      "
           @click="loadabsence(schedule_array[todayNum][pern],pern,todayNum,todayweek)"
    >
     
              <span v-show="schedule_array[todayNum][pern]">
          
           <!-- @click="loadabsence(class_name,period,day,week)" -->
          {{schedule_array[todayNum][pern]    }} 
          {{schedule_array_order[todayNum][pern]    }} 
          </span>

    </button> 
     
  </div>
</div>

</div>

<!-- ===============================================
 -->
        <select v-model="todayNum">
        <option value="">all</option>
        <option value="1">1</option>
        <option value="2"  >2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>

      </select>
</div>
<p>class:{{class_name}}</p>
<!-- <br>
 
<button class="button-33" @click="canabsence=!canabsence">canabsence</button>
   <div v-if="canabsence">
    <absence :absence_array="absence_array"
    
    ></absence>
   </div>
<br> -->
<!-- ==============================================================<br> -->
<!-- <button class="button-33" @click="canparticipate=!canparticipate">canparticipate</button> -->
   <!-- {{title}} -->
       <participate 
     @changeTitle="ChangeT($event)" 
    :absence_array="absence_array"
    :period="period"
    
      ></participate>
   <!-- <div v-if="canparticipate">

   </div>  -->
<!-- <br>
==============================================================<br> -->

<!-- <button :class="btn1" @click="loadtirmdates (0)">loadtirmdates (num)</button>
==========================================================================
  <p v-for="(dd,index) in datesforweek" :key='index'>
    <span v-show="dd.day==todayNum">
      {{dd.day}}
    </span>

  </p>
  <button @click="canloadteachers=!canloadteachers">canloadteachers</button> -->
  <div v-if="canloadteachers">

 
  <!-- teacherData:{{teacherData}} <br> -->
  teacherData:{{teacherData[1]}} <br>
  <!-- {{datesforweek}} -->
 datesforweek: day 2=
 <p v-if="datesforweek[todayNum-1]">
{{datesforweek[todayNum-1]['date']}}
 </p>
  <br> {{datesforweek}}

<!-- // 'school_id': school_id ,
// 'class_name': class_name,
// 'date'     : '2022-03-16'      ,
// 'period'   : period    ,
// 'day'      : day       ,
// 'subject'  : subject   ,
// 'teacher'  : teacher   ,
// 'absent'   : absent    ,
// 'notes'    : notes     , -->
<!-- ========================================================================== -->

<div class="tab-wrap">

    <!-- active tab on page load gets checked attribute -->
    <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
    <label for="tab1">teacher</label>

    <input type="radio" id="tab2" name="tabGroup1" class="tab">
    <label for="tab2">loadPeriodtime</label>

    <input type="radio" id="tab3" name="tabGroup1" class="tab">
    <label for="tab3">loadschedule_data</label>

    <div class="tab__content">
      <h3>teacher Section</h3>
<!-- ===================================================================== -->
<p><button :class="btn1" @click="loadteacher">loadteacher</button></p>



<p>id{{response.id }} </p>
<p>name{{response.name }} </p>
<p>email{{response.email }} </p>
 <p>school_id{{response.school_id }} </p>
<!-- <p>{{teacherData}}</p> -->
<div v-for="te in teacherData"  :key="te.id">
 <p>school_id:{{te.school_id}}</p> 
 <p>teacher_id:{{te.teacher_id}}</p> 
 <p>name:{{te.name}}</p> 
 
  <p>subject:{{te.subject}}</p>
<p>classes:{{te.classes}}</p>
</div>
<table   >
  <tr  >
    <th   colspan="5">teacher</th>
  </tr>
<tr :class="tr">
<th :class="th">school_id </th>
<th :class="th">teacher_id </th>
<th :class="th">name</th>
<th :class="th">subject</th>
<th :class="th">classes</th>
</tr>
<tr :class="tr"  >
 
 <td :class="td">{{teacher_array.school_id}}</td> 
 <td :class="td">{{teacher_array.teacher_id}}</td> 
 <td :class="td">{{teacher_array.name}}</td> 
 <td :class="td">{{teacher_array.subject}}</td>
 <td :class="td">{{teacher_array.classes}}

<!-- {{teacher_array.name}} -->



 </td>
  
  
  </tr>
</table>
<!-- ==========================================================/=========== -->
    </div>

    <div class="tab__content">
      <h3>loadPeriodtime Section</h3>
 

<p><button :class="btn1" @click="loadPeriodtime">loadPeriodtime()</button></p>

       <p> school name :</p>
      <p> teacher name :</p> 
    table the week  =
   
        <!-- ================================================================ -->
        
        {{loadPeriodtime_data}}
        
        <!-- ================================================================ -->
    </div>

    <div class="tab__content">
      <h3>loadschedule_data Section</h3>
      <span v-show="!loading">

<p><button :class="btn1" @click="loadschedule">loadschedule</button></p>
      </span>
 
      <select v-model="todayNum">
        <option value="">all</option>
        <option value="1">1</option>
        <option value="2"  >2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>

      </select>
<table>
  <tr>
      <th   colspan="5">teacher</th>  
  </tr>
  <tr  >

    <th   :class="th">d/p   </th>
    <th   :class="th">1</th>
    <th   :class="th">2</th>
    <th   :class="th">3</th>
    <th   :class="th">4</th>
    <th   :class="th">5</th>
    <th   :class="th">6</th>
    <!-- <th   :class="th">class_name</th>
    <th   :class="th">subject   </th>
    <th   :class="th">color     </th> -->
 
  </tr>
  <tr 
  :class="tr"
    
   v-for=" dayn  in 5" :key="dayn">
   
     <td :class="td">{{dayn}}</td>     
      <td :class="td"   v-for=" pern  in 8" :key="pern">
        <span v-show="todayNum==dayn"> 
         <span v-show="schedule_array[dayn][pern]">
          {{schedule_array[dayn][pern]    }} 
          {{schedule_array_order[dayn][pern]    }} 
         </span>
              </span>
        <span v-show="todayNum==''"> 
         <span v-if="schedule_array[dayn][pern]">
          {{schedule_array[dayn][pern]    }} 
          {{schedule_array_order[dayn][pern]    }} 
         </span>
              </span>
              
          <!-- {{schedule_array[1][index] }} -->
          <!-- {{loadschedule_data[sc].class_name    }}  -->
         <!-- <input type="text"  v-model="schedule_array[dayn][pern]"> -->
      </td>
     </tr> 
       <!-- :value="schedule_array[dayn][pern]" -->
   <!-- <tr :class="tr">
     <td class="td"> day 2</td>     
      <td class="td"  v-for="(sc,index) in loadschedule_data" :key="index">
        <span v-if="sc.day==2">
          {{index    }}:{{sc.class_name    }} 
        </span>
      </td>
     </tr>      -->
     
  
</table>
<!-- <p>{{schedule_array}}</p> -->
{{loadschedule_data[0]}}
    </div>

  </div>
 
 </div>
 


  </div>
 








</template>

<script>
import axios from "axios";
// import absence from '../components/classcom/absence.vue'
import participate from '../components/classcom/participate.vue'

export default {
  middleware: 'auth',

  metaInfo () {
    return { title: this.$t('home') }
  },
          components:{
 participate

        },

data()  {
    return{
      buttonisactive:[],
      title:'Rick Grimes',
    schoolData : {} ,
    teacherData: '' ,
    todayweek:'',
    canabsence:false,
    canparticipate:true,
    period:'',
    class_name:'',
    hijridate:'',
    teacher_array: [] ,
    loadPeriodtime_data: {} ,
     loadschedule_data:'',
     datesforweek:'',
     schedule_array:[
       [,,,,,,,],
       [,,,,,,,],
       [,,,,,,,],
       [,,,,,,,],
       [,,,,,,,],
       [,,,,,,,],
       [,,,,,,,],
       [,,,,,,,],

     ],     
     schedule_array_order:[
       [,,,,,,,],
       [1,1,1,1,1,1,1,1],
       [1,1,1,1,1,1,1,1],
       [1,1,1,1,1,1,1,1],
       [1,1,1,1,1,1,1,1],
       [1,1,1,1,1,1,1,1],
       [1,1,1,1,1,1,1,1],
       [1,1,1,1,1,1,1,1],

     ],
     absence_array:[],
    // -------------------------------
    loading : false  ,
    canloadteachers : false  ,
    errorsmsg:'',
    teacher_id:'',
    todayNum:2,
    chosenDate:'',
    todayDate:'',
    response:'',
    CharCoded:'',
    timestamp: "",
    todaytime:'',
    // saveparticipations_returneddata:[],
    showModal: true,
    btn1:"text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800",

 tr:'bg-white  border-b transition duration-200 ease-in-out hover:bg-green-300',
  th:"text-sm font-medium text-white px-6 py-4 border-r bg-green-500",
  td: "  text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r", 
    }

        },

        computed:{
todayDatecom: function () {

  if (this.datesforweek[this.todayNum-1]) {
    // console.log("todayDatecom");

    // console.log(this.datesforweek);
    // console.log(this.datesforweek[this.todayNum-1]);
    // console.log(this.datesforweek[this.todayNum-1]['date']);
     this.todayDate=this.datesforweek[this.todayNum-1]['date'];
     this.todayweek=this.datesforweek[this.todayNum-1]['week'];

  return this.datesforweek[this.todayNum-1]['date'];
  }
 return;
  
}
        },
 mounted()  {
    //  setInterval(this.loadabsence, 5000);
        // this.loadallfirst  ();
        // this.playSound('p.mp3');
        this.loadteacher   ();
        //  setInterval(this.getNow, 1000);
        
            },
 


              created() {
    window.addEventListener('keydown', (e) => {
      if (e.key == 'Escape') {
        this.showModal = !this.showModal;
      }
         if (e.key == '1') {
        this.showModal = !this.showModal;
      }   

      



    });


  },
methods:{
ChangeT(title)
    {
      this.title=title;
    },

  getNow: function() {
                    const today = new Date();

let mytoday=today.getDate();
let mymonth=today.getMonth()+1;
if (mymonth<10) {
  mymonth="0"+mymonth;
}
if (mytoday<10) {
  mytoday="0"+mytoday;
}

                    const date = today.getFullYear()+'-'+mymonth+'-'+mytoday;
                    const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                    const dateTime = date +' '+ time;
                    this.todayNum= today.getDay()+1;
                    this.todayDate=date;
                    this.todaytime=time;

// var date = new Date(2016, 9, 23);
                    // var date = new Date(today.getFullYear(), today.getMonth()+1, today.getDate());
// this.hijridate=   new HijrahDate(date);

                        // this.hijri=  moment().locale('ar-SA');// 2- Set the global locale to `ar-SA`
    //  this.hijri=     moment().format('iYYYY/iM/iD');
      // this.hijri= format('iYYYY/iM/iDهـ الموافق YYYY/M/Dم'); //3- use it normally 
// console.log('todayDate');
// console.log(this.todayDate);
                    this.timestamp = dateTime;
                },
    attend_fun(index,attribute,val){
    //  if(!confirm("Press a button!")){return} ;


// data=this.students_array ;
console.log(index,attribute,val);
if (this.students_array[index][attribute] ==val) {
  this.students_array[index][attribute] =!val;
} else {
  
  this.students_array[index][attribute] =val ;
}
    },
  // loadteacher---------------------------------------------------------
async loadteacher() {
   console.log('loadteacher')
 this.loading = true;

    await axios
    .get('api/userdata').then(response => {
        // alert(response.body);
        this.response=response.data;
  //  console.log(response.data.id);
  //  return;

});
   console.log('userdata-done');
   console.log(this.response);
this.teacher_id=this.response.id;
    // -----------------------------------------------------
    await axios
                      .get("/api/teacher/" + this.response.id)
                      .then((res) => {
                        this.teacherData = res.data;
                        this.loading = false;
                        //  console.log(res.data[0].name );
                      })
                      .catch((err) => {
                        this.errorsmsg = "data error";
                        // this.loading = false;
                      });
                      // for (let index = 0; index < this.teacherData.length; index++) {
                        // const element = this.teacherData[index];

                        console.log('this.teacherData');
                        console.log(this.teacherData);
                    this.teacher_array={                        
                                            // this.teacher_array.push({
                       school_id  : this.teacherData[0].school_id,
                       teacher_id : this.teacherData[0].teacher_id,
                       name       : this.teacherData[0].name,
                       subject    : this.teacherData[0].subject,
                       classes    : this.teacherData[0].classes,
                    
                    } ;
                    
                      // }

// console.log(this.teacher_array );
  this.loadschedule();
  this.loadtirmdates (0);
  // this.loadtirmdates();
  // setTimeout(this.loadschedule(), 2000);
  // loadteacher---------------------------------------------------------
    },
    // loadPeriodtime----------------------------------------------------------------
      async loadPeriodtime() {
    // -----------getPeriodtime------------------------------------------------------------
                    this.errorsmsg = "loadPeriodtime";
     
     this.loading = true;
      try {
        await axios.get("/api/Periodtime/").then((res4) => {
          this.loadPeriodtime_data = res4.data;
        //   console.log( "this.loadPeriodtime_data"+this.loadPeriodtime_data);  

        //   console.log(this.loadPeriodtime_data);
          this.loading = false;
        });
      } catch (e) {
        this.errorsmsg = "data error";
      };
// =======================================================================
                    this.errorsmsg = "";
 this.errorsmsg = "mydata_array";
//  periods_array=[];

//  return; 
// this.loading = false;
    // ------------getPeriodtime end-----------------------------------------------------------
// setInterval(this.current_time_fun, 1000);



 },
    // loadPeriodtime----------------------------------------------------------------
        async loadtirmdates (num) {
          console.log('loadtirmdates')
          //num current=0
          // next=1
          // last=-1
                    this.loading = true;
        try {
                        //num current=0
                // next=1
                // last=-1
          await axios.get("/api/getdatesforweek/"+num).then((res4) => {
                        this.datesforweek = res4.data;
                        // console.log('datesforweek:');
                         console.log( this.datesforweek);
                        // console.log(datesforweek);
                      //   console.log(this.loadPeriodtime_data);
                        this.loading = false;
                      });
        } catch (e) {
                  this.errorsmsg = "loadschedule data error";
                };
       let ddd=     Object.values(this.datesforweek);
      //  console.log( "ddd" );
      //  console.log( ddd );
      //  console.log( 'ddd[0].week' );
      //  console.log( ddd[0].week );
       this.todayweek=ddd[0].week
//                    for (key in ddd[0]) {
 
// console.log( "this.datesforweek[key]" );
// console.log(  key  );
// console.log( this.datesforweek[key] );
//                    }
            
            console.log( "this.datesforweek");  
            console.log( this.datesforweek.week);  
      // this.absence_array
      // this.chosenDate=this.datesforweek[this.todayNum-1]['date'];
        },

    // loadschedule----------------------------------------------------------------
    
     async loadschedule2() {   
        console.log('loadschedule2');
        this.loading = true;
        let schedule_data='';
        let datesforcurrentweek=''; 

                        try {
                          await axios.get("/api/schedule/"+this.teacher_array.school_id+"/"+this.teacher_array.teacher_id).then((res4) => {
                            schedule_data = res4.data;
                            this.loading = false;
                          });
                        } catch (e) {
                          this.errorsmsg = "loadschedule data error";
                        };


this.absence_array=[{
 'school_id': this.teacherData[0]['school_id']  ,
'class_name': class_name,
'date'     : this.todayDate      ,
'period'   : period    ,
'day'      : day       ,
'week'      : week       ,
'subject'  :    this.teacherData[0]['subject'] ,
'teacher_id'  : this.teacherData[0]['teacher_id']    ,
'teacher'  :  this.teacherData[0]['name']   ,
'absent'   : ''    ,
'notes'    : ''    , 
 }];



                                                                                      
 
     },    // -----------loadschedule2------------------------------------------------------------


    
    async loadschedule() {
        console.log('loadschedule');
        
        
    // -----------getPeriodtime------------------------------------------------------------
                    this.errorsmsg = "loadschedule";
     
     this.loading = true;
     let schedule_data='';
// console.log("/api/schedule/"+this.teacher_array.school_id+"/"+this.teacher_array.teacher_id);

    //  return;
      try {
        await axios.get("/api/schedule/"+this.teacher_array.school_id+"/"+this.teacher_array.teacher_id).then((res4) => {
          schedule_data = res4.data;
        //   console.log( "this.loadPeriodtime_data"+this.loadPeriodtime_data);  
// console.log('schedule_data');
// console.log(schedule_data);
        //   console.log(this.loadPeriodtime_data);
          this.loading = false;
        });
      } catch (e) {
        this.errorsmsg = "loadschedule data error";
      };


let datesforcurrentweek='';

// loadschedule=======================================================================
// loaddate=======================================================================
        try {
                        //num current=0
                // next=1
                // last=-1
                
                this.loading = true;
          await axios.get("/api/getdatesforweek/0").then((res4) => {
          // await axios.get("/api/getdatesforweek/"+num).then((res4) => {
                       datesforcurrentweek = Object.values(res4.data);
                        // console.log('datesforweek:');
                  //          console.log( 'datesforcurrentweek');
                  // console.log( datesforcurrentweek);              
                        // console.log(datesforweek);
                      //   console.log(this.loadPeriodtime_data);
                        this.loading = false;
                      });
        } catch (e) {
                  this.errorsmsg = "getdatesforweek data error";
                };

// loaddate=======================================================================

                    this.errorsmsg = "";
 this.errorsmsg = "mydata_array";
// -------------------------------------------
// let myclasses_rray=[];
// let class_name='';
// let class_name_order=0;
// for (let index = 0; index <  schedule_data.length; index++) {
//   class_name=schedule_data[index].class_name;
//   if ( !myclasses_rray.includes(class_name)) {
//     myclasses_rray.push(
//       class_name);
//   }
// myclasses_rray.includes(class_name);

// }
//  console.log('schedule_data');
//  console.log(schedule_data);
//  console.log('schedule_data.length');
//   console.log(schedule_data.length);
  let tablearray=[];
   this.schedule_array=[];

for (let index = 0; index <  schedule_data.length; index++) {
  let day=schedule_data[index].day;
let per=schedule_data[index].period;
let daydate=datesforcurrentweek[index].date;
// tablearray.push(
//   {
 
// 'class_name': "5B",
// 'color': "green",
 
// 'day': "1",
//  'date':datesforcurrentweek[day-1].date,
 
// period: "1",
// school_id: 1,
// sorder: 1,
// subject: "Math",
// teacher_id: "4",

//   }
// );
// active: 1
// class_name: "5B"
// color: "green"
// created_at: null
// day: "1"
// id: 1
// notes: null
// period: "1"
// school_id: 1
// sorder: 1
// subject: "Math"
// teacher_id: "4"
// updated_at: null


// console.log('daydate');
// console.log(daydate);
 this.schedule_array[day][per]=schedule_data[index].class_name;
 this.schedule_array_order[day][per]=schedule_data[index].sorder;
 
// for (let indexorder = 0; indexorder <=  index; indexorder++) {
// if (class_name==) {
//   class_name_order++;
// }

// }

 
  
}

// -------------------------------------------
 // 'school_id': school_id ,
// 'class_nam': class_name,
// 'date'     : '2022-03-16'      ,
// 'period'   : period    ,
// 'day'      : day       ,
// 'subject'  : subject   ,
// 'teacher'  : teacher   ,
// 'absent'   : absent    ,
// 'notes'    : notes     ,  

this.loadschedule_data=schedule_data;
// console.log(this.schedule_array);
 return;

 },


 
loadabsence(class_name,period,day,week){
this.buttonisactive=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
this.buttonisactive[period]=1;

this.period=period;
// teacherData:{ "id": 1, "school_id": 1, "teacher_id": 4, "name": "Ahmed Mosaad", "subject": "Math", "stages": "['prim']",
//  "classes": "4A,4B,4C,4D,5A,5B,5C", "active": 1, "name_ar": "احمد مسعد",
//  "notes": "AA--", "created_at": null, "updated_at": "2022-03-18T19:18:06.000000Z" }
// this.teacherData[0]['school_id'];
// this.teacherData[0]['teacher_id'];
// this.teacherData[0]['name'];
// this.teacherData[0]['subject'];
// console.log("loadabsence");
// console.log(this.teacherData);
// console.log("absence_array");
// console.log(this.absence_array);
//  pppppppppppppp
this.absence_array=[{
 'school_id': this.teacherData[0]['school_id']  ,
'class_name': class_name,
'date'     : this.todayDate      ,
'period'   : period    ,
'day'      : day       ,
'week'      : week       ,
'subject'  :    this.teacherData[0]['subject'] ,
'teacher_id'  : this.teacherData[0]['teacher_id']    ,
'teacher'  :  this.teacherData[0]['name']   ,
'absent'   : ''    ,
'notes'    : ''    , 
 }]

  // alert([class_name,period,day,week,this.todayDatecom]);
},
 
}

}
</script>
<style scoped>

</style>
