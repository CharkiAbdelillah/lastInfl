
<template>
    <div>
	<header id="header"><!--header-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<!-- <li><a href="/user/home2">Home</a></li>	 -->
                                <li>
									<router-link to="/user/home2">
                                    Home
                                </router-link>
								</li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Select</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default" v-if="getOnePersonne[0].instagram">
								<div class="panel-heading">
									<h4 class="panel-title" >
                                        <router-link :to="{name:'Instagram'}">
												<p>Instagram<Icon type="logo-instagram" /></p>
										</router-link>
									</h4>
								</div>
							</div>
							<div class="panel panel-default" v-if="getOnePersonne[0].facebook">
								<div class="panel-heading">
									<h4 class="panel-title" >
										<router-link :to="{name:'Facebook'}">
												<p>Facebook<Icon type="logo-facebook" /></p>
										</router-link>
									</h4>
								</div>
							</div>
                            <div class="panel panel-default" v-if="getOnePersonne[0].youtube">
								<div class="panel-heading">
									<h4 class="panel-title" >
										<router-link :to="{name:'Youtube'}">
												<p>Youtube<Icon type="logo-youtube" /></p>
										</router-link>
									</h4>
								</div>
							</div>
                            <div class="panel panel-default" v-if="getOnePersonne[0].snapchat">
								<div class="panel-heading">
									<h4 class="panel-title" >
										<router-link :to="{name:'Snapchat'}">
												<p>Snapchat<Icon type="logo-snapchat" /></p>
										</router-link>
									</h4>
								</div>
							</div>
							<!-- <div class="panel panel-default" v-if="user1.snapchat">
								<div class="panel-heading">
									<h4 class="panel-title" >
										<router-link :to="{name:'Snapchat',params:{user1}}">
												<p>Snapchat<Icon type="logo-snapchat" /></p>
										</router-link>
									</h4>
								</div>
							</div> -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" >
										<router-link :to="{name:'UserDetails'}">
												<p>Info Personelle<Icon type="md-person" /></p>
										</router-link>
									</h4>
								</div>
							</div>
						</div><!--/category-products-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/product-details/snap_png.png" alt="" />
								<h3>{{getOnePersonne[0].nom}}</h3>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<p><b>Nombre d’abonnés: </b>{{getOnePersonne[0].snapchat.nombre_abonne}}</p>
								<p><b>Moyenne des likes: </b>{{getOnePersonne[0].snapchat.like}}</p>
								<p><b>Moyenne des commentaires: </b>{{getOnePersonne[0].snapchat.commentaire}}</p>
								<p><b>Taille par rapport aux followers: </b>{{getOnePersonne[0].snapchat.followers}}</p>
								<p><b>Qualité d’audience: </b>{{getOnePersonne[0].snapchat.qualite}}</p>
								<p><b>Engagement: </b>{{getOnePersonne[0].snapchat.engagement}}</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tag" data-toggle="tab">Domaine</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tag" v-for="(c,i) in getOnePersonne[0].snapchat.domaine" :key="i">
									<Tag color="purple">{{c.nom}}</Tag>
							</div>
							
						</div>
					</div><!--/category-tab-->
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>3</span>WDEV</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3" v-for="(pp,index) in this.personnes4.data"  :key="index">
							<div class="video-gallery text-center">
								<router-link :to="{name:'UserDetails'}">
									<div class="iframe-img" @click="passId(pp.id)">
										<img :src="pp.photo" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</router-link>
								<p>{{pp.nom}}</p>
								<h2>{{pp.date}}</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2021 CHARKI Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://www.3wdev.ma/">3WDEV</a></span></p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	
    </div>
</template>
<script>
import {mapGetters} from 'vuex'
export default{
      data(){
          return {
			  personnes4:{},
       };
    },
    created(){
		this.getPersonnes4();
        },
	computed:{
		...mapGetters(['getOnePersonne']),
	},
    methods:{
		getPersonnes4(){
                axios.get('/api/personneLastFour').then(response=>{
                    this.personnes4=response.data;
                })
                .catch(error=>{console.log(error)})
            },
    }
}
</script>
