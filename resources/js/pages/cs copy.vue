<template>
  <div class="bg-white w-screen absolute left-0">   <!-- loadingw-screen  overflow-auto--><div class="flex top-0 text-center"><div class="m-auto"><p v-show="loading"   class=" fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50  text-sm font-medium     bg-green-100     text-blue-700 focus:z-10    inline-flex items-center"><svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>  </svg>  Loading...{{errorsmsg}}</p> </div></div>
<p>cs new</p>
      <!-- <p>{{teachermaindataget.schedule[0].day}}</p> -->
  <p>weeknum{{weeknum}}</p>
  <p>weeknum{{teachermaindataget.datesforweek[0].week}}</p>
  <div>

<div  >
    <table  >
    <thead> <tr >
        <th>day/period</th>
        <td  v-for="(pern,indexn) in 8" :key="indexn"
        
        >p{{pern}}       </td>
        <!-- <td>period    </td>
        <td>class_name</td>
        <td>sorder    </td>
        <td>color     </td> -->

    </tr>  </thead>
  <tbody>
    
    
    
    
    <tr 
    
     v-for="(dayn,index) in 5" :key="index"
    :class="dayn==setdaynum?'bg-blue-400':'bg-gray-100 text-gray-600'"
    ><!-- :class="dayn==3?'visible ':'invisible h-0'" -->
        <!-- <span v-if="dayn">
 
    

        </span> -->
        <td>day {{dayn}}:{{datesarray[index]  }} 
            <input type="text" v-model="datesarray[6]">
            <button @click="datesarray[6]==1">1111111111{{datesarray[index]  }}</button>
        </td>
       
     
                       
        <td v-for="(teachermaindata,index1) in teachermaindataget.schedule.filter(function (el) {
  return el.day  ==dayn

})" :key="index1"
        :class="dayn==setdaynum?'bg-blue-900 text-white':'bg-gray-100 text-gray-600'"
        >
          <!-- <td 
         v-if="teachermaindata.day==dayn"
        > -->
         <span v-if="teachermaindata.class_name!=null">
        <small> p{{teachermaindata.period    }}</small>  
         {{teachermaindata.class_name}}  
         <small>{{teachermaindata.sorder    }}</small>
         <!-- {{teachermaindata.date    }} -->
             
         </span>
         

         
          </td>
         <!-- </td>         -->
       

       

    </tr>
  </tbody>
 </table>
</div>

<!-- ====================================================================== -->
<select  v-model="setdaynum">

    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<table  >
    <thead> <tr >
        <th>day/period</th>
        <td  v-for="(pern,indexn) in 8" :key="indexn">p{{pern}}       </td>
        <!-- <td>period    </td>
        <td>class_name</td>
        <td>sorder    </td>
        <td>color     </td> -->
    </tr>  </thead>
  <tbody>
    <tr 
    ><!-- :class="dayn==3?'visible ':'invisible h-0'" -->
        <!-- <span v-if="dayn">
        </span> -->
        <td>day {{setdaynum}} </td>
        <td v-for="(teachermaindata,index2) in teachermaindataget.schedule.filter(function (el) {
  return el.day  ==setdaynum
})" :key="index2"
       
        
        >
          <!-- <td  class="bg-blue-400"bg-blue-400
         v-if="teachermaindata.day==dayn"
        > -->
         <span v-if="teachermaindata.sorder!='-'"
          :class="teachermaindata.sorder=='-'?'bg-blue-400':''"
         
         
         >
        <small> p{{teachermaindata.period    }}</small>  
         {{teachermaindata.class_name}}  
         <small>{{teachermaindata.sorder    }}</small>
         <!-- {{teachermaindata.date    }} -->
         </span>
          </td>
         <!-- </td>         -->
    </tr>
  </tbody>
 </table>
<!-- ====================================================================== -->
""{{tablearray}}
<table  >
    <thead> <tr >
        <th>day/period</th>
        <td  v-for="(pern,indexn) in 8" :key="indexn">p{{pern}}       </td>
        <!-- <td>period    </td>
        <td>class_name</td>
        <td>sorder    </td>
        <td>color     </td> -->
    </tr>  </thead>














  <tbody>
    <tr v-for="(daynn,daynnx) in 5" :key="daynnx"

            :class="daynn==setdaynum?' bg-red-900  text-white':'bg-gray-100 text-gray-600'"

    ><!-- :class="dayn==3?'visible ':'invisible h-0'" -->
        <!-- <span v-if="dayn">
        </span> -->
        
        <td><label :for="daynn"
        class="inline-block cursor-pointer w-full h-full"
        :class="daynn==setdaynum?'bg-red-500':'bg-gray-300'"
        
        >day {{daynn}} {{tablearray[daynn][0].date}}
          <input type="radio" name="day" :value='daynn' v-model="setdaynum" :id="daynn">  
            <!-- {{Array.isArray([1])   }} -->

