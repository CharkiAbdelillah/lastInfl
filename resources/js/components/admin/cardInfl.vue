<template>
<!-- <div> -->
    
            <!-- <canvas id="lineChartExampleWithNumbersAndGrid"></canvas> -->
            <h2>{{nmbrInfl}}</h2>
<!-- </div> -->
</template>
<script>
import {mapState,mapGetters} from 'vuex'
export default{
     data(){
          return {
            personnes4:{},
            nmbrInfl:'',
            nmbrManager:'',
            nmbrUser:'',
       };
    },
    // props:['user1'],
    created(){
		this.getAllInfl();
        },
    methods:{
		getAllInfl(){
                axios.get('/api/allInfl').then(response=>{
                    this.nmbrInfl=response.data;
                })
                .catch(error=>{console.log(error)})
            },
    },
	computed:{
	...mapGetters(['getOnePersonne']),
	...mapState(['iddd']),
		count () {
     		 return this.$store.state.allInfl
   		},
		calculateAge() {
			var today = new Date();
			var birthDate = new Date(this.getOnePersonne[0].date);
			// console.log('agee 1 '+this.user1.date);
			// console.log('agee 1 '+this.daten);
			var age = today.getFullYear() - birthDate.getFullYear();
			var m = (today.getMonth()+1) - birthDate.getMonth();
			if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
			{
				age--;
			}
			return age;
        }
	},
}
</script>
