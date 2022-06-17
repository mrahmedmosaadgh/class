<template>
<div>
<br>
-----------------------{{class_name_value}}------------<br>
<!-- <input class="bg-red-200" type="text" @change="loadst( period, class_name_value)"  v-model="class_name_value" ><br> -->
================================
period {{period}} class_name_value {{class_name_value}}<br>
<button @click=" loadst( period, class_name_value) "> loadst( period, class_name_value) </button>
<!-- <br>students_array {{students_array}}<br><br>
 loadst( period, class_name_value) <br>
 ===mydata_array{{mydata_array}}<br> -->
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
      <th>0 id                           id        </th>
      <th>1 namecut                    name      </th>
      <th>2 name                       class_name</th>
      <th>3 notes                     notes     </th>
      <th>4 attendance 1       attend     </th>
      <th>5 plus 0                   star     </th>
      <th>6 minus 0                 star     </th>
      <th>7 total 0                star     </th>
   
    </tr>
  </thead>
  <tbody>
    <tr v-for="(student,index) in students_array[period]" :key="index">
      <td scope="row">{{index+1        }}</td>
      <td>
        <!-- <input type="checkbox" 
       
        style="width:33px;height:55px;cursor:pointer;background-color:blue"
        @click="attend_fun(index,4,'true')"
        v-model="checkedNames"
        >  -->

         <input type="checkbox"  :value="student[0]" v-model="checkedNames" />
        <button style="min-width:200px">  
           <span :title="student[2]"> {{student[1]      }}</span><small><small><small>{{student[2]  }}</small></small> </small> </button>    </td>
      <td>            {{student[3]}}</td>
      <td>            {{student[4]     }}</td>
      <td>
        

 

<!-- width="22"   height="22"-->
<!-- <div  v-for="one in student[5]" :key="one" style="height:22px;width:22px"> -->



 
      <!-- </div>   -->
        
        
               <button @click="plus_fun(index,5,1)">+</button>     {{student[5]     }}</td>
      <td>        <button @click="minus_fun(index,6,1)">-</button>     {{student[6]     }}</td>
      <td  class="  flex">            {{student[7]     }}
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
 </div>
</template> 

<script>
 import axios from "axios";
export default {

    // props: {current_class_namefun:Function, getUser:Function,getUser2:Function},
    props: ['period'],
    props: ["class_name_value"],
  //    computed: {
  
  // },

  data() {
    return {
        userName:"componentttttttttttttttttt",
      countbtn: 0,
      val_in_com:"from parent in component=-=-=-=-=-=-=",
      value:"from parent in component=-=-=-=-=-=-=",
      errors:'',
      busy:false,
      students:'',
      errorsmsg:'',
      period:'',
         students_array:[,,,,,,,,,,],

      students_id_array:[],
      checkedNames:[],
      textvalue:'',
      // period:'',

    }
  },
  watch: {
    class_name_value: function (val) {
    this.loadst(this.period,this.class_name_value);
    },
 
  },
//    computed: {
// loadst_com: function () {
// this.textvalue=this.period;
// this.loadst(this.period,this.class_name_value);
// }

//    },
  methods:{



   // -----------------------------------------------------------------------
    async loadst(period,class_name_value) {
    //  if(!confirm("Press a button!")){return} ;
      this.errors = "";
      this.busy = true;
      // this.errors = null
      await axios
        .get("/api/myclass/" + class_name_value)
        .then((res) => {
          this.students = res.data;
          this.busy = false;
        })
        .catch((err) => {
          this.busy = false;

          //      setTimeout(() => {
          //     this.busy = false
          // }, 5000)
          this.errors = "data error";
          // this.errors = err.response.data;
          this.errorsmsg = "data error";
        });
this.period=period;
  this.students_array[period]=[];
  this.students_id_array=[];
for (let index = 0; index < this.students.length; index++) {

this.students_id_array.push( this.students[index].id);
  
   
  this.students_array[period].push([
    this.students[index].id,
    this.students[index].namecut,
    this.students[index].name,
    this.students[index].notes,
    false,0,0,0
  ]);
  
  ;
}
 

    },

  }
 
 
}
</script>