<!-- {{Array.isArray(  tablearray[daynn])  }} -->
</label>
            
        </td>

<td
 v-for="(per,indexe) in 8" :key="indexe"
>
<!-- {{per}}  v-if="tablearray[daynn][0].sorder.split(',')[per]!='-'"-->
<span
 


>   <label 
          :for="'per'+daynn+per"
          v-if="daynn==setdaynum && tablearray[daynn][0].sorder.split(',')[per] && tablearray[daynn][0].sorder.split(',')[per]!='-'"
          @click="loadclass(tablearray[daynn][0].class_name.split(',')[per],per,tablearray[daynn][0].date)"
          class="  inline-block cursor-pointer w-full h-full"
          :class="per==period?'bg-green-500':'bg-green-800'"
          >
<!-- {{tablearray[daynn].class_name.split(",")[indexe]   }} :class="tablearray[daynn][0].sorder.split(',')[indexe]=='-'?'bg-red-400':''" -->
{{tablearray[daynn][0].class_name.split(",")[per]    }}
<small>{{  tablearray[daynn][0].sorder.split(",")[per]    }}</small>
           <input type="radio"  :name="'period'+daynn" :value='per' v-model="period" :id="'per'+daynn+per">  
</label>
</span>

<!-- {{tablearray[daynn].period }}hidden
{{tablearray[daynn].sorder }} -->
 <!-- {{tablearray[daynn].class_name[index]}}
{{tablearray[daynn].period[index]}}
{{tablearray[daynn].sorder[index]}} -->


</td>
<td></td>
 
         <!-- </td>         -->
    </tr>
  </tbody>
 </table>
<p>counter{{counter}}</p>
<p>period{{period}}</p>
<p>daynumber{{setdaynum}}</p>
<p>weeknum{{weeknum}}</p>
<p>date{{date}}</p>



 

  </div>
  
  
      <!-- ================= -->
    <section class="content">
      <div class="cards p-1 ">
        
<!-- =====card================================= -->
<!-- {{marks_arrayob}}
 v-for="(student, index) in marks_arrayob"
<p
          v-for="(student, index) in marks_arrayob"
          :key="index"

>

 {{ student.name.split(" ").slice(-1).join(" ") }}
