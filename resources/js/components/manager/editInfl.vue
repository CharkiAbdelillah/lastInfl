<template>
<div >
  <!-- <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#updateInfl">
     <Icon type="md-create" />
  </button> -->
    <div class="modal fade" id="updateInfl" tabindex="-1" role="dialog" aria-labelledby="updateInfl" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier les informations de {{personne1.nom}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form @submit="updateInfl" enctype="multipart/form-data">

          <!-- <input type="hidden" name="_token" v-bind:value="csrf"> -->
          <div class="form-group">
            <label for="" class="col-from-label">
              Nom:
            </label>
            <input type="text" name="name" v-model="personne1.nom" class="form-control">
          </div>
          <div class="form-group">
            <label for="" class="col-from-label">
               Prenom: 
            </label>
            <input type="text" name="prenom" v-model="personne1.prenom" class="form-control">
          </div>
          <div class="form-group">
            <label for="" class="col-from-label">
               Ville: 
            </label>
            <input type="text" name="ville" v-model="personne1.ville" class="form-control">
          </div>
        <div class="form-group row">
          <label for="example-date-input" class="col-2 col-form-label">Date</label>
          <div class="col-10">
            <input class="form-control" type="date" value="2011-08-19" v-model="personne1.date" id="example-date-input">
          </div>
        </div>
        <div class="form-group">
          <label >Editer Historique de <strong>{{personne1.nom}}</strong></label>
          <multiselect v-model="personne1.historique" :options="options" :multiple="true"  placeholder="Select Historique" label="nom" track-by="nom"></multiselect>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Photo</label>
          <input type="file" name="image" accept="image/*" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" v-on:change="onImageChange">
          <small id="fileHelp" class="form-text text-muted"><Icon type="ios-images" /></small>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
            <button type="submit" class="btn btn-success">Valider</button>
            <!-- <addInflInfo ref="modalComponent"/> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import addInflInfo from "./addInflInfo";
export default{
  components: { Multiselect },
     data(){
          return {
            name:'',
            prenom:'',
            ville:'',
            daten:'',
            test:'',
            image:null,
            personnes:{},
            historiqueTab:[],
            options:[]
       };
    },
    created(){
            this.getHistorique();
        },
    props:['personne1'],
    methods:{
      getHistorique(){
        axios.get('/api/personneHistorique').then(response=>{
                    console.log('histo : '+response.data);
                    this.options=response.data;
                })
                .catch(error=>{console.log(error)})
      },
      getPersonnes(){
                axios.get('/api/personne').then(response=>{
                    console.log(response.data);
                    this.personnes=response.data;
                    this.personnes2=response.data;
                    this.lastId=response.data[0].id;
                    this.lastId2=personnes.data[0].id;
                })
                .catch(error=>{console.log(error)})
            },
            getResults(page = 1) {
			axios.get('/api/personne?page=' + page)
				.then(response => {
					this.personnes = response.data;
				});
      },
      onImageChange(e){
        console.log('image: '+e.target.files[0]);
        this.image=e.target.files[0];
      },
      updateInfl(e){
        e.preventDefault();//pour ne pas actualiser la page
        const config={
          headers:{"content-type":"multipart/form-data"}
        }
        let formData=new FormData();//pour communiquer avec la form
        for (var i = 0; i < this.personne1.historique.length; i++) {
          // console.log('hjihjh ');
            formData.append('arrHis[]', this.personne1.historique[i]['id']);
        }
        formData.append("image",this.image);
        formData.append("name",this.personne1.nom);
        formData.append("prenom",this.personne1.prenom);
        formData.append("ville",this.personne1.ville);
        formData.append("daten",this.personne1.date);
        formData.append("_method","put");//pour dire que on a en train de modifer
        // formData.append("image",this.image);
        axios.post("/api/personne/"+this.personne1.id,formData,config).then(res=>{
        this.$emit('personne-updated',res)
        // $('#updateInfl').modal('hide');  
        // this.$refs.modalComponent.show(); 
        console.log('update pers');
        Swal.fire({
          position:"center",
          icon:"success",
          title:"Personne modifie",
          showConfirmButton:false,
          timer:1500
        });
        
        // this.$emit('infl-added');
      }).catch(err=>console.log('hahaha'));
      }
    }
}
</script>
