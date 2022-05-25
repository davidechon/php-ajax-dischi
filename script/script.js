const app = new Vue({
  el: '#app',
  data:{
    dischi: [],
    // apiPath: './server.php',
  },
  methods:{
    
  },
  
  mounted(){
    
    axios.get('server.php').then((res)=>{
      this.dischi = res.data;
      console.log(res);
    });

    
  }
})