</p> -->



        <div
          class="card  "
          v-for="(student, index) in marks_arrayob"
          :key="index"
        >
        
        <!-- -->
        
        
        <div    v-show="checkedNames.includes(student.student_id)" class="h-full">
          <div class="card__side card__side--front card__side--front-1 ">
            <div class="card__description "
            
            
            :class="(student.score>3)? 'bg-blue-600':'bg-blue-400'"
   
            
            >
 
              <div
                class="
                  bga2
                  w-full
                  text-white
                  font-bold
                  text-lg
                  capitalize
                  truncate
                  px-1
                "
              >
                <span class="text-3xl">{{ student.name.split(" ")[0] }}</span>
                <span> {{ student.name.split(" ")[1] }} </span>
                <p class="text-3xs">
                  {{ student.name.split(" ").slice(-1).join(" ") }}
                </p>
              </div>
              <div class="flex flex-row flex-wrap">

                <span v-show="student.score>0"
                class="
                    
                    
                    center
                    inline-block
                     
                    px-1
                    
                    text-bold text-white
                    rounded-full bg-green-200
                  "
                >
               
                <span class="anitxt1 text-3xl  p-0 m-0 ">

                   {{ student.score }}

                </span>
                          <img class=" p-0 m-0 float-right" src="star.gif" style="width: 44px" alt="" />
                
                
                
                </span>
              
           <span v-show="student.score>4" class="p-0 m-0">
                          <img class="  float-right" src="medal2.gif" style="width: 54px" alt="" />
           </span>
                        <span v-show="student.score>9"  class="p-0 m-0">
                          <img class="  float-right" src="medal2.gif" style="width: 54px" alt="" />
           </span >   
                        <span v-show="student.score>19"  class="p-0 m-0">
                          <img class="  float-right" src="medal2.gif" style="width: 77px" alt="" />
           </span>
           
                <!-- <div v-for="ee in student.score" :key="ee">
                  <img src="star.gif" style="width: 33px" alt="" />
                </div> -->



              </div>
            </div>
          </div>
          <div class="card__side card__side--back card__side--back-1">
           
              <div class="card__description capitalize dropbtn bga2">
                <span class="capitalize">
                  <span class="text-3xl">{{ student.name.split(" ")[0] }}</span>
                  <span> {{ student.name.split(" ")[1] }} </span>
                  <p class="text-3xs">
                    {{ student.name.split(" ").slice(-1).join(" ") }}
                  </p>
                </span>

                <label class="w-full h-full text-center cursor-pointer">
                  <p class="text-black cursor-pointer hover:bg-green-400">
                    <input
                      type="checkbox"
                      v-if="canregattend"
                      class="w-6 h-6 cursor-pointer"
                      :value="student.student_id"
                      v-model="checkedNames"
                    />
                  </p>
                </label>

 <p>
                 <span class="  text-3xl  p-0 m-0 ">

                   {{ student.score }}

                </span>
                    <button
                       class="button-33"
                      @click="plus_fun(index)"
                      v-show="checkedNames.includes(student.student_id)"
                    >
                      +
                    </button>
                    <button    class="px-6"
                       
                      @click="minus_fun(index)"
                      v-show="checkedNames.includes(student.student_id)"
                    >
                      -
                    </button>
                    <button   
                      class="px-6"
                      @click="reset_fun(index)"
                      v-show="checkedNames.includes(student.student_id)"
                    >
                      reset
                    </button>
</p>
                <p>
                  {{ student.plus }}-{{ student.minus }}-{{ student.score }}
                </p>
              </div>
            
          </div>
        </div>
<!-- =====card================================= -->
<!-- absent====================================================================================== -->


        <div    v-show="!checkedNames.includes(student.student_id)">
          <div class="card__side card__side--front card__side--front-1 ">
            <div class="card__description bg-gray-300">
              <div >
 
                
              </div>
              <div
                class="
                  bga2
                  w-full
                  text-white
                  font-bold
                  text-lg
                  capitalize
                  truncate
                  px-1
                "
              >
                <span class="text-3xl">{{ student.name.split(" ")[0] }}</span>
                <span> {{ student.name.split(" ")[1] }} </span>
                <p class="text-3xs">
                  {{ student.name.split(" ").slice(-1).join(" ") }}
                </p>
              </div>
              <div class="flex flex-row flex-wrap">

 


              </div>
            </div>
          </div>
          <div class="card__side card__side--back card__side--back-1">
            
              <div class="card__description capitalize dropbtn bga2">
                <label class="w-full h-full text-center cursor-pointer">
                <span class="capitalize">
                  <span class="text-3xl">{{ student.name.split(" ")[0] }}</span>
                  <span> {{ student.name.split(" ")[1] }} </span>
                  <p class="text-3xs">
                    {{ student.name.split(" ").slice(-1).join(" ") }}
                  </p>
                </span>

                  <p class="text-black cursor-pointer hover:bg-green-400">
                    <input
                      type="checkbox"
                      v-if="canregattend"
                      class="w-6 h-6 cursor-pointer"
                      :value="student.student_id"
                      v-model="checkedNames"
                    />
                  </p>
                </label>
  
              </div>
            
          </div>
        </div>

<!-- absent====================================================================================== -->


</div>
  
       <!-- <p>students_data{{students_data}}</p> -->
      </div>
    </section>
    <!-- =============================================== -->
  
  {{counter}}  
  <!-- {{countercom}} -->
  
  students_id_array  {{students_id_array  }}
       <!-- marks_arrayob {{marks_arrayob }} -->
 <br>
  <!-- this.teachermaindataget{{this.teachermaindataget}} -->
   <br>
  absent_arry_com{{absent_arry_com}}
   <br>  absence_array{{absence_array}}
   <br>
  <br>  teacherdata{{teacherdata}}
   <br>
   
  textapi{{textapi}}
  <input type="text"
  :value="textapi"
  >
   <br>
  absence_db{{absence_db}}

          <notification ref="success">
            {{ $t('password_updated') }}
          </notification>



  </div>
</template>

<script>
import axios from "axios";
import Notification from '../components/Notification'
// import Notification from '../components/Notification'

export default {
    components: { Notification },
  middleware: 'auth',

  metaInfo () {
    return { title: this.$t('class system') }
  },

  data()  {
    return{
      loadparticipationsdata: "",
teachermaindataget:'',
loading:false,
errorsmsg:'',
count1:1,
setdaynum:1,
weeknum:1,
datesarray:[,,,,,,,,,,,],
tablearray:'',
period:'',
daynumber:'',
teacherdata:'',
date:'',
abs_db:'',
textapi:'',
absence_db:'',
counter:0,
starsnum:1,
      marks_arrayob: [],
      students_id_array: [],
      checkedNames: [],
   canregattend: true,
 absence_array:[],
canregattend: true,













}  },
 watch: {




       absence_array: function () {
      // this.loadstudents();
      // this.loadclass();
      this.loadparticipations();
      // this.cansave = true;
    },

    counter: function () {
      this.saveparticipations();
    },
    checkedNames: function () {
      this.saveabsence();
    },

    setdaynum: function () {
      this.period='';
    },


 },
 computed: {
    // countercom: function () {
    //   return  this.counter += 1 ;
    //   // return this.products.filter(product => product.onSale)
    // },
    absent_arry_com: function () {
      // let arr1=[1,2,3,4,5];
      // let arr2=[1,2];
      let arr1 = this.students_id_array;
      let arr2 = this.checkedNames;
      let difference = arr1.filter((x) => !arr2.includes(x));
      return difference;
    
    },
    
    
    },
     mounted()  {

        this.loadteachermaindataarray   ();

            },    
  methods:{
        playSound(sound) {
      if (sound) {
        var audio = new Audio(sound);
        audio.play();
      }
    },
        plus_fun(index) {
      // this.$iosConfirm( "Are you sure! Add"+ this.starsnum +" stars");


      if (!confirm("Are you sure! Add" + this.starsnum + " stars")) {
        return;
      }
      this.marks_arrayob[index].plus += this.starsnum;
      this.marks_arrayob[index].score =
        this.marks_arrayob[index].plus - this.marks_arrayob[index].minus;
      this.playSound("p.ogg");
      this.counter += 1;
      this.marks_arrayob[index].participatedetails =
        this.marks_arrayob[index].participatedetails + "||+" + this.starsnum;
    },





















// =================================================


    async saveparticipations() {
      if (this.cansave != true) {
        return;
      }


      //  return;
      if (!this.absence_array) {
        return;
      }
 
      this.loading = true;
      try {

        this.linkapi =
          "/api/saveparticipations/" +
          JSON.stringify(this.marks_arrayob) +
          "/" +
          JSON.stringify(this.absence_array);
        await axios
          .get(
            "/api/saveparticipations/" +
              JSON.stringify(this.marks_arrayob) +
              "/" +
              JSON.stringify(this.absence_array)
          )
          .then((res) => {

            this.saveparticipations_returneddata = res.data;
            this.loading = false;

          });
      } catch (e) {
        this.errorsmsg = "data error";
      }
    },

    async Newparticipations() {
      if (!confirm("Are you sure! Add" + this.starsnum + " stars")) {
        return;
      }

      this.loading = true;
      try {

        //  this.linkapi="/api/loadparticipations/"+ JSON.stringify(this.marks_arrayob)+"/"+ JSON.stringify(this.absence_array)
        this.linkapi =
          "/api/Newparticipations/" + JSON.stringify(this.absence_array);
        await axios
          .get("/api/Newparticipations/" + JSON.stringify(this.absence_array))
          .then((res) => {
            //  this.loadparticipationsdata = res.data;
            this.loading = false;
            // if(this.loadparticipationsdata.length>1){

            //   this.marks_arrayob = this.loadparticipationsdata;
            // }

            this.loadparticipations();
          });
      } catch (e) {
        this.errorsmsg = "data error";
      }
    },

    async loadparticipations() {

      this.loading = true;
      try {

        //JSON.stringify(this.students_array)
        //  this.linkapi="/api/loadparticipations/"+ JSON.stringify(this.marks_arrayob)+"/"+ JSON.stringify(this.absence_array)
        this.linkapi =
          "/api/loadparticipations/" + JSON.stringify(this.absence_array);
        await axios
          .get("/api/loadparticipations/" + JSON.stringify(this.absence_array))
          .then((res) => {

            this.loadparticipationsdata = res.data;
            this.loading = false;
            if (this.loadparticipationsdata.length > 1) {
              // this.marks_arrayob = this.loadparticipationsdata;
              this.marks_arrayob = this.loadparticipationsdata.sort((a, b) =>
                a.plus < b.plus ? 1 : -1
              );

              //              this.marks_arrayob.sort(function (x, y) {
              //     return x.total - y.total;

              // });
              // this.marks_arrayob = this.loadparticipationsdata.sort();
              // objs.sortBy('name');
            }

          });
      } catch (e) {
        this.errorsmsg = "data error";
      }
    },
   async getparticipate() {
      this.errorsmsg = "getpartic";
      this.loading = true;
      //  let data=[

      //  ],

      try {
        // alert(JSON.stringify(this.absence_array));
        //  console.log("/api/getbsence/"+JSON.stringify(this.absence_array));
        await axios
          .get(
            "/api/getparticipate/" +
              JSON.stringify(this.absence_array) +
              "/" +
              JSON.stringify(this.students_array)
          )
          .then((res) => {
            console.log("getbsence3");
            this.abs_db = res.data;
            this.loading = false;
            // console.log("/api/getbsence/"+JSON.stringify(this.absence_array)  );
          });
      } catch (e) {
        this.errorsmsg = "data error";
      }
      if (this.abs_db.absent) {
        this.abs_db_array = this.abs_db.absent.split`,`.map((x) => +x);
        let arr1 = this.students_id_array;
        // let arr2=this.checkedNames;
        let arr2 = this.abs_db_array;

        this.checkedNames = arr1.filter((x) => !arr2.includes(x));
      }
      // =======================================================================
    },



    // =================================================
   async loadclass(class_name,period,date) {
        this.errorsmsg = "loadclass";
        this.loading = true;
// alert(class_name);
// alert(period);
// alert(date);

let students_data='';
      try {


        await axios
          .get("/api/students/" +  class_name)
          .then((res) => {

             students_data = res.data;
            this.loading = false;
          

            this.errorsmsg = "";
          });
      } catch (e) {
        this.errorsmsg = "data error";
      }
      // =======================================================================
      // =======================================================================
      this.students_id_array = [];
      this.marks_arrayob = [];
  // alert(students_data);
      for (let index = 0; index < students_data.length; index++) {
// alert(students_data[index].school_id);
            this.students_id_array.push(students_data[index].id);
            this.marks_arrayob.push(
                          {
                        "school_id"         : students_data[index].school_id         ,
                        "participate_id"    : ''                                        ,
                        "student_id"        : students_data[index].id              ,
                        "present"           : true                                      ,
                        "name"              : students_data[index].name            ,
                        "class_name"        : students_data[index].class_name      ,
                        "subject"           : students_data[index].subject         ,
                        "period"            : period              ,
                        "day"               :  this.setdaynum                ,
                        "week"              :  this.weeknum               ,
                        "date"              : date                ,
                        "participate"       : 0                                         ,
                        "plus"              : 0                                         ,
                        "minus"             : 0                                         ,
                        "score"             : 0                                         ,
                        "total"             : 0                                         ,
                        "participatedetails": ''                                        ,
                        "notes"             : ''                                        ,
                      });
      }


this.absence_array=[{
 'school_id':  this.teachermaindataget.teacherdata[0].school_id    ,
'class_name': class_name,
'date'     :  this.date    ,
'period'   : period    ,
'day'      : this.setdaynum       ,
'week'      : this.weeknum        ,
'subject'  :     this.teachermaindataget.teacherdata[0].subject  ,
'teacher_id'  :  this.teachermaindataget.teacherdata[0].teacher_id      ,
'teacher'  :   this.teachermaindataget.teacherdata[0].name     ,
'absent'   : ''    ,
'notes'    : ''    , 
 }];

// alert(this.absence_array);







   this.getbsence();
   
   },
    // getbsence=======================================================================

    async getbsence() {
      this.errorsmsg = "getbsence";
      this.loading = true;
      try {

        await axios
          .get("/api/getbsence/" + JSON.stringify(this.absence_array))
          .then((res) => {
            this.abs_db = res.data;
            this.loading = false;
          });
      } catch (e) {
        this.errorsmsg = "data error";
      }
      if (this.abs_db.absent) {
        this.abs_db_array = this.abs_db.absent.split`,`.map((x) => +x);
        let arr1 = this.students_id_array;
        // let arr2=this.checkedNames;
        let arr2 = this.abs_db_array;

        this.checkedNames = arr1.filter((x) => !arr2.includes(x));
      }
      // =======================================================================
    },


    
   async loadteachermaindataarray() {

this.loading = true;
                        try {
                          await axios.get("/api/teachermaindataget").then((res4) => {
                            this.teachermaindataget = res4.data;
                            this.loading = false;
                          });
                        } catch (e) {
                          this.errorsmsg = "loadschedule data error";
                        };

// this.schedule_array=[{
// 'day'       : day       ,
// 'period'    : period    ,
// 'class_name': class_name,
// 'order'     : order     ,
// 'date'      : date      ,

// }];
// Periodtime":8,"school_id":1,"period":"7","stage":"prim","start":"12:15:00","end":"13:00:00","Periodtime":"45","active":1,"notes":"
// datesforweek
// {"id":15,"school_id":1,"term_name":"s3","day":"1","week":"3","date":"2022-04-03","active":1,"notes":null,"created_at":null,"updated_at":null},
   
//   schedule
//    {"id":1,"school_id":1,"day":"1","period":"1","class_name":"5B","sorder":1,"teacher_id":"4","subject":"Math","color":"green","active":1,"notes":null,"created_at":null,"updated_at":null}
let day       =0;
let date      ='';
 

    
    // let tablearray_day1=[
        let period1    = '';
let class_name1= '';
let sorder1    = ''; 
    //      ];
       let tablearray_day1=[
         {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
         },
        {
             'day'       : 1,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    :  sorder1,
             'date'      : '',
         },
         
         


         ];      
      let   tabledaysarray=[,,,,,,,] ;
 

for (let daynum = 1; daynum < 7; daynum++) {
 period1 = '';
 class_name1 = '';
 sorder1     = '';
        tabledaysarray[daynum]=   this.teachermaindataget.schedule.filter(function (el) {return el.day  ==daynum;});
  let day1=tabledaysarray[daynum];


for (let index = 0; index < day1.length; index++) {
  if (day1[index].sorder==null) {


 sorder1      =  sorder1    +',-';  

  }else{

     sorder1      =  sorder1    +','+ day1[index].sorder;  


  }
    period1        =period1      +','+ day1[index].period;
      class_name1  =  class_name1+','+ day1[index].class_name;  
     

 date= this.teachermaindataget.datesforweek[daynum-1].date;


    this.weeknum=this.teachermaindataget.datesforweek[0].week;
    // return;
tablearray_day1[daynum]=[
         {
             'day'       : daynum,
             'week'       : this.weeknum,
             'period'    : period1,
             'class_name': class_name1,
             'sorder'    : sorder1,
             'date'      : date,
         }  
         ];

//   period    = ',,,,,,,,,,';
//   class_name= ',,,,,,,,,,';
//   sorder    = ',,,,,,,,,,';


    
}



this.tablearray =tablearray_day1





         

   
}
   
   }  ,
   
   

       async saveabsence() {
         this.$refs.success.show();
      this.errorsmsg = "saveabsence";
      this.loading = true;
      //  alert(this.absence_array.absent)
      this.absence_array.absent = this.absent_arry_com.toString();
      let absent = this.absent_arry_com.toString();
      
      //  alert(absent)
      
      //  alert(absent);
      if (absent == "") {
        // alert('empty');
        absent = "-";
      }

      try {
   
        this.textapi =
          "/api/saveabsence/" +
          JSON.stringify(this.absence_array) +
          "/" +
          absent;
        await axios
          .get(
            "/api/saveabsence/" +
              JSON.stringify(this.absence_array) +
              "/" +
              absent
          )
          .then((response) => {
            // await axios.get("/api/saveabsence/"+ this.absence_array).then((response) => {

            this.absence_db = response.data;
            this.loading = false;

          });
      } catch (e) {
        this.errorsmsg = "data error";
      }
      // =======================================================================
      this.errorsmsg = "";
      // =======================================================================
    
    
    
    
    
    
    }},




  }
 
</script>

<style>

</style>